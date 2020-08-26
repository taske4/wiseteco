<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
?>
    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <link rel="shortcut icon" href="favicon.png"/>
        <meta name="format-detection" content="telephone=no"/>

        <? $APPLICATION->ShowHead() ?>

        <?
        $asset->addCss('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,600&display=swap');

        $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.min.css');
        $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
        $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/media.css');

        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/s1-on.svg' as='image' type='image/svg+xml' />");
        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/s2-on.svg' as='image' type='image/svg+xml' />");
        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/s3-on.svg' as='image' type='image/svg+xml' />");
        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/s4-on.svg' as='image' type='image/svg+xml' />");
        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/s5-on.svg' as='image' type='image/svg+xml' />");
        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/s6-on.svg' as='image' type='image/svg+xml' />");
        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/s7-on.svg' as='image' type='image/svg+xml' />");
        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/s8-on.svg' as='image' type='image/svg+xml' />");
        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/s9-on.svg' as='image' type='image/svg+xml' />");
        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/s10-on.svg' as='image' type='image/svg+xml' />");
        $asset->addString("<link rel='preload' href='" . SITE_TEMPLATE_PATH . "/assets/img/close-on.svg' as='image' type='image/svg+xml' />");

        $asset->addString("<!--[if lt IE 10]><link rel='stylesheet' type='text/css' href='" . SITE_TEMPLATE_PATH . "/assets/css/styleOld.css' /><![endif]-->");

        $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/custom.css');
        ?>

        <title><? $APPLICATION->ShowTitle() ?></title>
    </head>
    <body>
<?
require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/header.php';
?>