<?php
/*
 * Textos en español.
 * Usa HTML confiable solo donde la plantilla imprime contenido intencionalmente.
 */
$LANG = [
  // --- Misc ---
  "years" => "años",
  // --- Rutas ---
  "route.root" => $ROUTE_ROOT ?? "/",
  "route.home" => $ROUTE_HOME ?? "inicio",
  "route.v1" => "/{$ROUTE_V1}",
  "route.resume" => "/{$ROUTE_RESUME}",
  "route.mnm" => "/{$ROUTE_MNM}",
  "route.cookies" => "/{$ROUTE_MNM}/{$ROUTE_COOKIES}",
  // --- Estructura de página ---
  "title.default" => "[Mateus] byUwUr = Creo cosas útiles",
  "loader.loading" => "<b>Cargando vista estándar...</b><br>¿Sigue cargando? <a href='/{$ROUTE_V1}' style='color:#0ae;'>Ir a la vista básica</a>",
  // --- Perfil y hero ---
  "profile.name_top" => "[Mateus] <span class='text-primary'>byUwUr</span>",
  "profile.full_name" => "Andrés Trujillo Mateus",
  "hero.im" => "Soy",
  "hero.and_i" => "Creo cosas útiles",
  "hero.in" => "con ",
  "hero.hello_world" => "Hola, mundo",
  // --- Navegación ---
  "nav.about" => "Hola, mundo",
  "nav.resume" => "Résumé",
  "nav.contact" => "Contáctame",
  "nav.skills" => "Habilidades",
  "nav.portfolio" => "Portafolio",
  "nav.experience" => "Experiencia",
  "nav.education" => "Formación",
  // --- Sidebar ---
  "sidebar.toggle" => "Toggle sidebar menu",
  "sidebar.menu" => "menu",
  "sidebar.logo_alt" => "[Mateus] byUwUr logo",
  // --- Controles de idioma y tema ---
  "language.selector" => "Idiomas:",
  "theme.selector" => "Temas:",
  "theme.light" => "Claro",
  "theme.dark" => "Oscuro",
  // --- Vista, footer y acciones ---
  "view.modern" => "cargar HTML no tan básico",
  "view.modern.title" => "cargar HTML no tan básico (v2)",
  "footer.html" =>
    "&copy;" .
    date("Y") .
    " Andrés Trujillo [Mateus] byUwUr<br>
    <!-- <a href='/{$ROUTE_V1}'>cargar HTML básico</a> | -->
    <a href='/{$ROUTE_COOKIES}'>política de cookies</a>
    <br>Hecho con <i class='fas fa-heart'></i> por <a href='https://byuwur.co' target='_blank'>[Mateus] byUwUr</a>",
  "action.back" => "Volver",
  "action.ok" => "Entendido",
  "action.close" => "Cerrar",
  // --- Acerca de y redes ---
  "about.description" =>
    "Actualmente trabajo como Líder de equipo en <a href='https://vehikl.com' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/vehikl.png'/>Vehikl</a>.<br>
    Ingeniero de Sistemas bilingüe con experiencia desarrollando, desplegando y dando soporte a soluciones web y móviles desde 2018, complementada con experiencia en producción audiovisual desde 2014.<br>
    Lo simple ya es suficientemente complicado: construyo herramientas sólidas y confiables que facilitan la operación de flujos de trabajo complejos. Creo cosas útiles.<br>
    Experiencia en desarrollo full-stack, implementación para clientes, soporte en producción y entrega técnica, con trabajo práctico en React, React Native, PHP, MySQL y AWS.<br>
    Desarrollo software con propósito e impacto, respaldado junto a experiencia adicional en producción audiovisual y transmisiones en vivo.",
  "social.linkedin.url" => "https://linkedin.com/in/atrujillomateus",
  "social.github.url" => "https://github.com/byuwur",
  "social.youtube.url" => "https://youtube.com/byuwur",
  // --- Portafolio ---
  "portfolio.items" => [
    [
      "title" => "Stream.FGC",
      "ent" => "byUwUr",
      "desc" => "App para gestión de torneos de juegos de pelea.",
      "year" => "2026",
      "image" => "/img/work/fgc.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/stream.fgc",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-golang",
          "text" => "GO",
        ],
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
      ],
    ],
    [
      "title" => "Easy SPA PHP",
      "ent" => "byUwUr",
      "desc" => "Framework de Single Page Application (SPA) hecho a mano con PHP.",
      "year" => "2024",
      "image" => "/img/work/spa.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/spa.php",
        ],
        [
          "icon" => "fas fa-play-circle",
          "text" => "Demo",
          "link" => "https://byuwur.co/spa.php/",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-php",
          "text" => "PHP",
        ],
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
      ],
    ],
    [
      "title" => "STREAM.HTML",
      "ent" => "byUwUr",
      "desc" => "Recursos HTML para tus overlays de streaming.",
      "year" => "2024",
      "image" => "/img/work/stream.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-play-circle",
          "text" => "Control",
          "link" => "https://controller.byuwur.co",
        ],
        [
          "icon" => "fas fa-play-circle",
          "text" => "Popup",
          "link" => "https://byuwur.co/stream.html/popup/index.html",
        ],
        [
          "icon" => "fas fa-play-circle",
          "text" => "Scene",
          "link" => "https://byuwur.co/stream.html/main/index.html",
        ],
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/stream.html",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
      ],
    ],
    [
      "title" => "Easy MD viewer",
      "ent" => "byUwUr",
      "desc" => "Componente visor de MarkDown fácilmente integrable.",
      "year" => "2026",
      "image" => "/img/work/md.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/easy-md-viewer",
        ],
        [
          "icon" => "fas fa-play-circle",
          "text" => "Demo",
          "link" => "https://codepen.io/editor/byuwur/pen/01a0161a-7099-7a00-9603-665d04c6dea6",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
      ],
    ],
    [
      "title" => "Easy JSON viewer",
      "ent" => "byUwUr",
      "desc" => "Componente visor de JSON fácilmente integrable.",
      "year" => "2024",
      "image" => "/img/work/json.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/easy-json-viewer",
        ],
        [
          "icon" => "fas fa-play-circle",
          "text" => "Demo",
          "link" => "https://codepen.io/byuwur/pen/ExBeOPR",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
      ],
    ],
    [
      "title" => "Easy HTTP error page",
      "ent" => "byUwUr",
      "desc" => "Página de códigos de error HTTP para tu servidor Apache o nginx.",
      "year" => "2021",
      "image" => "/img/work/error.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/easy-server-http-error-page",
        ],
        [
          "icon" => "fas fa-play-circle",
          "text" => "Demo",
          "link" => "https://byuwur.co/error",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-php",
          "text" => "PHP",
        ],
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
      ],
    ],
    [
      "title" => "Easy Sidebar Bootstrap",
      "ent" => "byUwUr",
      "desc" => "Componente Sidebar fácilmente integrable.",
      "year" => "2024",
      "image" => "/img/work/sidebar.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/easy-sidebar-bootstrap",
        ],
        [
          "icon" => "fas fa-play-circle",
          "text" => "Demo",
          "link" => "https://codepen.io/byuwur/pen/VwJdWYL",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
      ],
    ],
    [
      "title" => "Easy Dropzone PHP",
      "ent" => "byUwUr",
      "desc" => "Implementa fácilmente Dropzone en tu proyecto PHP.",
      "year" => "2020",
      "image" => "/img/work/dz.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/easy-dropzone-php",
        ],
        [
          "icon" => "fas fa-play-circle",
          "text" => "Demo",
          "link" => "https://byuwur.co/_dropzone.php/index.php?id=1",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-php",
          "text" => "PHP",
        ],
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
      ],
    ],
    [
      "title" => "SDA Espinal - plataforma de calificaciones",
      "ent" => "Liceo Moderno Semillas de Alegría - Espinal",
      "desc" => "Plataforma web administradora de calificaciones.",
      "year" => "Desde 2019",
      "image" => "/img/work/sda.jpg",
      "class" => "web android",
      "link" => [
        [
          "icon" => "fas fa-play-circle",
          "text" => "Demo",
          "link" => "https://semillasdealegriaespinal.com",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-php",
          "text" => "PHP",
        ],
        [
          "icon" => "fas fa-database",
          "text" => "MySQL",
        ],
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
        [
          "icon" => "fab fa-aws",
          "text" => "AWS",
        ],
      ],
    ],
    [
      "title" => "LimonTech - detector de limones",
      "ent" => "Expo - Ganador del Bootcamp: Las TIC para el agro",
      "desc" => "Clasifica la madurez de limones según su intensidad cromática usando visión artificial.",
      "year" => "2017",
      "image" => "/img/work/limontech.jpg",
      "class" => "python",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/limontech.py",
        ],
        [
          "icon" => "fas fa-play-circle",
          "text" => "Demo",
          "link" => "https://youtu.be/RNQTSueIa-8",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-python",
          "text" => "Python",
        ],
        [
          "icon" => "fas fa-eye",
          "text" => "OpenCV",
        ],
        [
          "icon" => "fas fa-robot",
          "text" => "Arduino",
        ],
      ],
    ],
    [
      "title" => "Online Congress - software para congresos",
      "ent" => "ITFIP - Mención meritoria",
      "desc" => "Plataforma administradora de congresos institucionales y de investigación.",
      "year" => "2019",
      "image" => "/img/work/oc.jpg",
      "class" => "web android",
      "link" => [
        [
          "icon" => "fab fa-github",
          "text" => "Web",
          "link" => "https://github.com/byuwur/onlinecongress.com.co",
        ],
        [
          "icon" => "fab fa-github",
          "text" => "Android",
          "link" => "https://github.com/byuwur/co.com.onlinecongress",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-php",
          "text" => "PHP",
        ],
        [
          "icon" => "fas fa-database",
          "text" => "MySQL",
        ],
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
        [
          "icon" => "fab fa-java",
          "text" => "Java",
        ],
      ],
    ],
    [
      "title" => "Resérvelapp - software para reservas",
      "ent" => "ITFIP - Mención meritoria",
      "desc" => "Plataforma administradora de reservas para canchas sintéticas en Colombia.",
      "year" => "2018",
      "image" => "/img/work/reserv.jpg",
      "class" => "web android",
      "link" => [
        [
          "icon" => "fab fa-github",
          "text" => "Web",
          "link" => "https://github.com/byuwur/reservelapp.com",
        ],
        [
          "icon" => "fab fa-github",
          "text" => "Android",
          "link" => "https://github.com/byuwur/com.reservelapp",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-php",
          "text" => "PHP",
        ],
        [
          "icon" => "fas fa-database",
          "text" => "MySQL",
        ],
        [
          "icon" => "fab fa-js",
          "text" => "JS",
        ],
        [
          "icon" => "fab fa-css3",
          "text" => "CSS",
        ],
        [
          "icon" => "fab fa-html5",
          "text" => "HTML",
        ],
        [
          "icon" => "fab fa-java",
          "text" => "Java",
        ],
      ],
    ],
    [
      "title" => "REDI - Repo. Digital del ITFIP",
      "ent" => "ITFIP - Mención meritoria",
      "desc" => "Desarrollo de un repositorio digital para la preservación de monografías y trabajos de grado.",
      "year" => "2017",
      "image" => "/img/work/redi.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/redi.com",
        ],
        [
          "icon" => "fas fa-play-circle",
          "text" => "Demo",
          "link" => "https://repositorio.itfip.edu.co/",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-java",
          "text" => "JSP",
        ],
      ],
    ],
    [
      "title" => "RENN - Repo. Digital de la Normal de Naucalpán",
      "ent" => "ITFIP - Mención meritoria",
      "desc" => "Desarrollo de un repositorio digital para la preservación de trabajos de grado y documentos recepcionales.",
      "year" => "2017",
      "image" => "/img/work/renn.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/renn.com",
        ],
      ],
      "tech" => [
        [
          "icon" => "fab fa-java",
          "text" => "JSP",
        ],
      ],
    ],
    [
      "title" => "nginx Config",
      "ent" => "byUwUr",
      "desc" => "Mis archivos de configuración de nginx.",
      "year" => "2023",
      "image" => "/img/work/nginx.jpg",
      "class" => "web",
      "link" => [
        [
          "icon" => "fas fa-code",
          "text" => "GitHub",
          "link" => "https://github.com/byuwur/nginx-configurations",
        ],
      ],
      "tech" => [
        [
          "icon" => "fas fa-terminal",
          "text" => "Shell",
        ],
      ],
    ],
  ],
  // --- Habilidades ---
  "skills.sections" => [
    [
      "icon" => "fas fa-server",
      "title" => "Web y backend",
      "items" => [
        ["icon" => "fab fa-php", "text" => "PHP", ...calculate_skill(2018)],
        ["icon" => "fab fa-golang", "text" => "Go", ...calculate_skill(2025, 75)],
        ["icon" => "fab fa-js", "text" => "JavaScript ++ TypeScript", ...calculate_skill(2018)],
        ["icon" => "fas fa-layer-group", "text" => "Bootstrap ++ Tailwind", ...calculate_skill(2018)],
        ["icon" => "fas fa-code", "text" => "JSON", ...calculate_skill(2019)],
        ["icon" => "fas fa-diagram-project", "text" => "GraphQL", ...calculate_skill(2025, 55)],
        ["icon" => "fas fa-plug", "text" => "RESTful API", ...calculate_skill(2020)],
        ["icon" => "fab fa-html5", "text" => "HTML5 ++ CSS3", ...calculate_skill(2018)],
        ["icon" => "fas fa-database", "text" => "MySQL", ...calculate_skill(2018)],
        ["icon" => "fas fa-table", "text" => "SQL", ...calculate_skill(2018)],
      ],
    ],
    [
      "icon" => "fas fa-display",
      "title" => "Frontend, escritorio y móvil",
      "items" => [
        ["icon" => "fab fa-react", "text" => "React", ...calculate_skill(2022)],
        ["icon" => "fab fa-react", "text" => "React Native", ...calculate_skill(2023)],
        ["icon" => "fas fa-mobile-screen-button", "text" => "Expo", ...calculate_skill(2023)],
        ["icon" => "fab fa-golang", "text" => "Wails (Go)", ...calculate_skill(2025, 75)],
        ["icon" => "fab fa-python", "text" => "Python", ...calculate_skill(2018, 55)],
        ["icon" => "fab fa-java", "text" => "Java", ...calculate_skill(2018, 55)],
        //["icon" => "fab fa-android", "text" => "Desarrollo nativo para Android", ...calculate_skill(2018, 55)],
      ],
    ],
    [
      "icon" => "fas fa-cloud-arrow-up",
      "title" => "Nube y entrega de software",
      "items" => [
        ["icon" => "fab fa-aws", "text" => "AWS", ...calculate_skill(2023)],
        ["icon" => "fas fa-cloud", "text" => "Serverless", ...calculate_skill(2023)],
        ["icon" => "fas fa-arrows-rotate", "text" => "CI/CD", ...calculate_skill(2023)],
        ["icon" => "fab fa-github", "text" => "GitHub Actions", ...calculate_skill(2023)],
        ["icon" => "fab fa-git-alt", "text" => "Git", ...calculate_skill(2019)],
        ["icon" => "fas fa-server", "text" => "Apache", ...calculate_skill(2018)],
        ["icon" => "fas fa-server", "text" => "Nginx", ...calculate_skill(2022)],
      ],
    ],
    /*[
      "icon" => "fas fa-headset",
      "title" => "Implementación y soporte",
      "items" => [
        ["icon" => "fas fa-user-gear", "text" => "Implementación para clientes", ...calculate_skill(2019)],
        ["icon" => "fas fa-headset", "text" => "Soporte de aplicaciones y producción", ...calculate_skill(2020)],
        ["icon" => "fas fa-clipboard-list", "text" => "Análisis de requerimientos", ...calculate_skill(2021)],
        ["icon" => "fas fa-screwdriver-wrench", "text" => "Resolución de problemas", ...calculate_skill(2019)],
        ["icon" => "fas fa-file-lines", "text" => "Documentación técnica", ...calculate_skill(2022)],
        ["icon" => "fas fa-people-group", "text" => "Desarrollo ágil", ...calculate_skill(2019)],
      ],
    ],*/
    [
      "icon" => "fas fa-photo-film",
      "title" => "Audiovisual y medios",
      "items" => [
        ["icon" => "fas fa-clapperboard", "text" => "DaVinci Resolve", ...calculate_skill(2022)],
        ["icon" => "fas fa-film", "text" => "Premiere Pro", ...calculate_skill(2021)],
        ["icon" => "fas fa-video", "text" => "Vegas Pro", ...calculate_skill(2014)],
        ["icon" => "fas fa-image", "text" => "Photoshop", ...calculate_skill(2021)],
        ["icon" => "fas fa-sliders", "text" => "Lightroom", ...calculate_skill(2021)],
        ["icon" => "fas fa-record-vinyl", "text" => "OBS Studio", ...calculate_skill(2020)],
        //["icon" => "fas fa-scissors", "text" => "Edición de vídeo", ...calculate_skill(2014)],
        //["icon" => "fas fa-video", "text" => "Videografía", ...calculate_skill(2014)],
        //["icon" => "fas fa-camera", "text" => "Fotografía", ...calculate_skill(2021)],
        //["icon" => "fas fa-satellite-dish", "text" => "Transmisión en vivo", ...calculate_skill(2020)],
        //["icon" => "fas fa-tower-broadcast", "text" => "Operaciones de transmisión", ...calculate_skill(2021)],
      ],
    ],
  ],
  // --- Experiencia ---
  "experience.items" => [
    [
      "pos" => "LÍDER DE EQUIPO / DESARROLLADOR DE SOFTWARE",
      "ent" => "<a href='https://vehikl.com' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/vehikl.png'/>Vehikl</a> (vía <a href='https://magnet360.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/magnet360.png'/>Magnet360</a>)",
      "desc" => "Promovido de Desarrollador a Líder de Equipo, liderando a 3 desarrolladores y gestionando la entrega al cliente de principio a fin: desde requisitos y diseño de soluciones hasta QA, lanzamientos y soporte en producción; además de desarrollar y optimizar un sistema serverless en TypeScript sobre AWS, equilibrando velocidad de entrega, calidad de código y mejora continua del sistema.",
      "time" => "Octubre 2023 - Presente",
    ],
    [
      "pos" => "DESARROLLO WEB: PLATAFORMA DE GESTIÓN DE CALIFICACIONES",
      "ent" => "<i class='fas fa-building'></i><a href='https://semillasdealegriaespinal.com/' target='_blank'>Semillas de Alegría Espinal</a>",
      "desc" => "Desarrollé y mantengo una plataforma de calificaciones en PHP que automatiza reportes y tareas administrativas para aproximadamente 400 estudiantes al año.",
      "time" => "2019 - Presente",
    ],
    [
      "pos" => "ANALISTA DE DESARROLLO DE SOFTWARE - MÓVIL HÍBRIDO",
      "ent" => "<a href='https://iuvity.com' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/iuvity.png'/>Iuvity</a> (vía <a href='https://nxs.com.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/nexos.png'/>Nexos</a>)",
      "desc" => "Entregué funcionalidades frontend esenciales y correcciones en producción para un cliente del sector bancario utilizando herramientas low-code propietarias, mejorando la claridad de las transacciones, la usabilidad y la confiabilidad en un entorno de cambios constantes.",
      "time" => "Agosto 2022 - Febrero 2024",
    ],
    [
      "pos" => "DESARROLLADOR WEB BACKEND",
      "ent" => "<a href='https://orbitinvestments.com/' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/orbit_investments.png'/>Orbit Investments</a> (vía <a href='https://rivka.io' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/rivka.png'/>Rivka</a>)",
      "desc" => "Desarrollé un sistema geoespacial de búsqueda de propiedades con consultas por radio, polígono, código postal y condado, mientras ampliaba y daba soporte a la plataforma PHP/MySQL mediante nuevas funcionalidades, resolución de problemas y hotfixes.",
      "time" => "Agosto 2022 - Junio 2023",
    ],
    [
      "pos" => "PRODUCTOR AUDIOVISUAL - COMUNICACIONES INSTITUCIONALES",
      "ent" => "<i class='fas fa-building'></i><a href='https://uniespinal.edu.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/uniespinal.png'/>UniEspinal</a>, anteriormente ITFIP",
      "desc" => "Produje más de 100 videos, transmisiones y campañas en videografía, fotografía, edición y producción en vivo para una comunidad universitaria de más de 40.000 personas.",
      "time" => "Marzo 2021 - Junio 2022",
    ],
    [
      "pos" => "PRODUCTOR DE VIDEO Y MASTER DE STREAMING",
      "ent" => "<a href='javascript:;'>Producciones C&N</a>",
      "desc" => "Produje y edité producciones de video en vivo y grabadas para entretenimiento, eventos corporativos y flujos de trabajo de streaming.",
      "time" => "Julio 2020 - Diciembre 2020",
    ],
  ],
  // --- Formación ---
  "education.items" => [
    [
      "inst" => "<a href='https://uniespinal.edu.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/uniespinal.png'/>UniEspinal</a>, anteriormente ITFIP",
      "prof" => "GPA: 4.1<small>/5.0</small> | TP: 161122-0596750 TLM",
      "prog" => "Ingeniería de Sistemas",
      "year" => "<small>Graduado,</small> Marzo 2021",
    ],
    [
      "inst" => "<a href='https://platzi.com/p/atrujillomateus/' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/platzi.png'/>Platzi</a>",
      "prof" => "<a href='https://platzi.com/p/atrujillomateus/' target='_blank'>platzi.com/p/atrujillomateus/</a>",
      "prog" => "540 horas de formación certificada en tecnología y desarrollo profesional",
      "year" => "desde 2021",
    ],
    /* [
      "inst" => "<a href='https://profile.edx.org/u/atrujillomateus' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/edx.png'/>EDX</a>",
      "prof" => "<a href='https://profile.edx.org/u/atrujillomateus' target='_blank'>profile.edx.org/u/atrujillomateus</a>",
      "prog" => "60 horas de formación certificada en línea",
      "year" => "desde 2021",
    ], */
    /* [
      "inst" => "<a href='https://sena.edu.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/sena.png'/>SENA</a>",
      "prof" => "<a href='https://oferta.senasofiaplus.edu.co/sofia-oferta/' target='_blank'>oferta.senasofiaplus.edu.co/sofia-oferta/</a>",
      "prog" => "240 horas de formación técnica complementaria",
      "year" => "desde 2017",
    ], */
  ],
  // --- Contacto ---
  "contact.subtitle" => "Y construyamos algo increíble juntos.",
  "contact.form.name" => "Nombre",
  "contact.form.email" => "Correo electrónico",
  "contact.form.phone" => "[+cód. país] Número teléfonico (Opcional)",
  "contact.form.subject" => "Asunto",
  "contact.form.message" => "Mensaje",
  "contact.form.send" => "VAMOS A PLATICAR",
  "contact.mail" => "atrujillomateus@gmail.com",
  "contact.mail.thanks" => "Su mensaje se ha enviado exitosamente.<br>¡Le contactaremos pronto!",
  "contact.mail.error" => "Ocurrió un error.<br>Disculpe las molestias, intente nuevamente.",
  // --- Metadatos ---
  "meta.description" => "Team Lead | Software Engineer | Desarrollador Full-Stack | Productor Audiovisual",
  // --- Etiquetas de idioma ---
  "language.spanish" => "Español",
  "language.english" => "English",
  "language.japanese" => "日本語",
  // --- Etiquetas de tema ---
  "theme.light.title" => "Usar tema claro",
  "theme.dark.title" => "Usar tema oscuro",
  // --- Etiquetas de résumé y tarjeta ---
  "resume.es.title" => "CV en Español",
  "resume.en.title" => "English Résumé",
  "resume.es.alt" => "Bandera de Colombia",
  "resume.en.alt" => "Bandera del Reino Unido",
  "card.title" => "Tarjeta de presentación digital",
  // --- Etiquetas sociales ---
  "social.linkedin" => "Abrir perfil de LinkedIn",
  "social.github" => "Abrir perfil de GitHub",
  "social.youtube" => "Abrir canal de YouTube",
  // --- Accesibilidad ---
  "accessibility.open_panel" => "Abrir herramientas de accesibilidad",
  "accessibility.increase_text" => "Aumentar tamaño de texto",
  "accessibility.reset_text" => "Restablecer tamaño de texto",
  "accessibility.decrease_text" => "Disminuir tamaño de texto",
  "accessibility.toggle_motion" => "Alternar animaciones",
  "accessibility.dyslexia" => "Usar fuente apta para dislexia",
  "accessibility.word_spacing" => "Aumentar espacio entre palabras",
  "accessibility.highlight_links" => "Resaltar enlaces",
  "accessibility.high_contrast" => "Alternar alto contraste",
  "accessibility.invert_colors" => "Invertir colores",
  "accessibility.grayscale" => "Usar filtro de escala de grises",
  "accessibility.protanopia" => "Usar filtro de protanopía",
  "accessibility.deuteranopia" => "Usar filtro de deuteranopía",
  "accessibility.tritanopia" => "Usar filtro de tritanopía",
];
