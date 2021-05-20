<?php
$strTableName="Room View";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Room View";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Room View");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Room View"];

$reportCaseSensitiveGroupFields = false;

?>