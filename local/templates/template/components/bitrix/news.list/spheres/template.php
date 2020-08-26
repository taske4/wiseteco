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
        <h2><?=$arResult['NAME']?></h2>
        <div class="flex-row">
            <? foreach ($arResult["ITEMS"] as $index => $arItem): ?>
                <?
                $index++;
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="sphere-item shpere-<?= $index ?>" data-index="<?= $index ?>">
                        <?
                        $picture = CFile::GetPath($arItem['PROPERTIES']['PICTURE']['VALUE']);
                        $hoverPicture = CFile::GetPath($arItem['PROPERTIES']['HOVER_PICTURE']['VALUE']);
                        ?>
                        <div class="icon" style="background: url(<?= $picture ?>)"></div>
                        <div class="txt">
                            <h3><?= $arItem['NAME'] ?></h3>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>


<? foreach ($arResult["ITEMS"] as $index => $arItem): ?>
    <? $index++; ?>

    <div class="content-sphere sphere-<?= $index ?>" data-index="<?= $index ?>">
        <div class="colored-angle"></div>
        <div class="wrapper">
            <a class="btn-close"></a>
            <div class="flex-row">
                <div class="col-img">
                    <img alt="<?= $arItem['NAME'] ?>" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/si1.png"/>
                </div>
                <div class="col-txt">
                    <div>
                        <h3><?= $arItem['NAME'] ?></h3>

                        <?
                        $listItems = $arItem['PROPERTIES']['LIST']['VALUE'];
                        if (count($listItems) > 0) {
                            ?>
                            <ul>
                                <? foreach ($listItems as $listItem) { ?>
                                    <li><?= $listItem ?></li>
                                <? } ?>
                            </ul>
                        <? } ?>

                        <? if ($arItem['DETAIL_TEXT']) { ?>
                            <p><?= $arItem['DETAIL_TEXT'] ?></p>
                        <? } ?>
                        <div class="btns">
                            <a class="btn btn-open-popup-request-sphere">Оставить заявку</a>
                            <a class="btn btn-open-popup-demo-sphere">Получить презентацию</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? endforeach; ?>