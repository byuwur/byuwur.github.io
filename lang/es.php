<?php
//TEXTOS EN ESPAÑOL
//Use etiquetas HTML para estructurar

# Page Top
$_im = "Soy";
$_andim = "Y hago cosas útiles";
$_in = "en ";
$_helloworld = "Hola, mundo";
$_resume = "Résumé";
$_contact = "Contáctame";
$_skills = "Habilidades";
$_portfolio = "Portafolio";
$_experience = "Experiencia";
$_education = "Formación";
$_goto = "<a class='a-lang' href='mnm.team' custom-folder='true'>Ver más en MNM<small>.team();</small></a>";
$_name_top = "[Mateus] <span class='text-primary'>byUwUr</span>";
$_nombre = "Andrés Trujillo Mateus";
$_new = "cargar HTML no tan básico";
$_load = "<b>Cargando vista estándar...</b><br>¿Sigue cargando? <a href='/v1' style='color:#0ae;'>Ir a la vista básica</a>";
$_footer = "&copy;" . date("Y") . " Andrés Trujillo [Mateus] byUwUr<br><a href='/js/cookies.php' custom-folder='true'>cookie policy</a><br>Hecho con<i class='fas fa-heart'></i>por <a href='https://byuwur.net' target='_blank'>[Mateus] byUwUr</a>";
$_back = "Volver";
$_ok = "Entendido";
$_close = "Cerrar";
$_langs = "Idiomas";
$_themes = "Temas";
$_light = "Claro";
$_dark = "Oscuro";

# About
$_about = "Desarrollador de profesión, Editor por pasión.<br>Desarrollador web full-stack en XAMP (Apache, MySQL, PHP), React & React Native, programador en Java para Android híbrido y nativo y, diseñador de bases de datos SQL, más un poco de AWS & Python. Profesionalmente en labor desde 2018. Editor de vídeo y fotografía, Creador de contenido desde 2014.<br>Inglés fluido como segunda lengua y español como idioma nativo.<br>Siempre dispuesto a aprender. Estoy para lo que necesiten.";
$_linkedin = "https://linkedin.com/in/atrujillomateus";
$_github = "https://github.com/byuwur";
$_youtube = "https://youtube.com/byuwur";

