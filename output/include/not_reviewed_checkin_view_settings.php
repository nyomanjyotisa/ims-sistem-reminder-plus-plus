<?php
$tdatanot_reviewed_checkin_view = array();
$tdatanot_reviewed_checkin_view[".searchableFields"] = array();
$tdatanot_reviewed_checkin_view[".ShortName"] = "not_reviewed_checkin_view";
$tdatanot_reviewed_checkin_view[".OwnerID"] = "";
$tdatanot_reviewed_checkin_view[".OriginalTable"] = "not_reviewed_checkin_view";


$tdatanot_reviewed_checkin_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatanot_reviewed_checkin_view[".originalPagesByType"] = $tdatanot_reviewed_checkin_view[".pagesByType"];
$tdatanot_reviewed_checkin_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatanot_reviewed_checkin_view[".originalPages"] = $tdatanot_reviewed_checkin_view[".pages"];
$tdatanot_reviewed_checkin_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatanot_reviewed_checkin_view[".originalDefaultPages"] = $tdatanot_reviewed_checkin_view[".defaultPages"];

//	field labels
$fieldLabelsnot_reviewed_checkin_view = array();
$fieldToolTipsnot_reviewed_checkin_view = array();
$pageTitlesnot_reviewed_checkin_view = array();
$placeHoldersnot_reviewed_checkin_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnot_reviewed_checkin_view["English"] = array();
	$fieldToolTipsnot_reviewed_checkin_view["English"] = array();
	$placeHoldersnot_reviewed_checkin_view["English"] = array();
	$pageTitlesnot_reviewed_checkin_view["English"] = array();
	$fieldLabelsnot_reviewed_checkin_view["English"]["group_member_checkin_id"] = "Group Member Checkin Id";
	$fieldToolTipsnot_reviewed_checkin_view["English"]["group_member_checkin_id"] = "";
	$placeHoldersnot_reviewed_checkin_view["English"]["group_member_checkin_id"] = "";
	$fieldLabelsnot_reviewed_checkin_view["English"]["checkin_date"] = "Checkin Date";
	$fieldToolTipsnot_reviewed_checkin_view["English"]["checkin_date"] = "";
	$placeHoldersnot_reviewed_checkin_view["English"]["checkin_date"] = "";
	$fieldLabelsnot_reviewed_checkin_view["English"]["checkout_date"] = "Checkout Date";
	$fieldToolTipsnot_reviewed_checkin_view["English"]["checkout_date"] = "";
	$placeHoldersnot_reviewed_checkin_view["English"]["checkout_date"] = "";
	$fieldLabelsnot_reviewed_checkin_view["English"]["id_room"] = "Id Room";
	$fieldToolTipsnot_reviewed_checkin_view["English"]["id_room"] = "";
	$placeHoldersnot_reviewed_checkin_view["English"]["id_room"] = "";
	if (count($fieldToolTipsnot_reviewed_checkin_view["English"]))
		$tdatanot_reviewed_checkin_view[".isUseToolTips"] = true;
}


	$tdatanot_reviewed_checkin_view[".NCSearch"] = true;



$tdatanot_reviewed_checkin_view[".shortTableName"] = "not_reviewed_checkin_view";
$tdatanot_reviewed_checkin_view[".nSecOptions"] = 0;

$tdatanot_reviewed_checkin_view[".mainTableOwnerID"] = "";
$tdatanot_reviewed_checkin_view[".entityType"] = 6;
$tdatanot_reviewed_checkin_view[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatanot_reviewed_checkin_view[".strOriginalTableName"] = "not_reviewed_checkin_view";

	



$tdatanot_reviewed_checkin_view[".showAddInPopup"] = false;

$tdatanot_reviewed_checkin_view[".showEditInPopup"] = false;

$tdatanot_reviewed_checkin_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanot_reviewed_checkin_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanot_reviewed_checkin_view[".listAjax"] = false;
//	temporary
$tdatanot_reviewed_checkin_view[".listAjax"] = false;

	$tdatanot_reviewed_checkin_view[".audit"] = false;

	$tdatanot_reviewed_checkin_view[".locking"] = false;


$pages = $tdatanot_reviewed_checkin_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanot_reviewed_checkin_view[".edit"] = true;
	$tdatanot_reviewed_checkin_view[".afterEditAction"] = 1;
	$tdatanot_reviewed_checkin_view[".closePopupAfterEdit"] = 1;
	$tdatanot_reviewed_checkin_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanot_reviewed_checkin_view[".add"] = true;
$tdatanot_reviewed_checkin_view[".afterAddAction"] = 1;
$tdatanot_reviewed_checkin_view[".closePopupAfterAdd"] = 1;
$tdatanot_reviewed_checkin_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanot_reviewed_checkin_view[".list"] = true;
}



$tdatanot_reviewed_checkin_view[".strSortControlSettingsJSON"] = "";

$tdatanot_reviewed_checkin_view[".strClickActionJSON"] = "{\"fields\":{\"checkin_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"checkout_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"group_member_checkin_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id_room\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"code\",\"codeData\":{\"snippet\":\"not_reviewed_checkin_view_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatanot_reviewed_checkin_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanot_reviewed_checkin_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanot_reviewed_checkin_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanot_reviewed_checkin_view[".printFriendly"] = true;
}



