<?php
$strTableName="group_joined_view";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="group_joined_view";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("group_joined_view");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["group_joined_view"];

$reportCaseSensitiveGroupFields = false;

?>