# Portfolio
$_portfolios[] = [
    "title" => "Easy SPA PHP",
    "ent" => "byUwUr",
    "desc" => "Framework de Single Page Application (SPA) hecho a mano con PHP.",
    "year" => "2024",
    "image" => "/img/work-spa.jpg",
    "class" => "web",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/easy-spa-php"],
        ["icon" => "fas fa-play-circle", "text" => "Demo", "link" => "https://byuwur.net/_spa.php/"]
    ],
    "tech" => [
        ["icon" => "fab fa-php", "text" => "PHP"],
        ["icon" => "fab fa-js", "text" => "JS"],
        ["icon" => "fab fa-css3", "text" => "CSS"],
        ["icon" => "fab fa-html5", "text" => "HTML"]
    ]
];
$_portfolios[] = [
    "title" => "STREAM.HTML",
    "ent" => "byUwUr",
    "desc" => "Recursos HTML para tus overlays de streaming.",
    "year" => "2024",
    "image" => "/img/work-stream.jpg",
    "class" => "web",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/stream.html"],
        ["icon" => "fas fa-play-circle", "text" => "Main Demo", "link" => "https://byuwur.net/_stream.html/main.html"],
        ["icon" => "fas fa-play-circle", "text" => "Popup Demo", "link" => "https://byuwur.net/_stream.html/popup.html"]
    ],
    "tech" => [
        ["icon" => "fab fa-js", "text" => "JS"],
        ["icon" => "fab fa-css3", "text" => "CSS"],
        ["icon" => "fab fa-html5", "text" => "HTML"]
    ]
];
$_portfolios[] = [
    "title" => "Easy HTTP error page",
    "ent" => "byUwUr",
    "desc" => "Página de códigos de error HTTP para tu servidor Apache o nginx.",
    "year" => "2021",
    "image" => "/img/work-error.jpg",
    "class" => "web",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/easy-server-http-error-page"],
        ["icon" => "fas fa-play-circle", "text" => "Demo", "link" => "https://byuwur.net/error"]
    ],
    "tech" => [
        ["icon" => "fab fa-php", "text" => "PHP"],
        ["icon" => "fab fa-js", "text" => "JS"],
        ["icon" => "fab fa-css3", "text" => "CSS"],
        ["icon" => "fab fa-html5", "text" => "HTML"]
    ]
];
$_portfolios[] = [
    "title" => "Easy JSON viewer",
    "ent" => "byUwUr",
    "desc" => "Componente visor de JSON fácilmente integrable.",
    "year" => "2024",
    "image" => "/img/work-json.jpg",
    "class" => "web",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/easy-json-viewer"],
        ["icon" => "fas fa-play-circle", "text" => "Demo", "link" => "https://codepen.io/byuwur/pen/ExBeOPR"]
    ],
    "tech" => [
        ["icon" => "fab fa-js", "text" => "JS"],
        ["icon" => "fab fa-css3", "text" => "CSS"],
        ["icon" => "fab fa-html5", "text" => "HTML"]
    ]
];
$_portfolios[] = [
    "title" => "Easy Sidebar Bootstrap",
    "ent" => "byUwUr",
    "desc" => "Componente Sidebar fácilmente integrable.",
    "year" => "2024",
    "image" => "/img/work-sidebar.jpg",
    "class" => "web",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/easy-sidebar-bootstrap"],
        ["icon" => "fas fa-play-circle", "text" => "Demo", "link" => "https://codepen.io/byuwur/pen/VwJdWYL"]
    ],
    "tech" => [
        ["icon" => "fab fa-js", "text" => "JS"],
        ["icon" => "fab fa-css3", "text" => "CSS"],
        ["icon" => "fab fa-html5", "text" => "HTML"]
    ]
];
$_portfolios[] = [
    "title" => "Easy Dropzone PHP",
    "ent" => "byUwUr",
    "desc" => "Implementa fácilmente Dropzone en tu proyecto PHP.",
    "year" => "2020",
    "image" => "/img/work-dz.jpg",
    "class" => "web",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/easy-dropzone-php"],
        ["icon" => "fas fa-play-circle", "text" => "Demo", "link" => "https://byuwur.net/_dropzone.php/index.php?id=1"]
    ],
    "tech" => [
        ["icon" => "fab fa-php", "text" => "PHP"],
        ["icon" => "fab fa-js", "text" => "JS"],
        ["icon" => "fab fa-css3", "text" => "CSS"],
        ["icon" => "fab fa-html5", "text" => "HTML"]
    ]
];
$_portfolios[] = [
    "title" => "SDA Espinal - plataforma de calificaciones",
    "ent" => "Liceo Moderno Semillas de Alegría - Espinal",
    "desc" => "Plataforma web administradora de calificaciones.",
    "year" => "Desde 2019",
    "image" => "/img/work-sda.jpg",
    "class" => "web android",
    "link" => [
        ["icon" => "fas fa-play-circle", "text" => "Demo", "link" => "https://semillasdealegriaespinal.com"]
    ],
    "tech" => [
        ["icon" => "fab fa-php", "text" => "PHP"],
        ["icon" => "fas fa-database", "text" => "MySQL"],
        ["icon" => "fab fa-js", "text" => "JS"],
        ["icon" => "fab fa-css3", "text" => "CSS"],
        ["icon" => "fab fa-html5", "text" => "HTML"],
        ["icon" => "fab fa-aws", "text" => "AWS"]
    ]
];
$_portfolios[] = [
    "title" => "LimonTech - detector de limones",
    "ent" => "Expo - Ganador del Bootcamp: Las TIC para el agro",
    "desc" => "Clasifica la madurez de limones según su intensidad cromática usando visión artificial.",
    "year" => "2017",
    "image" => "/img/work-limontech.jpg",
    "class" => "python",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/limontech.py"],
        ["icon" => "fas fa-play-circle", "text" => "Demo", "link" => "https://youtu.be/RNQTSueIa-8"]
    ],
    "tech" => [
        ["icon" => "fab fa-python", "text" => "Python"],
        ["icon" => "fas fa-eye", "text" => "OpenCV"],
        ["icon" => "fas fa-robot", "text" => "Arduino"],
    ]
];
$_portfolios[] = [
    "title" => "Online Congress - software para congresos",
    "ent" => "ITFIP - Mención meritoria",
    "desc" => "Plataforma administradora de congresos institucionales y de investigación.",
    "year" => "2019",
    "image" => "/img/work-oc.jpg",
    "class" => "web android",
    "link" => [
        ["icon" => "fab fa-github", "text" => "Web", "link" => "https://github.com/byuwur/onlinecongress.com.co"],
        ["icon" => "fab fa-github", "text" => "Android", "link" => "https://github.com/byuwur/co.com.onlinecongress"]
    ],
    "tech" => [
        ["icon" => "fab fa-php", "text" => "PHP"],
        ["icon" => "fas fa-database", "text" => "MySQL"],
        ["icon" => "fab fa-js", "text" => "JS"],
        ["icon" => "fab fa-css3", "text" => "CSS"],
        ["icon" => "fab fa-html5", "text" => "HTML"],
        ["icon" => "fab fa-java", "text" => "Java"]
    ]
];
$_portfolios[] = [
    "title" => "Resérvelapp - software para reservas",
    "ent" => "ITFIP - Mención meritoria",
    "desc" => "Plataforma administradora de reservas para canchas sintéticas en Colombia.",
    "year" => "2018",
    "image" => "/img/work-reserv.jpg",
    "class" => "web android",
    "link" => [
        ["icon" => "fab fa-github", "text" => "Web", "link" => "https://github.com/byuwur/reservelapp.com"],
        ["icon" => "fab fa-github", "text" => "Android", "link" => "https://github.com/byuwur/com.reservelapp"]
    ],
    "tech" => [
        ["icon" => "fab fa-php", "text" => "PHP"],
        ["icon" => "fas fa-database", "text" => "MySQL"],
        ["icon" => "fab fa-js", "text" => "JS"],
        ["icon" => "fab fa-css3", "text" => "CSS"],
        ["icon" => "fab fa-html5", "text" => "HTML"],
        ["icon" => "fab fa-java", "text" => "Java"]
    ]
];
$_portfolios[] = [
    "title" => "REDI - Repo. Digital del ITFIP",
    "ent" => "ITFIP - Mención meritoria",
    "desc" => "Desarrollo de un repositorio digital para la preservación de monografías y trabajos de grado.",
    "year" => "2017",
    "image" => "/img/work-redi.jpg",
    "class" => "web",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/redi.com"],
        ["icon" => "fas fa-play-circle", "text" => "Demo", "link" => "https://repositorio.itfip.edu.co/"]
    ],
    "tech" => [
        ["icon" => "fab fa-java", "text" => "JSP"]
    ]
];
$_portfolios[] = [
    "title" => "RENN - Repo. Digital de la Normal de Naucalpán",
    "ent" => "ITFIP - Mención meritoria",
    "desc" => "Desarrollo de un repositorio digital para la preservación de trabajos de grado y documentos recepcionales.",
    "year" => "2017",
    "image" => "/img/work-renn.jpg",
    "class" => "web",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/renn.com"]
    ],
    "tech" => [
        ["icon" => "fab fa-java", "text" => "JSP"]
    ]
];
$_portfolios[] = [
    "title" => "nginx Config",
    "ent" => "byUwUr",
    "desc" => "Mis archivos de configuración de nginx.",
    "year" => "2023",
    "image" => "/img/work-nginx.jpg",
    "class" => "web",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/nginx-configurations"],
    ],
    "tech" => [
        ["icon" => "fas fa-terminal", "text" => "Shell"]
    ]
];


