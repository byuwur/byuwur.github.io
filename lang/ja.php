<?php
/*
 * Japanese UI strings.
 * Use trusted HTML only where the template intentionally prints raw content.
 */
$LANG = [
  // --- Misc ---
  "years" => "年",
  // --- ルート ---
  "route.root" => $ROUTE_ROOT ?? "/",
  "route.home" => $ROUTE_HOME ?? "home",
  "route.v1" => "/{$ROUTE_V1}",
  "route.resume" => "/{$ROUTE_RESUME}",
  "route.mnm" => "/{$ROUTE_MNM}",
  "route.cookies" => "/{$ROUTE_MNM}/{$ROUTE_COOKIES}",
  // --- ページ構造 ---
  "title.default" => "[Mateus] byUwUr = 役立つものを作ります",
  "loader.loading" => "<b>標準ビューを読み込み中...</b><br>読み込みが終わらない場合は <a href='/{$ROUTE_V1}' style='color:#0ae;'>基本ビューへ移動</a>",
  // --- プロフィールとヒーロー ---
  "profile.name_top" => "[Mateus] <span class='text-primary'>byUwUr</span>",
  "profile.full_name" => "Andrés Trujillo Mateus",
  "hero.im" => "私は",
  "hero.and_i" => "役立つものを作ります",
  "hero.in" => "",
  "hero.hello_world" => "こんにちは、世界",
  // --- ナビゲーション ---
  "nav.about" => "こんにちは、世界",
  "nav.resume" => "履歴書",
  "nav.contact" => "お問い合わせ",
  "nav.skills" => "スキル",
  "nav.portfolio" => "ポートフォリオ",
  "nav.experience" => "経歴",
  "nav.education" => "学歴",
  // --- サイドバー ---
  "sidebar.toggle" => "サイドバーメニューを切り替え",
  "sidebar.menu" => "menu",
  "sidebar.logo_alt" => "[Mateus] byUwUr ロゴ",
  // --- 言語とテーマの操作 ---
  "language.selector" => "言語:",
  "theme.selector" => "テーマ:",
  "theme.light" => "ライト",
  "theme.dark" => "ダーク",
  // --- 表示、フッター、操作 ---
  "view.modern" => "標準ではないHTMLを読み込む",
  "view.modern.title" => "標準ではないHTMLを読み込む (v2)",
  "footer.html" =>
    "&copy;" .
    date("Y") .
    " Andrés Trujillo [Mateus] byUwUr<br>
    <!-- <a href='/{$ROUTE_V1}'>基本HTMLを読み込む</a> | -->
    <a href='/{$ROUTE_COOKIES}'>Cookieポリシー</a>
    <br><i class='fas fa-heart'></i> で制作 <a href='https://byuwur.co' target='_blank'>[Mateus] byUwUr</a>",
  "action.back" => "戻る",
  "action.ok" => "了解",
  "action.close" => "閉じる",
  // --- 自己紹介とSNS ---
  "about.description" =>
    "現在、<a href='https://vehikl.com' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/vehikl.png'/>Vehikl </a>にてチームリードとして勤務しています。<br>
    2018年からWebおよびモバイルソリューションの開発・デプロイ・運用サポートに携わってきた、バイリンガルのシステムエンジニアです。2014年からは映像制作の経験も積んできました。<br>
    シンプルであること自体が十分に難しい。複雑なワークフローをより扱いやすくする、堅牢で信頼性の高いツールを作ることを大切にしています。役に立つものを作ります。<br>
    フルスタック開発、クライアント向け導入支援、本番環境のサポート、技術デリバリーまで幅広く経験しており、React、React Native、PHP、MySQL、AWSを実務で扱ってきました。<br>
    目的とインパクトを重視したソフトウェア開発に取り組んでおり、映像制作やライブ配信の経験も活かしています。",
  "social.linkedin.url" => "https://linkedin.com/in/atrujillomateus",
  "social.github.url" => "https://github.com/byuwur",
  "social.youtube.url" => "https://youtube.com/byuwur",
  // --- ポートフォリオ ---
  "portfolio.items" => [
    [
      "title" => "Stream.FGC",
      "ent" => "byUwUr",
      "desc" => "格闘ゲームトーナメントを管理するためのアプリ。",
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
      "desc" => "PHPで手作りしたSingle Page Application (SPA)フレームワーク。",
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
          "text" => "デモ",
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
      "desc" => "配信用オーバーレイ向けのHTMLリソース。",
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
      "title" => "Easy Sidebar Bootstrap",
      "ent" => "byUwUr",
      "desc" => "簡単に組み込めるサイドバーコンポーネント。",
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
          "text" => "デモ",
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
      "desc" => "簡単に組み込めるJSONビューアコンポーネント。",
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
          "text" => "デモ",
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
      "desc" => "Apacheまたはnginxサーバー向けのHTTPエラーコードページ。",
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
          "text" => "デモ",
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
      "desc" => "PHPプロジェクトにDropzoneを簡単に導入できます。",
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
          "text" => "デモ",
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
      "desc" => "学校の成績管理のためのWebプラットフォーム。",
      "year" => "2019年から",
      "image" => "/img/work/sda.jpg",
      "class" => "web android",
      "link" => [
        [
          "icon" => "fas fa-play-circle",
          "text" => "デモ",
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
      "desc" => "コンピュータビジョンを使い、色の強度からレモンの熟度を分類します。",
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
          "text" => "デモ",
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
      "desc" => "学術・研究カンファレンスを管理するためのプラットフォーム。",
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
      "desc" => "コロンビアの人工芝コート向け予約管理プラットフォーム。",
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
      "desc" => "論文や卒業研究を保存するためのデジタルリポジトリの開発。",
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
          "text" => "デモ",
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
      "desc" => "卒業論文や受理文書を保存するためのデジタルリポジトリの開発。",
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
      "desc" => "私のnginx設定ファイル。",
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
  // --- スキル ---
  "skills.sections" => [
    [
      "icon" => "fas fa-server",
      "title" => "Web・バックエンド",
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
      "title" => "フロントエンド・デスクトップ・モバイル",
      "items" => [
        ["icon" => "fab fa-react", "text" => "React", ...calculate_skill(2022)],
        ["icon" => "fab fa-react", "text" => "React Native", ...calculate_skill(2023)],
        ["icon" => "fas fa-mobile-screen-button", "text" => "Expo", ...calculate_skill(2023)],
        ["icon" => "fab fa-golang", "text" => "Wails (Go)", ...calculate_skill(2025, 75)],
        ["icon" => "fab fa-python", "text" => "Python", ...calculate_skill(2018, 55)],
        ["icon" => "fab fa-java", "text" => "Java", ...calculate_skill(2018, 55)],
        //["icon" => "fab fa-android", "text" => "Androidネイティブ開発", ...calculate_skill(2018, 55)],
      ],
    ],
    [
      "icon" => "fas fa-cloud-arrow-up",
      "title" => "クラウド・ソフトウェアデリバリー",
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
      "title" => "導入・サポート",
      "items" => [
        ["icon" => "fas fa-user-gear", "text" => "クライアント導入", ...calculate_skill(2019)],
        ["icon" => "fas fa-headset", "text" => "アプリケーション・本番環境サポート", ...calculate_skill(2020)],
        ["icon" => "fas fa-clipboard-list", "text" => "要件分析", ...calculate_skill(2021)],
        ["icon" => "fas fa-screwdriver-wrench", "text" => "トラブルシューティング", ...calculate_skill(2019)],
        ["icon" => "fas fa-file-lines", "text" => "技術文書", ...calculate_skill(2022)],
        ["icon" => "fas fa-people-group", "text" => "アジャイル開発", ...calculate_skill(2019)],
      ],
    ],*/
    [
      "icon" => "fas fa-photo-film",
      "title" => "映像・メディア",
      "items" => [
        ["icon" => "fas fa-clapperboard", "text" => "DaVinci Resolve", ...calculate_skill(2022)],
        ["icon" => "fas fa-film", "text" => "Premiere Pro", ...calculate_skill(2021)],
        ["icon" => "fas fa-video", "text" => "Vegas Pro", ...calculate_skill(2014)],
        ["icon" => "fas fa-image", "text" => "Photoshop", ...calculate_skill(2021)],
        ["icon" => "fas fa-sliders", "text" => "Lightroom", ...calculate_skill(2021)],
        ["icon" => "fas fa-record-vinyl", "text" => "OBS Studio", ...calculate_skill(2020)],
        //["icon" => "fas fa-scissors", "text" => "動画編集", ...calculate_skill(2014)],
        //["icon" => "fas fa-video", "text" => "映像撮影", ...calculate_skill(2014)],
        //["icon" => "fas fa-camera", "text" => "写真撮影", ...calculate_skill(2021)],
        //["icon" => "fas fa-satellite-dish", "text" => "ライブ配信", ...calculate_skill(2020)],
        //["icon" => "fas fa-tower-broadcast", "text" => "放送オペレーション", ...calculate_skill(2021)],
      ],
    ],
  ],
  // --- 職務経験 ---
  "experience.items" => [
    [
      "pos" => "チームリード / ソフトウェア開発者",
      "ent" => "<a href='https://vehikl.com' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/vehikl.png'/>Vehikl</a>（<a href='https://magnet360.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/magnet360.png'/>Magnet360</a> 経由）",
      "desc" => "ソフトウェア開発者からチームリードへ昇進し、3名の開発者を率いながら、要件定義・ソリューション設計からQA、リリース、本番環境サポートまで、クライアント向けデリバリーを一貫して担当。あわせて、AWS上のTypeScriptサーバーレスシステムの開発・最適化を行い、開発スピード、コード品質、継続的なシステム改善のバランスを図っています。",
      "time" => "2023年10月 - 現在",
    ],
    [
      "pos" => "WEB開発：成績管理プラットフォーム",
      "ent" => "<i class='fas fa-building'></i><a href='https://semillasdealegriaespinal.com/' target='_blank'>Semillas de Alegría Espinal</a>",
      "desc" => "年間約400名の生徒を対象に、レポート作成や管理業務を自動化するPHP製の成績管理プラットフォームを開発し、現在も保守・運用しています。",
      "time" => "2019年 - 現在",
    ],
    [
      "pos" => "ソフトウェア開発アナリスト - ハイブリッドモバイル",
      "ent" => "<a href='https://iuvity.com' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/iuvity.png'/>Iuvity</a>（<a href='https://nxs.com.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/nexos.png'/>Nexos</a> 経由）",
      "desc" => "独自のローコードツールを使用し、銀行クライアント向けの主要なフロントエンド機能および本番環境での不具合修正を担当。変化の多い環境において、取引内容の分かりやすさ、ユーザビリティ、信頼性の向上に貢献しました。",
      "time" => "2022年8月 - 2024年2月",
    ],
    [
      "pos" => "バックエンドWeb開発者",
      "ent" => "<a href='https://orbitinvestments.com/' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/orbit_investments.png'/>Orbit Investments</a>（<a href='https://rivka.io' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/rivka.png'/>Rivka</a> 経由）",
      "desc" => "半径、ポリゴン、ZIPコード、郡による検索に対応した地理空間不動産検索システムを開発。また、PHP/MySQLプラットフォームの機能追加、トラブルシューティング、緊急修正を通じて、既存システムの拡張および運用支援を行いました。",
      "time" => "2022年8月 - 2023年6月",
    ],
    [
      "pos" => "映像プロデューサー - 広報・コミュニケーション",
      "ent" => "<a href='https://uniespinal.edu.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/uniespinal.png'/>UniEspinal</a>（旧 ITFIP）",
      "desc" => "4万人以上の大学コミュニティを対象に、映像撮影、写真撮影、編集、ライブ制作を含む100本以上の動画、配信、キャンペーンの制作・運営を担当しました。",
      "time" => "2021年3月 - 2022年6月",
    ],
    [
      "pos" => "映像プロデューサー / ストリーミングマスター",
      "ent" => "<i class='fas fa-building'></i><a href='javascript:;'>Producciones C&N</a>",
      "desc" => "エンターテインメント、企業イベント、ストリーミング案件において、ライブおよび収録映像の制作、編集、オペレーションを担当しました。",
      "time" => "2020年7月 - 2020年12月",
    ],
  ],
  // --- 学歴 ---
  "education.items" => [
    [
      "inst" => "<a href='https://uniespinal.edu.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/uniespinal.png'/>UniEspinal</a>（旧 ITFIP）",
      "prof" => "GPA: 4.1<small>/5.0</small> | 資格登録番号: 161122-0596750 TLM",
      "prog" => "システム工学",
      "year" => "<small>卒業：</small>2021年3月",
    ],
    [
      "inst" => "<a href='https://platzi.com/p/atrujillomateus/' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/platzi.png'/>Platzi</a>",
      "prof" => "<a href='https://platzi.com/p/atrujillomateus/' target='_blank'>platzi.com/p/atrujillomateus/</a>",
      "prog" => "テクノロジーおよび専門分野における認定コース 540時間",
      "year" => "2021年 - 現在",
    ],
    /* [
      "inst" => "<a href='https://profile.edx.org/u/atrujillomateus' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/edx.png'/>EDX</a>",
      "prof" => "<a href='https://profile.edx.org/u/atrujillomateus' target='_blank'>profile.edx.org/u/atrujillomateus</a>",
      "prog" => "認定オンラインコース 60時間",
      "year" => "2021年 - 現在",
    ], */
    /* [
      "inst" => "<a href='https://sena.edu.co' target='_blank'><img class='inline-logo' src='{$HOME_PATH}/img/icons/sena.png'/>SENA</a>",
      "prof" => "<a href='https://oferta.senasofiaplus.edu.co/sofia-oferta/' target='_blank'>oferta.senasofiaplus.edu.co/sofia-oferta/</a>",
      "prog" => "補完的な技術研修 240時間",
      "year" => "2017年 - 現在",
    ], */
  ],
  // --- お問い合わせ ---
  "contact.subtitle" => "一緒に最高のものを作りましょう。",
  "contact.form.name" => "名前",
  "contact.form.email" => "メール",
  "contact.form.phone" => "[+国番号] 電話番号 (任意)",
  "contact.form.subject" => "件名",
  "contact.form.message" => "メッセージ",
  "contact.form.send" => "話しましょう",
  "contact.mail" => "atrujillomateus@gmail.com",
  "contact.mail.thanks" => "メッセージを送信しました。<br>近日中にご連絡します。",
  "contact.mail.error" => "送信中にエラーが発生しました。<br>お手数ですが、もう一度お試しください。",
  // --- メタデータ ---
  "meta.description" => "ソフトウェア開発者 | 動画編集者",
  // --- 言語ラベル ---
  "language.spanish" => "Español",
  "language.english" => "English",
  "language.japanese" => "日本語",
  // --- テーマラベル ---
  "theme.light.title" => "ライトテーマを使用",
  "theme.dark.title" => "ダークテーマを使用",
  // --- 履歴書とカードのラベル ---
  "resume.es.title" => "CV en Español",
  "resume.en.title" => "English Résumé",
  "resume.es.alt" => "コロンビアの国旗",
  "resume.en.alt" => "英国の国旗",
  "card.title" => "デジタル名刺",
  // --- SNSラベル ---
  "social.linkedin" => "LinkedIn プロフィールを開く",
  "social.github" => "GitHub プロフィールを開く",
  "social.youtube" => "YouTube チャンネルを開く",
  // --- アクセシビリティ ---
  "accessibility.open_panel" => "アクセシビリティツールを開く",
  "accessibility.increase_text" => "文字サイズを大きくする",
  "accessibility.reset_text" => "文字サイズをリセット",
  "accessibility.decrease_text" => "文字サイズを小さくする",
  "accessibility.toggle_motion" => "アニメーションを切り替え",
  "accessibility.dyslexia" => "読みやすいフォントを使用",
  "accessibility.word_spacing" => "単語間隔を広げる",
  "accessibility.highlight_links" => "リンクを強調表示",
  "accessibility.high_contrast" => "高コントラストを切り替え",
  "accessibility.invert_colors" => "色を反転",
  "accessibility.grayscale" => "グレースケールフィルターを使用",
  "accessibility.protanopia" => "1型色覚フィルターを使用",
  "accessibility.deuteranopia" => "2型色覚フィルターを使用",
  "accessibility.tritanopia" => "3型色覚フィルターを使用",
];
