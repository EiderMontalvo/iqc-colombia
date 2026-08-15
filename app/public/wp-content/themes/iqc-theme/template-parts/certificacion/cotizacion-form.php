<?php
/*formularioulario de Cotización para Certificaciones * * @package IQC_Theme*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<section class="iqc-contacto-form-section" aria-labelledby="cotizacion-title">
    <div class="iqc-container">
        <div class="iqc-contacto-form__grid">

            <?php /*columnaaa izquierda: Informacionrmularioacionrmularioación (Azul)*/ ?>
            <div class="iqc-contacto-participacion">
                <h2 id="cotizacion-title" class="iqc-contacto-participacion__title">
                    <?php esc_html_e( 'Solicitar Cotización', 'iqc' ); ?>
                </h2>
                <p class="iqc-contacto-participacion__intro">
                    <?php esc_html_e( 'Inicia tu proceso hacia la excelencia.', 'iqc' ); ?>
                </p>
                <p class="iqc-contacto-participacion__body">
                    <?php esc_html_e( 'Completa este formulario para recibir una propuesta técnica y económica adaptada a las necesidades de tu organización.', 'iqc' ); ?>
                </p>
                <ul class="iqc-contacto-participacion__list" style="margin-top: var(--space-4);">
                    <li><?php esc_html_e( 'Atención personalizada.', 'iqc' ); ?></li>
                    <li><?php esc_html_e( 'Análisis de tu contexto.', 'iqc' ); ?></li>
                    <li><?php esc_html_e( 'Tiempos de respuesta ágiles.', 'iqc' ); ?></li>
                </ul>
            </div>

            <?php /*columnaaa derecha: Formularioularioulario (Blanco)*/ ?>
            <div class="iqc-contacto-form__wrap">
                <h3 class="iqc-contacto-form__heading">
                    <?php esc_html_e( 'Llenar el siguiente formulario', 'iqc' ); ?>
                </h3>

                <form id="cotizacion-form" class="iqc-form iqc-contacto-form" novalidate>
                    <?php wp_nonce_field( 'iqc_cotizacion_action', 'iqc_cotizacion_nonce' ); ?>
                    <input type="hidden" name="action" value="iqc_submit_cotizacion">
                    
                    <?php /*honeypot*/ ?>
                    <div class="iqc-form__honeypot" aria-hidden="true">
                        <label for="cotiz-iqc-url"><?php esc_html_e( 'Deja este campo vacío', 'iqc' ); ?></label>
                        <input type="text" id="cotiz-iqc-url" name="iqc_honeypot" tabindex="-1" autocomplete="off">
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

                    <?php /*pASO 1*/ ?>
                    <div class="iqc-form-step active" data-step="1">
                        <?php /*fila 1: Nombres y Empresa*/ ?>
                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="cotiz-nombre" class="iqc-form__label"><?php esc_html_e( 'Nombres', 'iqc' ); ?> <span aria-hidden="true">*</span></label>
                                <input type="text" id="cotiz-nombre" name="nombre" class="iqc-form__input" placeholder="Tu nombre" required minlength="3">
                                <span class="iqc-form__error-msg" style="display:none; color:red; font-size:0.8rem; margin-top:4px;">El nombre es muy corto.</span>
                            </div>
                            <div class="iqc-form__group">
                                <label for="cotiz-empresa" class="iqc-form__label"><?php esc_html_e( 'Empresa', 'iqc' ); ?></label>
                                <input type="text" id="cotiz-empresa" name="empresa" class="iqc-form__input" placeholder="Nombre de la empresa">
                            </div>
                        </div>

                        <?php /*fila 2: Correo y Teléfono (Personal / Giro)*/ ?>
                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="cotiz-correo" class="iqc-form__label"><?php esc_html_e( 'Correo', 'iqc' ); ?> <span aria-hidden="true">*</span></label>
                                <input type="email" id="cotiz-correo" name="correo" class="iqc-form__input" placeholder="correo@empresa.com" required>
                                <span class="iqc-form__error-msg" style="display:none; color:red; font-size:0.8rem; margin-top:4px;">Ingresa un correo válido.</span>
                            </div>
                            <div class="iqc-form__group">
                                <label for="cotiz-sector" class="iqc-form__label"><?php esc_html_e( 'Giro o Sector', 'iqc' ); ?></label>
                                <input type="text" id="cotiz-sector" name="sector" class="iqc-form__input" placeholder="Ej: Construcción">
                            </div>
                        </div>

                        <?php /*fila 3: Personal y Meses*/ ?>
                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="cotiz-personal" class="iqc-form__label"><?php esc_html_e( 'Número de personal', 'iqc' ); ?></label>
                                <input type="number" id="cotiz-personal" name="personal" class="iqc-form__input" placeholder="Ej: 50" min="1">
                            </div>
                            <div class="iqc-form__group">
                                <label for="cotiz-meses" class="iqc-form__label"><?php esc_html_e( 'Meses de Implementación', 'iqc' ); ?></label>
                                <input type="number" id="cotiz-meses" name="meses" class="iqc-form__input" placeholder="Ej: 6" min="1">
                            </div>
                        </div>

                        <?php /*next Boton (Solo Móvil)*/ ?>
                        <div class="iqc-form__footer iqc-form__footer--right iqc-mobile-only">
                            <button type="button" class="iqc-btn iqc-btn--primary iqc-form__next" style="width: 100%;">Siguiente</button>
                        </div>
                    </div>

                    <?php /*pASO 2*/ ?>
                    <div class="iqc-form-step" data-step="2" style="display: none;">
                        <?php /*servicio Requerido (Full Ancho)*/ ?>
                        <div class="iqc-form__group">
                            <label for="cotiz-servicio" class="iqc-form__label"><?php esc_html_e( 'Servicio Requerido', 'iqc' ); ?></label>
                            <input type="text" id="cotiz-servicio" name="servicio" class="iqc-form__input" value="<?php echo esc_attr( isset($args['title']) ? $args['title'] : get_the_title() ); ?>" readonly>
                        </div>

                        <?php /*mensaje*/ ?>
                        <div class="iqc-form__group">
                            <label for="cotiz-mensaje" class="iqc-form__label"><?php esc_html_e( 'Mensaje', 'iqc' ); ?> <span aria-hidden="true">*</span></label>
                            <textarea id="cotiz-mensaje" name="mensaje" class="iqc-form__input" rows="4" placeholder="Cuéntanos más detalles..." required minlength="10"></textarea>
                            <span class="iqc-form__error-msg" style="display:none; color:red; font-size:0.8rem; margin-top:4px;">El mensaje debe tener al menos 10 caracteres.</span>
                        </div>

                        <div class="iqc-form__footer iqc-form__footer--split" style="align-items: center;">
                            <button type="button" class="iqc-btn iqc-btn--outline iqc-form__prev iqc-mobile-only" style="background: transparent; color: var(--color-primary); border: 2px solid var(--color-primary); border-radius: 8px; font-weight: 700;">Anterior</button>
                            
                            <div class="iqc-form__mandatory">
                                * <?php esc_html_e( 'Campos obligatorios', 'iqc' ); ?>
                            </div>
                            
                            <button type="submit" class="iqc-btn iqc-btn--primary iqc-form__submit" id="cotizacion-submit">
                                <span class="iqc-btn__text"><?php esc_html_e( 'Solicitar Cotización', 'iqc' ); ?></span>
                                <span class="iqc-btn__loader" style="display: none;" aria-hidden="true">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="iqc-spinner"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="iqc-form__response" id="cotizacion-status" aria-live="polite" style="display: none; margin-top: 16px;"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
