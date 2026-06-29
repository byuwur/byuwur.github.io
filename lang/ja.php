<?php
/*
 * Japanese UI strings.
 * Use trusted HTML only where the template intentionally prints raw content.
 */
$LANG = [
  // --- ルート ---
  'route.root' => $ROUTE_ROOT ?? '/',
  'route.home' => $ROUTE_HOME ?? 'home',
  'route.v1' => "/{$ROUTE_V1}",
  'route.resume' => "/{$ROUTE_RESUME}",
  'route.mnm' => "/{$ROUTE_MNM}",
  'route.cookies' => "/{$ROUTE_MNM}/{$ROUTE_COOKIES}",

  // --- ページ構造 ---
  'title.default' => '[Mateus] byUwUr — 役立つものを作ります',
  'loader.loading' => "<b>標準ビューを読み込み中...</b><br>読み込みが終わらない場合は <a href='/{$ROUTE_V1}' style='color:#0ae;'>基本ビューへ移動</a>",

  // --- プロフィールとヒーロー ---
  'profile.name_top' => '[Mateus] <span class=\'text-primary\'>byUwUr</span>',
  'profile.full_name' => 'Andrés Trujillo Mateus',
  'hero.im' => '私は',
  'hero.and_i' => '役立つものを作ります',
  'hero.in' => '',
  'hero.hello_world' => 'こんにちは、世界',

  // --- ナビゲーション ---
  'nav.about' => 'こんにちは、世界',
  'nav.resume' => '履歴書',
  'nav.contact' => 'お問い合わせ',
  'nav.skills' => 'スキル',
  'nav.portfolio' => 'ポートフォリオ',
  'nav.experience' => '経歴',
  'nav.education' => '学歴',

  // --- サイドバー ---
  'sidebar.toggle' => 'サイドバーメニューを切り替え',
  'sidebar.menu' => 'メニュー',
  'sidebar.logo_alt' => '[Mateus] byUwUr ロゴ',

  // --- 言語とテーマの操作 ---
  'language.selector' => '言語:',
  'theme.selector' => 'テーマ:',
  'theme.light' => 'ライト',
  'theme.dark' => 'ダーク',

  // --- 表示、フッター、操作 ---
  'view.modern' => '標準ではないHTMLを読み込む',
  'view.modern.title' => '標準ではないHTMLを読み込む (v2)',
  'footer.html' => "&copy;" . date("Y") . " Andrés Trujillo [Mateus] byUwUr<br><a href='/{$ROUTE_V1}'>基本HTMLを読み込む</a> | <a href='/{$ROUTE_MNM}/{$ROUTE_COOKIES}'>Cookieポリシー</a> | <a href='/{$ROUTE_MNM}'>MNM.team</a><br><i class='fas fa-heart'></i> で制作 by <a href='https://byuwur.co' target='_blank'>[Mateus] byUwUr</a>",
  'action.back' => '戻る',
  'action.ok' => '了解',
  'action.close' => '閉じる',

  // --- 自己紹介とSNS ---
  'about.description' => 'XAMP (Apache, MySQL, PHP)、React、React Native、Android向けJava、SQLデータベース設計を扱うフルスタックWeb開発者です。AWSとPythonも少し扱います。<br>英語とスペイン語に対応。2018年からプロとして活動し、2014年から写真・動画編集にも携わっています。<br>いつでも学び続け、必要なものを一緒に作るためにここにいます。',
  'social.linkedin.url' => 'https://linkedin.com/in/atrujillomateus',
  'social.github.url' => 'https://github.com/byuwur',
  'social.youtube.url' => 'https://youtube.com/byuwur',

  // --- ポートフォリオ ---
  'portfolio.items' => [
    [
      'title' => 'Easy SPA PHP',
      'ent' => 'byUwUr',
      'desc' => 'PHPで手作りしたSingle Page Application (SPA)フレームワーク。',
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
          'text' => 'デモ',
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
      'desc' => '配信用オーバーレイ向けのHTMLリソース。',
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
      'desc' => '簡単に組み込めるサイドバーコンポーネント。',
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
          'text' => 'デモ',
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
      'desc' => '簡単に組み込めるJSONビューアコンポーネント。',
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
          'text' => 'デモ',
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
      'desc' => 'Apacheまたはnginxサーバー向けのHTTPエラーコードページ。',
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
          'text' => 'デモ',
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
      'desc' => 'PHPプロジェクトにDropzoneを簡単に導入できます。',
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
          'text' => 'デモ',
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
      'desc' => '学校の成績管理のためのWebプラットフォーム。',
      'year' => '2019年から',
      'image' => '/img/work-sda.jpg',
      'class' => 'web android',
      'link' => [
        [
          'icon' => 'fas fa-play-circle',
          'text' => 'デモ',
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
      'desc' => 'コンピュータビジョンを使い、色の強度からレモンの熟度を分類します。',
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
          'text' => 'デモ',
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
      'desc' => '学術・研究カンファレンスを管理するためのプラットフォーム。',
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
      'desc' => 'コロンビアの人工芝コート向け予約管理プラットフォーム。',
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
      'desc' => '論文や卒業研究を保存するためのデジタルリポジトリの開発。',
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
          'text' => 'デモ',
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
      'desc' => '卒業論文や受理文書を保存するためのデジタルリポジトリの開発。',
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
      'desc' => '私のnginx設定ファイル。',
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
  // --- スキル ---
  'skills.code.title' => 'コード:',
  'skills.software.title' => 'ソフトウェア:',
  'skills.other.title' => 'その他:',
  'skills.other.items' => [
    'Web・モバイルアプリケーションの開発と設計',
    'SQLデータベースの設計とモデリング',
    'ICTアドバイス、コンサルティング、技術サポート',
    'モバイルファースト、クロスブラウザ、レスポンシブWeb',
    '写真・動画編集',
    'Gitによるバージョン管理',
  ],
  'skills.code.items' => [
    [
      'icon' => 'fab fa-php',
      'text' => 'PHP',
      'level' => '上級',
      'progress' => '88%',
    ],
    [
      'icon' => 'fas fa-database',
      'text' => 'MySQL',
      'level' => '上級',
      'progress' => '77%',
    ],
    [
      'icon' => 'fab fa-js',
      'text' => 'JavaScript & TypeScript',
      'level' => '上級',
      'progress' => '77%',
    ],
    [
      'icon' => 'fab fa-github',
      'text' => 'Git',
      'level' => '中級',
      'progress' => '66%',
    ],
    [
      'icon' => 'fab fa-react',
      'text' => 'React',
      'level' => '中級',
      'progress' => '66%',
    ],
    [
      'icon' => 'fab fa-react',
      'text' => 'React Native',
      'level' => '中級',
      'progress' => '66%',
    ],
    [
      'icon' => 'fab fa-html5',
      'text' => 'HTML',
      'level' => '上級',
      'progress' => '77%',
    ],
    [
      'icon' => 'fab fa-css3-alt',
      'text' => 'CSS',
      'level' => '上級',
      'progress' => '77%',
    ],
    [
      'icon' => 'fab fa-java',
      'text' => 'Java',
      'level' => '中級',
      'progress' => '66%',
    ],
    [
      'icon' => 'fab fa-python',
      'text' => 'Python',
      'level' => '初級',
      'progress' => '33%',
    ],
  ],
  'skills.software.items' => [
    [
      'icon' => 'fab fa-youtube',
      'text' => 'Vegas Pro',
      'level' => '上級',
      'progress' => '99%',
    ],
    [
      'icon' => 'fas fa-photo-video',
      'text' => 'Premiere Pro',
      'level' => '上級',
      'progress' => '77%',
    ],
    [
      'icon' => 'fas fa-photo-video',
      'text' => 'Photoshop',
      'level' => '上級',
      'progress' => '88%',
    ],
    [
      'icon' => 'fas fa-photo-video',
      'text' => 'Lightroom',
      'level' => '上級',
      'progress' => '88%',
    ],
    [
      'icon' => 'fab fa-youtube',
      'text' => 'Davinci Resolve',
      'level' => '中級',
      'progress' => '66%',
    ],
    [
      'icon' => 'fas fa-photo-video',
      'text' => 'After FX',
      'level' => '初級',
      'progress' => '33%',
    ],
    [
      'icon' => 'fas fa-cubes',
      'text' => 'Unity & Blender',
      'level' => '初級',
      'progress' => '22%',
    ],
  ],
  // --- 経歴 ---
  'experience.items' => [
    [
      'pos' => 'ソフトウェア開発者',
      'ent' => '<a href=\'https://vehikl.com/\' target=\'_blank\'>magnet360 2023 => Vehikl</a>',
      'desc' => '主にReact、React Native、AWS、PHPを使い、実装・サポート開発者として従事。',
      'time' => '2023年10月',
    ],
    [
      'pos' => 'ソフトウェア開発アナリスト',
      'ent' => '<a href=\'https://nxs.com.co/\' target=\'_blank\'>Nexos Software => iuvity</a>',
      'desc' => 'クライアントに合わせたツールを使い、実装・サポート開発者として従事。',
      'time' => '2022年8月 - 2024年2月',
    ],
    [
      'pos' => 'バックエンドWeb開発者',
      'ent' => '<a href=\'https://rivka.mx/\' target=\'_blank\'>Rivka.mx => Orbit Investments LLC</a>',
      'desc' => '主にPHPを中心に、MySQL、HTML5、CSS、JSも使いながら実装・サポート開発者として従事。',
      'time' => '2022年8月 - 2023年6月',
    ],
    [
      'pos' => 'Web開発: 成績管理プラットフォーム',
      'ent' => '<a href=\'https://semillasdealegriaespinal.com/\' target=\'_blank\'>Semillas de Alegría Espinal</a>',
      'desc' => '成績管理プラットフォーム。',
      'time' => '2019年から運用中',
    ],
    [
      'pos' => 'Web開発: ePayco決済処理',
      'ent' => '<a href=\'javascript:;\'>Comercializadora de Padilla – Espinal</a>',
      'desc' => 'ePayco決済処理。',
      'time' => '2020年7月 - 2020年12月',
    ],
    [
      'pos' => 'Web開発・Androidアプリ: Online Congress',
      'ent' => '<a href=\'https://itfip.edu.co\' target=\'_blank\'>ITFIP (Investigación) / Tesis de grado</a>',
      'desc' => 'カンファレンス管理ソフトウェア。',
      'time' => '2019年11月 - 2020年12月',
    ],
    [
      'pos' => 'Web開発・Androidアプリ: Resérvelapp',
      'ent' => '<a href=\'https://itfip.edu.co\' target=\'_blank\'>ITFIP (Investigación) / Tesis de grado</a>',
      'desc' => '予約管理ソフトウェア。',
      'time' => '2018年7月 - 2019年12月',
    ],
    [
      'pos' => 'Web開発: REDI - ITFIPデジタルリポジトリ / RENN - Normal de Naucalpánデジタルリポジトリ',
      'ent' => '<a href=\'https://itfip.edu.co\' target=\'_blank\'>ITFIP (Investigación) / Tesis de grado</a>',
      'desc' => 'デジタルリポジトリ。',
      'time' => '2017年7月 - 2018年1月',
    ],
    [
      'pos' => 'Web開発: MNM.team ランディングページポートフォリオ',
      'ent' => '<a href=\'https://byuwur.co/mnm.team\' target=\'_blank\'>MNM.team</a>',
      'desc' => 'Webポートフォリオページ。',
      'time' => '2018年7月 - 2018年12月',
    ],
    [
      'pos' => '機関向け映像ポストプロダクション',
      'ent' => '<a href=\'https://youtube.com/ITFIPoficial\' target=\'_blank\'>ITFIP [YouTube]</a> | <a href=\'https://facebook.com/ITFIPoficial\' target=\'_blank\'>ITFIP [Facebook]</a>',
      'desc' => '機関向けデジタルコンテンツ制作。',
      'time' => '2021年3月 - 2022年6月',
    ],
    [
      'pos' => '制作アシスタント',
      'ent' => '<a href=\'javascript:;\'>Producciones C&N</a>',
      'desc' => '配信マスター、映像制作、複数プロジェクトでの編集。',
      'time' => '2020年7月 - 2020年12月',
    ],
    [
      'pos' => 'ビデオ制作',
      'ent' => '<a href=\'https://youtube.com/byuwur\' target=\'_blank\'>[Mateus] byUwUr</a>',
      'desc' => 'デジタルコンテンツクリエイター。',
      'time' => '2014年から',
    ],
  ],
  // --- 学歴 ---
  'education.items' => [
    [
      'inst' => '<a href=\'https://itfip.edu.co/\' target=\'_blank\'>ITFIP</a>',
      'prof' => 'GPA: 4.0<small>/5.0</small> | 161122-0596750 TLM',
      'prog' => 'システム工学',
      'year' => '2021年3月',
    ],
    [
      'inst' => '<a href=\'https://platzi.com/p/atrujillomateus/\' target=\'_blank\'>PLATZI</a>',
      'prof' => '<a href=\'https://platzi.com/p/atrujillomateus/\' target=\'_blank\'>platzi.com/p/atrujillomateus/</a>',
      'prog' => 'Platziでのプロフェッショナルスキルトレーニング',
      'year' => '2022年から',
    ],
    [
      'inst' => '<a href=\'https://profile.edx.org/u/atrujillomateus\' target=\'_blank\'>EDX</a>',
      'prof' => '<a href=\'https://profile.edx.org/u/atrujillomateus\' target=\'_blank\'>profile.edx.org/u/atrujillomateus</a>',
      'prog' => 'edXでのプロフェッショナルスキルトレーニング',
      'year' => '2021年から',
    ],
    [
      'inst' => '<a href=\'https://www.crehana.com/users/atrujillomateus/\' target=\'_blank\'>CREHANA</a>',
      'prof' => '<a href=\'https://www.crehana.com/users/atrujillomateus/\' target=\'_blank\'>crehana.com/users/atrujillomateus/</a>',
      'prog' => 'Crehanaでのプロフェッショナルスキルトレーニング',
      'year' => '2021年から',
    ],
    [
      'inst' => '<a href=\'https://www.sena.edu.co/\' target=\'_blank\'>SENA</a>',
      'prof' => '<a href=\'https://oferta.senasofiaplus.edu.co/sofia-oferta/\' target=\'_blank\'>oferta.senasofiaplus.edu.co/sofia-oferta/</a>',
      'prog' => 'SENAでのプロフェッショナルスキルトレーニング',
      'year' => '2017年から',
    ],
  ],
  // --- お問い合わせ ---
  'contact.subtitle' => '一緒に最高のものを作りましょう。',
  'contact.form.name' => '名前',
  'contact.form.email' => 'メール',
  'contact.form.phone' => '[+国番号] 電話番号 (任意)',
  'contact.form.subject' => '件名',
  'contact.form.message' => 'メッセージ',
  'contact.form.send' => '話しましょう',
  'contact.mail' => 'atrujillomateus@gmail.com',
  'contact.mail.thanks' => 'メッセージを送信しました。<br>近日中にご連絡します。',
  'contact.mail.error' => '送信中にエラーが発生しました。<br>お手数ですが、もう一度お試しください。',
  'contact.goto_mnm.html' => "<a class='a-lang' href='/{$ROUTE_MNM}' custom-folder='true'>MNM<small>.team();</small> でもっと見る</a>",
  // --- メタデータ ---
  'meta.description' => 'ソフトウェア開発者 | 動画編集者',

  // --- 言語ラベル ---
  'language.spanish' => 'Español',
  'language.english' => 'English',
  'language.japanese' => '日本語',

  // --- テーマラベル ---
  'theme.light.title' => 'ライトテーマを使用',
  'theme.dark.title' => 'ダークテーマを使用',

  // --- 履歴書とカードのラベル ---
  'resume.es.title' => 'スペイン語の履歴書',
  'resume.en.title' => '英語の履歴書',
  'resume.es.alt' => 'コロンビアの国旗',
  'resume.en.alt' => '英国の国旗',
  'card.title' => 'デジタル名刺',

  // --- SNSラベル ---
  'social.linkedin' => 'LinkedIn プロフィールを開く',
  'social.github' => 'GitHub プロフィールを開く',
  'social.youtube' => 'YouTube チャンネルを開く',

  // --- アクセシビリティ ---
  'accessibility.open_panel' => 'アクセシビリティツールを開く',
  'accessibility.increase_text' => '文字サイズを大きくする',
  'accessibility.reset_text' => '文字サイズをリセット',
  'accessibility.decrease_text' => '文字サイズを小さくする',
  'accessibility.toggle_motion' => 'アニメーションを切り替え',
  'accessibility.dyslexia' => '読みやすいフォントを使用',
  'accessibility.word_spacing' => '単語間隔を広げる',
  'accessibility.highlight_links' => 'リンクを強調表示',
  'accessibility.high_contrast' => '高コントラストを切り替え',
  'accessibility.invert_colors' => '色を反転',
  'accessibility.grayscale' => 'グレースケールフィルターを使用',
  'accessibility.protanopia' => '1型色覚フィルターを使用',
  'accessibility.deuteranopia' => '2型色覚フィルターを使用',
  'accessibility.tritanopia' => '3型色覚フィルターを使用',
];
