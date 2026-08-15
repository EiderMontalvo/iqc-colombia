/*iQC Theme - Formularios JS * Archivo: assets/js/Formularios.js * * - Validaciones de input en tiempo real (numérico, teléfono, trim, email) * - Función compartida de envío AJAX real (submitIqcFormulario) * * @package IQC_Theme*/

document.addEventListener('DOMContentLoaded', function () {

    /*1. impedir letras en campos estrictamente numéricos*/

    const numericInputs = document.querySelectorAll('#homologacion-personal, #homologacion-meses, #cotiz-personal, #cotiz-meses');
    numericInputs.forEach(function (input) {
        input.addEventListener('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });

    /*2. impedir no-numéricos en campos de teléfono*/

    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    phoneInputs.forEach(function (input) {
        input.addEventListener('input', function () {
            this.value = this.value.replace(/[^0-9+\s\-()]/g, '');
        });
    });

    /*3. trim global + normalizar correos a minúsculas*/

    const textInputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], textarea');
    textInputs.forEach(function (input) {
        input.addEventListener('blur', function () {
            if (this.value) {
                this.value = this.value.trim();
                if (this.type === 'email') {
                    this.value = this.value.toLowerCase();
                }
            }
        });
    });
});

/*función compartida de envío AJAX para todos los Formularioularios IQC. * * @param {HTMLFormularioElement} Formulario - El elemento Formulario. * @param {string} FormularioType - 'Contactoo' | 'homologacion' | 'reclamacion' * @param {HTMLElement} submitBtn - Botón submit para gestionar estado de carga. * @param {HTMLElement} statusEl - Contenedor donde mostrar resultado. * @param {Function} onExito - Callback ejecutado al éxito (animación, hide Pasos). * @param {Function} onError - Callback ejecutado al Error.*/
function submitIqcForm(form, formType, submitBtn, statusEl, onSuccess, onError) {

    /*seguridad: verificar que tenemos los datos de WP disponibles*/

    if (typeof iqcForms === 'undefined' || !iqcForms.ajaxUrl || !iqcForms.nonce) {
        console.error('IQC Forms: iqcForms no está definido. Verifica wp_localize_script en enqueue.php.');
        if (typeof onError === 'function') onError('Error de configuración. Por favor recarga la página.');
        return;
    }

    /*construir FormularioData a partir del Formularioulario*/

    const data = new FormData(form);
    data.append('action', 'iqc_submit_form');
    data.append('nonce',  iqcForms.nonce);
    data.append('form_type', formType);

    /*estado: cargando*/

    if (submitBtn) {
        submitBtn.disabled = true;
        const textEl = submitBtn.querySelector('.iqc-form__submit-text');
        if (textEl) textEl.textContent = 'Enviando…';
    }
    if (statusEl) {
        statusEl.className = 'iqc-form__status';
        statusEl.textContent = '';
    }

    fetch(iqcForms.ajaxUrl, {
        method: 'POST',
        body: data,
        credentials: 'same-origin',
    })
    .then(function (response) {
        if (!response.ok) throw new Error('Error de red: ' + response.status);
        return response.json();
    })
    .then(function (json) {
        if (submitBtn) {
            submitBtn.disabled = false;
            const textEl = submitBtn.querySelector('.iqc-form__submit-text');
            if (textEl) textEl.textContent = 'Enviar mensaje';
        }

        if (json.success) {
            if (typeof onSuccess === 'function') onSuccess();
        } else {
            const msg = (json.data && json.data.message) ? json.data.message : 'Hubo un error al enviar. Inténtalo de nuevo.';
            if (typeof onError === 'function') onError(msg);
        }
    })
    .catch(function (err) {
        console.error('IQC Forms error:', err);
        if (submitBtn) {
            submitBtn.disabled = false;
            const textEl = submitBtn.querySelector('.iqc-form__submit-text');
            if (textEl) textEl.textContent = 'Enviar mensaje';
        }
        const msg = 'No se pudo enviar el formulario. Verifica tu conexión e inténtalo de nuevo.';
        if (typeof onError === 'function') onError(msg);
    });
}