# Skills
$_codes = "Código:";
$_things = "Y otras cositas:";
$_thingies[] = "Desarrollo & Diseño de aplicaciones web y móviles";
$_thingies[] = "Diseño y modelado de bases de datos SQL";
$_thingies[] = "Asesorías y consultorías TIC, soporte técnico y ayuda";
$_thingies[] = "Webs mobile-first, cross-browser y responsive";
$_thingies[] = "Edición de vídeo y fotografía";
$_thingies[] = "Control de versiones con Git";

# Skillset
$_codeskills[] = [
    "icon" => "fab fa-php",
    "text" => "PHP",
    "level" => "Advanced",
    "progress" => "88%"
];
$_codeskills[] = [
    "icon" => "fas fa-database",
    "text" => "MySQL",
    "level" => "Advanced",
    "progress" => "77%"
];
$_codeskills[] = [
    "icon" => "fab fa-js",
    "text" => "JavaScript & TypeScript",
    "level" => "Advanced",
    "progress" => "77%"
];
$_codeskills[] = [
    "icon" => "fab fa-github",
    "text" => "Git",
    "level" => "Intermediate",
    "progress" => "66%"
];
$_codeskills[] = [
    "icon" => "fab fa-react",
    "text" => "React",
    "level" => "Intermediate",
    "progress" => "66%"
];
$_codeskills[] = [
    "icon" => "fab fa-react",
    "text" => "React Native",
    "level" => "Intermediate",
    "progress" => "66%"
];
$_codeskills[] = [
    "icon" => "fab fa-html5",
    "text" => "HTML",
    "level" => "Advanced",
    "progress" => "77%"
];
$_codeskills[] = [
    "icon" => "fab fa-css3-alt",
    "text" => "CSS",
    "level" => "Advanced",
    "progress" => "77%"
];
$_codeskills[] = [
    "icon" => "fab fa-java",
    "text" => "Java",
    "level" => "Intermediate",
    "progress" => "66%"
];
$_codeskills[] = [
    "icon" => "fab fa-python",
    "text" => "Python",
    "level" => "Basic",
    "progress" => "33%"
];
$_otherskills[] = [
    "icon" => "fab fa-youtube",
    "text" => "Vegas Pro",
    "level" => "Advanced",
    "progress" => "99%"
];
$_otherskills[] = [
    "icon" => "fas fa-photo-video",
    "text" => "Premiere Pro",
    "level" => "Advanced",
    "progress" => "77%"
];
$_otherskills[] = [
    "icon" => "fas fa-photo-video",
    "text" => "Photoshop",
    "level" => "Advanced",
    "progress" => "88%"
];
$_otherskills[] = [
    "icon" => "fas fa-photo-video",
    "text" => "Lightroom",
    "level" => "Advanced",
    "progress" => "88%"
];
$_otherskills[] = [
    "icon" => "fab fa-youtube",
    "text" => "Davinci Resolve",
    "level" => "Intermediate",
    "progress" => "66%"
];
$_otherskills[] = [
    "icon" => "fas fa-photo-video",
    "text" => "After FX",
    "level" => "Basic",
    "progress" => "33%"
];
$_otherskills[] = [
    "icon" => "fas fa-cubes",
    "text" => "Unity & Blender",
    "level" => "Basic",
    "progress" => "22%"
];

