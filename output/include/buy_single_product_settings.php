<?php
$tdatabuy_single_product = array();
$tdatabuy_single_product[".searchableFields"] = array();
$tdatabuy_single_product[".ShortName"] = "buy_single_product";
$tdatabuy_single_product[".OwnerID"] = "";
$tdatabuy_single_product[".OriginalTable"] = "buy_single_product";


$tdatabuy_single_product[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabuy_single_product[".originalPagesByType"] = $tdatabuy_single_product[".pagesByType"];
$tdatabuy_single_product[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabuy_single_product[".originalPages"] = $tdatabuy_single_product[".pages"];
$tdatabuy_single_product[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabuy_single_product[".originalDefaultPages"] = $tdatabuy_single_product[".defaultPages"];

//	field labels
$fieldLabelsbuy_single_product = array();
$fieldToolTipsbuy_single_product = array();
$pageTitlesbuy_single_product = array();
$placeHoldersbuy_single_product = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbuy_single_product["English"] = array();
	$fieldToolTipsbuy_single_product["English"] = array();
	$placeHoldersbuy_single_product["English"] = array();
	$pageTitlesbuy_single_product["English"] = array();
	if (count($fieldToolTipsbuy_single_product["English"]))
		$tdatabuy_single_product[".isUseToolTips"] = true;
}


	$tdatabuy_single_product[".NCSearch"] = true;



$tdatabuy_single_product[".shortTableName"] = "buy_single_product";
$tdatabuy_single_product[".nSecOptions"] = 0;

$tdatabuy_single_product[".mainTableOwnerID"] = "";
$tdatabuy_single_product[".entityType"] = 6;
$tdatabuy_single_product[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatabuy_single_product[".strOriginalTableName"] = "buy_single_product";

	



$tdatabuy_single_product[".showAddInPopup"] = false;

$tdatabuy_single_product[".showEditInPopup"] = false;

$tdatabuy_single_product[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabuy_single_product[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabuy_single_product[".listAjax"] = false;
//	temporary
$tdatabuy_single_product[".listAjax"] = false;

	$tdatabuy_single_product[".audit"] = false;

	$tdatabuy_single_product[".locking"] = false;


$pages = $tdatabuy_single_product[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabuy_single_product[".edit"] = true;
	$tdatabuy_single_product[".afterEditAction"] = 1;
	$tdatabuy_single_product[".closePopupAfterEdit"] = 1;
	$tdatabuy_single_product[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabuy_single_product[".add"] = true;
$tdatabuy_single_product[".afterAddAction"] = 1;
$tdatabuy_single_product[".closePopupAfterAdd"] = 1;
$tdatabuy_single_product[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabuy_single_product[".list"] = true;
}



$tdatabuy_single_product[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabuy_single_product[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabuy_single_product[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabuy_single_product[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabuy_single_product[".printFriendly"] = true;
}



$tdatabuy_single_product[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabuy_single_product[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabuy_single_product[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabuy_single_product[".isUseAjaxSuggest"] = true;

$tdatabuy_single_product[".rowHighlite"] = true;



									

$tdatabuy_single_product[".ajaxCodeSnippetAdded"] = false;

$tdatabuy_single_product[".buttonsAdded"] = false;

$tdatabuy_single_product[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabuy_single_product[".isUseTimeForSearch"] = false;


$tdatabuy_single_product[".badgeColor"] = "CD853F";


$tdatabuy_single_product[".allSearchFields"] = array();
$tdatabuy_single_product[".filterFields"] = array();
$tdatabuy_single_product[".requiredSearchFields"] = array();





$tdatabuy_single_product[".printerPageOrientation"] = 0;
$tdatabuy_single_product[".nPrinterPageScale"] = 100;

$tdatabuy_single_product[".nPrinterSplitRecords"] = 40;

$tdatabuy_single_product[".geocodingEnabled"] = false;










$tdatabuy_single_product[".pageSize"] = 20;

$tdatabuy_single_product[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabuy_single_product[".strOrderBy"] = $tstrOrderBy;

$tdatabuy_single_product[".orderindexes"] = array();


$tdatabuy_single_product[".sqlHead"] = "";
$tdatabuy_single_product[".sqlFrom"] = "";
$tdatabuy_single_product[".sqlWhereExpr"] = "";
$tdatabuy_single_product[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabuy_single_product[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabuy_single_product[".arrGroupsPerPage"] = $arrGPP;

$tdatabuy_single_product[".highlightSearchResults"] = true;

$tableKeysbuy_single_product = array();
$tdatabuy_single_product[".Keys"] = $tableKeysbuy_single_product;


$tdatabuy_single_product[".hideMobileList"] = array();






$tables_data["buy_single_product"]=&$tdatabuy_single_product;
$field_labels["buy_single_product"] = &$fieldLabelsbuy_single_product;
$fieldToolTips["buy_single_product"] = &$fieldToolTipsbuy_single_product;
$placeHolders["buy_single_product"] = &$placeHoldersbuy_single_product;
$page_titles["buy_single_product"] = &$pageTitlesbuy_single_product;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["buy_single_product"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["buy_single_product"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/buy_single_product_ops.php" ) );



	
		;



$tdatabuy_single_product[".sqlquery"] = $queryData_buy_single_product;



include_once(getabspath("include/buy_single_product_events.php"));
$tableEvents["buy_single_product"] = new eventclass_buy_single_product;
$tdatabuy_single_product[".hasEvents"] = true;

?>