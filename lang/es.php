<?php
/*
 * Textos en español.
 * Usa HTML confiable solo donde la plantilla imprime contenido intencionalmente.
 */
$LANG = [
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
	"profile.name_top" => '[Mateus] <span class=\'text-primary\'>byUwUr</span>',
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
		" Andrés Trujillo [Mateus] byUwUr<br><a href='/{$ROUTE_V1}'>cargar HTML básico</a> | <a href='/{$ROUTE_MNM}/{$ROUTE_COOKIES}' target='_blank'>cookie policy</a> | <a href='/{$ROUTE_MNM}'>MNM.team</a><br>Hecho con<i class='fas fa-heart'></i>por <a href='https://byuwur.co' target='_blank'>[Mateus] byUwUr</a>",
	"action.back" => "Volver",
	"action.ok" => "Entendido",
	"action.close" => "Cerrar",

	// --- Acerca de y redes ---
	"about.description" =>
		"Desarrollador web full-stack en XAMP (Apache, MySQL, PHP), React & React Native, programador en Java para Android híbrido y nativo y, diseñador de bases de datos SQL, más un poco de AWS & Python.<br>Inglés y Español fluido. Profesionalmente en labor desde 2018. Editor de vídeo y fotografía desde 2014.<br>Siempre dispuesto a aprender. Estoy para lo que necesiten.",
	"social.linkedin.url" => "https://linkedin.com/in/atrujillomateus",
	"social.github.url" => "https://github.com/byuwur",
	"social.youtube.url" => "https://youtube.com/byuwur",

	// --- Portafolio ---
	"portfolio.items" => [
		[
			"title" => "Easy SPA PHP",
			"ent" => "byUwUr",
			"desc" => "Framework de Single Page Application (SPA) hecho a mano con PHP.",
			"year" => "2024",
			"image" => "/img/work-spa.jpg",
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
			"image" => "/img/work-stream.jpg",
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
			"title" => "Easy Sidebar Bootstrap",
			"ent" => "byUwUr",
			"desc" => "Componente Sidebar fácilmente integrable.",
			"year" => "2024",
			"image" => "/img/work-sidebar.jpg",
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
			"title" => "Easy JSON viewer",
			"ent" => "byUwUr",
			"desc" => "Componente visor de JSON fácilmente integrable.",
			"year" => "2024",
			"image" => "/img/work-json.jpg",
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
			"image" => "/img/work-error.jpg",
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
			"title" => "Easy Dropzone PHP",
			"ent" => "byUwUr",
			"desc" => "Implementa fácilmente Dropzone en tu proyecto PHP.",
			"year" => "2020",
			"image" => "/img/work-dz.jpg",
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
			"image" => "/img/work-sda.jpg",
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
			"image" => "/img/work-limontech.jpg",
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
			"image" => "/img/work-oc.jpg",
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
			"image" => "/img/work-reserv.jpg",
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
			"image" => "/img/work-redi.jpg",
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
			"image" => "/img/work-renn.jpg",
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
			"image" => "/img/work-nginx.jpg",
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
				["icon" => "fab fa-python", "text" => "Python", ...calculate_skill(2017, 55)],
				["icon" => "fab fa-java", "text" => "Java", ...calculate_skill(2018, 55)],
				["icon" => "fab fa-android", "text" => "Desarrollo nativo para Android", ...calculate_skill(2018, 55)],
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
		[
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
		],
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
				["icon" => "fas fa-scissors", "text" => "Edición de vídeo", ...calculate_skill(2014)],
				["icon" => "fas fa-video", "text" => "Videografía", ...calculate_skill(2014)],
				["icon" => "fas fa-camera", "text" => "Fotografía", ...calculate_skill(2021)],
				["icon" => "fas fa-satellite-dish", "text" => "Transmisión en vivo", ...calculate_skill(2020)],
				["icon" => "fas fa-tower-broadcast", "text" => "Operaciones de transmisión", ...calculate_skill(2021)],
			],
		],
	],
	// --- Experiencia ---
	"experience.items" => [
		[
			"pos" => "DESARROLLADOR DE SOFTWARE",
			"ent" => '<a href=\'https://vehikl.com/\' target=\'_blank\'>magnet360 2023 => Vehikl</a>',
			"desc" => "Desempeño como desarrollador implementador y de soporte usando React, React Native, AWS & PHP.",
			"time" => "Octubre 2023",
		],
		[
			"pos" => "ANALISTA DE DESARROLLO DE SOFTWARE",
			"ent" => '<a href=\'https://nxs.com.co/\' target=\'_blank\'>Nexos Software => iuvity</a>',
			"desc" => "Desempeño como desarrollador implementador y de soporte usando herramientas a la medida del cliente.",
			"time" => "Agosto 2022 - Febrero 2024",
		],
		[
			"pos" => "DESARROLLO WEB BACKEND",
			"ent" => '<a href=\'https://rivka.mx/\' target=\'_blank\'>Rivka.mx => Orbit Investments LLC</a>',
			"desc" => "Desempeño como desarrollador implementador y de soporte usando principalmente PHP, junto a MySQL, HTML5, CSS & JS.",
			"time" => "Agosto 2022 - Junio 2023",
		],
		[
			"pos" => "DESARROLLO WEB: PLATAFORMA DE NOTAS",
			"ent" => '<a href=\'https://semillasdealegriaespinal.com/\' target=\'_blank\'>Semillas de Alegría Espinal</a>',
			"desc" => "Plataforma de calificaciones.",
			"time" => "en operación desde 2019",
		],
		[
			"pos" => "DESARROLLO WEB: PROCESADOR DE PAGOS EPAYCO",
			"ent" => '<a href=\'javascript:;\'>Comercializadora de Padilla – Espinal</a>',
			"desc" => "Procesador de pagos ePayco.",
			"time" => "Julio 2020 - Diciembre 2020",
		],
		[
			"pos" => "DESARROLLO WEB & APLICACIÓN ANDROID: ONLINE CONGRESS",
			"ent" => '<a href=\'https://itfip.edu.co\' target=\'_blank\'>ITFIP (Investigación) / Tesis de grado</a>',
			"desc" => "Software para congresos.",
			"time" => "Noviembre 2019 - Diciembre 2020",
		],
		[
			"pos" => "DESARROLLO WEB & APLICACIÓN ANDROID: RESÉRVELAPP",
			"ent" => '<a href=\'https://itfip.edu.co\' target=\'_blank\'>ITFIP (Investigación) / Tesis de grado</a>',
			"desc" => "Software para reservas.",
			"time" => "Julio 2018 - Diciembre 2019",
		],
		[
			"pos" => "DESARROLLO WEB: REDI - REPOSITORIO DIGITAL DEL ITFIP & RENN - REPOSITORIO DIGITAL DE LA NORMAL DE NAUCALPÁN",
			"ent" => '<a href=\'https://itfip.edu.co\' target=\'_blank\'>ITFIP (Investigación) / Tesis de grado</a>',
			"desc" => "Repositorios digitales.",
			"time" => "Julio 2017 - Enero 2018",
		],
		[
			"pos" => "DESARROLLO WEB: MNM.TEAM - LANDING PAGE PORTFOLIO",
			"ent" => '<a href=\'https://byuwur.co/mnm.team\' target=\'_blank\'>MNM.team</a>',
			"desc" => "Portafolio en página web.",
			"time" => "Julio 2018 - Diciembre 2018",
		],
		[
			"pos" => "POST-PRODUCCIÓN AUDIOVISUAL INSTITUCIONAL",
			"ent" => '<a href=\'https://youtube.com/ITFIPoficial\' target=\'_blank\'>ITFIP [YouTube]</a> | <a href=\'https://facebook.com/ITFIPoficial\' target=\'_blank\'>ITFIP [Facebook]</a>',
			"desc" => "Creación de contenido digital institucional.",
			"time" => "Marzo 2021 - Junio 2022",
		],
		[
			"pos" => "PRODUCCIÓN DE VÍDEO Y MÁSTER DE TRANSMISIÓN EN PROYECTOS VARIOS",
			"ent" => '<a href=\'javascript:;\'>Producciones C&N</a>',
			"desc" => "Máster de transmisión, máster de producción y edición de vídeo en proyectos varios.",
			"time" => "Julio 2020 - Diciembre 2020",
		],
		[
			"pos" => "VIDEOGRAFÍA - Creación de contenido digital",
			"ent" => '<a href=\'https://youtube.com/byuwur\' target=\'_blank\'>[Mateus] byUwUr</a>',
			"desc" => "Creación de contenido digital.",
			"time" => "Desde 2014",
		],
	],
	// --- Formación ---
	"education.items" => [
		[
			"inst" => '<a href=\'https://itfip.edu.co/\' target=\'_blank\'>ITFIP</a>',
			"prof" => "GPA: 4.0<small>/5.0</small> | 161122-0596750 TLM",
			"prog" => "Ingeniería de Sistemas",
			"year" => "Marzo 2021",
		],
		[
			"inst" => '<a href=\'https://platzi.com/p/atrujillomateus/\' target=\'_blank\'>PLATZI</a>',
			"prof" => '<a href=\'https://platzi.com/p/atrujillomateus/\' target=\'_blank\'>platzi.com/p/atrujillomateus/</a>',
			"prog" => "Formación de aptitudes profesionales en Platzi",
			"year" => "desde 2022",
		],
		[
			"inst" => '<a href=\'https://profile.edx.org/u/atrujillomateus\' target=\'_blank\'>EDX</a>',
			"prof" => '<a href=\'https://profile.edx.org/u/atrujillomateus\' target=\'_blank\'>profile.edx.org/u/atrujillomateus</a>',
			"prog" => "Formación de aptitudes profesionales en edX",
			"year" => "desde 2021",
		],
		[
			"inst" => '<a href=\'https://www.crehana.com/users/atrujillomateus/\' target=\'_blank\'>CREHANA</a>',
			"prof" => '<a href=\'https://www.crehana.com/users/atrujillomateus/\' target=\'_blank\'>crehana.com/users/atrujillomateus/</a>',
			"prog" => "Formación de aptitudes profesionales en Crehana",
			"year" => "desde 2021",
		],
		[
			"inst" => '<a href=\'https://www.sena.edu.co/\' target=\'_blank\'>SENA</a>',
			"prof" => '<a href=\'https://oferta.senasofiaplus.edu.co/sofia-oferta/\' target=\'_blank\'>oferta.senasofiaplus.edu.co/sofia-oferta/</a>',
			"prog" => "Formación de aptitudes profesionales en SENA",
			"year" => "desde 2017",
		],
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
	"contact.goto_mnm.html" => "<a class='a-lang' href='/{$ROUTE_MNM}' custom-folder='true'>Ver más en MNM<small>.team();</small></a>",
	// --- Metadatos ---
	"meta.description" => "Desarrollador de software | Editor de video",

	// --- Etiquetas de idioma ---
	"language.spanish" => "Español",
	"language.english" => "English",
	"language.japanese" => "日本語",

	// --- Etiquetas de tema ---
	"theme.light.title" => "Usar tema claro",
	"theme.dark.title" => "Usar tema oscuro",

	// --- Etiquetas de résumé y tarjeta ---
	"resume.es.title" => "Résumé en Español",
	"resume.en.title" => "Résumé en Inglés",
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
