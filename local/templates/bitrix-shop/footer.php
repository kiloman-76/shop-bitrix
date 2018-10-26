<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!--BANNER_BOTTOM-->
</div>
<div id="footer"><?$APPLICATION->IncludeComponent(
		"testshop:main_subscribe",
		"",
		Array(
			'AJAX_MODE' => 'Y'
		)
	);?></div>
</body>
</html>