<?php
$tdatagroup_joined_view = array();
$tdatagroup_joined_view[".searchableFields"] = array();
$tdatagroup_joined_view[".ShortName"] = "group_joined_view";
$tdatagroup_joined_view[".OwnerID"] = "";
$tdatagroup_joined_view[".OriginalTable"] = "group_joined_view";


$tdatagroup_joined_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatagroup_joined_view[".originalPagesByType"] = $tdatagroup_joined_view[".pagesByType"];
$tdatagroup_joined_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatagroup_joined_view[".originalPages"] = $tdatagroup_joined_view[".pages"];
$tdatagroup_joined_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatagroup_joined_view[".originalDefaultPages"] = $tdatagroup_joined_view[".defaultPages"];

//	field labels
$fieldLabelsgroup_joined_view = array();
$fieldToolTipsgroup_joined_view = array();
$pageTitlesgroup_joined_view = array();
$placeHoldersgroup_joined_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_joined_view["English"] = array();
	$fieldToolTipsgroup_joined_view["English"] = array();
	$placeHoldersgroup_joined_view["English"] = array();
	$pageTitlesgroup_joined_view["English"] = array();
	$fieldLabelsgroup_joined_view["English"]["group_name"] = "Group Name";
	$fieldToolTipsgroup_joined_view["English"]["group_name"] = "";
	$placeHoldersgroup_joined_view["English"]["group_name"] = "";
	$fieldLabelsgroup_joined_view["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_joined_view["English"]["group_id"] = "";
	$placeHoldersgroup_joined_view["English"]["group_id"] = "";
	if (count($fieldToolTipsgroup_joined_view["English"]))
		$tdatagroup_joined_view[".isUseToolTips"] = true;
}


	$tdatagroup_joined_view[".NCSearch"] = true;



$tdatagroup_joined_view[".shortTableName"] = "group_joined_view";
$tdatagroup_joined_view[".nSecOptions"] = 0;

$tdatagroup_joined_view[".mainTableOwnerID"] = "";
$tdatagroup_joined_view[".entityType"] = 6;
$tdatagroup_joined_view[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatagroup_joined_view[".strOriginalTableName"] = "group_joined_view";

	



$tdatagroup_joined_view[".showAddInPopup"] = false;

$tdatagroup_joined_view[".showEditInPopup"] = false;

$tdatagroup_joined_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_joined_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_joined_view[".listAjax"] = false;
//	temporary
$tdatagroup_joined_view[".listAjax"] = false;

	$tdatagroup_joined_view[".audit"] = false;

	$tdatagroup_joined_view[".locking"] = false;


$pages = $tdatagroup_joined_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_joined_view[".edit"] = true;
	$tdatagroup_joined_view[".afterEditAction"] = 1;
	$tdatagroup_joined_view[".closePopupAfterEdit"] = 1;
	$tdatagroup_joined_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_joined_view[".add"] = true;
$tdatagroup_joined_view[".afterAddAction"] = 1;
$tdatagroup_joined_view[".closePopupAfterAdd"] = 1;
$tdatagroup_joined_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_joined_view[".list"] = true;
}



$tdatagroup_joined_view[".strSortControlSettingsJSON"] = "";

$tdatagroup_joined_view[".strClickActionJSON"] = "{\"fields\":{\"group_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}},\"group_name\":{\"action\":\"code\",\"codeData\":{\"snippet\":\"group_joined_view_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}}},\"row\":{\"action\":\"code\",\"codeData\":{\"snippet\":\"group_joined_view_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatagroup_joined_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_joined_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_joined_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_joined_view[".printFriendly"] = true;
}



$tdatagroup_joined_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_joined_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_joined_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_joined_view[".isUseAjaxSuggest"] = true;

$tdatagroup_joined_view[".rowHighlite"] = true;



								
					
															

$tdatagroup_joined_view[".ajaxCodeSnippetAdded"] = true;

$tdatagroup_joined_view[".buttonsAdded"] = true;

$tdatagroup_joined_view[".addPageEvents"] = true;

// use timepicker for search panel
$tdatagroup_joined_view[".isUseTimeForSearch"] = false;


$tdatagroup_joined_view[".badgeColor"] = "4682B4";


$tdatagroup_joined_view[".allSearchFields"] = array();
$tdatagroup_joined_view[".filterFields"] = array();
$tdatagroup_joined_view[".requiredSearchFields"] = array();

$tdatagroup_joined_view[".googleLikeFields"] = array();
$tdatagroup_joined_view[".googleLikeFields"][] = "group_id";
$tdatagroup_joined_view[".googleLikeFields"][] = "group_name";




$tdatagroup_joined_view[".printerPageOrientation"] = 0;
$tdatagroup_joined_view[".nPrinterPageScale"] = 100;

$tdatagroup_joined_view[".nPrinterSplitRecords"] = 40;

$tdatagroup_joined_view[".geocodingEnabled"] = false;










$tdatagroup_joined_view[".pageSize"] = 20;

$tdatagroup_joined_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_joined_view[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_joined_view[".orderindexes"] = array();


$tdatagroup_joined_view[".sqlHead"] = "";
$tdatagroup_joined_view[".sqlFrom"] = "";
$tdatagroup_joined_view[".sqlWhereExpr"] = "";
$tdatagroup_joined_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_joined_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_joined_view[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_joined_view[".highlightSearchResults"] = true;

$tableKeysgroup_joined_view = array();
$tableKeysgroup_joined_view[] = "group_id";
$tdatagroup_joined_view[".Keys"] = $tableKeysgroup_joined_view;


$tdatagroup_joined_view[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group_joined_view","group_id");
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


	$tdatagroup_joined_view["group_id"] = $fdata;
		$tdatagroup_joined_view[".searchableFields"][] = "group_id";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group_joined_view","group_name");
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


	$tdatagroup_joined_view["group_name"] = $fdata;
		$tdatagroup_joined_view[".searchableFields"][] = "group_name";


$tables_data["group_joined_view"]=&$tdatagroup_joined_view;
$field_labels["group_joined_view"] = &$fieldLabelsgroup_joined_view;
$fieldToolTips["group_joined_view"] = &$fieldToolTipsgroup_joined_view;
$placeHolders["group_joined_view"] = &$placeHoldersgroup_joined_view;
$page_titles["group_joined_view"] = &$pageTitlesgroup_joined_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_joined_view"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_joined_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/group_joined_view_ops.php" ) );



	
		;

		

$tdatagroup_joined_view[".sqlquery"] = $queryData_group_joined_view;



include_once(getabspath("include/group_joined_view_events.php"));
$tableEvents["group_joined_view"] = new eventclass_group_joined_view;
$tdatagroup_joined_view[".hasEvents"] = true;

?>