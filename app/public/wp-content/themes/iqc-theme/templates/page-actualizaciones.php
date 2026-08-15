<?php
/*Template Name: Página Actualizaciones * * @package IQC_Theme*/

get_header();
?>

<main id="primary" class="site-main">
    
    <?php /*hero*/ ?>
    <section class="iqc-hero iqc-hero--actualizaciones">
        <div class="iqc-hero__overlay"></div>
        <div class="iqc-hero__inner iqc-container">
            <div class="iqc-hero__content iqc-animate-fade-up is-visible">
                <h1 class="iqc-hero__title">Últimos cambios a los requisitos de Certificación</h1>
            </div>
        </div>
    </section>

    <?php /*contenido Principal*/ ?>
    <section class="iqc-actualizaciones-content">
        <div class="iqc-container">
            
            <header class="iqc-actualizaciones-header iqc-animate-fade-up is-visible">
                <h2 class="iqc-actualizaciones-title">
                    A continuación, se presentan los documentos internos de IQC o normas internacionales que han sido actualizados y afectan a la certificación de nuestros clientes.
                </h2>
            </header>

            <?php /*controles de la tabla*/ ?>
            <div class="iqc-table-controls iqc-animate-fade-up is-visible" style="--delay: 0.1s">
                <div class="iqc-table-controls__length">
                    <label>
                        Mostrar 
                        <select name="iqc-table_length" id="iqc-table-length" class="iqc-table-select">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> 
                        registros
                    </label>
                </div>
                <div class="iqc-table-controls__filter">
                    <label>
                        Buscar:
                        <input type="search" id="iqc-table-search" class="iqc-table-search" placeholder="">
                    </label>
                </div>
            </div>

            <?php /*tabla de datos*/ ?>
            <div class="iqc-table-wrapper iqc-animate-fade-up is-visible" style="--delay: 0.2s">
                <table class="iqc-data-table" id="actualizaciones-table">
                    <thead>
                        <tr>
                            <th width="20%">Nombre del Documento</th>
                            <th width="15%">Categoría</th>
                            <th width="45%">Descripción del cambio</th>
                            <th width="10%">Fecha de Publicación</th>
                            <th width="10%">Fecha de Vigencia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php /*iNICIO DEL LOOP DE DATOS (AQUÍ SE JALARÁ LA InformacionrmularioacionrmularioACIÓN REAL DESDE EL BACKEND)*/ ?>
                        <tr class="iqc-data-row-empty">
                            <td colspan="5" class="iqc-table-empty">
                                Actualmente no hay actualizaciones o registros disponibles.
                            </td>
                        </tr>
                        <?php /*fIN DEL LOOP DE DATOS*/ ?>
                    </tbody>
                </table>
                <div id="iqc-table-empty-msg" class="iqc-table-empty" style="display: none;">
                    No se encontraron registros que coincidan con la búsqueda.
                </div>
            </div>

            <?php /*paginación*/ ?>
            <div class="iqc-table-pagination iqc-animate-fade-up is-visible" style="--delay: 0.3s">
                <button class="iqc-pagination-btn" disabled>&lsaquo;</button>
                <button class="iqc-pagination-btn is-active">1</button>
                <button class="iqc-pagination-btn" disabled>&rsaquo;</button>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
