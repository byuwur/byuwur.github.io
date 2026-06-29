<?php
/*
 * Texts in English.
 * Use trusted HTML only where the template intentionally prints raw content.
 */
$LANG = [
  // --- Routes ---
  'route.root' => $ROUTE_ROOT ?? '/',
  'route.home' => $ROUTE_HOME ?? 'home',
  'route.v1' => "/{$ROUTE_V1}",
  'route.resume' => "/{$ROUTE_RESUME}",
  'route.mnm' => "/{$ROUTE_MNM}",
  'route.cookies' => "/{$ROUTE_MNM}/{$ROUTE_COOKIES}",

  // --- Page shell ---
  'title.default' => '[Mateus] byUwUr — I create useful things',
  'loader.loading' => "<b>Loading standard view...</b><br>Still loading? <a href='/{$ROUTE_V1}' style='color:#0ae;'>Go to basic view</a>",

  // --- Profile and hero ---
  'profile.name_top' => '[Mateus] <span class=\'text-primary\'>byUwUr</span>',
  'profile.full_name' => 'Andrés Trujillo Mateus',
  'hero.im' => 'I\'m',
  'hero.and_i' => 'I create useful things',
  'hero.in' => 'in ',
  'hero.hello_world' => 'Hello, world',

  // --- Navigation ---
  'nav.about' => 'Hello, world',
  'nav.resume' => 'Résumé',
  'nav.contact' => 'Contact me',
  'nav.skills' => 'Skillset',
  'nav.portfolio' => 'Portfolio',
  'nav.experience' => 'Experience',
  'nav.education' => 'Education',

  // --- Sidebar ---
  'sidebar.toggle' => 'Toggle sidebar menu',
  'sidebar.menu' => 'menu',
  'sidebar.logo_alt' => '[Mateus] byUwUr logo',

  // --- Language and theme controls ---
  'language.selector' => 'Languages:',
  'theme.selector' => 'Themes:',
  'theme.light' => 'Light',
  'theme.dark' => 'Dark',

  // --- View, footer, and actions ---
  'view.modern' => 'load not so basic HTML',
  'view.modern.title' => 'load not so basic HTML (v2)',
  'footer.html' => "&copy;" . date("Y") . " Andrés Trujillo [Mateus] byUwUr<br><a href='/{$ROUTE_V1}'>load basic HTML</a> | <a href='/{$ROUTE_MNM}/{$ROUTE_COOKIES}'>cookie policy</a> | <a href='/{$ROUTE_MNM}'>MNM.team</a><br>Made with<i class='fas fa-heart'></i>by <a href='https://byuwur.co' target='_blank'>[Mateus] byUwUr</a>",
  'action.back' => 'Go back',
  'action.ok' => 'Understood',
  'action.close' => 'Close',

  // --- About and social links ---
  'about.description' => 'Full-stack web developer in XAMP (Apache, MySQL, PHP), React & React Native, native and hybrid Java programmer for Android, and SQL database designer, plus a bit of AWS & Python.<br>Fluent in English and Spanish. Professionally at work since 2018. Video and photo editor since 2014.<br>Always willing to learn. I am here for anything you need.',
  'social.linkedin.url' => 'https://linkedin.com/in/atrujillomateus',
  'social.github.url' => 'https://github.com/byuwur',
  'social.youtube.url' => 'https://youtube.com/byuwur',

  // --- Portfolio ---
  'portfolio.items' => [
    [
      'title' => 'Easy SPA PHP',
      'ent' => 'byUwUr',
      'desc' => 'Single Page Application (SPA) handmade framework with PHP.',
      'year' => '2024',
      'image' => '/img/work-spa.jpg',
      'class' => 'web',
      'link' => [
        [
          'icon' => 'fas fa-code',
          'text' => 'GitHub',
          'link' => 'https://github.com/byuwur/spa.php',
        ],
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Demo',
          'link' => 'https://byuwur.co/spa.php/',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-php',
          'text' => 'PHP',
        ],
        [
          'icon' => 'fab fa-js',
          'text' => 'JS',
        ],
        [
          'icon' => 'fab fa-css3',
          'text' => 'CSS',
        ],
        [
          'icon' => 'fab fa-html5',
          'text' => 'HTML',
        ],
      ],
    ],
    [
      'title' => 'STREAM.HTML',
      'ent' => 'byUwUr',
      'desc' => 'HTML resources for your streaming overlays.',
      'year' => '2024',
      'image' => '/img/work-stream.jpg',
      'class' => 'web',
      'link' => [
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Control',
          'link' => 'https://controller.byuwur.co',
        ],
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Popup',
          'link' => 'https://byuwur.co/stream.html/popup/index.html',
        ],
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Scene',
          'link' => 'https://byuwur.co/stream.html/main/index.html',
        ],
        [
          'icon' => 'fas fa-code',
          'text' => 'GitHub',
          'link' => 'https://github.com/byuwur/stream.html',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-js',
          'text' => 'JS',
        ],
        [
          'icon' => 'fab fa-css3',
          'text' => 'CSS',
        ],
        [
          'icon' => 'fab fa-html5',
          'text' => 'HTML',
        ],
      ],
    ],
    [
      'title' => 'Easy Sidebar Bootstrap',
      'ent' => 'byUwUr',
      'desc' => 'Easily integrable Sidebar component.',
      'year' => '2024',
      'image' => '/img/work-sidebar.jpg',
      'class' => 'web',
      'link' => [
        [
          'icon' => 'fas fa-code',
          'text' => 'GitHub',
          'link' => 'https://github.com/byuwur/easy-sidebar-bootstrap',
        ],
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Demo',
          'link' => 'https://codepen.io/byuwur/pen/VwJdWYL',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-js',
          'text' => 'JS',
        ],
        [
          'icon' => 'fab fa-css3',
          'text' => 'CSS',
        ],
        [
          'icon' => 'fab fa-html5',
          'text' => 'HTML',
        ],
      ],
    ],
    [
      'title' => 'Easy JSON viewer',
      'ent' => 'byUwUr',
      'desc' => 'Easily integrable JSON viewer component.',
      'year' => '2024',
      'image' => '/img/work-json.jpg',
      'class' => 'web',
      'link' => [
        [
          'icon' => 'fas fa-code',
          'text' => 'GitHub',
          'link' => 'https://github.com/byuwur/easy-json-viewer',
        ],
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Demo',
          'link' => 'https://codepen.io/byuwur/pen/ExBeOPR',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-js',
          'text' => 'JS',
        ],
        [
          'icon' => 'fab fa-css3',
          'text' => 'CSS',
        ],
        [
          'icon' => 'fab fa-html5',
          'text' => 'HTML',
        ],
      ],
    ],
    [
      'title' => 'Easy HTTP error page',
      'ent' => 'byUwUr',
      'desc' => 'HTTP error code page for your Apache or nginx server.',
      'year' => '2021',
      'image' => '/img/work-error.jpg',
      'class' => 'web',
      'link' => [
        [
          'icon' => 'fas fa-code',
          'text' => 'GitHub',
          'link' => 'https://github.com/byuwur/easy-server-http-error-page',
        ],
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Demo',
          'link' => 'https://byuwur.co/error',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-php',
          'text' => 'PHP',
        ],
        [
          'icon' => 'fab fa-js',
          'text' => 'JS',
        ],
        [
          'icon' => 'fab fa-css3',
          'text' => 'CSS',
        ],
        [
          'icon' => 'fab fa-html5',
          'text' => 'HTML',
        ],
      ],
    ],
    [
      'title' => 'Easy Dropzone PHP',
      'ent' => 'byUwUr',
      'desc' => 'Easily implement Dropzone in your PHP project.',
      'year' => '2020',
      'image' => '/img/work-dz.jpg',
      'class' => 'web',
      'link' => [
        [
          'icon' => 'fas fa-code',
          'text' => 'GitHub',
          'link' => 'https://github.com/byuwur/easy-dropzone-php',
        ],
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Demo',
          'link' => 'https://byuwur.co/_dropzone.php/index.php?id=1',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-php',
          'text' => 'PHP',
        ],
        [
          'icon' => 'fab fa-js',
          'text' => 'JS',
        ],
        [
          'icon' => 'fab fa-css3',
          'text' => 'CSS',
        ],
        [
          'icon' => 'fab fa-html5',
          'text' => 'HTML',
        ],
      ],
    ],
    [
      'title' => 'SDA Espinal - grading platform',
      'ent' => 'Liceo Moderno Semillas de Alegría - Espinal',
      'desc' => 'Web platform for managing grades in schools.',
      'year' => 'Since 2019',
      'image' => '/img/work-sda.jpg',
      'class' => 'web android',
      'link' => [
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Demo',
          'link' => 'https://semillasdealegriaespinal.com',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-php',
          'text' => 'PHP',
        ],
        [
          'icon' => 'fas fa-database',
          'text' => 'MySQL',
        ],
        [
          'icon' => 'fab fa-js',
          'text' => 'JS',
        ],
        [
          'icon' => 'fab fa-css3',
          'text' => 'CSS',
        ],
        [
          'icon' => 'fab fa-html5',
          'text' => 'HTML',
        ],
        [
          'icon' => 'fab fa-aws',
          'text' => 'AWS',
        ],
      ],
    ],
    [
      'title' => 'LimonTech - lemon detector',
      'ent' => 'Expo - Winner of Bootcamp: ICT for agriculture',
      'desc' => 'Classifies the ripeness of lemons according to their chromatic intensity using artificial vision.',
      'year' => '2017',
      'image' => '/img/work-limontech.jpg',
      'class' => 'python',
      'link' => [
        [
          'icon' => 'fas fa-code',
          'text' => 'GitHub',
          'link' => 'https://github.com/byuwur/limontech.py',
        ],
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Demo',
          'link' => 'https://youtu.be/RNQTSueIa-8',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-python',
          'text' => 'Python',
        ],
        [
          'icon' => 'fas fa-eye',
          'text' => 'OpenCV',
        ],
        [
          'icon' => 'fas fa-robot',
          'text' => 'Arduino',
        ],
      ],
    ],
    [
      'title' => 'Online Congress - software for congresses',
      'ent' => 'ITFIP - Mención meritoria',
      'desc' => 'Platform for managing institutional and research conferences.',
      'year' => '2019',
      'image' => '/img/work-oc.jpg',
      'class' => 'web android',
      'link' => [
        [
          'icon' => 'fab fa-github',
          'text' => 'Web',
          'link' => 'https://github.com/byuwur/onlinecongress.com.co',
        ],
        [
          'icon' => 'fab fa-github',
          'text' => 'Android',
          'link' => 'https://github.com/byuwur/co.com.onlinecongress',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-php',
          'text' => 'PHP',
        ],
        [
          'icon' => 'fas fa-database',
          'text' => 'MySQL',
        ],
        [
          'icon' => 'fab fa-js',
          'text' => 'JS',
        ],
        [
          'icon' => 'fab fa-css3',
          'text' => 'CSS',
        ],
        [
          'icon' => 'fab fa-html5',
          'text' => 'HTML',
        ],
        [
          'icon' => 'fab fa-java',
          'text' => 'Java',
        ],
      ],
    ],
    [
      'title' => 'Resérvelapp - software for reservations',
      'ent' => 'ITFIP - Mención meritoria',
      'desc' => 'Reservation management platform for synthetic courts in Colombia.',
      'year' => '2018',
      'image' => '/img/work-reserv.jpg',
      'class' => 'web android',
      'link' => [
        [
          'icon' => 'fab fa-github',
          'text' => 'Web',
          'link' => 'https://github.com/byuwur/reservelapp.com',
        ],
        [
          'icon' => 'fab fa-github',
          'text' => 'Android',
          'link' => 'https://github.com/byuwur/com.reservelapp',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-php',
          'text' => 'PHP',
        ],
        [
          'icon' => 'fas fa-database',
          'text' => 'MySQL',
        ],
        [
          'icon' => 'fab fa-js',
          'text' => 'JS',
        ],
        [
          'icon' => 'fab fa-css3',
          'text' => 'CSS',
        ],
        [
          'icon' => 'fab fa-html5',
          'text' => 'HTML',
        ],
        [
          'icon' => 'fab fa-java',
          'text' => 'Java',
        ],
      ],
    ],
    [
      'title' => 'REDI - ITFIP Digital Repo.',
      'ent' => 'ITFIP - Meritory mention',
      'desc' => 'Development of a digital repository for the preservation of monographs and degree theses.',
      'year' => '2017',
      'image' => '/img/work-redi.jpg',
      'class' => 'web',
      'link' => [
        [
          'icon' => 'fas fa-code',
          'text' => 'GitHub',
          'link' => 'https://github.com/byuwur/redi.com',
        ],
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'Demo',
          'link' => 'https://repositorio.itfip.edu.co/',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-java',
          'text' => 'JSP',
        ],
      ],
    ],
    [
      'title' => 'RENN - Normal de Naucalpán Digital Repo.',
      'ent' => 'ITFIP - Meritory mention',
      'desc' => 'Development of a digital repository for the preservation of undergraduate theses and reception documents.',
      'year' => '2017',
      'image' => '/img/work-renn.jpg',
      'class' => 'web',
      'link' => [
        [
          'icon' => 'fas fa-code',
          'text' => 'GitHub',
          'link' => 'https://github.com/byuwur/renn.com',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fab fa-java',
          'text' => 'JSP',
        ],
      ],
    ],
    [
      'title' => 'nginx Config',
      'ent' => 'byUwUr',
      'desc' => 'My nginx configuration files.',
      'year' => '2023',
      'image' => '/img/work-nginx.jpg',
      'class' => 'web',
      'link' => [
        [
          'icon' => 'fas fa-code',
          'text' => 'GitHub',
          'link' => 'https://github.com/byuwur/nginx-configurations',
        ],
      ],
      'tech' => [
        [
          'icon' => 'fas fa-terminal',
          'text' => 'Shell',
        ],
      ],
    ],
  ],
  // --- Skills ---
  'skills.code.title' => 'Coding:',
  'skills.software.title' => 'Software:',
  'skills.other.title' => 'And other things:',
  'skills.other.items' => [
    'Development & Design of web and mobile applications',
    'Design and modeling of SQL databases',
    'ICT advisory and consultancies, technical support and help',
    'Mobile-first, cross-browser and responsive webs',
    'Photo and video editing',
    'Git version control',
  ],
  'skills.code.items' => [
    [
      'icon' => 'fab fa-php',
      'text' => 'PHP',
      'level' => 'Advanced',
      'progress' => '88%',
    ],
    [
      'icon' => 'fas fa-database',
      'text' => 'MySQL',
      'level' => 'Advanced',
      'progress' => '77%',
    ],
    [
      'icon' => 'fab fa-js',
      'text' => 'JavaScript & TypeScript',
      'level' => 'Advanced',
      'progress' => '77%',
    ],
    [
      'icon' => 'fab fa-github',
      'text' => 'Git',
      'level' => 'Intermediate',
      'progress' => '66%',
    ],
    [
      'icon' => 'fab fa-react',
      'text' => 'React',
      'level' => 'Intermediate',
      'progress' => '66%',
    ],
    [
      'icon' => 'fab fa-react',
      'text' => 'React Native',
      'level' => 'Intermediate',
      'progress' => '66%',
    ],
    [
      'icon' => 'fab fa-html5',
      'text' => 'HTML',
      'level' => 'Advanced',
      'progress' => '77%',
    ],
    [
      'icon' => 'fab fa-css3-alt',
      'text' => 'CSS',
      'level' => 'Advanced',
      'progress' => '77%',
    ],
    [
      'icon' => 'fab fa-java',
      'text' => 'Java',
      'level' => 'Intermediate',
      'progress' => '66%',
    ],
    [
      'icon' => 'fab fa-python',
      'text' => 'Python',
      'level' => 'Basic',
      'progress' => '33%',
    ],
  ],
  'skills.software.items' => [
    [
      'icon' => 'fab fa-youtube',
      'text' => 'Vegas Pro',
      'level' => 'Advanced',
      'progress' => '99%',
    ],
    [
      'icon' => 'fas fa-photo-video',
      'text' => 'Premiere Pro',
      'level' => 'Advanced',
      'progress' => '77%',
    ],
    [
      'icon' => 'fas fa-photo-video',
      'text' => 'Photoshop',
      'level' => 'Advanced',
      'progress' => '88%',
    ],
    [
      'icon' => 'fas fa-photo-video',
      'text' => 'Lightroom',
      'level' => 'Advanced',
      'progress' => '88%',
    ],
    [
      'icon' => 'fab fa-youtube',
      'text' => 'Davinci Resolve',
      'level' => 'Intermediate',
      'progress' => '66%',
    ],
    [
      'icon' => 'fas fa-photo-video',
      'text' => 'After FX',
      'level' => 'Basic',
      'progress' => '33%',
    ],
    [
      'icon' => 'fas fa-cubes',
      'text' => 'Unity & Blender',
      'level' => 'Basic',
      'progress' => '22%',
    ],
  ],
  // --- Experience ---
  'experience.items' => [
    [
      'pos' => 'SOFTWARE DEVELOPER',
      'ent' => '<a href=\'https://vehikl.com/\' target=\'_blank\'>magnet360 2023 => Vehikl</a>',
      'desc' => 'Performed as an implementation and support developer using mainly React, React Native, AWS & PHP.',
      'time' => 'October 2023',
    ],
    [
      'pos' => 'SOFTWARE DEVELOPMENT ANALYST',
      'ent' => '<a href=\'https://nxs.com.co/\' target=\'_blank\'>Nexos Software => iuvity</a>',
      'desc' => 'Performed as an implementation and support developer using tools tailored to the client.',
      'time' => 'August 2022 - Febraury 2024',
    ],
    [
      'pos' => 'BACKEND WEB DEVELOPER',
      'ent' => '<a href=\'https://rivka.mx/\' target=\'_blank\'>Rivka.mx => Orbit Investments LLC</a>',
      'desc' => 'Performed as an implementation and support developer using mainly PHP, along with MySQL, HTML5, CSS & JS.',
      'time' => 'August 2022 - June 2023',
    ],
    [
      'pos' => 'WEB DEVELOPMENT: GRADING PLATFORM',
      'ent' => '<a href=\'https://semillasdealegriaespinal.com/\' target=\'_blank\'>Semillas de Alegría Espinal</a>',
      'desc' => 'Grading platform.',
      'time' => 'operational since 2019',
    ],
    [
      'pos' => 'WEB DEVELOPMENT: EPAYCO PAYMENT PROCESSOR',
      'ent' => '<a href=\'javascript:;\'>Comercializadora de Padilla – Espinal</a>',
      'desc' => 'ePayco payment processor.',
      'time' => 'July 2020 - December 2020',
    ],
    [
      'pos' => 'WEB DEVELOPMENT & ANDROID APP: ONLINE CONGRESS',
      'ent' => '<a href=\'https://itfip.edu.co\' target=\'_blank\'>ITFIP (Investigación) / Tesis de grado</a>',
      'desc' => 'Software for congresses.',
      'time' => 'November 2019 - December 2020',
    ],
    [
      'pos' => 'WEB DEVELOPMENT & ANDROID APP: RESÉRVELAPP',
      'ent' => '<a href=\'https://itfip.edu.co\' target=\'_blank\'>ITFIP (Investigación) / Tesis de grado</a>',
      'desc' => 'Software for reservations.',
      'time' => 'July 2018 - December 2019',
    ],
    [
      'pos' => 'WEB DEVELOPMENT: REDI - ITFIP DIGITAL REPO & RENN - NORMAL DE NAUCALPÁN DIGITAL REPO',
      'ent' => '<a href=\'https://itfip.edu.co\' target=\'_blank\'>ITFIP (Investigación) / Tesis de grado</a>',
      'desc' => 'Digital repositories.',
      'time' => 'July 2017 - January 2018',
    ],
    [
      'pos' => 'WEB DEVELOPMENT: MNM.TEAM - LANDING PAGE PORTFOLIO',
      'ent' => '<a href=\'https://byuwur.co/mnm.team\' target=\'_blank\'>MNM.team</a>',
      'desc' => 'Web page portfolio.',
      'time' => 'July 2018 - December 2018',
    ],
    [
      'pos' => 'INSTITUTIONAL AUDIOVISUAL POST-PRODUCTION',
      'ent' => '<a href=\'https://youtube.com/ITFIPoficial\' target=\'_blank\'>ITFIP [YouTube]</a> | <a href=\'https://facebook.com/ITFIPoficial\' target=\'_blank\'>ITFIP [Facebook]</a>',
      'desc' => 'Institucional digital content creation.',
      'time' => 'March 2021 - June 2022',
    ],
    [
      'pos' => 'PRODUCTION ASSISTANT',
      'ent' => '<a href=\'javascript:;\'>Producciones C&N</a>',
      'desc' => 'Master in transmission, master in video production and editing various projects.',
      'time' => 'July 2020 - December 2020',
    ],
    [
      'pos' => 'VIDEOGRAPHY',
      'ent' => '<a href=\'https://youtube.com/byuwur\' target=\'_blank\'>[Mateus] byUwUr</a>',
      'desc' => 'Digital content creator.',
      'time' => 'since 2014',
    ],
  ],
  // --- Education ---
  'education.items' => [
    [
      'inst' => '<a href=\'https://itfip.edu.co/\' target=\'_blank\'>ITFIP</a>',
      'prof' => 'GPA: 4.0<small>/5.0</small> | 161122-0596750 TLM',
      'prog' => 'Systems Engineering',
      'year' => 'March 2021',
    ],
    [
      'inst' => '<a href=\'https://platzi.com/p/atrujillomateus/\' target=\'_blank\'>PLATZI</a>',
      'prof' => '<a href=\'https://platzi.com/p/atrujillomateus/\' target=\'_blank\'>platzi.com/p/atrujillomateus/</a>',
      'prog' => 'Professional skills training at Platzi',
      'year' => 'since 2022',
    ],
    [
      'inst' => '<a href=\'https://profile.edx.org/u/atrujillomateus\' target=\'_blank\'>EDX</a>',
      'prof' => '<a href=\'https://profile.edx.org/u/atrujillomateus\' target=\'_blank\'>profile.edx.org/u/atrujillomateus</a>',
      'prog' => 'Professional skills training at edX',
      'year' => 'sinc 2021',
    ],
    [
      'inst' => '<a href=\'https://www.crehana.com/users/atrujillomateus/\' target=\'_blank\'>CREHANA</a>',
      'prof' => '<a href=\'https://www.crehana.com/users/atrujillomateus/\' target=\'_blank\'>crehana.com/users/atrujillomateus/</a>',
      'prog' => 'Professional skills training at Crehana',
      'year' => 'since 2021',
    ],
    [
      'inst' => '<a href=\'https://www.sena.edu.co/\' target=\'_blank\'>SENA</a>',
      'prof' => '<a href=\'https://oferta.senasofiaplus.edu.co/sofia-oferta/\' target=\'_blank\'>oferta.senasofiaplus.edu.co/sofia-oferta/</a>',
      'prog' => 'Professional skills training at SENA',
      'year' => 'since 2017',
    ],
  ],
  // --- Contact ---
  'contact.subtitle' => 'And let\'s build something sick together.',
  'contact.form.name' => 'Name',
  'contact.form.email' => 'E-mail',
  'contact.form.phone' => '[+country code] Phone number (Optional)',
  'contact.form.subject' => 'Subject',
  'contact.form.message' => 'Message',
  'contact.form.send' => 'LET\'S TALK',
  'contact.mail' => 'atrujillomateus@gmail.com',
  'contact.mail.thanks' => 'Your message has been successfully sent.<br>We will contact you soon!',
  'contact.mail.error' => 'There was an error sending the message.<br>Sorry for the inconvenience, please try again.',
  'contact.goto_mnm.html' => "<a class='a-lang' href='/{$ROUTE_MNM}' custom-folder='true'>See more at MNM<small>.team();</small></a>",
  // --- Metadata ---
  'meta.description' => 'Software developer | Video editor',

  // --- Language labels ---
  'language.spanish' => 'Español',
  'language.english' => 'English',
  'language.japanese' => '日本語',

  // --- Theme labels ---
  'theme.light.title' => 'Use light theme',
  'theme.dark.title' => 'Use dark theme',

  // --- Resume and card labels ---
  'resume.es.title' => 'Résumé in Spanish',
  'resume.en.title' => 'Résumé in English',
  'resume.es.alt' => 'Spanish flag',
  'resume.en.alt' => 'United Kingdom flag',
  'card.title' => 'Digital business card',

  // --- Social labels ---
  'social.linkedin' => 'Open LinkedIn profile',
  'social.github' => 'Open GitHub profile',
  'social.youtube' => 'Open YouTube channel',

  // --- Accessibility ---
  'accessibility.open_panel' => 'Open accessibility tools',
  'accessibility.increase_text' => 'Increase text size',
  'accessibility.reset_text' => 'Reset text size',
  'accessibility.decrease_text' => 'Decrease text size',
  'accessibility.toggle_motion' => 'Toggle animations',
  'accessibility.dyslexia' => 'Use dyslexia-friendly font',
  'accessibility.word_spacing' => 'Increase word spacing',
  'accessibility.highlight_links' => 'Highlight links',
  'accessibility.high_contrast' => 'Toggle high contrast',
  'accessibility.invert_colors' => 'Invert colors',
  'accessibility.grayscale' => 'Use grayscale filter',
  'accessibility.protanopia' => 'Use protanopia filter',
  'accessibility.deuteranopia' => 'Use deuteranopia filter',
  'accessibility.tritanopia' => 'Use tritanopia filter',
];
