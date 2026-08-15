<?php
/*Template Name: Página Homologación * * Plantilla para la página de Servicio de Homologación.*/

get_header();
?>

<main id="primary" class="site-main">

    <?php /*hero*/ ?>
    <section class="iqc-hero iqc-hero--homologacion">
        <div class="iqc-hero__overlay"></div>
        <div class="iqc-hero__inner iqc-container">
            <div class="iqc-hero__content iqc-animate-fade-up is-visible">
                <h1 class="iqc-hero__title">SERVICIO DE HOMOLOGACIÓN</h1>
            </div>
        </div>
    </section>

    <?php /*qué es la Homologación*/ ?>
    <section class="iqc-homologacion-intro">
        <div class="iqc-container">
            <div class="iqc-homologacion-intro__section iqc-animate-fade-up">
                <h2 class="iqc-homologacion-intro__title">¿QUÉ ES LA HOMOLOGACIÓN?</h2>
                <p class="iqc-homologacion-intro__subtitle">Asesoramiento en el proceso de certificación de tu organización para brindar un servicio de calidad.</p>
            </div>

            <div class="iqc-homologacion-intro__section iqc-animate-fade-up">
                <h3 class="iqc-homologacion-intro__title" style="color: var(--color-primary); font-size: clamp(1.4rem, 2.5vw, 1.8rem);">NECESIDAD DE LA HOMOLOGACIÓN</h3>
            </div>

            <div class="iqc-homologacion-features iqc-animate-fade-up" style="animation-delay: 0.2s;">
                <div class="iqc-homologacion-feature">
                    <div class="iqc-homologacion-feature__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    </div>
                    <p class="iqc-homologacion-feature__text">Las organizaciones están busca de proveedores calificados que permitan identificar si un proveedor está capacitado, calificado y preparado para brindar un determinado bien o servicio de acuerdo con los requisitos de las diferentes organizaciones (organizaciones compradoras).</p>
                </div>
                
                <div class="iqc-homologacion-feature">
                    <div class="iqc-homologacion-feature__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                    </div>
                    <p class="iqc-homologacion-feature__text">La Homologación es una herramienta que permite aplicar una evaluación para hacer posible la identificación de los proveedores que pueden demostrar una capacidad de suministro adecuado de productos y servicios que las organizaciones compradoras requieren.</p>
                </div>
                
                <div class="iqc-homologacion-feature">
                    <div class="iqc-homologacion-feature__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                    </div>
                    <p class="iqc-homologacion-feature__text">Las organizaciones están busca de proveedores calificados que permitan identificar si un proveedor está capacitado, calificado y preparado para brindar un determinado bien o servicio de acuerdo con los requisitos de las diferentes organizaciones (organizaciones compradoras).</p>
                </div>
            </div>
        </div>
    </section>

    <?php /*proceso (Snake)*/ ?>
    <section style="padding: var(--space-12) 0; background-color: var(--color-surface);">
        <div class="iqc-container">
            <div class="iqc-steps-diagram">
                <?php /*paso 1*/ ?>
                <div class="iqc-step-item iqc-step-item--1 iqc-animate-fade-up"
                     style="cursor: pointer; transition: transform 0.2s;"
                     onmouseover="this.style.transform='translateY(-5px)';"
                     onmouseout="this.style.transform='none';"
                     onclick="openProcesoModal('<?php echo esc_url( get_theme_file_uri( 'assets/img/textos-pasos/Texto1.webp' ) ); ?>', 'RECIBIMIENTO DE SOLICITUDES PARA LA CERTIFICACIÓN')">
                    <div class="iqc-step-item__icon-wrapper" style="background-color: var(--color-primary); color: white; font-size: 2rem; font-weight: 800;">
                        1
                    </div>
                    <div class="iqc-step-item__content">
                        <h4 class="iqc-step-item__title">RECIBIMIENTO DE SOLICITUDES PARA LA CERTIFICACIÓN</h4>
                        <span class="iqc-step-item__details-btn" style="font-size: 0.72rem; color: var(--color-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-top: 16px; display: flex; justify-content: flex-end; align-items: center; gap: 6px; width: 100%;">
                            <span class="iqc-step-item__details-text">Ver detalles</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>

                <?php /*paso 2*/ ?>
                <div class="iqc-step-item iqc-step-item--2 iqc-animate-fade-up" style="animation-delay: 0.1s; cursor: pointer; transition: transform 0.2s;"
                     onmouseover="this.style.transform='translateY(-5px)';"
                     onmouseout="this.style.transform='none';"
                     onclick="openProcesoModal('<?php echo esc_url( get_theme_file_uri( 'assets/img/textos-pasos/Texto2.webp' ) ); ?>', 'REVISIÓN DE SOLICITUD')">
                    <div class="iqc-step-item__icon-wrapper" style="background-color: var(--color-primary); color: white; font-size: 2rem; font-weight: 800;">
                        2
                    </div>
                    <div class="iqc-step-item__content">
                        <h4 class="iqc-step-item__title">REVISIÓN DE SOLICITUD</h4>
                        <span class="iqc-step-item__details-btn" style="font-size: 0.72rem; color: var(--color-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-top: 16px; display: flex; justify-content: flex-end; align-items: center; gap: 6px; width: 100%;">
                            <span class="iqc-step-item__details-text">Ver detalles</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>

                <?php /*paso 3*/ ?>
                <div class="iqc-step-item iqc-step-item--3 iqc-animate-fade-up" style="animation-delay: 0.2s; cursor: pointer; transition: transform 0.2s;"
                     onmouseover="this.style.transform='translateY(-5px)';"
                     onmouseout="this.style.transform='none';"
                     onclick="openProcesoModal('<?php echo esc_url( get_theme_file_uri( 'assets/img/textos-pasos/Texto3.webp' ) ); ?>', 'PROPUESTA DE CONTRATO')">
                    <div class="iqc-step-item__icon-wrapper" style="background-color: var(--color-primary); color: white; font-size: 2rem; font-weight: 800;">
                        3
                    </div>
                    <div class="iqc-step-item__content">
                        <h4 class="iqc-step-item__title">PROPUESTA<br>DE CONTRATO</h4>
                        <span class="iqc-step-item__details-btn" style="font-size: 0.72rem; color: var(--color-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-top: 16px; display: flex; justify-content: flex-end; align-items: center; gap: 6px; width: 100%;">
                            <span class="iqc-step-item__details-text">Ver detalles</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>

                <?php /*paso 4*/ ?>
                <div class="iqc-step-item iqc-step-item--4 iqc-animate-fade-up" style="animation-delay: 0.3s; cursor: pointer; transition: transform 0.2s;"
                     onmouseover="this.style.transform='translateY(-5px)';"
                     onmouseout="this.style.transform='none';"
                     onclick="openProcesoModal('<?php echo esc_url( get_theme_file_uri( 'assets/img/textos-pasos/Texto4.webp' ) ); ?>', 'EVALUACIÓN FINAL DE CERTIFICACIÓN')">
                    <div class="iqc-step-item__icon-wrapper" style="background-color: var(--color-primary); color: white; font-size: 2rem; font-weight: 800;">
                        4
                    </div>
                    <div class="iqc-step-item__content">
                        <h4 class="iqc-step-item__title">EVALUACIÓN FINAL DE CERTIFICACIÓN</h4>
                        <span class="iqc-step-item__details-btn" style="font-size: 0.72rem; color: var(--color-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-top: 16px; display: flex; justify-content: flex-end; align-items: center; gap: 6px; width: 100%;">
                            <span class="iqc-step-item__details-text">Ver detalles</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>

                <?php /*paso 5*/ ?>
                <div class="iqc-step-item iqc-step-item--5 iqc-animate-fade-up" style="animation-delay: 0.4s; cursor: pointer; transition: transform 0.2s;"
                     onmouseover="this.style.transform='translateY(-5px)';"
                     onmouseout="this.style.transform='none';"
                     onclick="openProcesoModal('<?php echo esc_url( get_theme_file_uri( 'assets/img/textos-pasos/Texto5.webp' ) ); ?>', 'REVISIÓN DE EVALUACIÓN Y EMISIÓN DEL CERTIFICADO')">
                    <div class="iqc-step-item__icon-wrapper" style="background-color: var(--color-primary); color: white; font-size: 2rem; font-weight: 800;">
                        5
                    </div>
                    <div class="iqc-step-item__content">
                        <h4 class="iqc-step-item__title">REVISIÓN DE EVALUACIÓN Y EMISIÓN DEL CERTIFICADO</h4>
                        <span class="iqc-step-item__details-btn" style="font-size: 0.72rem; color: var(--color-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-top: 16px; display: flex; justify-content: flex-end; align-items: center; gap: 6px; width: 100%;">
                            <span class="iqc-step-item__details-text">Ver detalles</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                        </span>
                    </div>
                </div>

                <?php /*textooo Final (Posición 6)*/ ?>
                <div class="iqc-step-item iqc-step-item--6 iqc-animate-fade-up" style="animation-delay: 0.5s; display: flex; align-items: center; justify-content: center; text-align: center;">
                    <style>
                        .iqc-step-item--6::before, .iqc-step-item--6::after { content: none !important; }
                        .iqc-step-item--6 .iqc-step-item__content::after { content: none !important; }
                    </style>
                    <h3 style="color: var(--color-primary); font-size: clamp(1.2rem, 2vw, 1.5rem); font-weight: 900; line-height: 1.2; text-transform: uppercase; margin: 0;">
                        PASOS A SEGUIR PARA LOGRAR<br>
                        <span style="font-size: 1.2em;">LA HOMOLOGACIÓN</span><br>
                        <span style="font-size: 0.8em; font-weight: 800;">QUE NECESITA SU EMPRESA</span>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <?php /*cotización Formularioularioulario*/ ?>
    <section class="iqc-homologacion-cotizacion">
        <?php /*modal Lightbox para Proceso*/ ?>
        <div id="iqc-proceso-modal" class="iqc-proceso-modal" aria-hidden="true">
            <div class="iqc-proceso-modal__overlay" onclick="closeProcesoModal()"></div>
            <div class="iqc-proceso-modal__content">
                <button class="iqc-proceso-modal__close" onclick="closeProcesoModal()" aria-label="Cerrar modal">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
                <img id="iqc-proceso-modal-img" src="" alt="Detalle del proceso" class="iqc-proceso-modal__img">
            </div>
        </div>

        <style>
        .iqc-proceso-modal {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }
        .iqc-proceso-modal.is-active {
            opacity: 1;
            pointer-events: auto;
        }
        .iqc-proceso-modal__overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.8);
            backdrop-filter: blur(4px);
            cursor: pointer;
        }
        .iqc-proceso-modal__content {
            position: relative;
            max-width: 90%;
            max-height: 90vh;
            z-index: 1;
            background: transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
            transform: scale(0.95);
            transition: transform 0.3s ease;
        }
        .iqc-proceso-modal.is-active .iqc-proceso-modal__content {
            transform: scale(1);
        }
        .iqc-proceso-modal__img {
            max-width: 100%;
            max-height: 85vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        }
        .iqc-proceso-modal__close {
            position: absolute;
            top: -40px;
            right: 0;
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 8px;
            transition: transform 0.2s;
        }
        .iqc-proceso-modal__close:hover {
            transform: scale(1.1);
        }
        @media (max-width: 600px) {
            .iqc-proceso-modal__close {
                top: -35px;
                right: -10px;
            }
            .iqc-step-item__details-text {
                display: none;
            }
        }
        </style>

        <script>
        function openProcesoModal(imgSrc, altText) {
            const modal = document.getElementById('iqc-proceso-modal');
            const img = document.getElementById('iqc-proceso-modal-img');
            if (modal && img) {
                img.src = imgSrc;
                img.alt = altText;
                modal.classList.add('is-active');
                document.body.style.overflow = 'hidden';
            }
        }
        function closeProcesoModal() {
            const modal = document.getElementById('iqc-proceso-modal');
            if (modal) {
                modal.classList.remove('is-active');
                document.body.style.overflow = '';
                setTimeout(() => {
                    document.getElementById('iqc-proceso-modal-img').src = '';
                }, 300);
            }
        }
        /*close on Escape key*/

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeProcesoModal();
            }
        });
        </script>
        
        <div class="iqc-container">
            <div class="iqc-homologacion-cotizacion__wrapper iqc-animate-fade-up">
                <h2 class="iqc-homologacion-cotizacion__title">LLENAR EL SIGUIENTE FORMULARIO</h2>
                <form id="iqc-homologacion-form" class="iqc-form" style="margin-top: var(--space-4);">
                    
                    <?php /*honeypot antibot (inVisible para humanos)*/ ?>
                    <div class="iqc-form__honeypot" aria-hidden="true">
                        <label for="homologacion-iqc-url">Deja este campo vacío</label>
                        <input type="text" id="homologacion-iqc-url" name="iqc_url" tabindex="-1" autocomplete="off">
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
                                <label for="homologacion-nombre" class="iqc-form__label">Nombres <span aria-hidden="true">*</span></label>
                                <input type="text" id="homologacion-nombre" name="nombre" class="iqc-form__input" placeholder="Tu nombre completo" required minlength="2" maxlength="100" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo letras y espacios">
                            </div>
                            <div class="iqc-form__group">
                                <label for="homologacion-empresa" class="iqc-form__label">Empresa</label>
                                <input type="text" id="homologacion-empresa" name="empresa" class="iqc-form__input" placeholder="Nombre de tu empresa" maxlength="150">
                            </div>
                        </div>
                        
                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="homologacion-correo" class="iqc-form__label">Correo electrónico <span aria-hidden="true">*</span></label>
                                <input type="email" id="homologacion-correo" name="correo" class="iqc-form__input" placeholder="correo@empresa.com" required maxlength="100">
                            </div>
                            <div class="iqc-form__group">
                                <label for="homologacion-telefono" class="iqc-form__label">Teléfono</label>
                                <input type="tel" id="homologacion-telefono" name="telefono" class="iqc-form__input" placeholder="Ej: +51 980 923 270" minlength="7" maxlength="20" pattern="[\+0-9\s\-]+" title="Ingresa un número de teléfono válido">
                            </div>
                        </div>

                        <div class="iqc-form__footer iqc-form__footer--right iqc-mobile-only">
                            <button type="button" class="iqc-btn iqc-btn--primary iqc-form__next" style="width: 100%;">Siguiente</button>
                        </div>
                    </div>

                    <?php /*pASO 2*/ ?>
                    <div class="iqc-form-step" data-step="2" style="display: none;">
                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="homologacion-giro" class="iqc-form__label">Giro o sector <span aria-hidden="true">*</span></label>
                                <input type="text" id="homologacion-giro" name="giro" class="iqc-form__input" placeholder="Ej: Construcción, TI..." required maxlength="100">
                            </div>
                            <div class="iqc-form__group">
                                <label for="homologacion-personal" class="iqc-form__label">Número total de personal</label>
                                <input type="text" id="homologacion-personal" name="personal" class="iqc-form__input" placeholder="Ej: 50" maxlength="10" pattern="[0-9]+" title="Ingresa un número válido">
                            </div>
                        </div>

                        <div class="iqc-form__row">
                            <div class="iqc-form__group">
                                <label for="homologacion-servicio" class="iqc-form__label">Servicio Requerido <span aria-hidden="true">*</span></label>
                                <input type="text" id="homologacion-servicio" name="servicio" class="iqc-form__input" placeholder="¿En qué podemos ayudarte?" required maxlength="150">
                            </div>
                            <div class="iqc-form__group">
                                <label for="homologacion-meses" class="iqc-form__label">Meses de implementación del sistema</label>
                                <input type="text" id="homologacion-meses" name="meses" class="iqc-form__input" placeholder="Ej: 6 meses" maxlength="50">
                            </div>
                        </div>

                        <div class="iqc-form__group">
                            <label for="homologacion-mensaje" class="iqc-form__label">Mensaje <span aria-hidden="true">*</span></label>
                            <textarea id="homologacion-mensaje" name="mensaje" class="iqc-form__input" rows="5" placeholder="Escribe tu mensaje aquí..." required maxlength="1000"></textarea>
                        </div>

                        <div class="iqc-form__footer iqc-form__footer--split" style="align-items: center;">
                            <button type="button" class="iqc-btn iqc-btn--outline iqc-form__prev iqc-mobile-only" style="background: transparent; color: var(--color-primary); border: 2px solid var(--color-primary); border-radius: 8px; font-weight: 700;">Atrás</button>
                            <button type="submit" class="iqc-btn iqc-btn--primary iqc-form__submit" id="homologacion-submit">
                                <span class="iqc-form__submit-text">Enviar mensaje</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                            </button>
                        </div>
                    </div>

                    <?php /*mensaje de estado*/ ?>
                    <div class="iqc-form__status" id="homologacion-status" role="alert" aria-live="polite"></div>
                </form>
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    const form = document.getElementById('iqc-homologacion-form');
    if (!form) return;

    const steps = form.querySelectorAll('.iqc-form-step');
    const steppers = document.querySelectorAll('.iqc-form-stepper .iqc-stepper-item');
    const nextBtns = form.querySelectorAll('.iqc-form__next');
    const prevBtns = form.querySelectorAll('.iqc-form__prev');
    const status = document.getElementById('homologacion-status');
    const submit = document.getElementById('homologacion-submit');
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
            'homologacion',
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
                    <div style="color:var(--color-primary);font-weight:800;font-size:1.1rem;">¡Cotización enviada!</div>
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

<?php get_footer(); ?>
