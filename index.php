<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "С л о в а");
$APPLICATION->SetPageProperty("description", "Тестовое описание");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>
<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    array(
        "AREA_FILE_RECURSIVE" => "Y",
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => SITE_TEMPLATE_PATH . '/include/main.php'
    ), false, array("HIDE_ICONS" => "Y")
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>