$tdatanot_reviewed_checkin_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanot_reviewed_checkin_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanot_reviewed_checkin_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanot_reviewed_checkin_view[".isUseAjaxSuggest"] = true;

$tdatanot_reviewed_checkin_view[".rowHighlite"] = true;



																							
					


$tdatanot_reviewed_checkin_view[".ajaxCodeSnippetAdded"] = true;

$tdatanot_reviewed_checkin_view[".buttonsAdded"] = true;

$tdatanot_reviewed_checkin_view[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanot_reviewed_checkin_view[".isUseTimeForSearch"] = false;


$tdatanot_reviewed_checkin_view[".badgeColor"] = "7B68EE";


$tdatanot_reviewed_checkin_view[".allSearchFields"] = array();
$tdatanot_reviewed_checkin_view[".filterFields"] = array();
$tdatanot_reviewed_checkin_view[".requiredSearchFields"] = array();

$tdatanot_reviewed_checkin_view[".googleLikeFields"] = array();
$tdatanot_reviewed_checkin_view[".googleLikeFields"][] = "group_member_checkin_id";
$tdatanot_reviewed_checkin_view[".googleLikeFields"][] = "checkin_date";
$tdatanot_reviewed_checkin_view[".googleLikeFields"][] = "checkout_date";
$tdatanot_reviewed_checkin_view[".googleLikeFields"][] = "id_room";




$tdatanot_reviewed_checkin_view[".printerPageOrientation"] = 0;
$tdatanot_reviewed_checkin_view[".nPrinterPageScale"] = 100;

$tdatanot_reviewed_checkin_view[".nPrinterSplitRecords"] = 40;

$tdatanot_reviewed_checkin_view[".geocodingEnabled"] = false;










$tdatanot_reviewed_checkin_view[".pageSize"] = 20;

$tdatanot_reviewed_checkin_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanot_reviewed_checkin_view[".strOrderBy"] = $tstrOrderBy;

$tdatanot_reviewed_checkin_view[".orderindexes"] = array();


$tdatanot_reviewed_checkin_view[".sqlHead"] = "";
$tdatanot_reviewed_checkin_view[".sqlFrom"] = "";
$tdatanot_reviewed_checkin_view[".sqlWhereExpr"] = "";
$tdatanot_reviewed_checkin_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanot_reviewed_checkin_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanot_reviewed_checkin_view[".arrGroupsPerPage"] = $arrGPP;

$tdatanot_reviewed_checkin_view[".highlightSearchResults"] = true;

$tableKeysnot_reviewed_checkin_view = array();
$tdatanot_reviewed_checkin_view[".Keys"] = $tableKeysnot_reviewed_checkin_view;


$tdatanot_reviewed_checkin_view[".hideMobileList"] = array();




//	group_member_checkin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_checkin_id";
	$fdata["GoodName"] = "group_member_checkin_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("not_reviewed_checkin_view","group_member_checkin_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_member_checkin_id";

	
		$fdata["FullName"] = "group_member_checkin_id";

	
	
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


	$tdatanot_reviewed_checkin_view["group_member_checkin_id"] = $fdata;
		$tdatanot_reviewed_checkin_view[".searchableFields"][] = "group_member_checkin_id";
//	checkin_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "checkin_date";
	$fdata["GoodName"] = "checkin_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("not_reviewed_checkin_view","checkin_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "checkin_date";

	
		$fdata["FullName"] = "checkin_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatanot_reviewed_checkin_view["checkin_date"] = $fdata;
		$tdatanot_reviewed_checkin_view[".searchableFields"][] = "checkin_date";
//	checkout_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "checkout_date";
	$fdata["GoodName"] = "checkout_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("not_reviewed_checkin_view","checkout_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "checkout_date";

	
		$fdata["FullName"] = "checkout_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatanot_reviewed_checkin_view["checkout_date"] = $fdata;
		$tdatanot_reviewed_checkin_view[".searchableFields"][] = "checkout_date";
//	id_room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_room";
	$fdata["GoodName"] = "id_room";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("not_reviewed_checkin_view","id_room");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_room";

	
		$fdata["FullName"] = "id_room";

	
	
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


	$tdatanot_reviewed_checkin_view["id_room"] = $fdata;
		$tdatanot_reviewed_checkin_view[".searchableFields"][] = "id_room";


$tables_data["not_reviewed_checkin_view"]=&$tdatanot_reviewed_checkin_view;
$field_labels["not_reviewed_checkin_view"] = &$fieldLabelsnot_reviewed_checkin_view;
$fieldToolTips["not_reviewed_checkin_view"] = &$fieldToolTipsnot_reviewed_checkin_view;
$placeHolders["not_reviewed_checkin_view"] = &$placeHoldersnot_reviewed_checkin_view;
$page_titles["not_reviewed_checkin_view"] = &$pageTitlesnot_reviewed_checkin_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["not_reviewed_checkin_view"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["not_reviewed_checkin_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/not_reviewed_checkin_view_ops.php" ) );



	
		;

				

$tdatanot_reviewed_checkin_view[".sqlquery"] = $queryData_not_reviewed_checkin_view;



include_once(getabspath("include/not_reviewed_checkin_view_events.php"));
$tableEvents["not_reviewed_checkin_view"] = new eventclass_not_reviewed_checkin_view;
$tdatanot_reviewed_checkin_view[".hasEvents"] = true;

?>