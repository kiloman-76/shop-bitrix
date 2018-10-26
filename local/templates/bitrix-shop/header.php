<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead()?>
<title><?$APPLICATION->ShowTitle()?></title>
	<?
	CJSCore::Init(array("jquery"));
	?>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div id="header"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.jpg" id="header_logo" height="105" alt="" width="508" border="0"/>
  <div id="header_text"><?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/company_name.php"),
			Array(),
			Array("MODE"=>"html")
		);?> </div>

	<a href="/" title="Главная" id="company_logo"></a>

    <div class="auth">
		<?php global $USER;?>
		<?if (!$USER->IsAuthorized()):?>
            <a href="/auth" class="auth__link js-popup-open-button">
                <span class="auth__text">Войти</span>
            </a>
		<?else:?>
            <a href="/cart" class="auth__link">
                <span class="auth__text">Корзина</span>
            </a>
		<?php endif;?>
    </div>

</div>

<div id="zebra" ></div>


        <div id="navigation"><?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	".default",
	Array(
		"START_FROM" => "0", 
		"PATH" => "", 
		"SITE_ID" => "" 
	)
);?> </div>
<div class="container">

      
        <h1 id="pagetitle"><?$APPLICATION->ShowTitle(false)?></h1>
      