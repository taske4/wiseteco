<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="wrapper">
    <h2><?= $arResult['NAME'] ?></h2>
    <div class="flex-row">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="cpanel">
                    <div class="icon">
                        <img alt="Для социальных объектов" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/r1.svg"/>
                    </div>
                    <h3>Для социальных<br/>объектов</h3>
                    <div class="txt">
                        <p><b><?= $arItem['NAME'] ?>:</b></p>

                        <?
                        $list = $arItem['PROPERTIES']['LIST']['VALUE'];
                        if (count($list) > 0) {
                            ?>
                            <ul>
                                <? foreach ($list as $item) { ?>
                                    <li><?= $item ?></li>
                                <? } ?>
                            </ul>
                        <? } ?>

                        <? if ($arItem['PREVIEW_TEXT']) {
                            echo $arItem['PREVIEW_TEXT'];
                        } ?>
                    </div>
                    <div class="btns">
                        <a class="btn btn-open-popup-demo-solution">Заказать решение</a>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
