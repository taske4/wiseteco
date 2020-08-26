<footer>
    <div class="wrapper">
        <div class="footer-top flex-row">
            <div class="col-logo">
                <a href="#" class="logo">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . '/include_area/logo.php'
                        )
                    ); ?>
                </a>
            </div>
            <div class="col-slo">
                <div class="slogan">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . '/include_area/slogan.php'
                        )
                    ); ?>
                </div>
            </div>
            <div class="col-addr">
                <p class="phone">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . '/include_area/phone.php'
                        )
                    ); ?>
                </p>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . '/include_area/footer/contacts.php'
                    )
                ); ?>
            </div>
            <div class="col-btn">
                <a class="btn-whte btn-open-call-popup">Заказать звонок</a>
            </div>
        </div>
        <div class="footer-bottom flex-row">
            <div class="left">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . '/include_area/footer/copyright.php'
                    )
                ); ?>
            </div>
            <div class="right">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . '/include_area/privacy.php'
                    )
                ); ?>
            </div>
        </div>
    </div>
</footer>


<?
require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/modals.php';

$asset->addJs("https://cdnjs.cloudflare.com/ajax/libs/bowser/1.0.0/bowser.min.js");

$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery-3.5.1.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery-ui.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jvalidate.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.inputmask.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/parallax.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/owl.carousel.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.scrollTo.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/ScrollMagic.min.js");

$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/js.js");
?>

</body>
</head>