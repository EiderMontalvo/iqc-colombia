<?php
/*Template Name: Single Certificación * * Plantilla individual para mostrar la Informacionrmularioación detallada de una certificación. * Utiliza un diccionario de datos interno basado en el slug del post para * no depender de Custom Fields complejos. * * @package IQC_Theme*/

get_header();

/*obtener el slug actual para cargar la data específica*/

$current_slug = $post->post_name;

/*formularioat the Titulo globally as ISO Number:Year based on slug*/

$title_parts = explode('-', $current_slug);
$formatted_title = '';
if (count($title_parts) >= 3 && $title_parts[0] === 'iso') {
    $formatted_title = 'ISO ' . $title_parts[1] . ':' . $title_parts[2];
} else {
    $formatted_title = get_the_title();
}

/*diccionario de Datos para las Certificaciones*/

$cert_data = array(
    'iso-9001-2015' => array(
        'subtitle' => 'SISTEMA DE GESTIÓN DE CALIDAD',
        'intro' => 'Ayuda a las organizaciones a establecer procesos eficaces para garantizar la calidad de sus productos o servicios, satisfacer las expectativas del cliente, eliminar actividades innecesarias y recopilar los datos para decisiones informadas.',
        'why' => array(
            array('title' => 'OPORTUNIDAD DE NEGOCIO'),
            array('title' => 'GENERAN CLIENTES NUEVOS'),
            array('title' => 'AUMENTA PRODUCTIVIDAD, EFICIENCIA Y REDUCE COSTOS'),
            array('title' => 'EXPANDIRSE A NUEVOS MERCADOS'),
            array('title' => 'REQUISITOS LEGALES Y REGLAMENTOS')
        ),
        'image' => get_theme_file_uri('assets/img/isos/iso9001-2015.webp'),
        'reqs_image' => get_theme_file_uri('assets/img/global/iqc-logo-color.webp'),
        'reqs' => array(
            'Implementación de un Sistema de Gestión de la Calidad (Norma ISO 9001 en su versión vigente).',
            'Haber realizado una auditoría interna como mínimo.',
            'Haber realizado una revisión por la dirección como mínimo.',
            'La organización debe contar con las licencias/permisos y cumplir con la legislación vigente.',
            'La Alta Dirección debe mostrar compromiso participando y contribuyendo en todo el proceso.',
            'Los trabajadores deben conocer sus funciones y responsabilidades respecto al Sistema de Gestión, además de contar con la información pertinente.',
            'La organización debe analizar los riesgos y oportunidades asociados a su actividad.',
            'La organización debe conservar una serie de información documentada para asegurar el buen desempeño del sistema.'
        ),
        'benefits_icon' => get_theme_file_uri('assets/img/global/iqc-beneficios.webp'),
        'benefits' => array(
            'Reducir las pérdidas económicas asociadas a la no aplicación de la calidad.',
            'Mejorar la prestación del servicio y, de manera asociada, aumentar la satisfacción del cliente.',
            'Proporcionar un valor añadido a la empresa, diferenciándola respecto a la competencia.',
            'Ayudar a mejorar la imagen de la empresa y contribuir a ampliar la cartera de clientes potenciales.',
            'Posibilidad de acceder a mercados internacionales con requisitos y necesidades más exigentes.'
        )
    ),
    'iso-14001-2015' => array(
        'subtitle' => 'SISTEMA DE GESTIÓN AMBIENTAL',
        'intro' => 'Muestra el compromiso de una organización con la protección del medio ambiente y la gestión responsable de sus impactos. Identifica y cumple requisitos legales, mejora la eficiencia energética, fortalece la reputación y facilita el acceso a mercados que valoran prácticas sostenibles.',
        'why' => array(
            array('title' => 'COMPROMISO MEDIOAMBIENTAL'),
            array('title' => 'MEJORA LA REPUTACIÓN EMPRESARIAL'),
            array('title' => 'MEJORA LA EFICIENCIA DE LOS RECURSOS'),
            array('title' => 'REDUCE RESIDUOS Y COSTES OPERATIVOS'),
            array('title' => 'CUMPLIMIENTO DE LA NORMATIVA AMBIENTAL')
        ),
        'image' => get_theme_file_uri('assets/img/isos/iso14001-2015.webp'), /*fallback Imagen if needed*/

        'reqs_image' => '', /*removed in UI anyway*/

        'reqs' => array(
            'Implementación de un Sistema de gestión ambiental (Norma ISO 14001 en su versión vigente).',
            'Haber realizado una auditoría interna como mínimo.',
            'Haber realizado una revisión por la dirección como mínimo.',
            'Tener una política ambiental que sea coherente con el ámbito del Sistema de Gestión y su alcance no puede ser más amplio que el propio sistema.',
            'Encontrar que actividades, productos y servicios que provoquen un impacto ambiental negativo.'
        ),
        'benefits_icon' => get_theme_file_uri('assets/img/global/iqc-beneficios.webp'),
        'benefits' => array(
            'Reducir las pérdidas económicas asociadas a la no aplicación de la calidad.',
            'Mejorar la prestación del servicio y, de manera asociada, aumentar la satisfacción del cliente.',
            'Proporcionar un valor añadido a la empresa, diferenciándola respecto a la competencia.',
            'Ayudar a mejorar la imagen de la empresa y contribuir a ampliar la cartera de clientes potenciales.',
            'Posibilidad de acceder a mercados internacionales con requisitos y necesidades más exigentes.'
        )
    ),
    'iso-22000-2018' => array(
        'subtitle' => 'SISTEMA DE GESTIÓN DE LA INOCUIDAD DE LOS ALIMENTOS',
        'intro' => 'Es una norma internacional que establece los requisitos para un Sistema de Gestión de la Inocuidad de los Alimentos. Su propósito es garantizar que los alimentos sean seguros para el consumo, desde la producción hasta la distribución final.',
        'why' => array(
            array('title' => 'FACILITA EL CUMPLIMIENTO DE LA LEGISLACIÓN APLICABLE'),
            array('title' => 'CONTROL MÁS EFICIENTE Y DINÁMICO DE LOS RIESGOS ALIMENTARIOS'),
            array('title' => 'INTEGRA LOS PRINCIPIOS DEL APPCC EN LA ORGANIZACIÓN'),
            array('title' => 'GESTIÓN SISTEMÁTICA DE LOS REQUISITOS SANITARIOS'),
            array('title' => 'PROPORCIONA CONFIANZA A LOS CONSUMIDORES')
        ),
        'image' => get_theme_file_uri('assets/img/isos/iso22000-2018.webp'),
        'reqs_image' => '',
        'reqs' => array(
            'Implementación de un Sistema de Gestión de la inocuidad de los alimentos (Norma IS0 22000 en su versión vigente).',
            'Haber realizado una auditoría interna como mínimo.',
            'Haber realizado una revisión por la dirección como mínimo.',
            'La organización deberá contar con las licencias necesarias y cumplir con la legislación vigente.',
            'Encontrar que actividades, productos y servicios que provoquen un impacto ambiental negativo.',
            'Los trabajadores deben conocer sus funciones y responsabilidades respecto al Sistema de Gestión, además de contar con la formación pertinente.',
            'La organización deberá analizar los riesgos y oportunidades asociados a su actividad.',
            'La organización deberá conservar una serie de información documentada para asegurar el buen desempeño del Sistema.'
        ),
        'benefits_icon' => get_theme_file_uri('assets/img/global/iqc-beneficios.webp'),
        'benefits' => array(
            'Demuestra que la organización gestiona eficazmente los riesgos que afectan la seguridad de los alimentos',
            'Facilita la entrada a cadenas de suministro globales que exigen certificaciones reconocidas',
            'Alinea los procesos con requisitos legales y reglamentarios nacionales e internacionales',
            'Establece un sistema estructurado para revisar, auditar y optimizar los procesos relacionados con la inocuidad',
            'Refuerza la imagen institucional ante clientes, autoridades y partes interesadas'
        )
    ),
    'iso-45001-2018' => array(
        'subtitle' => 'SISTEMA DE GESTIÓN DE LA SEGURIDAD Y SALUD',
        'intro' => 'Es una norma internacional que ayuda a gestionar la seguridad y salud en el trabajo, reduciendo riesgos, previniendo accidentes y mejorando el bienestar laboral.',
        'why' => array(
            array('title' => 'ARMONIZACIÓN DE SISTEMAS DE SALUD Y SEGURIDAD'),
            array('title' => 'MEJORES PRÁCTICAS PREVENTIVAS'),
            array('title' => 'REDUCCIÓN DE ACCIDENTES'),
            array('title' => 'MAYOR OPERATIVIDAD'),
            array('title' => 'GESTIÓN EFICAZ')
        ),
        'image' => get_theme_file_uri('assets/img/isos/iso45001-2018.webp'),
        'reqs_image' => '',
        'reqs' => array(
            'Implementación de un Sistema de Gestión de la seguridad y salud en el trabajo (Norma ISO 45001 en su versión vigente).',
            'Haber realizado una auditoría interna como mínimo.',
            'Haber realizado una revisión por la dirección como mínimo.',
            'La Alta Dirección debe mostrar compromiso participando y contribuyendo en todo el proceso.',
            'Los trabajadores deben conocer sus funciones y responsabilidades respecto al Sistema de Gestión, además de contar con la formación pertinente.',
            'La organización deberá analizar los riesgos y oportunidades asociados a su actividad.',
            'La organización deberá conservar una serie de información documentada para asegurar el buen desempeño del Sistema.'
        ),
        'benefits_icon' => get_theme_file_uri('assets/img/global/iqc-beneficios.webp'),
        'benefits' => array(
            'Reducir significativamente la tasa de accidentes y enfermedades laborales.',
            'Mejorar el cumplimiento de la legislación y normativa en materia de seguridad y salud en el trabajo.',
            'Reducir los costos asociados a primas de seguros y paros operativos por incidentes.',
            'Fomentar una cultura de prevención, aumentando la motivación y el compromiso de los empleados.',
            'Mejorar la imagen institucional al demostrar un compromiso real con la seguridad ante clientes y autoridades.'
        )
    ),
    'iso-27001-2022' => array(
        'subtitle' => 'SISTEMA DE GESTIÓN DE SEGURIDAD DE LA INFORMACIÓN',
        'intro' => 'Protege la información contra amenazas como el acceso no autorizado, la pérdida o el robo, además de garantizar el cumplimiento legal de la empresa y fortalecer la confianza del cliente. Esto requiere establecer procesos claros y definidos para gestionar la seguridad.',
        'why' => array(
            array('title' => 'ESTABLECER POLÍTICAS DE SEGURIDAD DE LA INFORMACIÓN'),
            array('title' => 'ALINEAR LOS OBJETIVOS DE SEGURIDAD CON EL NEGOCIO'),
            array('title' => 'PROTEGER LOS DATOS CONFIDENCIALES DE LA EMPRESA'),
            array('title' => 'MINIMIZAR EL RIESGO DE CIBERATAQUES'),
            array('title' => 'AUMENTAR LA CONFIANZA DE CLIENTES Y SOCIOS')
        ),
        'image' => get_theme_file_uri('assets/img/isos/iso27001-2022.webp'),
        'reqs_image' => '',
        'reqs' => array(
            'Implementación de un Sistema de Seguridad de la Información (Norma ISO 27001 en su versión vigente).',
            'Haber realizado una auditoría interna como mínimo.',
            'Haber realizado una revisión por la dirección como mínimo.',
            'Tener una política de seguridad de la información que sea coherente con el ámbito del Sistema de Gestión y su alcance no sea más amplio que el propio sistema.',
            'Establecer medidas para los controles solicitados en el Anexo A de la norma internacional 27001 en su versión vigente.'
        ),
        'benefits_icon' => get_theme_file_uri('assets/img/global/iqc-beneficios.webp'),
        'benefits' => array(
            'Implementar y monitorear controles que aseguren el buen manejo de la información de la empresa y las plataformas (físicas y digitales) en las que se manejan.',
            'Brindar confianza a las partes interesadas de la empresa respecto al tratamiento que se da a la información brindada.',
            'Realizar actividades reguladas por la SUNAT bajo la obligatoriedad del uso de la norma (Facturación electrónica).',
            'Proteger la confidencialidad, integridad y disponibilidad de los activos de información críticos.',
            'Reducir los riesgos operativos asociados a ataques cibernéticos y brechas de seguridad de datos.'
        )
    ),
    'iso-37001-2016' => array(
        'subtitle' => 'SISTEMA DE GESTIÓN ANTISOBORNO',
        'intro' => 'La norma ayuda a las organizaciones a establecer políticas y procedimientos para prevenir, detectar y abordar el soborno, cumpliendo con leyes y estándares éticos exigidos por stakeholders. La organización opera de manera ética y transparente.',
        'why' => array(
            array('title' => 'ESTABLECER INTEGRIDAD'),
            array('title' => 'MEJORAR LA REPUTACIÓN'),
            array('title' => 'CUMPLIR CON LEYES'),
            array('title' => 'FORTALECER PROCESOS INTERNOS'),
            array('title' => 'DEMOSTRAR COMPROMISO')
        ),
        'image' => get_theme_file_uri('assets/img/isos/iso37001-2016.webp'),
        'reqs_image' => '',
        'reqs' => array(
            'Implementación de un Sistema de Gestión de la antisoborno (Norma ISO 37001 en su versión vigente).',
            'Haber realizado una auditoría interna como mínimo.',
            'Haber realizado una revisión por la dirección como mínimo.',
            'La organización deberá contar con las licencias necesarias y cumplir con la legislación vigente.',
            'La Alta Dirección debe mostrar compromiso participando y contribuyendo en todo el proceso.'
        ),
        'benefits_icon' => get_theme_file_uri('assets/img/global/iqc-beneficios.webp'),
        'benefits' => array(
            'Prevenir los delitos de soborno y minimizar el riesgo de corrupción.',
            'Recoger las mejores prácticas internacionales y aplicarlas en cualquier país.',
            'Generar mayor confianza en inversores, socios comerciales y autoridades gubernamentales.',
            'Evitar graves sanciones legales, multas y daños irreversibles a la reputación corporativa.',
            'Promover una cultura sólida de ética, integridad y transparencia en todos los niveles de la empresa.'
        )
    )
);

