<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Актуальный вопрос");
?><?$APPLICATION->IncludeComponent(
	"bitrix:voting.current",
	"",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHANNEL_SID" => "VOPROS",
		"VOTE_ALL_RESULTS" => "N",
		"VOTE_ID" => "1"
	)
);?><br><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>