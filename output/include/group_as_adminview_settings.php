<?php
$tdatagroup_as_adminview = array();
$tdatagroup_as_adminview[".searchableFields"] = array();
$tdatagroup_as_adminview[".ShortName"] = "group_as_adminview";
$tdatagroup_as_adminview[".OwnerID"] = "";
$tdatagroup_as_adminview[".OriginalTable"] = "Group as AdminView";


$tdatagroup_as_adminview[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatagroup_as_adminview[".originalPagesByType"] = $tdatagroup_as_adminview[".pagesByType"];
$tdatagroup_as_adminview[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatagroup_as_adminview[".originalPages"] = $tdatagroup_as_adminview[".pages"];
$tdatagroup_as_adminview[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatagroup_as_adminview[".originalDefaultPages"] = $tdatagroup_as_adminview[".defaultPages"];

//	field labels
$fieldLabelsgroup_as_adminview = array();
$fieldToolTipsgroup_as_adminview = array();
$pageTitlesgroup_as_adminview = array();
$placeHoldersgroup_as_adminview = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_as_adminview["English"] = array();
	$fieldToolTipsgroup_as_adminview["English"] = array();
	$placeHoldersgroup_as_adminview["English"] = array();
	$pageTitlesgroup_as_adminview["English"] = array();
	$fieldLabelsgroup_as_adminview["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_as_adminview["English"]["group_id"] = "";
	$placeHoldersgroup_as_adminview["English"]["group_id"] = "";
	$fieldLabelsgroup_as_adminview["English"]["group_name"] = "Group Name";
	$fieldToolTipsgroup_as_adminview["English"]["group_name"] = "";
	$placeHoldersgroup_as_adminview["English"]["group_name"] = "";
	if (count($fieldToolTipsgroup_as_adminview["English"]))
		$tdatagroup_as_adminview[".isUseToolTips"] = true;
}


	$tdatagroup_as_adminview[".NCSearch"] = true;



$tdatagroup_as_adminview[".shortTableName"] = "group_as_adminview";
$tdatagroup_as_adminview[".nSecOptions"] = 0;

$tdatagroup_as_adminview[".mainTableOwnerID"] = "";
$tdatagroup_as_adminview[".entityType"] = 6;
$tdatagroup_as_adminview[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatagroup_as_adminview[".strOriginalTableName"] = "Group as AdminView";

	



$tdatagroup_as_adminview[".showAddInPopup"] = false;

$tdatagroup_as_adminview[".showEditInPopup"] = false;

$tdatagroup_as_adminview[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_as_adminview[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_as_adminview[".listAjax"] = false;
//	temporary
$tdatagroup_as_adminview[".listAjax"] = false;

	$tdatagroup_as_adminview[".audit"] = false;

	$tdatagroup_as_adminview[".locking"] = false;


$pages = $tdatagroup_as_adminview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_as_adminview[".edit"] = true;
	$tdatagroup_as_adminview[".afterEditAction"] = 1;
	$tdatagroup_as_adminview[".closePopupAfterEdit"] = 1;
	$tdatagroup_as_adminview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_as_adminview[".add"] = true;
$tdatagroup_as_adminview[".afterAddAction"] = 1;
$tdatagroup_as_adminview[".closePopupAfterAdd"] = 1;
$tdatagroup_as_adminview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_as_adminview[".list"] = true;
}



$tdatagroup_as_adminview[".strSortControlSettingsJSON"] = "";

$tdatagroup_as_adminview[".strClickActionJSON"] = "{\"fields\":{\"group_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"group_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"code\",\"codeData\":{\"snippet\":\"Group_as_AdminView_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatagroup_as_adminview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_as_adminview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_as_adminview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_as_adminview[".printFriendly"] = true;
}



$tdatagroup_as_adminview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_as_adminview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_as_adminview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_as_adminview[".isUseAjaxSuggest"] = true;

$tdatagroup_as_adminview[".rowHighlite"] = true;



																	
					
						

$tdatagroup_as_adminview[".ajaxCodeSnippetAdded"] = true;

$tdatagroup_as_adminview[".buttonsAdded"] = true;

$tdatagroup_as_adminview[".addPageEvents"] = true;

// use timepicker for search panel
$tdatagroup_as_adminview[".isUseTimeForSearch"] = false;


$tdatagroup_as_adminview[".badgeColor"] = "E07878";


$tdatagroup_as_adminview[".allSearchFields"] = array();
$tdatagroup_as_adminview[".filterFields"] = array();
$tdatagroup_as_adminview[".requiredSearchFields"] = array();

$tdatagroup_as_adminview[".googleLikeFields"] = array();
$tdatagroup_as_adminview[".googleLikeFields"][] = "group_id";
$tdatagroup_as_adminview[".googleLikeFields"][] = "group_name";




$tdatagroup_as_adminview[".printerPageOrientation"] = 0;
$tdatagroup_as_adminview[".nPrinterPageScale"] = 100;

$tdatagroup_as_adminview[".nPrinterSplitRecords"] = 40;

$tdatagroup_as_adminview[".geocodingEnabled"] = false;










$tdatagroup_as_adminview[".pageSize"] = 20;

$tdatagroup_as_adminview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_as_adminview[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_as_adminview[".orderindexes"] = array();


$tdatagroup_as_adminview[".sqlHead"] = "";
$tdatagroup_as_adminview[".sqlFrom"] = "";
$tdatagroup_as_adminview[".sqlWhereExpr"] = "";
$tdatagroup_as_adminview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_as_adminview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_as_adminview[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_as_adminview[".highlightSearchResults"] = true;

$tableKeysgroup_as_adminview = array();
$tdatagroup_as_adminview[".Keys"] = $tableKeysgroup_as_adminview;


$tdatagroup_as_adminview[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Group_as_AdminView","group_id");
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


	$tdatagroup_as_adminview["group_id"] = $fdata;
		$tdatagroup_as_adminview[".searchableFields"][] = "group_id";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Group_as_AdminView","group_name");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdatagroup_as_adminview["group_name"] = $fdata;
		$tdatagroup_as_adminview[".searchableFields"][] = "group_name";


$tables_data["Group as AdminView"]=&$tdatagroup_as_adminview;
$field_labels["Group_as_AdminView"] = &$fieldLabelsgroup_as_adminview;
$fieldToolTips["Group_as_AdminView"] = &$fieldToolTipsgroup_as_adminview;
$placeHolders["Group_as_AdminView"] = &$placeHoldersgroup_as_adminview;
$page_titles["Group_as_AdminView"] = &$pageTitlesgroup_as_adminview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Group as AdminView"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Group as AdminView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/group_as_adminview_ops.php" ) );



	
		;

		

$tdatagroup_as_adminview[".sqlquery"] = $queryData_group_as_adminview;



include_once(getabspath("include/group_as_adminview_events.php"));
$tableEvents["Group as AdminView"] = new eventclass_group_as_adminview;
$tdatagroup_as_adminview[".hasEvents"] = true;

?>