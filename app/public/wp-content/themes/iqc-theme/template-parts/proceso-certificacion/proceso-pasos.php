<?php
/*proceso de Certificación - Pasos Seccion * * @package IQC_Theme * @since 1.0.0*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*iconoos WEBP*/

$icon_solicitudes = '<img src="' . esc_url( get_theme_file_uri( 'assets/img/proceso-certificacion/proceso-recibimiento.webp' ) ) . '" alt="Recibimiento de solicitudes" class="iqc-step-icon-img">';
$icon_revision    = '<img src="' . esc_url( get_theme_file_uri( 'assets/img/proceso-certificacion/proceso-revision.webp' ) ) . '" alt="Revisión de solicitud" class="iqc-step-icon-img">';
$icon_evaluacion  = '<img src="' . esc_url( get_theme_file_uri( 'assets/img/proceso-certificacion/proceso-evaluacion-final.webp' ) ) . '" alt="Evaluación final" class="iqc-step-icon-img">';
$icon_contrato    = '<img src="' . esc_url( get_theme_file_uri( 'assets/img/proceso-certificacion/proceso-propuesta-contrato.webp' ) ) . '" alt="Propuesta de contrato" class="iqc-step-icon-img">';
$icon_emision     = '<img src="' . esc_url( get_theme_file_uri( 'assets/img/proceso-certificacion/proceso-revision-evaluacion.webp' ) ) . '" alt="Revisión y emisión" class="iqc-step-icon-img">';
$icon_auditoria   = '<img src="' . esc_url( get_theme_file_uri( 'assets/img/proceso-certificacion/proceso-auditoria-seguimiento.webp' ) ) . '" alt="Auditoría del seguimiento" class="iqc-step-icon-img">';

$steps = [
    [
        'title' => 'RECIBIMIENTO DE SOLICITUDES<br>PARA LA CERTIFICACIÓN',
        'icon'  => $icon_solicitudes,
        'direction' => 'right',
        'text_img' => 'Texto1.webp',
    ],
    [
        'title' => 'REVISIÓN DE<br>SOLICITUD',
        'icon'  => $icon_revision,
        'direction' => 'down',
        'text_img' => 'Texto2.webp',
    ],
    [
        'title' => 'PROPUESTA<br>DE CONTRATO',
        'icon'  => $icon_contrato,
        'direction' => 'left',
        'text_img' => 'Texto3.webp',
    ],
    [
        'title' => 'EVALUACIÓN FINAL DE<br>CERTIFICACIÓN',
        'icon'  => $icon_evaluacion,
        'direction' => 'down-left',
        'text_img' => 'Texto4.webp',
    ],
    [
        'title' => 'REVISIÓN DE EVALUACIÓN<br>Y EMISIÓN DEL CERTIFICADO',
        'icon'  => $icon_emision,
        'direction' => 'right',
        'text_img' => 'Texto5.webp',
    ],
    [
        'title' => 'AUDITORIA DEL<br>SEGUIMIENTO',
        'icon'  => $icon_auditoria,
        'direction' => 'none',
        'text_img' => 'Texto6.webp',
    ],
];
?>

<section class="iqc-section iqc-proceso-pasos">
    <div class="iqc-container">
        <h2 class="iqc-proceso-pasos__subtitle iqc-animate-fade-up">Conozca los pasos a seguir para lograr la certificación que necesita su empresa:</h2>
        
        <div class="iqc-steps-diagram iqc-animate-fade-up" style="--delay: 0.2s;">
            <?php foreach ( $steps as $index => $step ) : ?>
                <div class="iqc-step-item iqc-step-item--<?php echo esc_attr( $index + 1 ); ?> iqc-step-direction--<?php echo esc_attr( $step['direction'] ); ?>"
                     <?php if ( ! empty( $step['text_img'] ) ) : ?>
                     style="cursor: pointer; transition: transform 0.2s;"
                     onmouseover="this.style.transform='translateY(-5px)';"
                     onmouseout="this.style.transform='none';"
                     onclick="openProcesoModal('<?php echo esc_url( get_theme_file_uri( 'assets/img/textos-pasos/' . $step['text_img'] ) ); ?>', '<?php echo esc_attr( strip_tags( $step['title'] ) ); ?>')"
                     <?php endif; ?>>
                    <div class="iqc-step-item__icon-wrapper">
                        <div class="iqc-step-item__icon">
                            <?php echo $step['icon']; /*phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>*/

                        </div>
                    </div>
                    <div class="iqc-step-item__content">
                        <h3 class="iqc-step-item__title"><?php echo wp_kses_post( $step['title'] ); ?></h3>
                        <?php if ( ! empty( $step['text_img'] ) ) : ?>
                            <span class="iqc-step-item__details-btn" style="font-size: 0.72rem; color: var(--color-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-top: 16px; display: flex; justify-content: flex-end; align-items: center; gap: 6px; width: 100%;">
                                <span class="iqc-step-item__details-text">Ver detalles</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

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
