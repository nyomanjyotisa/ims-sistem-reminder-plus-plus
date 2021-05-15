<?php
$tdatagroup_joined = array();
$tdatagroup_joined[".searchableFields"] = array();
$tdatagroup_joined[".ShortName"] = "group_joined";
$tdatagroup_joined[".OwnerID"] = "";
$tdatagroup_joined[".OriginalTable"] = "group_joined";


$tdatagroup_joined[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatagroup_joined[".originalPagesByType"] = $tdatagroup_joined[".pagesByType"];
$tdatagroup_joined[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatagroup_joined[".originalPages"] = $tdatagroup_joined[".pages"];
$tdatagroup_joined[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatagroup_joined[".originalDefaultPages"] = $tdatagroup_joined[".defaultPages"];

//	field labels
$fieldLabelsgroup_joined = array();
$fieldToolTipsgroup_joined = array();
$pageTitlesgroup_joined = array();
$placeHoldersgroup_joined = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_joined["English"] = array();
	$fieldToolTipsgroup_joined["English"] = array();
	$placeHoldersgroup_joined["English"] = array();
	$pageTitlesgroup_joined["English"] = array();
	$fieldLabelsgroup_joined["English"]["group_name"] = "Group Name";
	$fieldToolTipsgroup_joined["English"]["group_name"] = "";
	$placeHoldersgroup_joined["English"]["group_name"] = "";
	$fieldLabelsgroup_joined["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_joined["English"]["group_id"] = "";
	$placeHoldersgroup_joined["English"]["group_id"] = "";
	if (count($fieldToolTipsgroup_joined["English"]))
		$tdatagroup_joined[".isUseToolTips"] = true;
}


	$tdatagroup_joined[".NCSearch"] = true;



$tdatagroup_joined[".shortTableName"] = "group_joined";
$tdatagroup_joined[".nSecOptions"] = 0;

$tdatagroup_joined[".mainTableOwnerID"] = "";
$tdatagroup_joined[".entityType"] = 6;
$tdatagroup_joined[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatagroup_joined[".strOriginalTableName"] = "group_joined";

	



$tdatagroup_joined[".showAddInPopup"] = false;

$tdatagroup_joined[".showEditInPopup"] = false;

$tdatagroup_joined[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_joined[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_joined[".listAjax"] = false;
//	temporary
$tdatagroup_joined[".listAjax"] = false;

	$tdatagroup_joined[".audit"] = false;

	$tdatagroup_joined[".locking"] = false;


$pages = $tdatagroup_joined[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_joined[".edit"] = true;
	$tdatagroup_joined[".afterEditAction"] = 1;
	$tdatagroup_joined[".closePopupAfterEdit"] = 1;
	$tdatagroup_joined[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_joined[".add"] = true;
$tdatagroup_joined[".afterAddAction"] = 1;
$tdatagroup_joined[".closePopupAfterAdd"] = 1;
$tdatagroup_joined[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_joined[".list"] = true;
}



$tdatagroup_joined[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_joined[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_joined[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_joined[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_joined[".printFriendly"] = true;
}



$tdatagroup_joined[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_joined[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_joined[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_joined[".isUseAjaxSuggest"] = true;

$tdatagroup_joined[".rowHighlite"] = true;



			

$tdatagroup_joined[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_joined[".buttonsAdded"] = false;

$tdatagroup_joined[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_joined[".isUseTimeForSearch"] = false;


$tdatagroup_joined[".badgeColor"] = "4682B4";


$tdatagroup_joined[".allSearchFields"] = array();
$tdatagroup_joined[".filterFields"] = array();
$tdatagroup_joined[".requiredSearchFields"] = array();

$tdatagroup_joined[".googleLikeFields"] = array();
$tdatagroup_joined[".googleLikeFields"][] = "group_id";
$tdatagroup_joined[".googleLikeFields"][] = "group_name";




$tdatagroup_joined[".printerPageOrientation"] = 0;
$tdatagroup_joined[".nPrinterPageScale"] = 100;

$tdatagroup_joined[".nPrinterSplitRecords"] = 40;

$tdatagroup_joined[".geocodingEnabled"] = false;










$tdatagroup_joined[".pageSize"] = 20;

$tdatagroup_joined[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_joined[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_joined[".orderindexes"] = array();


$tdatagroup_joined[".sqlHead"] = "";
$tdatagroup_joined[".sqlFrom"] = "";
$tdatagroup_joined[".sqlWhereExpr"] = "";
$tdatagroup_joined[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_joined[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_joined[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_joined[".highlightSearchResults"] = true;

$tableKeysgroup_joined = array();
$tdatagroup_joined[".Keys"] = $tableKeysgroup_joined;


$tdatagroup_joined[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group_joined","group_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["FullName"] = "group_id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatagroup_joined["group_id"] = $fdata;
		$tdatagroup_joined[".searchableFields"][] = "group_id";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group_joined","group_name");
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


	$tdatagroup_joined["group_name"] = $fdata;
		$tdatagroup_joined[".searchableFields"][] = "group_name";


$tables_data["group_joined"]=&$tdatagroup_joined;
$field_labels["group_joined"] = &$fieldLabelsgroup_joined;
$fieldToolTips["group_joined"] = &$fieldToolTipsgroup_joined;
$placeHolders["group_joined"] = &$placeHoldersgroup_joined;
$page_titles["group_joined"] = &$pageTitlesgroup_joined;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_joined"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_joined"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/group_joined_ops.php" ) );



	
		;

		

$tdatagroup_joined[".sqlquery"] = $queryData_group_joined;



include_once(getabspath("include/group_joined_events.php"));
$tableEvents["group_joined"] = new eventclass_group_joined;
$tdatagroup_joined[".hasEvents"] = true;

?>