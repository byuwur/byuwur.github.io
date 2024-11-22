<?php
//TEXTS IN ENGLISH
//Use HTML tags for structuring

# Page Top
$_im = "I'm";
$_andim = "I do useful things";
$_in = "in ";
$_helloworld = "Hello, world";
$_resume = "Résumé";
$_contact = "Contact me";
$_skills = "Skillset";
$_portfolio = "Portfolio";
$_experience = "Experience";
$_education = "Education";
$_goto = "<a class='a-lang' href='mnm.team' custom-folder='true'>See more at MNM<small>.team();</small></a>";
$_name_top = "[Mateus] <span class='text-primary'>byUwUr</span>";
$_nombre = "Andrés Trujillo Mateus";
$_new = "load not so basic HTML";
$_load = "<b>Loading standard view...</b><br>Still loading? <a href='/v1' style='color:#0ae;'>Go to basic view</a>";
$_footer = "&copy;" . date("Y") . " Andrés Trujillo [Mateus] byUwUr<br><a href='/v1'>load basic HTML</a> | <a href='/js/cookies.php' target='_blank'>cookie policy</a> | <a href='/mnm.team'>MNM.team</a><br>Made with<i class='fas fa-heart'></i>by <a href='https://byuwur.net' target='_blank'>[Mateus] byUwUr</a>";
$_back = "Go back";
$_ok = "Understood";
$_close = "Close";
$_langs = "Languages";
$_themes = "Themes";
$_light = "Light";
$_dark = "Dark";

# About
$_about = "Developer by profession, Editor by passion.<br>Full-stack web developer in XAMP (Apache, MySQL, PHP), React & React Native, native and hybrid Java programmer for Android, and SQL database designer, plus a bit of AWS & Python. Professionally at work since 2018. Video and photo editor, Content creator since 2014.<br>Fluent English as my second language and Spanish as my native language.<br>Always willing to learn. I am for anything you need.";
$_linkedin = "https://linkedin.com/in/atrujillomateus";
$_github = "https://github.com/byuwur";
$_youtube = "https://youtube.com/byuwur";