(function () {
    const form = document.getElementById('cotizacion-form');
    if (!form) return;

    const steps    = form.querySelectorAll('.iqc-form-step');
    const steppers = document.querySelectorAll('.iqc-form-stepper .iqc-stepper-item');
    const nextBtns = form.querySelectorAll('.iqc-form__next');
    const prevBtns = form.querySelectorAll('.iqc-form__prev');
    const status = document.getElementById('cotizacion-status');
    const submitBtn = document.getElementById('cotizacion-submit');
    const requiredInputs = form.querySelectorAll('input[required], textarea[required]');
    let currentStep = 1;

    /*función para cambiar de paso*/

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

    /*inicializar: mostrar solo paso 1 en móvil*/

    if (window.innerWidth <= 600) {
        showStep(1);
    }

    /*eventos botones wizard*/

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

    /*real-time validation feedback*/

    requiredInputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateInput(this);
        });
        input.addEventListener('input', function() {
            if (this.dataset.touched) validateInput(this);
        });
    });

    function validateInput(input) {
        input.dataset.touched = true;
        const errorMsg = input.parentElement.querySelector('.iqc-form__error-msg');
        if (!input.checkValidity()) {
            input.style.borderColor = 'red';
            if (errorMsg) errorMsg.style.display = 'block';
            return false;
        } else {
            input.style.borderColor = 'var(--color-border, #e2e8f0)';
            if (errorMsg) errorMsg.style.display = 'none';
            return true;
        }
    }

    function validateStep(stepIndex) {
        const stepContent = form.querySelector(`.iqc-form-step[data-step="${stepIndex}"]`);
        if (!stepContent) return true;
        
        const inputs = stepContent.querySelectorAll('input[required], textarea[required]');
        let isValid = true;
        inputs.forEach(input => {
            if (!validateInput(input)) {
                isValid = false;
            }
        });
        return isValid;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        
        /*ensure ALL Pasos are validated*/

        let isFormValid = true;
        requiredInputs.forEach(input => {
            if (!validateInput(input)) {
                isFormValid = false;
            }
        });

        if (!isFormValid) {
            status.className = 'iqc-form__status iqc-form__status--error';
            status.innerHTML = '<span style="color:red; font-size:0.9rem;">Por favor, corrige los errores en el formulario.</span>';
            status.style.display = 'block';
            return;
        }

        /*usar la función compartida de Formularios.js*/

        if (typeof submitIqcForm === 'function') {
            submitIqcForm(
                form,
                'cotizacion', /*formularioType*/

                submitBtn,
                status,
                /*onExito*/

                function () {
                    status.className = 'iqc-form__status iqc-form__status--success iqc-success-animation';
                    status.innerHTML = `
                        <svg class="iqc-checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" style="margin: 0 auto 16px;">
                            <circle class="iqc-checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                            <path class="iqc-checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                        </svg>
                        <div style="color:var(--color-primary);font-weight:800;font-size:1.1rem;margin-bottom:4px;">¡Cotización solicitada!</div>
                        <div style="color:var(--color-text-muted);font-size:0.9rem;">Te contactaremos muy pronto.</div>
                    `;
                    const inputs = form.querySelectorAll('.iqc-form-step, .iqc-form-stepper');
                    inputs.forEach(el => el.style.display = 'none');
                    
                    const heading = form.parentElement.querySelector('.iqc-contacto-form__heading');
                    if (heading) heading.style.display = 'none';

                    status.style.display = 'flex';
                    status.style.flexDirection = 'column';
                    status.style.alignItems = 'center';
                    status.style.justifyContent = 'center';
                    status.style.textAlign = 'center';
                    status.style.padding = '40px 20px';
                },
                /*onError*/

                function (msg) {
                    status.className = 'iqc-form__status iqc-form__status--error';
                    status.textContent = msg;
                    status.style.display = 'block';
                }
            );
        } else {
            console.error('La función submitIqcForm no está disponible.');
        }
    });
})();
</script>
