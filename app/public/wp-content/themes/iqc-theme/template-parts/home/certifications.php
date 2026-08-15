<?php
/*template part for Mostraring the Certificaciones Cuadricula on the Inicio page * * @package IQC_Theme*/

$certifications = array(
    array(
        'title' => 'ISO 9001:2015',
        'desc'  => 'Sistema de Gestión de Calidad',
        'image' => get_theme_file_uri( 'assets/img/isos/iso9001-2015.webp' ),
        'link'  => home_url( '/certificaciones/iso-90012015/' )
    ),
    array(
        'title' => 'ISO 14001:2015',
        'desc'  => 'Sistema de Gestión Ambiental',
        'image' => get_theme_file_uri( 'assets/img/isos/iso14001-2015.webp' ),
        'link'  => home_url( '/certificaciones/iso-140012015/' )
    ),
    array(
        'title' => 'ISO 37001:2016',
        'desc'  => 'Sistema de Gestión Antisoborno',
        'image' => get_theme_file_uri( 'assets/img/isos/iso37001-2016.webp' ),
        'link'  => home_url( '/certificaciones/iso-370012016/' )
    ),
    array(
        'title' => 'ISO 22000:2018',
        'desc'  => 'Sistema de Gestión de Inocuidad Alimentaria',
        'image' => get_theme_file_uri( 'assets/img/isos/iso22000-2018.webp' ),
        'link'  => home_url( '/certificaciones/iso-220002018/' )
    ),
    array(
        'title' => 'ISO 27001:2022',
        'desc'  => 'Sistema de Gestión de Seguridad de la Información',
        'image' => get_theme_file_uri( 'assets/img/isos/iso27001-2022.webp' ),
        'link'  => home_url( '/certificaciones/iso-270012022/' )
    ),
    array(
        'title' => 'ISO 45001:2018',
        'desc'  => 'Sistema de Gestión de la Salud y Seguridad en el Trabajo',
        'image' => get_theme_file_uri( 'assets/img/isos/iso45001-2018.webp' ),
        'link'  => home_url( '/certificaciones/iso-450012018/' )
    ),
);
?>

<section class="iqc-cert-section" aria-labelledby="cert-section-title">
    <div class="iqc-container">
        <header class="iqc-section-header">
            <h2 id="cert-section-title" class="iqc-section-title">
                <?php esc_html_e( 'Nuestras Certificaciones', 'iqc' ); ?>
            </h2>
            <p class="iqc-section-subtitle">
                <?php esc_html_e( 'Estándares internacionales para llevar tu organización al siguiente nivel.', 'iqc' ); ?>
            </p>
        </header>

        <div class="iqc-grid">
            <?php foreach ( $certifications as $cert ) : ?>
                <article class="iqc-card">
                    <div class="iqc-card__image-wrapper">
                        <img src="<?php echo esc_url( $cert['image'] ); ?>" alt="<?php echo esc_attr( $cert['title'] ); ?>" class="iqc-card__image">
                    </div>
                    <div class="iqc-card__content">
                        <h3 class="iqc-card__title"><?php echo esc_html( $cert['title'] ); ?></h3>
                        <p class="iqc-card__desc"><?php echo esc_html( $cert['desc'] ); ?></p>
                        <a href="<?php echo esc_url( $cert['link'] ); ?>" class="iqc-btn iqc-btn--primary iqc-card__btn">
                            <?php esc_html_e( 'Cotizar', 'iqc' ); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 6px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const grid = document.querySelector('.iqc-cert-section .iqc-grid');
    if (!grid) return;

    let isMobile = window.innerWidth <= 576;
    let autoPlayInterval;

    const startAutoPlay = () => {
        if (!isMobile) return;
        autoPlayInterval = setInterval(() => {
            const firstCard = grid.querySelector('.iqc-card');
            if (!firstCard) return;
            
            /*get Brecha from CSS or fallback to 16px*/

            const gap = parseFloat(getComputedStyle(grid).gap) || 16;
            const scrollAmount = firstCard.offsetWidth + gap;
            
            const maxScroll = grid.scrollWidth - grid.offsetWidth;
            
            /*if reached the end, Desplazamiento back to start*/

            if (grid.scrollLeft >= maxScroll - 10) {
                grid.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                grid.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }, 3000); /*3 seconds interval*/

    };

    const stopAutoPlay = () => {
        clearInterval(autoPlayInterval);
    };

    /*handle window reTamano*/

    window.addEventListener('resize', () => {
        const wasMobile = isMobile;
        isMobile = window.innerWidth <= 576;
        
        if (isMobile && !wasMobile) {
            startAutoPlay();
        } else if (!isMobile && wasMobile) {
            stopAutoPlay();
        }
    });

    /*pause Carrusel when user interacts*/

    grid.addEventListener('touchstart', stopAutoPlay, {passive: true});
    grid.addEventListener('touchend', startAutoPlay);
    grid.addEventListener('mouseenter', stopAutoPlay);
    grid.addEventListener('mouseleave', startAutoPlay);

    /*initialize*/

    if (isMobile) {
        startAutoPlay();
    }
});
</script>
