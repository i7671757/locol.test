<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "test slova");
$APPLICATION->SetPageProperty("title", "Test okno brauser");
$APPLICATION->SetPageProperty("keywords", "test klyuchivai slova");
$APPLICATION->SetPageProperty("description", "Test stranista");
$APPLICATION->SetTitle("test");
?>Test stranitsa +++<br>
<br>
<br>
<i><b><u>test&nbsp;</u></b></i><br>
<b><i>test<del></del></i></b><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>