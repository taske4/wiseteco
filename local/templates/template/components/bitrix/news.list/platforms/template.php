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
    <? foreach ($arResult["ITEMS"] as $index => $arItem): ?>
        <?
        $index++;
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        $image = " 
                        <div class='col-img'>
                            <div class='screen'>
                                <img alt='Управление' src='".$arItem['PREVIEW_PICTURE']['SRC']."'/>
                            </div>
                        </div>
        
        ";
        ?>

        <div class="platform-item item-<?= $index ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="angle"></div>
            <div class="wrapper">
                <div class="flex-row">
                    <? if (!($index % 2)) {
                        echo $image;
                    } ?>
                    <div class="col-txt">
                        <h3><?= $arItem['NAME'] ?></h3>
                        <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                        <div class="flex-row">
                            <? if ($blockContent = $arItem['PROPERTIES']['BLOCK']['VALUE']['TEXT']) { ?>
                                <div>
                                    <? if ($blockTitle = $arItem['PROPERTIES']['BLOCK']['DESCRIPTION']) { ?>
                                        <h4><?= $blockTitle ?></h4>
                                    <? } ?>
                                    <?= $blockContent ?>
                                </div>
                            <? } ?>
                            <? if ($list = $arItem['PROPERTIES']['LIST']['VALUE']) { ?>
                                <div>
                                    <? if ($listTitle = $arItem['PROPERTIES']['TITLE_LIST']['VALUE']) { ?>
                                        <h4><?= $listTitle ?></h4>
                                    <? } ?>
                                    <ul <? echo count($list) > 3 ? 'class="two-cols-txt"' : null ?>>
                                        <? foreach ($list as $item) { ?>
                                            <li><?= $item ?></li>
                                        <? } ?>
                                    </ul>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                    <? if ($index % 2) {
                        echo $image;
                    } ?>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>
