<?php
/*Template Name: Página Libro de Reclamaciones * * Plantilla para la página del Libro de Reclamaciones virtual de IQC Colombia.*/

get_header();
?>

<main id="primary" class="site-main">

    <?php /*hero*/ ?>
    <section class="iqc-hero iqc-hero--reclamaciones">
        <div class="iqc-hero__overlay"></div>
        <div class="iqc-hero__inner iqc-container">
            <div class="iqc-hero__content iqc-animate-fade-up is-visible">
                <h1 class="iqc-hero__title">LIBRO DE RECLAMACIONES</h1>
                <p class="iqc-hero__subtitle" style="text-transform: none; max-width: 700px; margin: 0 auto; line-height: 1.5; font-size: 1.1rem; opacity: 0.9;">
                    Conforme a lo establecido en el Código de Protección y Defensa del Consumidor, contamos con un Libro de Reclamaciones Virtual a su disposición.
                </p>
            </div>
        </div>
    </section>

    <?php /*formularioularioulario de Reclamaciones*/ ?>
    <section class="iqc-reclamaciones-section">
        <div class="iqc-container">
            
            <div class="iqc-reclamaciones-intro iqc-animate-fade-up">
                <h2 class="iqc-reclamaciones-intro__title">Registrar Reclamo o Queja</h2>
                <p class="iqc-reclamaciones-intro__text">
                    Complete el siguiente formulario para registrar su reclamo o queja.
                </p>
            </div>

            <div class="iqc-reclamaciones-form__wrapper iqc-animate-fade-up" style="animation-delay: 0.2s;">
                <h3 class="iqc-reclamaciones-form__heading">HOJA DE RECLAMACIÓN</h3>
                
                <div class="iqc-reclamaciones-book-id">
                    <span>Libro de Reclamaciones Virtual</span>
                    <strong>N° <?php echo date('Y') . '-' . str_pad(rand(1, 999), 4, '0', STR_PAD_LEFT); ?></strong>
                </div>

                <form
                    id="iqc-reclamaciones-form"
                    class="iqc-form"
                    novalidate
                    aria-label="<?php esc_attr_e( 'Libro de reclamaciones', 'iqc' ); ?>"
                >
                    <?php /*honeypot antibot*/ ?>
                    <div class="iqc-form__honeypot" aria-hidden="true">
                        <label for="reclamaciones-iqc-url">Deja este campo vacío</label>
                        <input type="text" id="reclamaciones-iqc-url" name="iqc_url" tabindex="-1" autocomplete="off">
                    </div>

                    <?php /*pasoper (Solo Móvil)*/ ?>
                    <div class="iqc-form-stepper iqc-mobile-only" aria-hidden="true">
                        <div class="iqc-stepper-item active" data-step="1">
                            <div class="iqc-stepper-circle">1</div>
                            <span class="iqc-stepper-label">Datos</span>
                        </div>
                        <div class="iqc-stepper-line"></div>
                        <div class="iqc-stepper-item" data-step="2">
                            <div class="iqc-stepper-circle">2</div>
                            <span class="iqc-stepper-label">Detalles</span>
                        </div>
                    </div>

                    <?php /*pASO 1: DATOS (EMPRESA Y REPRESENTANTE)*/ ?>
                    <div class="iqc-form-step active" data-step="1">
                        
                        <h4 style="font-size: 1.1rem; color: var(--color-primary); margin-bottom: var(--space-4);">Datos de la Empresa</h4>
                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="reclamaciones-razon-social" class="iqc-form__label">Razón Social</label>
                                <input type="text" id="reclamaciones-razon-social" name="empresa_razon" class="iqc-form__input" placeholder="Nombre de la empresa">
                            </div>
                            <div class="iqc-form__group">
                                <label for="reclamaciones-ruc" class="iqc-form__label">RUC</label>
                                <input type="text" id="reclamaciones-ruc" name="empresa_ruc" class="iqc-form__input iqc-only-numbers" placeholder="Número de RUC">
                            </div>
                        </div>

                        <h4 style="font-size: 1.1rem; color: var(--color-primary); margin: var(--space-6) 0 var(--space-4);">Datos del Representante (Quién reclama)</h4>
                        
                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="reclamaciones-nombres" class="iqc-form__label">Nombres <span aria-hidden="true">*</span></label>
                                <input type="text" id="reclamaciones-nombres" name="rep_nombres" class="iqc-form__input" required minlength="2" placeholder="Tus nombres">
                            </div>
                            <div class="iqc-form__group">
                                <label for="reclamaciones-apellido-1" class="iqc-form__label">Primer Apellido <span aria-hidden="true">*</span></label>
                                <input type="text" id="reclamaciones-apellido-1" name="rep_apellido_1" class="iqc-form__input" required minlength="2" placeholder="Primer apellido">
                            </div>
                            <div class="iqc-form__group">
                                <label for="reclamaciones-apellido-2" class="iqc-form__label">Segundo Apellido <span aria-hidden="true">*</span></label>
                                <input type="text" id="reclamaciones-apellido-2" name="rep_apellido_2" class="iqc-form__input" required minlength="2" placeholder="Segundo apellido">
                            </div>
                        </div>

                        <div class="iqc-form__row" style="margin-top: var(--space-4);">
                            <div class="iqc-form__group">
                                <label for="reclamaciones-correo" class="iqc-form__label">Correo Electrónico <span aria-hidden="true">*</span></label>
                                <input type="email" id="reclamaciones-correo" name="correo" class="iqc-form__input" required placeholder="correo@ejemplo.com">
                            </div>
                            <div class="iqc-form__group">
                                <label for="reclamaciones-telefono" class="iqc-form__label">Teléfono de contacto <span aria-hidden="true">*</span></label>
                                <input type="tel" id="reclamaciones-telefono" name="telefono" class="iqc-form__input iqc-only-numbers" required minlength="6" maxlength="20" placeholder="Ej: 300 123 4567">
                            </div>
                        </div>

                        <div class="iqc-form__footer iqc-form__footer--right iqc-mobile-only">
                            <button type="button" class="iqc-form__next">
                                Siguiente
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <?php /*pASO 2: DETALLES*/ ?>
                    <div class="iqc-form-step" data-step="2">
                        
                        <h4 style="font-size: 1.1rem; color: var(--color-primary); margin-bottom: var(--space-4);">Detalle del Reclamo</h4>

                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="reclamaciones-tipo-servicio" class="iqc-form__label">Tipo de Servicio <span aria-hidden="true">*</span></label>
                                <select id="reclamaciones-tipo-servicio" name="tipo_servicio" class="iqc-form__select" required>
                                    <option value="" disabled selected>—Por favor, elige una opción—</option>
                                    <option value="Certificación Inicial">Certificación Inicial</option>
                                    <option value="Primera Vigilancia">Primera Vigilancia</option>
                                    <option value="Segunda Vigilancia">Segunda Vigilancia</option>
                                    <option value="Recertificación">Recertificación</option>
                                    <option value="Ampliación de alcance">Ampliación de alcance</option>
                                    <option value="Reducción de alcance">Reducción de alcance</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </div>
                            <div class="iqc-form__group">
                                <label for="reclamaciones-sede" class="iqc-form__label">Sede/Ubicación de la Auditoría</label>
                                <input type="text" id="reclamaciones-sede" name="sede_auditoria" class="iqc-form__input" placeholder="Lugar de la auditoría">
                            </div>
                        </div>

                        <div class="iqc-form__group" style="margin-top: var(--space-4);">
                            <label for="reclamaciones-tipo-incidencia" class="iqc-form__label">Tipo de Incidencia <span aria-hidden="true">*</span></label>
                            <select id="reclamaciones-tipo-incidencia" name="tipo_incidencia" class="iqc-form__select" required>
                                <option value="" disabled selected>—Por favor, elige una opción—</option>
                                <option value="Reclamo (Disconformidad con el servicio)">Reclamo (Disconformidad con el servicio)</option>
                                <option value="Queja (Malestar en la atención)">Queja (Malestar en la atención)</option>
                            </select>
                        </div>

                        <div class="iqc-form__group" style="margin-top: var(--space-4);">
                            <label for="reclamaciones-detalle" class="iqc-form__label">Descripción detallada <span aria-hidden="true">*</span></label>
                            <textarea id="reclamaciones-detalle" name="detalle_reclamo" class="iqc-form__textarea" required minlength="10" placeholder="Describa a detalle los hechos ocurridos..."></textarea>
                        </div>

                        <div class="iqc-form__group" style="margin-top: var(--space-4);">
                            <label for="reclamaciones-pedido" class="iqc-form__label">Pedido del cliente (¿Qué solución espera?)</label>
                            <textarea id="reclamaciones-pedido" name="pedido_cliente" class="iqc-form__textarea" style="min-height: 80px;" placeholder="Indique la solución esperada..."></textarea>
                        </div>

                        <div class="iqc-form__checkbox-group" style="margin-top: var(--space-4); display: flex; flex-direction: row; align-items: flex-start; gap: var(--space-2);">
                            <input type="checkbox" id="reclamaciones-privacidad" name="privacidad" required style="margin-top: 3px; width: auto; cursor: pointer;">
                            <label for="reclamaciones-privacidad" style="font-size: 0.85rem; color: var(--color-text-muted); cursor: pointer; text-transform: none; letter-spacing: normal; font-weight: 500;">
                                He leído y acepto la <a href="https://iqcperu.com/politica-de-privacidad-y-tratamiento-de-datos/" target="_blank" style="color: var(--color-primary); text-decoration: underline;">Política de Privacidad y Tratamiento de Datos</a>.
                            </label>
                        </div>

                        <div class="iqc-form__footer iqc-form__footer--split">
                            <p class="iqc-form__required-note"><span style="color:#c0392b">*</span> Campos obligatorios</p>
                            
                            <button type="button" class="iqc-form__prev iqc-mobile-only">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="19" y1="12" x2="5" y2="12"></line>
                                    <polyline points="12 19 5 12 12 5"></polyline>
                                </svg>
                                Atrás
                            </button>

                            <button type="submit" id="reclamaciones-submit" class="iqc-form__submit">
                                <span class="iqc-form__submit-text">Enviar Reclamo</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                            </button>
                        </div>

                        <?php /*zona de mensajes*/ ?>
                        <div id="reclamaciones-status" class="iqc-form__status" style="margin-top: var(--space-4);"></div>

                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    const form = document.getElementById('iqc-reclamaciones-form');
    if (!form) return;

    const steps    = form.querySelectorAll('.iqc-form-step');
    const steppers = document.querySelectorAll('.iqc-form-stepper .iqc-stepper-item');
    const nextBtns = form.querySelectorAll('.iqc-form__next');
    const prevBtns = form.querySelectorAll('.iqc-form__prev');
    const status   = document.getElementById('reclamaciones-status');
    const submit   = document.getElementById('reclamaciones-submit');
    let currentStep = 1;

    function showStep(stepIndex) {
        steps.forEach(step => {
            if (parseInt(step.dataset.step) === stepIndex) {
                step.style.display = 'block';
                setTimeout(() => step.classList.add('active'), 10);
            } else {
                step.style.display = 'none';
                step.classList.remove('active');
            }
        });
        steppers.forEach(stepper => {
            const sIdx = parseInt(stepper.dataset.step);
            if (sIdx === stepIndex) {
                stepper.classList.add('active');
                stepper.classList.remove('completed');
            } else if (sIdx < stepIndex) {
                stepper.classList.remove('active');
                stepper.classList.add('completed');
            } else {
                stepper.classList.remove('active', 'completed');
            }
        });
    }

    function validateStep(stepIndex) {
        const stepContent = form.querySelector(`.iqc-form-step[data-step="${stepIndex}"]`);
        if (!stepContent) return true;
        const inputs = stepContent.querySelectorAll('input[required], textarea[required], select[required]');
        let isValid = true;
        inputs.forEach(input => {
            if (!input.checkValidity()) {
                input.reportValidity();
                isValid = false;
            }
        });
        return isValid;
    }

    /*inicializar: mostrar solo paso 1 en móvil*/

    if (window.innerWidth <= 600) {
        showStep(1);
    }

    nextBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            if (validateStep(currentStep)) {
                currentStep++;
                showStep(currentStep);
            }
        });
    });

    prevBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            currentStep--;
            showStep(currentStep);
        });
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        /*usar la función compartida de Formularios.js*/

        submitIqcForm(
            form,
            'reclamacion', /*< iMPORTANTE: Este es el tipo que recibe Formularios.php*/

            submit,
            status,
            /*onExito*/

            function () {
                status.className = 'iqc-form__status iqc-form__status--success iqc-success-animation';
                status.innerHTML = `
                    <svg class="iqc-checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                        <circle class="iqc-checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="iqc-checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                    <div style="color:var(--color-primary);font-weight:800;font-size:1.1rem;">¡Enviado correctamente!</div>
                    <div style="color:var(--color-text-muted);font-size:0.9rem;">Tu caso ha sido registrado con éxito. Te responderemos a la brevedad.</div>
                `;
                form.classList.add('is-submitted');
                form.querySelectorAll('.iqc-form-step, .iqc-form-stepper, .iqc-reclamaciones-book-id, .iqc-reclamaciones-form__heading').forEach(el => el.style.display = 'none');
            },
            /*onError*/

            function (msg) {
                status.className = 'iqc-form__status iqc-form__status--error';
                status.textContent = msg;
            }
        );
    });
}());
</script>

<?php get_footer(); ?>