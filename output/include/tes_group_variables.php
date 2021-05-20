<?php
$strTableName="tes_group";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tes_group";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tes_group");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tes_group"];

$reportCaseSensitiveGroupFields = false;

?>