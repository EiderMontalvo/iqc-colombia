<?php
/*template part for Mostraring the "Por que nosotros" Seccion on the Inicio page * * @package IQC_Theme*/

$benefits = array(
    array(
        'title' => 'Presencia Multipaís',
        'desc'  => 'Operamos en Colombia, Perú, Panamá y Ecuador con estándares unificados.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>',
    ),
    array(
        'title' => 'Proceso Ágil',
        'desc'  => 'Auditorías eficientes diseñadas para aportar valor sin burocracia.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>',
    ),
    array(
        'title' => 'Respaldo Global',
        'desc'  => 'Certificaciones con máximo respaldo normativo internacional.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>',
    ),
    array(
        'title' => 'Expertos',
        'desc'  => 'Profesionales con vasta experiencia en múltiples sectores.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>',
    ),
);
?>

<section class="iqc-why-us-section" aria-labelledby="why-us-title" style="overflow-x: hidden;">
    <?php /*screen reader Textoo for accessibility*/ ?>
    <h2 id="why-us-title" class="screen-reader-text" style="position:absolute; width:1px; height:1px; overflow:hidden; clip:rect(1px, 1px, 1px, 1px);">
        <?php esc_html_e( 'Acerca de IQC', 'iqc' ); ?>
    </h2>
    
    <div class="iqc-container">
        
        <?php /*cabecera Textoo*/ ?>
        <div class="iqc-about-header iqc-animate-fade-up">
            <h3 class="iqc-about-highlight">
                GARANTÍA DE UN EXCELENTE SERVICIO DE CERTIFICACIÓN, HOMOLOGACIÓN E INSPECCIÓN PARA TU EMPRESA
            </h3>
            <p class="iqc-about-paragraph">
                Somos un Organismo de Certificación con gran experiencia en auditorías de Sistemas de Gestión. Estamos compuestos por un grupo de profesionales con vasta experiencia y el compromiso de realizar un servicio de calidad integrado, independiente e imparcial.
            </p>
        </div>

        <?php /*split Layout with Features*/ ?>
        <div class="iqc-split-layout" style="margin-top: var(--space-10);">
            
            <div class="iqc-split-layout__image iqc-animate-fade-right">
                <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/global/iqc-colombia-logo-horizontal.webp' ) ); ?>" alt="<?php esc_attr_e( 'Logo Horizontal IQC Colombia', 'iqc' ); ?>" class="iqc-brand-logo" loading="lazy">
            </div>

            <div class="iqc-split-layout__content iqc-animate-fade-left">
                <ul class="iqc-feature-list">
                    <?php foreach ( $benefits as $benefit ) : ?>
                        <li class="iqc-feature-item">
                            <div class="iqc-feature-item__icon">
                                <?php echo $benefit['icon']; ?>
                            </div>
                            <div class="iqc-feature-item__text">
                                <h3 class="iqc-feature-item__title"><?php echo esc_html( $benefit['title'] ); ?></h3>
                                <p class="iqc-feature-item__desc"><?php echo esc_html( $benefit['desc'] ); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</section>

<?php /*desplazamiento Animacions Observer*/ ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.iqc-animate-fade-up, .iqc-animate-fade-right, .iqc-animate-fade-left').forEach((el) => {
        observer.observe(el);
    });
});
</script>
