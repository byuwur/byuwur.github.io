<?php
require_once "../_var.php";
require_once $TO_HOME . "_common.php";
//require_once $TO_HOME . "_functions.php";
//require_once $TO_HOME . "_plugins.php";
//require_once $TO_HOME . "_config.php";
require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "_router.php";
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
            <small><?= $_language; ?></small><a href="<?= $ROOT_ROUTE; ?>es" class="a-lang" title="Español"><img src="<?= $HOME_PATH; ?>/img/co.png" width="16px" height="12px" style="margin-bottom:3px;" alt="" /> ES</a>|<a href="<?= $ROOT_ROUTE; ?>en" class="a-lang" title="English"><img src="<?= $HOME_PATH; ?>/img/uk.png" width="16px" height="12px" style="margin-bottom:3px;" alt="" /> EN</a><br></small>
        </h1>
        <nav id="mnm-main-menu" role="navigation">
            <ul>
                <li id="li_home"><a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>"> <?= $_helloworld; ?> </a></li>
                <li id="li_work"><a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>work"> <?= $_projects; ?> </a></li>
                <li id="li_services"><a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>services"> <?= $_services; ?> </a></li>
                <li id="li_about"><a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>about"> <?= $_aboutus; ?> </a></li>
                <li id="li_contact"><a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>contact"> <?= $_contactus; ?> </a></li>
            </ul>
        </nav>
        <div class="mnm-footer">
            <p>&copy;<?= date("Y"); ?>, MNM <br><small><small><a href="<?= $ROOT_ROUTE; ?>">byUwUr</a> | <a href="https://colorlib.com" target="_blank">colorlib</a></small></small></p>
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