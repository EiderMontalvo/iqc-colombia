# Documentacion del Proyecto IQC

## Descripcion General
Este proyecto es una plataforma web desarrollada sobre WordPress, disenada con una arquitectura "code-first" para garantizar un alto rendimiento, seguridad y mantenibilidad. El sistema actua como una plantilla base escalable y adaptable para las diferentes sedes de IQC a nivel internacional.

La arquitectura se divide principalmente en dos componentes clave:
1. Tema personalizado (IQC Theme)
2. Plugin de funcionalidades nucleo (IQC Plugin Core)

## Arquitectura y Estructura del Proyecto

La arquitectura se ha disenado separando la capa de presentacion (Tema) de la logica de negocio y datos (Plugin). Esto garantiza que si en el futuro la interfaz grafica cambia, la informacion del sistema permanezca intacta.

### 1. Estructura del Tema (IQC Theme)
El tema esta construido a medida, evitando el uso de page builders. A continuacion se presenta el arbol de directorios del tema y la explicacion de para que sirve cada componente.

```text
iqc-theme/
├── 404.php                     #Plantilla para paginas no encontradas
├── archive.php                 #Plantilla para listados de posts o categorias
├── assets/                     #Contiene todos los recursos estaticos compilados o procesados
│   ├── css/                    #Hojas de estilo organizadas bajo metodologia modular (base, components, pages, main)
│   ├── img/                    #Recursos graficos y fotograficos locales
│   └── js/                     #Scripts de interaccion del frontend (formularios, animaciones, etc)
├── dump.php                    #Archivo de utilidades de desarrollo (debug)
├── footer.php                  #Renderiza la parte inferior de la pagina web (footer global)
├── front-page.php              #Plantilla exclusiva para la pagina de inicio
├── functions.php               #Archivo principal de configuracion e inclusion del tema
├── header.php                  #Renderiza la parte superior de la pagina web (head y menu global)
├── inc/                        #Logica de inicializacion y seguridad del tema (no visual)
│   ├── enqueue.php             #Registra y encola los estilos y scripts necesarios segun la pagina activa
│   ├── helpers.php             #Funciones de utilidad general usadas a lo largo del tema
│   ├── menus.php               #Registra las zonas de menu de navegacion
│   ├── security.php            #Refuerza la seguridad limpiando cabeceras innecesarias y restringiendo funciones de WP
│   └── setup.php               #Configura caracteristicas soportadas por el tema (imagenes destacadas, traducciones, etc)
├── index.php                   #Plantilla de fallback predeterminada de WordPress
├── page.php                    #Plantilla base para renderizar paginas estaticas
├── single-certificacion.php    #Plantilla especifica para mostrar un solo elemento del Custom Post Type de certificaciones
├── single.php                  #Plantilla base para renderizar un articulo o post individual
├── style.css                   #Archivo obligatorio de WordPress que define los metadatos del tema
├── template-parts/             #Componentes modulares de interfaz de usuario (UI) reutilizados en distintas vistas
│   ├── certificacion/          #Bloques de UI especificos para certificaciones
│   ├── contacto/               #Bloques de UI para la seccion y pagina de contacto
│   ├── footer/                 #Componentes internos del pie de pagina
│   ├── header/                 #Componentes internos de la cabecera
│   ├── hero/                   #Banner principal estandar
│   ├── home/                   #Componentes exclusivos de la pagina de inicio
│   ├── nosotros/               #Componentes exclusivos de la pagina "Acerca de nosotros"
│   └── proceso-certificacion/  #Bloques visuales para explicar los pasos de certificacion
├── templates/                  #Plantillas de paginas asignables desde el panel (Custom Page Templates)
│   ├── page-actualizaciones.php
│   ├── page-apelacion.php
│   ├── page-contacto.php
│   ├── page-homologacion.php
│   ├── page-libro-reclamaciones.php
│   ├── page-nosotros.php
│   ├── page-proceso-de-certificacion.php
│   └── page-quejas.php
└── theme.json                  # Configuracion moderna de WordPress para estilos globales y ajustes del editor
```

### 2. Estructura del Plugin (IQC Plugin Core)
Este plugin encapsula toda la logica de negocio y estructura de datos.

```text
iqc-plugin/
├── inc/                        #Modulos de funcionalidad y logica de negocio
│   ├── cpt-certificacion.php   #Registra el CPT "Certificaciones" y taxonomia "Sectores" de forma independiente
│   ├── forms.php               #Gestiona el procesamiento AJAX y envio seguro de los formularios de la web
│   └── options.php             #Construye un panel en el backend administrativo para configuraciones transversales
└── iqc-plugin.php              #Punto de entrada principal que inicializa el plugin y llama a los archivos de inc/
```

## Manejo Seguro de Formularios
El plugin implementa un sistema propio robusto y seguro para el procesamiento de peticiones AJAX de formularios en el frontend, manejando multiples casos de uso:
- Formulario de Contacto General
- Formulario de Homologacion (incluye campos para giro, cantidad de personal, servicios, etc.)
- Formulario de Libro de Reclamaciones (incluye detalles de representacion legal, tipos de incidencia, detalles de auditoria, etc.)

Mecanismos de Seguridad Implementados:
- Proteccion CSRF: Validacion mediante Nonces nativos de WordPress.
- Prevencion Antibot (Honeypot): Implementacion de campos trampa para detectar y descartar envios automatizados sin alertar al bot.
- Rate Limiting: Restriccion de frecuencia por direccion IP (controlado a traves de Transients de WordPress, permitiendo maximo 3 envios cada 10 minutos) para prevenir ataques de spam.
- Sanitizacion Estricta: Filtrado exhaustivo de todos los datos de entrada segun su tipo (textos, enteros, emails) antes de cualquier procesamiento o evaluacion logica.
- Arquitectura Segura: El sistema procesa y envia notificaciones sin requerir consultas directas a la base de datos a traves de `$wpdb`, mitigando totalmente los riesgos de Inyeccion SQL.

