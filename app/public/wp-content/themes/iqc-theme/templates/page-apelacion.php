<?php
/*Template Name: Página Apelación * * Plantilla para la página de Apelaciones, mostrando el proceso a través de una línea de tiempo (timeline).*/

get_header();
?>

<main id="primary" class="site-main">

    <?php /*hero*/ ?>
    <section class="iqc-hero iqc-hero--apelaciones">
        <div class="iqc-hero__overlay"></div>
        <div class="iqc-hero__inner iqc-container">
            <div class="iqc-hero__content iqc-animate-fade-up is-visible">
                <h1 class="iqc-hero__title">APELACIONES</h1>
            </div>
        </div>
    </section>

    <?php /*contenido de Apelaciones*/ ?>
    <section class="iqc-apelaciones-content">
        <div class="iqc-container">
            
            <div class="iqc-apelaciones-header iqc-animate-fade-up">
                <h2 class="iqc-apelaciones-title">TRATAMIENTOS DE LAS APELACIONES</h2>
            </div>

            <?php /*línea de Tiempo (Timeline)*/ ?>
            <div class="iqc-timeline">
                
                <?php /*paso 1*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">1</div>
                    <div class="iqc-timeline-content">
                        <p>El cliente presenta la apelación por escrito en el formato apelaciones y /o quejas DDCFMR-004 o a través del formulario en la página web de la empresa certificadora IQC COLOMBIA, dentro de los cinco (5) días hábiles a la decisión. Las apelaciones recibidas son registradas por el Coordinador de Calidad en el formato control y seguimiento de apelaciones y quejas DDC-FMR-005 con el fin de tener un control.</p>
                    </div>
                </div>

                <?php /*paso 2*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">2</div>
                    <div class="iqc-timeline-content">
                        <p>Posteriormente informa y remite al Comité de Apelaciones, si es de tipo técnico comunicará al Comité Certificador y en caso de ser apelación por pérdida de la imparcialidad al Comité para la Preservación de la Imparcialidad del equipo auditor de IQC COLOMBIA.</p>
                    </div>
                </div>

                <?php /*paso 3*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">3</div>
                    <div class="iqc-timeline-content">
                        <p>El Comité de Apelaciones da inicio a la respectiva investigación para dar tratamiento a la apelación, ésta nunca será responsabilidad del Comité de Certificación o de los auditores que participaron en el proceso de la organización apelante por cuestiones de imparcialidad.</p>
                    </div>
                </div>

                <?php /*paso 4*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">4</div>
                    <div class="iqc-timeline-content">
                        <p>Posteriormente el Coordinador de Calidad analiza el concepto de la apelación y se remite a los informes y registros pertinentes que tienen relación con el caso, realiza las consultas al cliente y comités que sean requeridos para la investigación.</p>
                    </div>
                </div>

                <?php /*paso 5*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">5</div>
                    <div class="iqc-timeline-content">
                        <p>El/los responsables revisan casos de apelaciones similares, los resultados y las acciones tomadas para resolverlas, y recolecta toda esta información para la toma de la decisión del caso y definición de las correcciones y acciones correctivas a implementar.</p>
                    </div>
                </div>

                <?php /*paso 6*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">6</div>
                    <div class="iqc-timeline-content">
                        <p>El Comité de Apelaciones envía al apelante los avances del estudio de la apelación, elabora la respuesta en donde le notifican que ha finalizado el proceso para el tratamiento de la apelación, los resultados y las decisiones tomadas, y se conserva el registro del informe en la base de datos de IQC COLOMBIA.</p>
                    </div>
                </div>

                <?php /*paso 7*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">7</div>
                    <div class="iqc-timeline-content">
                        <p>Si el apelante no está de acuerdo con la decisión y las acciones notificadas frente a la apelación, cuenta con la opción de la segunda instancia, para lo cual debe manifestar su desacuerdo a través de comunicación dentro de los cinco (5) días hábiles a la decisión.</p>
                    </div>
                </div>

                <?php /*paso 8*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">8</div>
                    <div class="iqc-timeline-content">
                        <p>El Coordinador de Calidad informa y remite el recurso de segunda instancia donde se genera un nuevo comité con las mismas competencias para que realice de nuevo el análisis de la apelación, para lo cual podrá tomarse 10 días hábiles para tomar la decisión.</p>
                    </div>
                </div>

                <?php /*paso 9*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">9</div>
                    <div class="iqc-timeline-content">
                        <p>El comité correspondiente revisa la información relacionada con el tratamiento a la apelación dado en primera instancia y resuelve si respalda la decisión y el tratamiento otorgado en primera instancia, o en caso contrario determina las acciones a implementar como tratamiento, utilizando para ello el formato análisis y soluciones de apelaciones y quejas.</p>
                    </div>
                </div>

                <?php /*paso 10*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">10</div>
                    <div class="iqc-timeline-content">
                        <p>Se solicita investigación al interior de la organización certificada. Elabora la respuesta al apelante en donde le notifican que ha finalizado el proceso para el tratamiento de la apelación, los resultados y las decisiones tomadas, y se conserva el registro del informe en la base de datos de IQC COLOMBIA la queja y el planteamiento de correcciones y acciones correctivas que deben enviarse a IQC COLOMBIA, en un plazo máximo de 10 días hábiles, para así dar respuesta al reclamante.</p>
                    </div>
                </div>

                <?php /*paso 11*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">11</div>
                    <div class="iqc-timeline-content">
                        <p>El Coordinador de Calidad se encarga de verificar la implementación de las acciones planteadas en los tiempos establecidos y registra el seguimiento en el formato análisis y soluciones de apelaciones y quejas.</p>
                    </div>
                </div>

            </div>

            <?php /*pie de pagina de la sección*/ ?>
            <div class="iqc-apelaciones-footer iqc-animate-fade-up">
                <h3 class="iqc-apelaciones-notice">
                    IQC debe notificar formalmente al<br>
                    apelante cuando ha finalizado el proceso.
                </h3>
                
                <div class="iqc-apelaciones-contact">
                    <span class="iqc-apelaciones-contact-label">CORREO:</span>
                    <a href="mailto:comercial@iqc-latam.com" class="iqc-apelaciones-contact-link">comercial@iqc-latam.com</a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
