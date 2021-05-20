<?php
$strTableName="buy_single_product";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="buy_single_product";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("buy_single_product");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["buy_single_product"];

$reportCaseSensitiveGroupFields = false;

?>