# Experience
$_experiences[] = [
    "pos" => "DESARROLLADOR DE SOFTWARE",
    "ent" => "<a href='https://vehikl.com/' target='_blank'>magnet360 2023 => Vehikl</a>",
    "desc" => "Desempeño como desarrollador implementador y de soporte usando React, React Native, AWS & PHP.",
    "time" => "Octubre 2023"
];
$_experiences[] = [
    "pos" => "ANALISTA DE DESARROLLO DE SOFTWARE",
    "ent" => "<a href='https://nxs.com.co/' target='_blank'>Nexos Software => iuvity</a>",
    "desc" => "Desempeño como desarrollador implementador y de soporte usando herramientas a la medida del cliente.",
    "time" => "Agosto 2022 - Febrero 2024"
];
$_experiences[] = [
    "pos" => "DESARROLLO WEB BACKEND",
    "ent" => "<a href='https://rivka.mx/' target='_blank'>Rivka.mx => Orbit Investments LLC</a>",
    "desc" => "Desempeño como desarrollador implementador y de soporte usando principalmente PHP, junto a MySQL, HTML5, CSS & JS.",
    "time" => "Agosto 2022 - Junio 2023"
];
$_experiences[] = [
    "pos" => "DESARROLLO WEB: PLATAFORMA DE NOTAS",
    "ent" => "<a href='https://semillasdealegriaespinal.com/' target='_blank'>Semillas de Alegría Espinal</a>",
    "desc" => "Plataforma de calificaciones.",
    "time" => "en operación desde 2019"
];
$_experiences[] = [
    "pos" => "DESARROLLO WEB: PROCESADOR DE PAGOS EPAYCO",
    "ent" => "<a href='javascript:;'>Comercializadora de Padilla – Espinal</a>",
    "desc" => "Procesador de pagos ePayco.",
    "time" => "Julio 2020 - Diciembre 2020"
];
$_experiences[] = [
    "pos" => "DESARROLLO WEB & APLICACIÓN ANDROID: ONLINE CONGRESS",
    "ent" => "<a href='https://itfip.edu.co' target='_blank'>ITFIP (Investigación) / Tesis de grado</a>",
    "desc" => "Software para congresos.",
    "time" => "Noviembre 2019 - Diciembre 2020"
];
$_experiences[] = [
    "pos" => "DESARROLLO WEB & APLICACIÓN ANDROID: RESÉRVELAPP",
    "ent" => "<a href='https://itfip.edu.co' target='_blank'>ITFIP (Investigación) / Tesis de grado</a>",
    "desc" => "Software para reservas.",
    "time" => "Julio 2018 - Diciembre 2019"
];
$_experiences[] = [
    "pos" => "DESARROLLO WEB: REDI - REPOSITORIO DIGITAL DEL ITFIP & RENN - REPOSITORIO DIGITAL DE LA NORMAL DE NAUCALPÁN",
    "ent" => "<a href='https://itfip.edu.co' target='_blank'>ITFIP (Investigación) / Tesis de grado</a>",
    "desc" => "Repositorios digitales.",
    "time" => "Julio 2017 - Enero 2018"
];
$_experiences[] = [
    "pos" => "DESARROLLO WEB: MNM.TEAM - LANDING PAGE PORTFOLIO",
    "ent" => "<a href='https://byuwur.net/mnm.team' target='_blank'>MNM.team</a>",
    "desc" => "Portafolio en página web.",
    "time" => "Julio 2018 - Diciembre 2018"
];
$_experiences[] = [
    "pos" => "POST-PRODUCCIÓN AUDIOVISUAL INSTITUCIONAL",
    "ent" => "<a href='https://youtube.com/ITFIPoficial' target='_blank'>ITFIP [YouTube]</a> | <a href='https://facebook.com/ITFIPoficial' target='_blank'>ITFIP [Facebook]</a>",
    "desc" => "Creación de contenido digital institucional.",
    "time" => "Marzo 2021 - Junio 2022"
];
$_experiences[] = [
    "pos" => "PRODUCCIÓN DE VÍDEO Y MÁSTER DE TRANSMISIÓN EN PROYECTOS VARIOS",
    "ent" => "<a href='javascript:;'>Producciones C&N</a>",
    "desc" => "Máster de transmisión, máster de producción y edición de vídeo en proyectos varios.",
    "time" => "Julio 2020 - Diciembre 2020"
];
$_experiences[] = [
    "pos" => "VIDEOGRAFÍA - Creación de contenido digital",
    "ent" => "<a href='https://youtube.com/byuwur' target='_blank'>[Mateus] byUwUr</a>",
    "desc" => "Creación de contenido digital.",
    "time" => "Desde 2014"
];

