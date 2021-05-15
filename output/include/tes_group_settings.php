<?php
$tdatates_group = array();
$tdatates_group[".searchableFields"] = array();
$tdatates_group[".ShortName"] = "tes_group";
$tdatates_group[".OwnerID"] = "";
$tdatates_group[".OriginalTable"] = "tes_group";


$tdatates_group[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatates_group[".originalPagesByType"] = $tdatates_group[".pagesByType"];
$tdatates_group[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatates_group[".originalPages"] = $tdatates_group[".pages"];
$tdatates_group[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatates_group[".originalDefaultPages"] = $tdatates_group[".defaultPages"];

//	field labels
$fieldLabelstes_group = array();
$fieldToolTipstes_group = array();
$pageTitlestes_group = array();
$placeHolderstes_group = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstes_group["English"] = array();
	$fieldToolTipstes_group["English"] = array();
	$placeHolderstes_group["English"] = array();
	$pageTitlestes_group["English"] = array();
	$fieldLabelstes_group["English"]["group_name"] = "Group Name";
	$fieldToolTipstes_group["English"]["group_name"] = "";
	$placeHolderstes_group["English"]["group_name"] = "";
	if (count($fieldToolTipstes_group["English"]))
		$tdatates_group[".isUseToolTips"] = true;
}


	$tdatates_group[".NCSearch"] = true;



$tdatates_group[".shortTableName"] = "tes_group";
$tdatates_group[".nSecOptions"] = 0;

$tdatates_group[".mainTableOwnerID"] = "";
$tdatates_group[".entityType"] = 6;
$tdatates_group[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatates_group[".strOriginalTableName"] = "tes_group";

	



$tdatates_group[".showAddInPopup"] = false;

$tdatates_group[".showEditInPopup"] = false;

$tdatates_group[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatates_group[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatates_group[".listAjax"] = false;
//	temporary
$tdatates_group[".listAjax"] = false;

	$tdatates_group[".audit"] = false;

	$tdatates_group[".locking"] = false;


$pages = $tdatates_group[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatates_group[".edit"] = true;
	$tdatates_group[".afterEditAction"] = 1;
	$tdatates_group[".closePopupAfterEdit"] = 1;
	$tdatates_group[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatates_group[".add"] = true;
$tdatates_group[".afterAddAction"] = 1;
$tdatates_group[".closePopupAfterAdd"] = 1;
$tdatates_group[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatates_group[".list"] = true;
}



$tdatates_group[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatates_group[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatates_group[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatates_group[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatates_group[".printFriendly"] = true;
}



$tdatates_group[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatates_group[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatates_group[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatates_group[".isUseAjaxSuggest"] = true;

$tdatates_group[".rowHighlite"] = true;





$tdatates_group[".ajaxCodeSnippetAdded"] = false;

$tdatates_group[".buttonsAdded"] = false;

$tdatates_group[".addPageEvents"] = false;

// use timepicker for search panel
$tdatates_group[".isUseTimeForSearch"] = false;


$tdatates_group[".badgeColor"] = "4682B4";


$tdatates_group[".allSearchFields"] = array();
$tdatates_group[".filterFields"] = array();
$tdatates_group[".requiredSearchFields"] = array();

$tdatates_group[".googleLikeFields"] = array();
$tdatates_group[".googleLikeFields"][] = "group_name";




$tdatates_group[".printerPageOrientation"] = 0;
$tdatates_group[".nPrinterPageScale"] = 100;

$tdatates_group[".nPrinterSplitRecords"] = 40;

$tdatates_group[".geocodingEnabled"] = false;










$tdatates_group[".pageSize"] = 20;

$tdatates_group[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatates_group[".strOrderBy"] = $tstrOrderBy;

$tdatates_group[".orderindexes"] = array();


$tdatates_group[".sqlHead"] = "";
$tdatates_group[".sqlFrom"] = "";
$tdatates_group[".sqlWhereExpr"] = "";
$tdatates_group[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatates_group[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatates_group[".arrGroupsPerPage"] = $arrGPP;

$tdatates_group[".highlightSearchResults"] = true;

$tableKeystes_group = array();
$tdatates_group[".Keys"] = $tableKeystes_group;


$tdatates_group[".hideMobileList"] = array();




//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tes_group","group_name");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "group_name";

	
		$fdata["FullName"] = "group_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatates_group["group_name"] = $fdata;
		$tdatates_group[".searchableFields"][] = "group_name";


$tables_data["tes_group"]=&$tdatates_group;
$field_labels["tes_group"] = &$fieldLabelstes_group;
$fieldToolTips["tes_group"] = &$fieldToolTipstes_group;
$placeHolders["tes_group"] = &$placeHolderstes_group;
$page_titles["tes_group"] = &$pageTitlestes_group;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tes_group"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tes_group"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/tes_group_ops.php" ) );



	
		;

	

$tdatates_group[".sqlquery"] = $queryData_tes_group;



include_once(getabspath("include/tes_group_events.php"));
$tableEvents["tes_group"] = new eventclass_tes_group;
$tdatates_group[".hasEvents"] = true;

?>