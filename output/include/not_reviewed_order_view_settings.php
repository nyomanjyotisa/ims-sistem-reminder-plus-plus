<?php
$tdatanot_reviewed_order_view = array();
$tdatanot_reviewed_order_view[".searchableFields"] = array();
$tdatanot_reviewed_order_view[".ShortName"] = "not_reviewed_order_view";
$tdatanot_reviewed_order_view[".OwnerID"] = "";
$tdatanot_reviewed_order_view[".OriginalTable"] = "not_reviewed_order_view";


$tdatanot_reviewed_order_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatanot_reviewed_order_view[".originalPagesByType"] = $tdatanot_reviewed_order_view[".pagesByType"];
$tdatanot_reviewed_order_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatanot_reviewed_order_view[".originalPages"] = $tdatanot_reviewed_order_view[".pages"];
$tdatanot_reviewed_order_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatanot_reviewed_order_view[".originalDefaultPages"] = $tdatanot_reviewed_order_view[".defaultPages"];

//	field labels
$fieldLabelsnot_reviewed_order_view = array();
$fieldToolTipsnot_reviewed_order_view = array();
$pageTitlesnot_reviewed_order_view = array();
$placeHoldersnot_reviewed_order_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnot_reviewed_order_view["English"] = array();
	$fieldToolTipsnot_reviewed_order_view["English"] = array();
	$placeHoldersnot_reviewed_order_view["English"] = array();
	$pageTitlesnot_reviewed_order_view["English"] = array();
	$fieldLabelsnot_reviewed_order_view["English"]["group_member_order"] = "Group Member Order";
	$fieldToolTipsnot_reviewed_order_view["English"]["group_member_order"] = "";
	$placeHoldersnot_reviewed_order_view["English"]["group_member_order"] = "";
	$fieldLabelsnot_reviewed_order_view["English"]["order_date"] = "Order Date";
	$fieldToolTipsnot_reviewed_order_view["English"]["order_date"] = "";
	$placeHoldersnot_reviewed_order_view["English"]["order_date"] = "";
	$fieldLabelsnot_reviewed_order_view["English"]["total"] = "Total";
	$fieldToolTipsnot_reviewed_order_view["English"]["total"] = "";
	$placeHoldersnot_reviewed_order_view["English"]["total"] = "";
	if (count($fieldToolTipsnot_reviewed_order_view["English"]))
		$tdatanot_reviewed_order_view[".isUseToolTips"] = true;
}


	$tdatanot_reviewed_order_view[".NCSearch"] = true;



$tdatanot_reviewed_order_view[".shortTableName"] = "not_reviewed_order_view";
$tdatanot_reviewed_order_view[".nSecOptions"] = 0;

$tdatanot_reviewed_order_view[".mainTableOwnerID"] = "";
$tdatanot_reviewed_order_view[".entityType"] = 6;
$tdatanot_reviewed_order_view[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatanot_reviewed_order_view[".strOriginalTableName"] = "not_reviewed_order_view";

	



$tdatanot_reviewed_order_view[".showAddInPopup"] = false;

$tdatanot_reviewed_order_view[".showEditInPopup"] = false;

$tdatanot_reviewed_order_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanot_reviewed_order_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanot_reviewed_order_view[".listAjax"] = false;
//	temporary
$tdatanot_reviewed_order_view[".listAjax"] = false;

	$tdatanot_reviewed_order_view[".audit"] = false;

	$tdatanot_reviewed_order_view[".locking"] = false;


$pages = $tdatanot_reviewed_order_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanot_reviewed_order_view[".edit"] = true;
	$tdatanot_reviewed_order_view[".afterEditAction"] = 1;
	$tdatanot_reviewed_order_view[".closePopupAfterEdit"] = 1;
	$tdatanot_reviewed_order_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanot_reviewed_order_view[".add"] = true;
$tdatanot_reviewed_order_view[".afterAddAction"] = 1;
$tdatanot_reviewed_order_view[".closePopupAfterAdd"] = 1;
$tdatanot_reviewed_order_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanot_reviewed_order_view[".list"] = true;
}



$tdatanot_reviewed_order_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanot_reviewed_order_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanot_reviewed_order_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanot_reviewed_order_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanot_reviewed_order_view[".printFriendly"] = true;
}