#education
$_educations[] = [
    "inst" => "<a href='https://itfip.edu.co/' target='_blank'>ITFIP</a>",
    "prof" => "GPA: 4.0<small>/5.0</small> | 161122-0596750 TLM",
    "prog" => "Ingeniería de Sistemas",
    "year" => "Marzo 2021"
];
$_educations[] = [
    "inst" => "<a href='https://platzi.com/p/atrujillomateus/' target='_blank'>PLATZI</a>",
    "prof" => "<a href='https://platzi.com/p/atrujillomateus/' target='_blank'>platzi.com/p/atrujillomateus/</a>",
    "prog" => "Formación de aptitudes profesionales en Platzi",
    "year" => "desde 2022"
];
$_educations[] = [
    "inst" => "<a href='https://profile.edx.org/u/atrujillomateus' target='_blank'>EDX</a>",
    "prof" => "<a href='https://profile.edx.org/u/atrujillomateus' target='_blank'>profile.edx.org/u/atrujillomateus</a>",
    "prog" => "Formación de aptitudes profesionales en edX",
    "year" => "desde 2021"
];
$_educations[] = [
    "inst" => "<a href='https://www.crehana.com/users/atrujillomateus/' target='_blank'>CREHANA</a>",
    "prof" => "<a href='https://www.crehana.com/users/atrujillomateus/' target='_blank'>crehana.com/users/atrujillomateus/</a>",
    "prog" => "Formación de aptitudes profesionales en Crehana",
    "year" => "desde 2021"
];
$_educations[] = [
    "inst" => "<a href='https://www.sena.edu.co/' target='_blank'>SENA</a>",
    "prof" => "<a href='https://oferta.senasofiaplus.edu.co/sofia-oferta/' target='_blank'>oferta.senasofiaplus.edu.co/sofia-oferta/</a>",
    "prog" => "Formación de aptitudes profesionales en SENA",
    "year" => "desde 2017"
];

# Contact
$_contactsub = "Y construyamos algo increíble juntos.";
$_name = "Nombre";
$_email = "Correo electrónico";
$_tphone = "[+cód. país] Número teléfonico (Opcional)";
$_subject = "Asunto";
$_msg = "Mensaje";
$_send = "VAMOS A PLATICAR";
$_mail = "atrujillomateus@gmail.com";
$_mail_thanks = "Su mensaje se ha enviado exitosamente.<br>¡Le contactaremos pronto!";
$_mail_wrong = "Ocurrió un error.<br>Disculpe las molestias, intente nuevamente.";
