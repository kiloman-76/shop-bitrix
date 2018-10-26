<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?php
$context = \Bitrix\Main\Context::getCurrent();
$request = $context->getRequest();
?>
<?php //if($_REQUEST['AJAX_CALL']){
//    $GLOBALS['APPLICATION']->RestartBuffer();
//}?>
<form action="<?=$APPLICATION->GetCurPage()?>" method="post" id='main-subscribe-form' class="subscribe">

    <div class="subscribe__caption">Будьте в курсе наших новинок и технологий</div>
    <div class="subscribe__group">

        <input type="email" required name="email-subscribe" class="subscribe__entry" placeholder="Введите e-mail">
        <input type='submit' placeholder="Подписаться" class="subscribe__btn">

    </div>
    <div class="subscribe__agreement">
        <?php if($_REQUEST['AJAX_CALL']):?>
            <?php if($arResult['ERROR']):?>
                lskajsjdjshjs;
                <span style="font-weight: bold;"><?=$arResult['ERROR']?></span>
            <?php endif;?>
            <?php if($arResult['SUCCESS']):?>
                askdhasdjsdksajdk;
                <span style="font-weight: bold;"><?=$arResult['SUCCESS']?></span>
            <?php endif;?>
        <?php endif;?>
    </div>
</form>
<?php //if($_REQUEST['AJAX_CALL']){
//    die();
//}?>