<?php
$tdatagroup_member_order = array();
$tdatagroup_member_order[".searchableFields"] = array();
$tdatagroup_member_order[".ShortName"] = "group_member_order";
$tdatagroup_member_order[".OwnerID"] = "";
$tdatagroup_member_order[".OriginalTable"] = "group_member_order";


$tdatagroup_member_order[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" );
$tdatagroup_member_order[".originalPagesByType"] = $tdatagroup_member_order[".pagesByType"];
$tdatagroup_member_order[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" ) );
$tdatagroup_member_order[".originalPages"] = $tdatagroup_member_order[".pages"];
$tdatagroup_member_order[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"search\":\"search\"}" );
$tdatagroup_member_order[".originalDefaultPages"] = $tdatagroup_member_order[".defaultPages"];

//	field labels
$fieldLabelsgroup_member_order = array();
$fieldToolTipsgroup_member_order = array();
$pageTitlesgroup_member_order = array();
$placeHoldersgroup_member_order = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_member_order["English"] = array();
	$fieldToolTipsgroup_member_order["English"] = array();
	$placeHoldersgroup_member_order["English"] = array();
	$pageTitlesgroup_member_order["English"] = array();
	$fieldLabelsgroup_member_order["English"]["member_id"] = "Member Id";
	$fieldToolTipsgroup_member_order["English"]["member_id"] = "";
	$placeHoldersgroup_member_order["English"]["member_id"] = "";
	$fieldLabelsgroup_member_order["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_member_order["English"]["group_id"] = "";
	$placeHoldersgroup_member_order["English"]["group_id"] = "";
	$fieldLabelsgroup_member_order["English"]["order_date"] = "Order Date";
	$fieldToolTipsgroup_member_order["English"]["order_date"] = "";
	$placeHoldersgroup_member_order["English"]["order_date"] = "";
	$fieldLabelsgroup_member_order["English"]["valid"] = "Valid";
	$fieldToolTipsgroup_member_order["English"]["valid"] = "";
	$placeHoldersgroup_member_order["English"]["valid"] = "";
	$fieldLabelsgroup_member_order["English"]["total"] = "Total";
	$fieldToolTipsgroup_member_order["English"]["total"] = "";
	$placeHoldersgroup_member_order["English"]["total"] = "";
	$fieldLabelsgroup_member_order["English"]["currency"] = "Currency";
	$fieldToolTipsgroup_member_order["English"]["currency"] = "";
	$placeHoldersgroup_member_order["English"]["currency"] = "";
	$fieldLabelsgroup_member_order["English"]["review_member"] = "Review Member";
	$fieldToolTipsgroup_member_order["English"]["review_member"] = "";
	$placeHoldersgroup_member_order["English"]["review_member"] = "";
	$fieldLabelsgroup_member_order["English"]["rating_member"] = "Rating Member";
	$fieldToolTipsgroup_member_order["English"]["rating_member"] = "";
	$placeHoldersgroup_member_order["English"]["rating_member"] = "";
	if (count($fieldToolTipsgroup_member_order["English"]))
		$tdatagroup_member_order[".isUseToolTips"] = true;
}


	$tdatagroup_member_order[".NCSearch"] = true;



$tdatagroup_member_order[".shortTableName"] = "group_member_order";
$tdatagroup_member_order[".nSecOptions"] = 0;

$tdatagroup_member_order[".mainTableOwnerID"] = "";
$tdatagroup_member_order[".entityType"] = 1;
$tdatagroup_member_order[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatagroup_member_order[".strOriginalTableName"] = "group_member_order";

	



$tdatagroup_member_order[".showAddInPopup"] = false;

$tdatagroup_member_order[".showEditInPopup"] = false;

$tdatagroup_member_order[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_member_order[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_member_order[".listAjax"] = false;
//	temporary
$tdatagroup_member_order[".listAjax"] = false;

	$tdatagroup_member_order[".audit"] = false;

	$tdatagroup_member_order[".locking"] = false;


$pages = $tdatagroup_member_order[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_member_order[".edit"] = true;
	$tdatagroup_member_order[".afterEditAction"] = 1;
	$tdatagroup_member_order[".closePopupAfterEdit"] = 1;
	$tdatagroup_member_order[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_member_order[".add"] = true;
$tdatagroup_member_order[".afterAddAction"] = 1;
$tdatagroup_member_order[".closePopupAfterAdd"] = 1;
$tdatagroup_member_order[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_member_order[".list"] = true;
}



$tdatagroup_member_order[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_member_order[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_member_order[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_member_order[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_member_order[".printFriendly"] = true;
}



$tdatagroup_member_order[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_member_order[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_member_order[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_member_order[".isUseAjaxSuggest"] = true;

$tdatagroup_member_order[".rowHighlite"] = true;



									

$tdatagroup_member_order[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_member_order[".buttonsAdded"] = false;

$tdatagroup_member_order[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_member_order[".isUseTimeForSearch"] = false;


$tdatagroup_member_order[".badgeColor"] = "E67349";


$tdatagroup_member_order[".allSearchFields"] = array();
$tdatagroup_member_order[".filterFields"] = array();
$tdatagroup_member_order[".requiredSearchFields"] = array();

$tdatagroup_member_order[".googleLikeFields"] = array();
$tdatagroup_member_order[".googleLikeFields"][] = "member_id";
$tdatagroup_member_order[".googleLikeFields"][] = "group_id";
$tdatagroup_member_order[".googleLikeFields"][] = "order_date";
$tdatagroup_member_order[".googleLikeFields"][] = "valid";
$tdatagroup_member_order[".googleLikeFields"][] = "total";
$tdatagroup_member_order[".googleLikeFields"][] = "currency";
$tdatagroup_member_order[".googleLikeFields"][] = "review_member";
$tdatagroup_member_order[".googleLikeFields"][] = "rating_member";



$tdatagroup_member_order[".tableType"] = "list";

$tdatagroup_member_order[".printerPageOrientation"] = 0;
$tdatagroup_member_order[".nPrinterPageScale"] = 100;

$tdatagroup_member_order[".nPrinterSplitRecords"] = 40;

$tdatagroup_member_order[".geocodingEnabled"] = false;










$tdatagroup_member_order[".pageSize"] = 20;

$tdatagroup_member_order[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_member_order[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_member_order[".orderindexes"] = array();


$tdatagroup_member_order[".sqlHead"] = "SELECT member_id,  group_id,  order_date,  valid,  total,  currency,  review_member,  rating_member";
$tdatagroup_member_order[".sqlFrom"] = "FROM group_member_order";
$tdatagroup_member_order[".sqlWhereExpr"] = "";
$tdatagroup_member_order[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatagroup_member_order[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_member_order[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_member_order[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_member_order[".highlightSearchResults"] = true;

$tableKeysgroup_member_order = array();
$tdatagroup_member_order[".Keys"] = $tableKeysgroup_member_order;


$tdatagroup_member_order[".hideMobileList"] = array();




//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("group_member_order","member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "member_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "personal";
	$edata["LookupConnId"] = "notif_basic1_at_menkz_xyz";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatagroup_member_order["member_id"] = $fdata;
		$tdatagroup_member_order[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("group_member_order","group_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "group";
	$edata["LookupConnId"] = "notif_basic1_at_menkz_xyz";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "group_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatagroup_member_order["group_id"] = $fdata;
		$tdatagroup_member_order[".searchableFields"][] = "group_id";
//	order_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "order_date";
	$fdata["GoodName"] = "order_date";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("group_member_order","order_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "order_date";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_member_order["order_date"] = $fdata;
		$tdatagroup_member_order[".searchableFields"][] = "order_date";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("group_member_order","valid");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "valid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valid";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatagroup_member_order["valid"] = $fdata;
		$tdatagroup_member_order[".searchableFields"][] = "valid";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("group_member_order","total");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "total";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_member_order["total"] = $fdata;
		$tdatagroup_member_order[".searchableFields"][] = "total";
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("group_member_order","currency");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "currency";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "currency";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatagroup_member_order["currency"] = $fdata;
		$tdatagroup_member_order[".searchableFields"][] = "currency";
//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("group_member_order","review_member");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "review_member";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "review_member";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatagroup_member_order["review_member"] = $fdata;
		$tdatagroup_member_order[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("group_member_order","rating_member");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "rating_member";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rating_member";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatagroup_member_order["rating_member"] = $fdata;
		$tdatagroup_member_order[".searchableFields"][] = "rating_member";


$tables_data["group_member_order"]=&$tdatagroup_member_order;
$field_labels["group_member_order"] = &$fieldLabelsgroup_member_order;
$fieldToolTips["group_member_order"] = &$fieldToolTipsgroup_member_order;
$placeHolders["group_member_order"] = &$placeHoldersgroup_member_order;
$page_titles["group_member_order"] = &$pageTitlesgroup_member_order;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_member_order"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_member_order"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_member_order()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "member_id,  group_id,  order_date,  valid,  total,  currency,  review_member,  rating_member";
$proto0["m_strFrom"] = "FROM group_member_order";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "group_member_order"
));

$proto6["m_sql"] = "member_id";
$proto6["m_srcTableName"] = "group_member_order";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "group_member_order"
));

$proto8["m_sql"] = "group_id";
$proto8["m_srcTableName"] = "group_member_order";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "order_date",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "group_member_order"
));

$proto10["m_sql"] = "order_date";
$proto10["m_srcTableName"] = "group_member_order";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "group_member_order"
));

$proto12["m_sql"] = "valid";
$proto12["m_srcTableName"] = "group_member_order";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "group_member_order"
));

$proto14["m_sql"] = "total";
$proto14["m_srcTableName"] = "group_member_order";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "group_member_order"
));

$proto16["m_sql"] = "currency";
$proto16["m_srcTableName"] = "group_member_order";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "review_member",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "group_member_order"
));

$proto18["m_sql"] = "review_member";
$proto18["m_srcTableName"] = "group_member_order";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "rating_member",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "group_member_order"
));

$proto20["m_sql"] = "rating_member";
$proto20["m_srcTableName"] = "group_member_order";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "group_member_order";
$proto23["m_srcTableName"] = "group_member_order";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "group_member_order";
$proto23["m_columns"][] = "group_member_id";
$proto23["m_columns"][] = "member_id";
$proto23["m_columns"][] = "group_id";
$proto23["m_columns"][] = "order_date";
$proto23["m_columns"][] = "valid";
$proto23["m_columns"][] = "total";
$proto23["m_columns"][] = "currency";
$proto23["m_columns"][] = "review_member";
$proto23["m_columns"][] = "rating_member";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "group_member_order";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "group_member_order";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group_member_order";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_member_order = createSqlQuery_group_member_order();


	
		;

								

$tdatagroup_member_order[".sqlquery"] = $queryData_group_member_order;



$tableEvents["group_member_order"] = new eventsBase;
$tdatagroup_member_order[".hasEvents"] = false;

?>