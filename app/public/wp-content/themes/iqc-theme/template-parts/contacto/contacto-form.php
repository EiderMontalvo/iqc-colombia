<?php
/*template part: Formularioulario de Contactoo + sección Participación * * @package IQC_Theme*/
?>
<section class="iqc-contacto-form-section" aria-labelledby="participacion-title">
    <div class="iqc-container">
        <div class="iqc-contacto-form__grid">

            <?php /*columnaaa izquierda: Participación*/ ?>
            <div class="iqc-contacto-participacion">
                <h2 id="participacion-title" class="iqc-contacto-participacion__title">
                    <?php esc_html_e( 'Participación', 'iqc' ); ?>
                </h2>
                <p class="iqc-contacto-participacion__intro">
                    <?php esc_html_e( 'Su opinión es importante para nosotros.', 'iqc' ); ?>
                </p>
                <p class="iqc-contacto-participacion__body">
                    <?php esc_html_e( 'Si tiene algún comentario o sugerencia, puede llenar el siguiente formulario.', 'iqc' ); ?>
                </p>
                <p class="iqc-contacto-participacion__body iqc-contacto-participacion__body--bold">
                    <?php esc_html_e( 'Si tiene algún(a):', 'iqc' ); ?>
                </p>
                <ul class="iqc-contacto-participacion__list">
                    <li><?php esc_html_e( 'Comentario o sugerencia.', 'iqc' ); ?></li>
                    <li><?php esc_html_e( 'Dudas respecto al servicio.', 'iqc' ); ?></li>
                    <li><?php esc_html_e( 'Consulta sobre la veracidad de su certificado (si es cliente certificado de IQC).', 'iqc' ); ?></li>
                    <li><?php esc_html_e( 'Consulta sobre la veracidad de certificados emitidos a clientes (bajo las condiciones de confidencialidad de IQC).', 'iqc' ); ?></li>
                    <li><?php esc_html_e( 'Comentarios sobre consulta a las partes interesadas y/o riesgos de imparcialidad.', 'iqc' ); ?></li>
                    <li><?php esc_html_e( 'Denuncia sobre mal manejo de marca y/o logo de certificación, acreditación.', 'iqc' ); ?></li>
                </ul>
            </div>

            <?php /*columnaaa derecha: Formularioularioulario*/ ?>
            <div class="iqc-contacto-form__wrap">
                <h3 class="iqc-contacto-form__heading">
                    <?php esc_html_e( 'Llenar el siguiente formulario', 'iqc' ); ?>
                </h3>

                <form
                    id="iqc-contacto-form"
                    class="iqc-contacto-form"
                    novalidate
                    aria-label="<?php esc_attr_e( 'Formulario de contacto', 'iqc' ); ?>"
                >
                    <?php /*honeypot antibot (inVisible para humanos)*/ ?>
                    <div class="iqc-form__honeypot" aria-hidden="true">
                        <label for="contacto-iqc-url"><?php esc_html_e( 'Deja este campo vacío', 'iqc' ); ?></label>
                        <input type="text" id="contacto-iqc-url" name="iqc_url" tabindex="-1" autocomplete="off">
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
                            <span class="iqc-stepper-label">Mensaje</span>
                        </div>
                    </div>

                    <?php /*pASO 1*/ ?>
                    <div class="iqc-form-step active" data-step="1">
                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="contacto-nombre" class="iqc-form__label">
                                    <?php esc_html_e( 'Nombres', 'iqc' ); ?> <span aria-hidden="true">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="contacto-nombre"
                                    name="nombre"
                                    class="iqc-form__input"
                                    required
                                    minlength="2"
                                    maxlength="100"
                                    pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+"
                                    title="Solo letras y espacios"
                                    autocomplete="name"
                                    placeholder="<?php esc_attr_e( 'Tu nombre completo', 'iqc' ); ?>"
                                >
                            </div>
                            <div class="iqc-form__group">
                                <label for="contacto-empresa" class="iqc-form__label">
                                    <?php esc_html_e( 'Empresa', 'iqc' ); ?>
                                </label>
                                <input
                                    type="text"
                                    id="contacto-empresa"
                                    name="empresa"
                                    class="iqc-form__input"
                                    maxlength="150"
                                    autocomplete="organization"
                                    placeholder="<?php esc_attr_e( 'Nombre de tu empresa', 'iqc' ); ?>"
                                >
                            </div>
                        </div>

                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="contacto-correo" class="iqc-form__label">
                                    <?php esc_html_e( 'Correo electrónico', 'iqc' ); ?> <span aria-hidden="true">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="contacto-correo"
                                    name="correo"
                                    class="iqc-form__input"
                                    required
                                    maxlength="100"
                                    autocomplete="email"
                                    placeholder="correo@empresa.com"
                                >
                            </div>
                            <div class="iqc-form__group">
                                <label for="contacto-telefono" class="iqc-form__label">
                                    <?php esc_html_e( 'Teléfono', 'iqc' ); ?>
                                </label>
                                <input
                                    type="tel"
                                    id="contacto-telefono"
                                    name="telefono"
                                    class="iqc-form__input"
                                    minlength="7"
                                    maxlength="20"
                                    pattern="[\+0-9\s\-]+"
                                    title="Ingresa un número de teléfono válido (ej: +51 980 923 270)"
                                    autocomplete="tel"
                                    class="iqc-form__input"
                                    placeholder="+51 980 923 270"
                                >
                            </div>
                        </div>
                        
                        <?php /*next Boton (Solo Móvil)*/ ?>
                        <div class="iqc-form__footer iqc-form__footer--right iqc-mobile-only">
                            <button type="button" class="iqc-btn iqc-btn--primary iqc-form__next" style="width: 100%;">Siguiente</button>
                        </div>
                    </div>

                    <?php /*pASO 2*/ ?>
                    <div class="iqc-form-step" data-step="2" style="display: none;">
                        <div class="iqc-form__group">
                            <label for="contacto-asunto" class="iqc-form__label">
                                <?php esc_html_e( 'Asunto', 'iqc' ); ?>
                            </label>
                            <input
                                type="text"
                                id="contacto-asunto"
                                name="asunto"
                                class="iqc-form__input"
                                maxlength="150"
                                placeholder="<?php esc_attr_e( '¿En qué podemos ayudarte?', 'iqc' ); ?>"
                            >
                        </div>

                        <div class="iqc-form__group">
                            <label for="contacto-mensaje" class="iqc-form__label">
                                <?php esc_html_e( 'Mensaje', 'iqc' ); ?> <span aria-hidden="true">*</span>
                            </label>
                            <textarea
                                id="contacto-mensaje"
                                name="mensaje"
                                class="iqc-form__textarea"
                                required
                                maxlength="1000"
                                rows="5"
                                placeholder="<?php esc_attr_e( 'Escribe tu mensaje aquí...', 'iqc' ); ?>"
                            ></textarea>
                        </div>

                        <div class="iqc-form__footer iqc-form__footer--split" style="align-items: center;">
                            <button type="button" class="iqc-btn iqc-btn--outline iqc-form__prev iqc-mobile-only" style="background: transparent; color: var(--color-primary); border: 2px solid var(--color-primary); border-radius: 8px; font-weight: 700;">Anterior</button>
                            
                            <p class="iqc-form__required-note" style="margin: 0;">
                                <span aria-hidden="true">*</span> <?php esc_html_e( 'Campos obligatorios', 'iqc' ); ?>
                            </p>

                            <button type="submit" class="iqc-btn iqc-btn--primary iqc-form__submit" id="contacto-submit">
                                <span class="iqc-form__submit-text"><?php esc_html_e( 'Enviar mensaje', 'iqc' ); ?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                            </button>
                        </div>
                    </div>

                    <?php /*mensaje de estado*/ ?>
                    <div class="iqc-form__status" id="contacto-status" role="alert" aria-live="polite"></div>
                </form>
            </div>

        </div>
    </div>
</section>

<script>
(function () {
    const form = document.getElementById('iqc-contacto-form');
    if (!form) return;

    const steps    = form.querySelectorAll('.iqc-form-step');
    const steppers = document.querySelectorAll('.iqc-form-stepper .iqc-stepper-item');
    const nextBtns = form.querySelectorAll('.iqc-form__next');
    const prevBtns = form.querySelectorAll('.iqc-form__prev');
    const status   = document.getElementById('contacto-status');
    const submit   = document.getElementById('contacto-submit');
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
        const inputs = stepContent.querySelectorAll('input[required], textarea[required]');
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
            'contacto',
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
                    <div style="color:var(--color-primary);font-weight:800;font-size:1.1rem;">¡Mensaje enviado!</div>
                    <div style="color:var(--color-text-muted);font-size:0.9rem;">Te responderemos a la brevedad.</div>
                `;
                form.classList.add('is-submitted');
                form.querySelectorAll('.iqc-form-step, .iqc-form-stepper').forEach(el => el.style.display = 'none');
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


