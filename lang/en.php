<?php
/*
 * Texts in English.
 * Use trusted HTML only where the template intentionally prints raw content.
 */
$LANG = [
  // --- Misc ---
  "years" => "years",
  // --- Routes ---
  "route.root" => $ROUTE_ROOT ?? "/",
  "route.home" => $ROUTE_HOME ?? "home",
  "route.v1" => "/{$ROUTE_V1}",
  "route.resume" => "/{$ROUTE_RESUME}",
  "route.mnm" => "/{$ROUTE_MNM}",
  "route.cookies" => "/{$ROUTE_MNM}/{$ROUTE_COOKIES}",
  // --- Page shell ---
  "title.default" => "[Mateus] byUwUr = I create useful things",
  "loader.loading" => "<b>Loading standard view...</b><br>Still loading? <a href='/{$ROUTE_V1}' style='color:#0ae;'>Go to basic view</a>",
  // --- Profile and hero ---
  "profile.name_top" => "[Mateus] <span class='text-primary'>byUwUr</span>",
  "profile.full_name" => "Andrés Trujillo Mateus",
  "hero.im" => "I'm",
  "hero.and_i" => "I create useful things",
  "hero.in" => "with ",
  "hero.hello_world" => "Hello, world",
  // --- Navigation ---
  "nav.about" => "Hello, world",
  "nav.resume" => "Résumé",
  "nav.contact" => "Contact me",
  "nav.skills" => "Skillset",
  "nav.portfolio" => "Portfolio",
  "nav.experience" => "Experience",
  "nav.education" => "Education",
  // --- Sidebar ---
  "sidebar.toggle" => "Toggle sidebar menu",
  "sidebar.menu" => "menu",
  "sidebar.logo_alt" => "[Mateus] byUwUr logo",
  // --- Language and theme controls ---
  "language.selector" => "Languages:",
  "theme.selector" => "Themes:",
  "theme.light" => "Light",
  "theme.dark" => "Dark",
  // --- View, footer, and actions ---
  "view.modern" => "load not so basic HTML",
  "view.modern.title" => "load not so basic HTML (v2)",
  "footer.html" =>
    "&copy;" .
    date("Y") .
    " Andrés Trujillo [Mateus] byUwUr<br>
    <!-- <a href='/{$ROUTE_V1}'>load basic HTML</a> | -->
    <a href='/{$ROUTE_COOKIES}'>cookie policy</a>
    <br>Made with <i class='fas fa-heart'></i> by <a href='https://byuwur.co' target='_blank'>[Mateus] byUwUr</a>",
  "action.back" => "Go back",
  "action.ok" => "Understood",
  "action.close" => "Close",
  // --- About and social links ---
  "about.description" =>
    "Currently working as Team Lead at <a href='https://vehikl.com' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/vehikl.png'/>Vehikl</a>.<br>
    Bilingual Systems Engineer with professional experience developing, deploying and supporting web and mobile solutions since 2018, complemented by audiovisual production experience since 2014.<br>
    Simple is complicated enough: I build strong and reliable tools that make complex workflows easier to operate. I create useful things.<br>
    Experienced across full-stack development, client implementation, production support and technical delivery, with hands-on work in React, React Native, PHP, MySQL and AWS.<br>
    I build software with purpose and impact, backed by additional experience in audiovisual production and live broadcasting.",
  "social.linkedin.url" => "https://linkedin.com/in/atrujillomateus",
  "social.github.url" => "https://github.com/byuwur",
  "social.youtube.url" => "https://youtube.com/byuwur",
  // --- Portfolio ---
  "portfolio.items" => [
    [
      "title" => "Stream.FGC",
      "ent" => "byUwUr",
      "desc" => "App for managing fighting game tournaments.",
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
      "desc" => "Single Page Application (SPA) handmade framework with PHP.",
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
      "desc" => "HTML resources for your streaming overlays.",
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
      "desc" => "Easily integrable MarkDown viewer component.",
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
      "desc" => "Easily integrable JSON viewer component.",
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
      "desc" => "HTTP error code page for your Apache or nginx server.",
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
      "desc" => "Easily integrable Sidebar component.",
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
      "desc" => "Easily implement Dropzone in your PHP project.",
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
      "title" => "SDA Espinal - grading platform",
      "ent" => "Liceo Moderno Semillas de Alegría - Espinal",
      "desc" => "Web platform for managing grades in schools.",
      "year" => "Since 2019",
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
      "title" => "LimonTech - lemon detector",
      "ent" => "Expo - Winner of Bootcamp: ICT for agriculture",
      "desc" => "Classifies the ripeness of lemons according to their chromatic intensity using artificial vision.",
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
      "title" => "Online Congress - software for congresses",
      "ent" => "ITFIP - Mención meritoria",
      "desc" => "Platform for managing institutional and research conferences.",
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
      "title" => "Resérvelapp - software for reservations",
      "ent" => "ITFIP - Mención meritoria",
      "desc" => "Reservation management platform for synthetic courts in Colombia.",
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
      "title" => "REDI - ITFIP Digital Repo.",
      "ent" => "ITFIP - Meritory mention",
      "desc" => "Development of a digital repository for the preservation of monographs and degree theses.",
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
      "title" => "RENN - Normal de Naucalpán Digital Repo.",
      "ent" => "ITFIP - Meritory mention",
      "desc" => "Development of a digital repository for the preservation of undergraduate theses and reception documents.",
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
      "desc" => "My nginx configuration files.",
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
  // --- Skills ---
  "skills.sections" => [
    [
      "icon" => "fas fa-server",
      "title" => "Web & Backend",
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
      "title" => "Frontend, Desktop & Mobile",
      "items" => [
        ["icon" => "fab fa-react", "text" => "React", ...calculate_skill(2022)],
        ["icon" => "fab fa-react", "text" => "React Native", ...calculate_skill(2023)],
        ["icon" => "fas fa-mobile-screen-button", "text" => "Expo", ...calculate_skill(2023)],
        ["icon" => "fab fa-golang", "text" => "Wails (Go)", ...calculate_skill(2025, 75)],
        ["icon" => "fab fa-python", "text" => "Python", ...calculate_skill(2018, 55)],
        ["icon" => "fab fa-java", "text" => "Java", ...calculate_skill(2018, 55)],
        //["icon" => "fab fa-android", "text" => "Native Android Development", ...calculate_skill(2018, 55)],
      ],
    ],
    [
      "icon" => "fas fa-cloud-arrow-up",
      "title" => "Cloud & Software Delivery",
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
      "title" => "Implementation & Support",
      "items" => [
        ["icon" => "fas fa-user-gear", "text" => "Client Implementation", ...calculate_skill(2019)],
        ["icon" => "fas fa-headset", "text" => "Application ++ Production Support", ...calculate_skill(2020)],
        ["icon" => "fas fa-clipboard-list", "text" => "Requirements Analysis", ...calculate_skill(2021)],
        ["icon" => "fas fa-screwdriver-wrench", "text" => "Troubleshooting", ...calculate_skill(2019)],
        ["icon" => "fas fa-file-lines", "text" => "Technical Documentation", ...calculate_skill(2022)],
        ["icon" => "fas fa-people-group", "text" => "Agile Development", ...calculate_skill(2019)],
      ],
    ],*/
    [
      "icon" => "fas fa-photo-film",
      "title" => "Audiovisual & Media",
      "items" => [
        ["icon" => "fas fa-clapperboard", "text" => "DaVinci Resolve", ...calculate_skill(2022)],
        ["icon" => "fas fa-film", "text" => "Premiere Pro", ...calculate_skill(2021)],
        ["icon" => "fas fa-video", "text" => "Vegas Pro", ...calculate_skill(2014)],
        ["icon" => "fas fa-image", "text" => "Photoshop", ...calculate_skill(2021)],
        ["icon" => "fas fa-sliders", "text" => "Lightroom", ...calculate_skill(2021)],
        ["icon" => "fas fa-record-vinyl", "text" => "OBS Studio", ...calculate_skill(2020)],
        //["icon" => "fas fa-scissors", "text" => "Video Editing", ...calculate_skill(2014)],
        //["icon" => "fas fa-video", "text" => "Videography", ...calculate_skill(2014)],
        //["icon" => "fas fa-camera", "text" => "Photography", ...calculate_skill(2021)],
        //["icon" => "fas fa-satellite-dish", "text" => "Live Streaming", ...calculate_skill(2020)],
        //["icon" => "fas fa-tower-broadcast", "text" => "Broadcast Operations", ...calculate_skill(2021)],
      ],
    ],
  ],
  // --- Experience ---
  "experience.items" => [
    [
      "pos" => "TEAM LEAD / SOFTWARE DEVELOPER",
      "ent" => "<a href='https://vehikl.com' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/vehikl.png'/>Vehikl</a> (via <a href='https://magnet360.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/magnet360.png'/>Magnet360</a>)",
      "desc" => "Promoted from Software Developer to Team Lead, leading 3 developers and owning client delivery end to end: from requirements and solution design to QA, releases and production support; while developing and optimizing a TypeScript serverless system on AWS, balancing delivery speed, code quality and continuous system improvement.",
      "time" => "October 2023 - Present",
    ],
    [
      "pos" => "WEB DEVELOPMENT: GRADING PLATFORM",
      "ent" => "<i class='fas fa-building'></i><a href='https://semillasdealegriaespinal.com/' target='_blank'>Semillas de Alegría Espinal</a>",
      "desc" => "Built and maintain a PHP grading platform that automates reports and administration for ~400 students annually.",
      "time" => "2019 - Present",
    ],
    [
      "pos" => "SOFTWARE DEVELOPMENT ANALYST - HYBRID MOBILE",
      "ent" => "<a href='https://iuvity.com' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/iuvity.png'/>Iuvity</a> (via <a href='https://nxs.com.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/nexos.png'/>Nexos</a>)",
      "desc" => "Delivered core frontend features and production fixes for a banking client using proprietary low-code tooling, improving transaction clarity, usability and reliability in a high-change environment.",
      "time" => "August 2022 - February 2024",
    ],
    [
      "pos" => "BACKEND WEB DEVELOPER",
      "ent" => "<a href='https://orbitinvestments.com/' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/orbit_investments.png'/>Orbit Investments</a> (via <a href='https://rivka.io' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/rivka.png'/>Rivka</a>)",
      "desc" => "Built a geospatial property-search system supporting radius, polygon, ZIP-code and county searches while extending and supporting the PHP/MySQL platform through features, troubleshooting and hotfixes.",
      "time" => "August 2022 - June 2023",
    ],
    [
      "pos" => "AUDIOVISUAL PRODUCER - INSTITUTIONAL COMMUNICATIONS",
      "ent" => "<a href='https://uniespinal.edu.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/uniespinal.png'/>UniEspinal</a>, formerly ITFIP",
      "desc" => "Produced and operated 100+ videos, broadcasts and campaigns across videography, photography, editing and live production for a university community of 40,000+ people.",
      "time" => "March 2021 - June 2022",
    ],
    [
      "pos" => "VIDEO PRODUCER AND STREAMING MASTER",
      "ent" => "<i class='fas fa-building'></i><a href='javascript:;' >Producciones C&N</a>",
      "desc" => "Produced, edited and operated live and recorded video productions across entertainment, corporate events and streaming workflows.",
      "time" => "July 2020 - December 2020",
    ],
  ],
  // --- Education ---
  "education.items" => [
    [
      "inst" => "<a href='https://uniespinal.edu.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/uniespinal.png'/>UniEspinal</a>, formerly ITFIP",
      "prof" => "GPA: 4.1<small>/5.0</small> | Credential: 161122-0596750 TLM",
      "prog" => "Systems Engineering",
      "year" => "<small>Graduated,</small> March 2021",
    ],
    [
      "inst" => "<a href='https://platzi.com/p/atrujillomateus/' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/platzi.png'/>Platzi</a>",
      "prof" => "<a href='https://platzi.com/p/atrujillomateus/' target='_blank'>platzi.com/p/atrujillomateus/</a>",
      "prog" => "540 hours of certified technology and professional coursework",
      "year" => "since 2021",
    ],
    /* [
      "inst" => "<a href='https://profile.edx.org/u/atrujillomateus' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/edx.png'/>EDX</a>",
      "prof" => "<a href='https://profile.edx.org/u/atrujillomateus' target='_blank'>profile.edx.org/u/atrujillomateus</a>",
      "prog" => "60 hours of certified online coursework",
      "year" => "since 2021",
    ], */
    /* [
      "inst" => "<a href='https://sena.edu.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/sena.png'/>SENA</a>",
      "prof" => "<a href='https://oferta.senasofiaplus.edu.co/sofia-oferta/' target='_blank'>oferta.senasofiaplus.edu.co/sofia-oferta/</a>",
      "prog" => "240 hours of complementary technical coursework",
      "year" => "since 2017",
    ], */
  ],
  // --- Contact ---
  "contact.subtitle" => "And let's build something sick together.",
  "contact.form.name" => "Name",
  "contact.form.email" => "E-mail",
  "contact.form.phone" => "[+country code] Phone number (Optional)",
  "contact.form.subject" => "Subject",
  "contact.form.message" => "Message",
  "contact.form.send" => "LET'S TALK",
  "contact.mail" => "atrujillomateus@gmail.com",
  "contact.mail.thanks" => "Your message has been successfully sent.<br>We will contact you soon!",
  "contact.mail.error" => "There was an error sending the message.<br>Sorry for the inconvenience, please try again.",
  // --- Metadata ---
  "meta.description" => "Team Lead | Software Engineer | Full-Stack Developer | Audiovisual Producer",
  // --- Language labels ---
  "language.spanish" => "Español",
  "language.english" => "English",
  "language.japanese" => "日本語",
  // --- Theme labels ---
  "theme.light.title" => "Use light theme",
  "theme.dark.title" => "Use dark theme",
  // --- Resume and card labels ---
  "resume.es.title" => "CV en Español",
  "resume.en.title" => "English Résumé",
  "resume.es.alt" => "Spanish flag",
  "resume.en.alt" => "United Kingdom flag",
  "card.title" => "Digital business card",
  // --- Social labels ---
  "social.linkedin" => "Open LinkedIn profile",
  "social.github" => "Open GitHub profile",
  "social.youtube" => "Open YouTube channel",
  // --- Accessibility ---
  "accessibility.open_panel" => "Open accessibility tools",
  "accessibility.increase_text" => "Increase text size",
  "accessibility.reset_text" => "Reset text size",
  "accessibility.decrease_text" => "Decrease text size",
  "accessibility.toggle_motion" => "Toggle animations",
  "accessibility.dyslexia" => "Use dyslexia-friendly font",
  "accessibility.word_spacing" => "Increase word spacing",
  "accessibility.highlight_links" => "Highlight links",
  "accessibility.high_contrast" => "Toggle high contrast",
  "accessibility.invert_colors" => "Invert colors",
  "accessibility.grayscale" => "Use grayscale filter",
  "accessibility.protanopia" => "Use protanopia filter",
  "accessibility.deuteranopia" => "Use deuteranopia filter",
  "accessibility.tritanopia" => "Use tritanopia filter",
];