$tdatanot_reviewed_order_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanot_reviewed_order_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanot_reviewed_order_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanot_reviewed_order_view[".isUseAjaxSuggest"] = true;

$tdatanot_reviewed_order_view[".rowHighlite"] = true;



									

$tdatanot_reviewed_order_view[".ajaxCodeSnippetAdded"] = false;

$tdatanot_reviewed_order_view[".buttonsAdded"] = false;

$tdatanot_reviewed_order_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanot_reviewed_order_view[".isUseTimeForSearch"] = false;


$tdatanot_reviewed_order_view[".badgeColor"] = "BC8F8F";


$tdatanot_reviewed_order_view[".allSearchFields"] = array();
$tdatanot_reviewed_order_view[".filterFields"] = array();
$tdatanot_reviewed_order_view[".requiredSearchFields"] = array();

$tdatanot_reviewed_order_view[".googleLikeFields"] = array();
$tdatanot_reviewed_order_view[".googleLikeFields"][] = "group_member_order";
$tdatanot_reviewed_order_view[".googleLikeFields"][] = "order_date";
$tdatanot_reviewed_order_view[".googleLikeFields"][] = "total";




$tdatanot_reviewed_order_view[".printerPageOrientation"] = 0;
$tdatanot_reviewed_order_view[".nPrinterPageScale"] = 100;

$tdatanot_reviewed_order_view[".nPrinterSplitRecords"] = 40;

$tdatanot_reviewed_order_view[".geocodingEnabled"] = false;










$tdatanot_reviewed_order_view[".pageSize"] = 20;

$tdatanot_reviewed_order_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanot_reviewed_order_view[".strOrderBy"] = $tstrOrderBy;

$tdatanot_reviewed_order_view[".orderindexes"] = array();


$tdatanot_reviewed_order_view[".sqlHead"] = "";
$tdatanot_reviewed_order_view[".sqlFrom"] = "";
$tdatanot_reviewed_order_view[".sqlWhereExpr"] = "";
$tdatanot_reviewed_order_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanot_reviewed_order_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanot_reviewed_order_view[".arrGroupsPerPage"] = $arrGPP;

$tdatanot_reviewed_order_view[".highlightSearchResults"] = true;

$tableKeysnot_reviewed_order_view = array();
$tdatanot_reviewed_order_view[".Keys"] = $tableKeysnot_reviewed_order_view;


$tdatanot_reviewed_order_view[".hideMobileList"] = array();




//	group_member_order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_order";
	$fdata["GoodName"] = "group_member_order";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("not_reviewed_order_view","group_member_order");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_member_order";

	
		$fdata["FullName"] = "group_member_order";

	
	
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


	$tdatanot_reviewed_order_view["group_member_order"] = $fdata;
		$tdatanot_reviewed_order_view[".searchableFields"][] = "group_member_order";
//	order_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "order_date";
	$fdata["GoodName"] = "order_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("not_reviewed_order_view","order_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "order_date";

	
		$fdata["FullName"] = "order_date";

	
	
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


	$tdatanot_reviewed_order_view["order_date"] = $fdata;
		$tdatanot_reviewed_order_view[".searchableFields"][] = "order_date";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("not_reviewed_order_view","total");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "total";

	
		$fdata["FullName"] = "total";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdatanot_reviewed_order_view["total"] = $fdata;
		$tdatanot_reviewed_order_view[".searchableFields"][] = "total";


$tables_data["not_reviewed_order_view"]=&$tdatanot_reviewed_order_view;
$field_labels["not_reviewed_order_view"] = &$fieldLabelsnot_reviewed_order_view;
$fieldToolTips["not_reviewed_order_view"] = &$fieldToolTipsnot_reviewed_order_view;
$placeHolders["not_reviewed_order_view"] = &$placeHoldersnot_reviewed_order_view;
$page_titles["not_reviewed_order_view"] = &$pageTitlesnot_reviewed_order_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["not_reviewed_order_view"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["not_reviewed_order_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/not_reviewed_order_view_ops.php" ) );



	
		;

			

$tdatanot_reviewed_order_view[".sqlquery"] = $queryData_not_reviewed_order_view;



$tableEvents["not_reviewed_order_view"] = new eventsBase;
$tdatanot_reviewed_order_view[".hasEvents"] = false;

?>