# Portfolio
$_portfolios[] = [
    "title" => "Easy SPA PHP",
    "ent" => "byUwUr",
    "desc" => "Single Page Application (SPA) handmade framework with PHP.",
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
    "desc" => "HTML resources for your streaming overlays.",
    "year" => "2024",
    "image" => "/img/work-stream.jpg",
    "class" => "web",
    "link" => [
        ["icon" => "fas fa-code", "text" => "GitHub", "link" => "https://github.com/byuwur/stream.html"],
        ["icon" => "fas fa-play-circle", "text" => "Demo", "link" => "https://byuwur.net/_stream.html/main.html"],
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
    "desc" => "HTTP error code page for your Apache or nginx server.",
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
    "desc" => "Easily integrable JSON viewer component.",
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
    "desc" => "Easily integrable Sidebar component.",
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
    "desc" => "Easily implement Dropzone in your PHP project.",
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
    "title" => "SDA Espinal - grading platform",
    "ent" => "Liceo Moderno Semillas de Alegría - Espinal",
    "desc" => "Web platform for managing grades in schools.",
    "year" => "Since 2019",
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
    "title" => "LimonTech - lemon detector",
    "ent" => "Expo - Winner of Bootcamp: ICT for agriculture",
    "desc" => "Classifies the ripeness of lemons according to their chromatic intensity using artificial vision.",
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
    "title" => "Online Congress - software for congresses",
    "ent" => "ITFIP - Mención meritoria",
    "desc" => "Platform for managing institutional and research conferences.",
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
    "title" => "Resérvelapp - software for reservations",
    "ent" => "ITFIP - Mención meritoria",
    "desc" => "Reservation management platform for synthetic courts in Colombia.",
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
    "title" => "REDI - ITFIP Digital Repo.",
    "ent" => "ITFIP - Meritory mention",
    "desc" => "Development of a digital repository for the preservation of monographs and degree theses.",
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
    "title" => "RENN - Normal de Naucalpán Digital Repo.",
    "ent" => "ITFIP - Meritory mention",
    "desc" => "Development of a digital repository for the preservation of undergraduate theses and reception documents.",
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
    "desc" => "My nginx configuration files.",
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
$_codes = "Coding:";
$_things = "And other things:";
$_thingies[] = "Development & Design of web and mobile applications";
$_thingies[] = "Design and modeling of SQL databases";
$_thingies[] = "ICT advisory and consultancies, technical support and help";
$_thingies[] = "Mobile-first, cross-browser and responsive webs";
$_thingies[] = "Photo and video editing";
$_thingies[] = "Git version control";

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
    "pos" => "SOFTWARE DEVELOPER",
    "ent" => "<a href='https://vehikl.com/' target='_blank'>magnet360 2023 => Vehikl</a>",
    "desc" => "Performed as an implementation and support developer using mainly React, React Native, AWS & PHP.",
    "time" => "October 2023"
];
$_experiences[] = [
    "pos" => "SOFTWARE DEVELOPMENT ANALYST",
    "ent" => "<a href='https://nxs.com.co/' target='_blank'>Nexos Software => iuvity</a>",
    "desc" => "Performed as an implementation and support developer using tools tailored to the client.",
    "time" => "August 2022 - Febraury 2024"
];
$_experiences[] = [
    "pos" => "BACKEND WEB DEVELOPER",
    "ent" => "<a href='https://rivka.mx/' target='_blank'>Rivka.mx => Orbit Investments LLC</a>",
    "desc" => "Performed as an implementation and support developer using mainly PHP, along with MySQL, HTML5, CSS & JS.",
    "time" => "August 2022 - June 2023"
];
$_experiences[] = [
    "pos" => "WEB DEVELOPMENT: GRADING PLATFORM",
    "ent" => "<a href='https://semillasdealegriaespinal.com/' target='_blank'>Semillas de Alegría Espinal</a>",
    "desc" => "Grading platform.",
    "time" => "operational since 2019"
];
$_experiences[] = [
    "pos" => "WEB DEVELOPMENT: EPAYCO PAYMENT PROCESSOR",
    "ent" => "<a href='javascript:;'>Comercializadora de Padilla – Espinal</a>",
    "desc" => "ePayco payment processor.",
    "time" => "July 2020 - December 2020"
];
$_experiences[] = [
    "pos" => "WEB DEVELOPMENT & ANDROID APP: ONLINE CONGRESS",
    "ent" => "<a href='https://itfip.edu.co' target='_blank'>ITFIP (Investigación) / Tesis de grado</a>",
    "desc" => "Software for congresses.",
    "time" => "November 2019 - December 2020"
];
$_experiences[] = [
    "pos" => "WEB DEVELOPMENT & ANDROID APP: RESÉRVELAPP",
    "ent" => "<a href='https://itfip.edu.co' target='_blank'>ITFIP (Investigación) / Tesis de grado</a>",
    "desc" => "Software for reservations.",
    "time" => "July 2018 - December 2019"
];
$_experiences[] = [
    "pos" => "WEB DEVELOPMENT: REDI - ITFIP DIGITAL REPO & RENN - NORMAL DE NAUCALPÁN DIGITAL REPO",
    "ent" => "<a href='https://itfip.edu.co' target='_blank'>ITFIP (Investigación) / Tesis de grado</a>",
    "desc" => "Digital repositories.",
    "time" => "July 2017 - January 2018"
];
$_experiences[] = [
    "pos" => "WEB DEVELOPMENT: MNM.TEAM - LANDING PAGE PORTFOLIO",
    "ent" => "<a href='https://byuwur.net/mnm.team' target='_blank'>MNM.team</a>",
    "desc" => "Web page portfolio.",
    "time" => "July 2018 - December 2018"
];
$_experiences[] = [
    "pos" => "INSTITUTIONAL AUDIOVISUAL POST-PRODUCTION",
    "ent" => "<a href='https://youtube.com/ITFIPoficial' target='_blank'>ITFIP [YouTube]</a> | <a href='https://facebook.com/ITFIPoficial' target='_blank'>ITFIP [Facebook]</a>",
    "desc" => "Institucional digital content creation.",
    "time" => "March 2021 - June 2022"
];
$_experiences[] = [
    "pos" => "PRODUCTION ASSISTANT",
    "ent" => "<a href='javascript:;'>Producciones C&N</a>",
    "desc" => "Master in transmission, master in video production and editing various projects.",
    "time" => "July 2020 - December 2020"
];
$_experiences[] = [
    "pos" => "VIDEOGRAPHY",
    "ent" => "<a href='https://youtube.com/byuwur' target='_blank'>[Mateus] byUwUr</a>",
    "desc" => "Digital content creator.",
    "time" => "since 2014"
];

#education
$_educations[] = [
    "inst" => "<a href='https://itfip.edu.co/' target='_blank'>ITFIP</a>",
    "prof" => "GPA: 4.0<small>/5.0</small> | 161122-0596750 TLM",
    "prog" => "Systems Engineering",
    "year" => "March 2021"
];
$_educations[] = [
    "inst" => "<a href='https://platzi.com/p/atrujillomateus/' target='_blank'>PLATZI</a>",
    "prof" => "<a href='https://platzi.com/p/atrujillomateus/' target='_blank'>platzi.com/p/atrujillomateus/</a>",
    "prog" => "Professional skills training at Platzi",
    "year" => "since 2022"
];
$_educations[] = [
    "inst" => "<a href='https://profile.edx.org/u/atrujillomateus' target='_blank'>EDX</a>",
    "prof" => "<a href='https://profile.edx.org/u/atrujillomateus' target='_blank'>profile.edx.org/u/atrujillomateus</a>",
    "prog" => "Professional skills training at edX",
    "year" => "sinc 2021"
];
$_educations[] = [
    "inst" => "<a href='https://www.crehana.com/users/atrujillomateus/' target='_blank'>CREHANA</a>",
    "prof" => "<a href='https://www.crehana.com/users/atrujillomateus/' target='_blank'>crehana.com/users/atrujillomateus/</a>",
    "prog" => "Professional skills training at Crehana",
    "year" => "since 2021"
];
$_educations[] = [
    "inst" => "<a href='https://www.sena.edu.co/' target='_blank'>SENA</a>",
    "prof" => "<a href='https://oferta.senasofiaplus.edu.co/sofia-oferta/' target='_blank'>oferta.senasofiaplus.edu.co/sofia-oferta/</a>",
    "prog" => "Professional skills training at SENA",
    "year" => "since 2017"
];

# Contact
$_contactsub = "And let's build something sick together.";
$_name = "Name";
$_email = "E-mail";
$_tphone = "[+country code] Phone number (Optional)";
$_subject = "Subject";
$_msg = "Message";
$_send = "LET'S TALK";
$_mail = "atrujillomateus@gmail.com";
$_mail_thanks = "Your message has been successfully sent.<br>We will contact you soon!";
$_mail_wrong = "There was an error sending the message.<br>Sorry for the inconvenience, please try again.";
