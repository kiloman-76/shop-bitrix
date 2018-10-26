<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Каталог товаров");
?>
<hr />

<?$APPLICATION->IncludeComponent("bitrix:catalog", "test_shop_catalog", Array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "11",
	"INSTANT_RELOAD" => 'Y',
	"BASKET_URL" => "/personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/test/",
	"AJAX_MODE" => "Y",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "Y",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_FILTER" => "N",
	"DISPLAY_PANEL" => "Y",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "Y",
	"USE_FILTER" => "Y",
	"FILTER_NAME" => "FILTER",
	"FILTER_FIELD_CODE" => array(
		0 => "",
	),
	"FILTER_PROPERTY_CODE" => array(
		0 => "BRAND",
		1 => "COLOR",
		2 => "",
	),
	"FILTER_PRICE_CODE" => array(
	),
	"USE_REVIEW" => "Y",
	"REVIEW_AJAX_POST" => "Y",
	"MESSAGES_PER_PAGE" => "5",
	"USE_CAPTCHA" => "Y",
	"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
	"FORUM_ID" => "1",
	"URL_TEMPLATES_READ" => "/communication/forum/forum#FORUM_ID#/topic#TOPIC_ID#/",
	"SHOW_LINK_TO_FORUM" => "N",
	"POST_FIRST_MESSAGE" => "N",
	"USE_COMPARE" => "Y",
	"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
	"COMPARE_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"COMPARE_PROPERTY_CODE" => array(
		0 => "YEAR",
		1 => "ISBN",
		2 => "PAGES",
		3 => "PUBLISHER",
		4 => "",
	),
	"DISPLAY_ELEMENT_SELECT_BOX" => "N",
	"ELEMENT_SORT_FIELD_BOX" => "name",
	"ELEMENT_SORT_ORDER_BOX" => "asc",
	"COMPARE_ELEMENT_SORT_FIELD" => "sort",
	"COMPARE_ELEMENT_SORT_ORDER" => "asc",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"SHOW_TOP_ELEMENTS" => "Y",
	"TOP_ELEMENT_COUNT" => "3",
	"TOP_LINE_ELEMENT_COUNT" => "1",
	"TOP_ELEMENT_SORT_FIELD" => "id",
	"TOP_ELEMENT_SORT_ORDER" => "desc",
	"TOP_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"PAGE_ELEMENT_COUNT" => "6",
	"LINE_ELEMENT_COUNT" => "3",
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"LIST_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"INCLUDE_SUBSECTIONS" => "Y",
	"LIST_META_KEYWORDS" => "-",
	"LIST_META_DESCRIPTION" => "-",
	"LIST_BROWSER_TITLE" => "UF_BROWSER_TITLE",
	"DETAIL_PROPERTY_CODE" => array(
		0 => "YEAR",
		1 => "ISBN",
		2 => "PAGES",
		3 => "PUBLISHER",
		4 => "AUTHORS",
		5 => "",
	),
	"DETAIL_META_KEYWORDS" => "-",
	"DETAIL_META_DESCRIPTION" => "-",
	"DETAIL_BROWSER_TITLE" => "BROWSER_TITLE",
	"LINK_IBLOCK_TYPE" => "books",
	"LINK_IBLOCK_ID" => "5",
	"LINK_PROPERTY_SID" => "BOOK",
	"LINK_ELEMENTS_URL" => "/e-store/books/reviews/detail.php?ID=#ELEMENT_ID#",
	"USE_ALSO_BUY" => "Y",
	"ALSO_BUY_ELEMENT_COUNT" => "5",
	"ALSO_BUY_MIN_BUYES" => "2",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Продукты",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "testshop_navigation",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"SEF_URL_TEMPLATES" => array(
		"sections" => "filter/#SMART_FILTER_PATH#/apply/",
		"section" => "#SECTION_ID#/",
		"element" => "#SECTION_ID#/#ELEMENT_ID#/",
		"compare" => "compare.php?action=#ACTION_CODE#",
		"smart_filter"=>"/filter/#SMART_FILTER_PATH#/apply/",
	),
	"VARIABLE_ALIASES" => array(
		"compare" => array(
			"ACTION_CODE" => "action",
		),
	)
),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>