/*fallback por defecto*/

$data = array(
    'subtitle' => 'CERTIFICACIÓN',
    'intro' => get_the_content(),
    'why' => array(),
    'reqs_image' => '',
    'reqs' => array(),
    'benefits_icon' => '',
    'benefits' => array()
);

/*mapeo Flexible del slug*/

if ( strpos( $current_slug, 'iso-9001' ) !== false ) {
    $data = $cert_data['iso-9001-2015'];
} elseif ( strpos( $current_slug, 'iso-14001' ) !== false ) {
    $data = $cert_data['iso-14001-2015'];
} elseif ( strpos( $current_slug, 'iso-22000' ) !== false ) {
    $data = $cert_data['iso-22000-2018'];
} elseif ( strpos( $current_slug, 'iso-45001' ) !== false ) {
    $data = $cert_data['iso-45001-2018'];
} elseif ( strpos( $current_slug, 'iso-27001' ) !== false ) {
    $data = $cert_data['iso-27001-2022'];
} elseif ( strpos( $current_slug, 'iso-37001' ) !== false ) {
    $data = $cert_data['iso-37001-2016'];
} elseif ( isset( $cert_data[$current_slug] ) ) {
    $data = $cert_data[$current_slug];
}
?>

<main id="primary" class="site-main">

    <?php /*hero Seccion*/ ?>
    <?php
    $hero_bg = '';
    if ( has_post_thumbnail() ) {
        $hero_bg = esc_url( get_the_post_thumbnail_url( null, 'full' ) );
    } elseif ( ! empty( $data['image'] ) ) {
        $hero_bg = esc_url( $data['image'] );
    } else {
        $hero_bg = esc_url( get_theme_file_uri( 'assets/img/global/hero-default.jpg' ) );
    }
    ?>
    <section class="iqc-hero" style="background-image: url('<?php echo $hero_bg; ?>');">
        <div class="iqc-hero__overlay" style="background: linear-gradient(180deg, rgba(138, 43, 226, 0.5) 0%, rgba(0, 25, 210, 0.7) 100%);" aria-hidden="true"></div>
        <div class="iqc-container iqc-hero__inner">
            <div class="iqc-hero__content">
                <h1 class="iqc-hero__title"><?php echo esc_html($formatted_title); ?></h1>
                <?php if ( ! empty( $data['subtitle'] ) ) : ?>
                    <p class="iqc-hero__subtitle"><?php echo esc_html( $data['subtitle'] ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php /*iNTRO Seccion (¿Qué es?)*/ ?>
    <?php if ( ! empty( $data['intro'] ) ) : ?>
        <section class="iqc-cert-intro">
            <div class="iqc-container">
                <h2 class="iqc-cert-intro__title"><?php printf( esc_html__( '¿Qué es la %s?', 'iqc' ), $formatted_title ); ?></h2>
                <div class="iqc-cert-intro__content">
                    <p><?php echo wp_kses_post( $data['intro'] ); ?></p>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php /*wHY GET CERTIFIED Seccion*/ ?>
    <?php if ( ! empty( $data['why'] ) ) : ?>
        <section class="iqc-cert-why">
            <div class="iqc-container">
                <h2 class="iqc-cert-why__title"><?php esc_html_e( '¿Por qué certificarse?', 'iqc' ); ?></h2>
                <div class="iqc-cert-why__grid">
                    <?php foreach ( $data['why'] as $reason ) : ?>
                        <div class="iqc-cert-why__card">
                            <div class="iqc-cert-why__card-header">
                                <h3 class="iqc-cert-why__card-title"><?php echo esc_html( $reason['title'] ); ?></h3>
                            </div>
                            <?php if ( ! empty( $reason['desc'] ) ) : ?>
                                <div class="iqc-cert-why__card-body">
                                    <p class="iqc-cert-why__card-desc"><?php echo esc_html( $reason['desc'] ); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php /*rEQUISITOS Seccion*/ ?>
    <?php if ( ! empty( $data['reqs'] ) ) : ?>
        <section class="iqc-cert-reqs">
            <div class="iqc-container">
                <div class="iqc-cert-reqs__grid">
                    <div class="iqc-cert-reqs__content-col" style="width: 100%; grid-column: 1 / -1;">
                        <h2 class="iqc-cert-reqs__title" style="text-align: center; margin-bottom: var(--space-10);"><?php printf( esc_html__( '%s exige una serie de requisitos imprescindibles', 'iqc' ), $formatted_title ); ?></h2>
                        <ul class="iqc-cert-req-grid">
                            <?php foreach ( $data['reqs'] as $req ) : ?>
                                <li class="iqc-cert-req-card">
                                    <svg class="iqc-cert-req-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                    <span class="iqc-cert-req-text"><?php echo esc_html( $req ); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php /*bENEFITS Seccion*/ ?>
    <?php if ( ! empty( $data['benefits'] ) ) : ?>
        <section class="iqc-cert-benefits">
            <div class="iqc-container">
                <h2 class="iqc-cert-benefits__title"><?php esc_html_e( '¿Qué obtengo con una certificación?', 'iqc' ); ?></h2>
                <div class="iqc-cert-benefits__grid">
                    <div class="iqc-cert-benefits__icon-wrapper">
                        <?php if ( ! empty( $data['benefits_icon'] ) ) : ?>
                            <img src="<?php echo esc_url( $data['benefits_icon'] ); ?>" alt="Beneficios" class="iqc-cert-benefits__icon">
                        <?php else: ?>
                            <?php /*clipboard SVG Fallback*/ ?>
                            <svg class="iqc-cert-benefits__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect><polyline points="9 14 11 16 15 12"></polyline></svg>
                        <?php endif; ?>
                    </div>
                    <div class="iqc-cert-benefits__content-wrapper">
                        <ul class="iqc-cert-benefits__list">
                            <?php foreach ( $data['benefits'] as $benefit ) : ?>
                                <li class="iqc-cert-benefits__list-item"><?php echo esc_html( $benefit ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php /*formularioularioulario de Cotización Exclusivo*/ ?>
    <?php get_template_part( 'template-parts/certificacion/cotizacion-form', null, array( 'title' => $formatted_title ) ); ?>

</main>

<?php get_footer(); ?>
