<?php
require_once "../_var.php";
require_once $TO_HOME . "spa.php/_common.php";
//require_once $TO_HOME . "spa.php/_functions.php";
//require_once $TO_HOME . "spa.php/_plugins.php";
//require_once $TO_HOME . "_config.php";
require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "spa.php/_router.php";
//require_once $TO_HOME . "spa.php/_auth.php";

// --- IMPORTS ---
require_once $TO_HOME . "_common.php";
//require_once $TO_HOME . "_functions.php";
//require_once $TO_HOME . "_plugins.php";
//require_once $TO_HOME . "_auth.php";

// --- PHP ---
require_once $TO_HOME . "v0.mnm/lang/" . $app_lang . ".php";
require_once $TO_HOME . "v0.mnm/common.head.php";
?>
<div id="mnm-page">
    <a href="javascript:;" class="js-mnm-nav-toggle mnm-nav-toggle"><span>menu</span></a>
    <aside id="mnm-aside" role="complementary">
        <h1 id="mnm-logo">
            <img src="<?= $HOME_PATH; ?>/img/v0/logo.jpg" width="175px" height="175px" style="border: 5px solid #222; border-radius: 10px;" alt="MNM logo" /><br>
            <small><a href="<?= "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_ES}"; ?>" class="a-lang p-1" title="Español"><img src="<?= $HOME_PATH; ?>/img/co.png" /> ES</a>|<a href="<?= "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_ES}"; ?>" class="a-lang p-1" title="English"><img src="<?= $HOME_PATH; ?>/img/uk.png" /> EN</a><br></small>
        </h1>
        <nav id="mnm-main-menu" role="navigation">
            <ul>
                <li id="li_about"><a href="<?= "{$ROUTE_ROOT}{$ROUTE_MNM}"; ?>"> <?= $_aboutus; ?> </a></li>
                <li id="li_work"><a href="<?= "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_PROJECTS}"; ?>"> <?= $_projects; ?> </a></li>
                <li id="li_services"><a href="<?= "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_SERVICES}"; ?>"> <?= $_services; ?> </a></li>
                <li id="li_contact"><a href="<?= "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_CONTACT}"; ?>"> <?= $_contactus; ?> </a></li>
            </ul>
        </nav>
        <div class="mnm-footer">
            <p>&copy;<?= date("Y"); ?>, MNM <br><small><small><a href="<?= "{$ROUTE_ROOT}"; ?>">byUwUr</a> | <a href="https://colorlib.com" target="_blank">colorlib</a></small></small></p>
            <ul>
                <li><a href="https://fb.me/mnmdotteam" target="_blank"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
    </aside>
</div>
<?php
// Always call due to /_var.php invoking ob_start();
ob_end_flush();
?>