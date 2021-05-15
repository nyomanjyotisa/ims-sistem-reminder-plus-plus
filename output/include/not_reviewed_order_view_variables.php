<?php
$strTableName="not_reviewed_order_view";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="not_reviewed_order_view";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("not_reviewed_order_view");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["not_reviewed_order_view"];

$reportCaseSensitiveGroupFields = false;

?>