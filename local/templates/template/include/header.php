<? $APPLICATION->ShowPanel() ?>
<!--[if lt IE 10]>
<div class="support">Sorry, we don't support this version of Internet Explorer.<br/><a
        href="http://windows.microsoft.com/en-US/internet-explorer/download-ie"> Please, update your browser</a> or
    use another.
</div><![endif]-->

<header>
    <div class="wrapper">
        <div class="flex-row">
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
                    <? if ($USER->IsAdmin() && $_REQUEST['bitrix_include_areas'] === 'Y'): ?>
                        <details style="background: white">
                            <summary>Редактируй мобильное лого</summary>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . '/include_area/mobileLogo.php'
                                )
                            ); ?>
                        </details>
                    <? endif; ?>
                </a>
            </div>
            <div class="col-menu">
                <nav>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        ".default",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                        false
                    ); ?>
                </nav>
            </div>
            <div class="col-phone">
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
            </div>
            <div class="col-btn">
                <a class="btn btn-open-popup-request">Оставить заявку</a>
            </div>
        </div>
    </div>
</header>
<!-- mobile header -->
<div class="mobile-header">
    <a href="#" class="logo">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH . '/include_area/mobileLogo.php'
            )
        ); ?>
    </a>
    <a class="btn-menu"></a>
</div>
<div class="mobile-menu">
    <div class="col-phone">
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
    </div>
    <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        ".default",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N",
            "COMPONENT_TEMPLATE" => ".default",
            "MOBILE" => 'Y'
        ),
        false
    ); ?>
    <a class="btn btn-open-popup-request">Оставить заявку</a>
</div>
<!-- mobile header -->
<section class="intro">
    <div class="parallax-bg" id="intro">
        <div id="mouse-parallax-bg" data-depth="0.3" class="mouse-parallax-bg"></div>
    </div>
    <div class="wrapper">
        <div class="flex-row">
            <div>
                <div class="in">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . '/include_area/headerIntroText.php'
                        )
                    ); ?>
                    <div class="btns">
                        <a class="btn btn-open-popup-request">Оставить заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="wrapper wpp">
    <div class="promo-panel">
        <div class="panel">
            <div class="flex-row">
                <div class="col-txt">
                    <p>Сделать первый шаг к цифровой трансформации вашего бизнеса</p>
                </div>
                <div class="col-btn">
                    <a class="btn btn-open-popup-request">Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>
</div>
