<?php
$strTableName="Group as AdminView";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Group as AdminView";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Group as AdminView");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Group as AdminView"];

$reportCaseSensitiveGroupFields = false;

?>