<?php
$tdataroom_view = array();
$tdataroom_view[".searchableFields"] = array();
$tdataroom_view[".ShortName"] = "room_view";
$tdataroom_view[".OwnerID"] = "";
$tdataroom_view[".OriginalTable"] = "Room View";


$tdataroom_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdataroom_view[".originalPagesByType"] = $tdataroom_view[".pagesByType"];
$tdataroom_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdataroom_view[".originalPages"] = $tdataroom_view[".pages"];
$tdataroom_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\"}" );
$tdataroom_view[".originalDefaultPages"] = $tdataroom_view[".defaultPages"];

//	field labels
$fieldLabelsroom_view = array();
$fieldToolTipsroom_view = array();
$pageTitlesroom_view = array();
$placeHoldersroom_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsroom_view["English"] = array();
	$fieldToolTipsroom_view["English"] = array();
	$placeHoldersroom_view["English"] = array();
	$pageTitlesroom_view["English"] = array();
	if (count($fieldToolTipsroom_view["English"]))
		$tdataroom_view[".isUseToolTips"] = true;
}


	$tdataroom_view[".NCSearch"] = true;



$tdataroom_view[".shortTableName"] = "room_view";
$tdataroom_view[".nSecOptions"] = 0;

$tdataroom_view[".mainTableOwnerID"] = "";
$tdataroom_view[".entityType"] = 6;
$tdataroom_view[".connId"] = "notif_basic1_at_menkz_xyz";


$tdataroom_view[".strOriginalTableName"] = "Room View";

	



$tdataroom_view[".showAddInPopup"] = false;

$tdataroom_view[".showEditInPopup"] = false;

$tdataroom_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataroom_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataroom_view[".listAjax"] = false;
//	temporary
$tdataroom_view[".listAjax"] = false;

	$tdataroom_view[".audit"] = false;

	$tdataroom_view[".locking"] = false;


$pages = $tdataroom_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataroom_view[".edit"] = true;
	$tdataroom_view[".afterEditAction"] = 1;
	$tdataroom_view[".closePopupAfterEdit"] = 1;
	$tdataroom_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataroom_view[".add"] = true;
$tdataroom_view[".afterAddAction"] = 1;
$tdataroom_view[".closePopupAfterAdd"] = 1;
$tdataroom_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataroom_view[".list"] = true;
}



$tdataroom_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataroom_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataroom_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataroom_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataroom_view[".printFriendly"] = true;
}



$tdataroom_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataroom_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataroom_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataroom_view[".isUseAjaxSuggest"] = true;

$tdataroom_view[".rowHighlite"] = true;



																					

$tdataroom_view[".ajaxCodeSnippetAdded"] = false;

$tdataroom_view[".buttonsAdded"] = false;

$tdataroom_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdataroom_view[".isUseTimeForSearch"] = false;


$tdataroom_view[".badgeColor"] = "4682B4";


$tdataroom_view[".allSearchFields"] = array();
$tdataroom_view[".filterFields"] = array();
$tdataroom_view[".requiredSearchFields"] = array();





$tdataroom_view[".printerPageOrientation"] = 0;
$tdataroom_view[".nPrinterPageScale"] = 100;

$tdataroom_view[".nPrinterSplitRecords"] = 40;

$tdataroom_view[".geocodingEnabled"] = false;










$tdataroom_view[".pageSize"] = 20;

$tdataroom_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataroom_view[".strOrderBy"] = $tstrOrderBy;

$tdataroom_view[".orderindexes"] = array();


$tdataroom_view[".sqlHead"] = "";
$tdataroom_view[".sqlFrom"] = "";
$tdataroom_view[".sqlWhereExpr"] = "";
$tdataroom_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataroom_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataroom_view[".arrGroupsPerPage"] = $arrGPP;

$tdataroom_view[".highlightSearchResults"] = true;

$tableKeysroom_view = array();
$tdataroom_view[".Keys"] = $tableKeysroom_view;


$tdataroom_view[".hideMobileList"] = array();






$tables_data["Room View"]=&$tdataroom_view;
$field_labels["Room_View"] = &$fieldLabelsroom_view;
$fieldToolTips["Room_View"] = &$fieldToolTipsroom_view;
$placeHolders["Room_View"] = &$placeHoldersroom_view;
$page_titles["Room_View"] = &$pageTitlesroom_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Room View"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Room View"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/room_view_ops.php" ) );



	
		;



$tdataroom_view[".sqlquery"] = $queryData_room_view;



$tableEvents["Room View"] = new eventsBase;
$tdataroom_view[".hasEvents"] = false;

?>