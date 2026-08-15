<?php
/*Template Name: Página Quejas * * Plantilla para la página de Quejas, mostrando el proceso a través de una línea de tiempo (timeline).*/

get_header();
?>

<main id="primary" class="site-main">

    <?php /*hero*/ ?>
    <section class="iqc-hero iqc-hero--quejas">
        <div class="iqc-hero__overlay"></div>
        <div class="iqc-hero__inner iqc-container">
            <div class="iqc-hero__content iqc-animate-fade-up is-visible">
                <h1 class="iqc-hero__title">QUEJAS</h1>
            </div>
        </div>
    </section>

    <?php /*contenido de Quejas*/ ?>
    <section class="iqc-quejas-content">
        <div class="iqc-container">
            
            <div class="iqc-quejas-header iqc-animate-fade-up">
                <h2 class="iqc-quejas-title">TRATAMIENTOS DE QUEJAS</h2>
            </div>

            <?php /*línea de Tiempo (Timeline reutilizado)*/ ?>
            <div class="iqc-timeline">
                
                <?php /*paso 1*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">1</div>
                    <div class="iqc-timeline-content">
                        <p>La persona u organización presenta la queja por escrito o por la página web a través del Formato Apelaciones y /o Quejas DDC-FMR-004 o directamente en la oficina de IQC COLOMBIA donde se le facilitará el formato impreso, se indica fecha de recibido.</p>
                    </div>
                </div>

                <?php /*paso 2*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">2</div>
                    <div class="iqc-timeline-content">
                        <p>Se tiene establecido que el tiempo de respuesta de las quejas es de 15 días calendario a partir de la recepción de esta.</p>
                    </div>
                </div>

                <?php /*paso 3*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">3</div>
                    <div class="iqc-timeline-content">
                        <p>Quien recibe la queja informa y remite la misma inmediatamente al Coordinador de Calidad de IQC COLOMBIA quien registra en el formato control y seguimiento de apelaciones y quejas DDC-FMR-005, para el seguimiento y cierre de las acciones correctivas/de mejora determinadas.</p>
                    </div>
                </div>

                <?php /*paso 4*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">4</div>
                    <div class="iqc-timeline-content">
                        <p>El Coordinador de Calidad verifica si la queja tiene relación con las actividades de certificación de las cuales es responsable IQC COLOMBIA, o si es referente a un cliente certificado.</p>
                    </div>
                </div>

                <?php /*paso 5*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">5</div>
                    <div class="iqc-timeline-content">
                        <p>En los casos en que la queja se relaciona con las actividades de certificación de IQC COLOMBIA, el coordinador se comunica con el cliente para validar que la queja proviene de la misma.</p>
                    </div>
                </div>

                <?php /*paso 6*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">6</div>
                    <div class="iqc-timeline-content">
                        <p>El Coordinador de Calidad determina el responsable de iniciar la investigación respectiva para dar tratamiento a la queja, ésta nunca será responsabilidad del personal involucrado con el objeto de la queja. Quien sea designado para iniciar la investigación, analiza el concepto de la queja y se remite a los informes y registros pertinentes que tienen relación con el caso, realiza las consultas al cliente y a los comités que sean requeridos para la investigación y validación de la queja.</p>
                    </div>
                </div>

                <?php /*paso 7*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">7</div>
                    <div class="iqc-timeline-content">
                        <p>El responsable presenta y avala con el coordinador de calidad de IQC COLOMBIA toda la información recolectada, plantea la posible decisión del caso y define las correcciones y acciones correctivas a implementar. El responsable se encarga de enviar al reclamante los avances del estudio de la queja. Quienes estudian y toman las decisiones con respecto a las quejas, elaboran la respuesta al reclamante en donde le notifican que ha finalizado el proceso para el tratamiento de la queja, los resultados y las decisiones tomadas, y se conserva el registro del informe en la base de datos de IQC COLOMBIA.</p>
                    </div>
                </div>

                <?php /*paso 8*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">8</div>
                    <div class="iqc-timeline-content">
                        <p>El responsable se encarga de verificar la implementación de las acciones planteadas en los tiempos establecidos.</p>
                    </div>
                </div>

                <?php /*paso 9*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">9</div>
                    <div class="iqc-timeline-content">
                        <p>Cuando la queja es referente a un cliente certificado, se remite al cliente certificado en un plazo máximo de cinco (5) días hábiles.</p>
                    </div>
                </div>

                <?php /*paso 10*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">10</div>
                    <div class="iqc-timeline-content">
                        <p>Se solicita investigación al interior de la organización certificada de la queja y el planteamiento de correcciones y acciones correctivas que deben enviarse a IQC COLOMBIA, en un plazo máximo de 10 días hábiles, para así dar respuesta al reclamante.</p>
                    </div>
                </div>

                <?php /*paso 11*/ ?>
                <div class="iqc-timeline-item iqc-animate-fade-up">
                    <div class="iqc-timeline-marker">11</div>
                    <div class="iqc-timeline-content">
                        <p>Estas quejas son insumo para las auditorías de seguimiento del cliente, sin embargo, si se considera que está en riesgo la eficacia del Sistema de Gestión, se realiza una investigación por parte de IQC COLOMBIA, la cual puede incluir una auditoría especial con corto tiempo de notificación según lo establecido en el procedimiento de certificación, esto lo define el Jefe de Operaciones de la empresa IQC COLOMBIA.</p>
                    </div>
                </div>

            </div>

            <?php /*pie de pagina de la sección*/ ?>
            <div class="iqc-quejas-footer iqc-animate-fade-up">
                <h3 class="iqc-quejas-notice">
                    Las quejas son tratadas con confidencialidad, y se determina junto con el cliente y el reclamante si se hace público el tema de la queja y su resolución.
                </h3>
                
                <div class="iqc-quejas-contact">
                    <span class="iqc-quejas-contact-label">CORREO:</span>
                    <a href="mailto:comercial@iqc-latam.com" class="iqc-quejas-contact-link">comercial@iqc-latam.com</a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
