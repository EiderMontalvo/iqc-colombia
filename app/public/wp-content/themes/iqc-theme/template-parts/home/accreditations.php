<?php
/*template part for Mostraring the Acreditadoras Seccion * * @package IQC_Theme*/
?>

<section class="iqc-accreditations" aria-labelledby="accreditations-title">
    
    <?php /*superior Blue Banner*/ ?>
    <div class="iqc-accreditations__banner">
        <div class="iqc-container">
            <h2 id="accreditations-title" class="iqc-accreditations__title">
                Nuestras Acreditaciones<br>
                <span class="iqc-accreditations__subtitle">A Nivel Global</span>
            </h2>
        </div>
    </div>

    <?php /*main Content*/ ?>
    <div class="iqc-container" style="padding-top: var(--space-8); padding-bottom: var(--space-12);">
        <div class="iqc-split-layout iqc-accreditations__layout">
            
            <?php /*izquierda Columnaa: Logotipotipos & Textoo*/ ?>
            <div class="iqc-accreditations__info">
                <div class="iqc-accreditations__logos-wrapper">
                    <div class="iqc-accreditations__logos">
                        <?php /*original Logotipotipos*/ ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/acreditadoras/inacal-logo.webp' ); ?>" alt="INACAL Acreditación" class="iqc-accreditation-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/acreditadoras/jas-anz.webp' ); ?>" alt="JAS-ANZ Acreditación" class="iqc-accreditation-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/acreditadoras/ias.webp' ); ?>" alt="IAS Acreditación" class="iqc-accreditation-img">
                        <?php /*duplicados para lograr el Desplazamiento infinito suave*/ ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/acreditadoras/inacal-logo.webp' ); ?>" alt="INACAL Acreditación" class="iqc-accreditation-img iqc-mobile-duplicate" aria-hidden="true">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/acreditadoras/jas-anz.webp' ); ?>" alt="JAS-ANZ Acreditación" class="iqc-accreditation-img iqc-mobile-duplicate" aria-hidden="true">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/acreditadoras/ias.webp' ); ?>" alt="IAS Acreditación" class="iqc-accreditation-img iqc-mobile-duplicate" aria-hidden="true">
                    </div>
                </div>
                
                <p class="iqc-accreditations__text">
                    IQC está actualmente acreditado por el Instituto Nacional de Calidad (INACAL), Perú; el Sistema Conjunto de Acreditación de Australia y Nueva Zelanda (JAS-ANZ), Australia y Nueva Zelanda; y el Servicio de Acreditación Internacional (IAS), Estados Unidos de América. INACAL, JAS-ANZ e IAS son miembros de IAF-Multilateral Recognition Arrangement (MLA), y APAC reconoce la equivalencia de la acreditación de otros miembros con la suya.
                </p>
            </div>

            <?php /*derecha Columnaa: Geometric Imagenn*/ ?>
            <div class="iqc-accreditations__image-col">
                <div class="iqc-geometric-wrapper">
                    <?php /*the blue ribbon shape in the Fondo*/ ?>
                    <div class="iqc-geometric-shape"></div>
                    <?php /*transparent person Imagenn that pops out of the Superior*/ ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home/ign-persona.webp' ); ?>" alt="<?php esc_attr_e( 'Inspector IQC', 'iqc' ); ?>" class="iqc-geometric-image" loading="lazy">
                </div>
            </div>

        </div>
    </div>
</section>
