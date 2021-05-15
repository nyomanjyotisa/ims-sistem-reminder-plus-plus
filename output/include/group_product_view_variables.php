<?php
$strTableName="group_product_view";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="group_product_view";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("group_product_view");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["group_product_view"];

$reportCaseSensitiveGroupFields = false;

?>