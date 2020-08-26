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


<h2 class="h2-instru"><?= $arResult['NAME'] ?></h2>
<div class="flex-row techno-base">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="techno-base-item">
                <div class="col-img">
                    <img alt="<?= $arItem['NAME'] ?>" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"/>
                </div>
                <div class="col-txt">
                    <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>
