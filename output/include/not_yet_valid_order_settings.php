<?php
$tdatanot_yet_valid_order = array();
$tdatanot_yet_valid_order[".searchableFields"] = array();
$tdatanot_yet_valid_order[".ShortName"] = "not_yet_valid_order";
$tdatanot_yet_valid_order[".OwnerID"] = "";
$tdatanot_yet_valid_order[".OriginalTable"] = "group_member_order";


$tdatanot_yet_valid_order[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanot_yet_valid_order[".originalPagesByType"] = $tdatanot_yet_valid_order[".pagesByType"];
$tdatanot_yet_valid_order[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanot_yet_valid_order[".originalPages"] = $tdatanot_yet_valid_order[".pages"];
$tdatanot_yet_valid_order[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanot_yet_valid_order[".originalDefaultPages"] = $tdatanot_yet_valid_order[".defaultPages"];

//	field labels
$fieldLabelsnot_yet_valid_order = array();
$fieldToolTipsnot_yet_valid_order = array();
$pageTitlesnot_yet_valid_order = array();
$placeHoldersnot_yet_valid_order = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnot_yet_valid_order["English"] = array();
	$fieldToolTipsnot_yet_valid_order["English"] = array();
	$placeHoldersnot_yet_valid_order["English"] = array();
	$pageTitlesnot_yet_valid_order["English"] = array();
	$fieldLabelsnot_yet_valid_order["English"]["group_member_order"] = "Group Member Order";
	$fieldToolTipsnot_yet_valid_order["English"]["group_member_order"] = "";
	$placeHoldersnot_yet_valid_order["English"]["group_member_order"] = "";
	$fieldLabelsnot_yet_valid_order["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsnot_yet_valid_order["English"]["group_member_id"] = "";
	$placeHoldersnot_yet_valid_order["English"]["group_member_id"] = "";
	$fieldLabelsnot_yet_valid_order["English"]["member_id"] = "Member Id";
	$fieldToolTipsnot_yet_valid_order["English"]["member_id"] = "";
	$placeHoldersnot_yet_valid_order["English"]["member_id"] = "";
	$fieldLabelsnot_yet_valid_order["English"]["group_id"] = "Group Id";
	$fieldToolTipsnot_yet_valid_order["English"]["group_id"] = "";
	$placeHoldersnot_yet_valid_order["English"]["group_id"] = "";
	$fieldLabelsnot_yet_valid_order["English"]["order_date"] = "Order Date";
	$fieldToolTipsnot_yet_valid_order["English"]["order_date"] = "";
	$placeHoldersnot_yet_valid_order["English"]["order_date"] = "";
	$fieldLabelsnot_yet_valid_order["English"]["valid"] = "Valid";
	$fieldToolTipsnot_yet_valid_order["English"]["valid"] = "";
	$placeHoldersnot_yet_valid_order["English"]["valid"] = "";
	$fieldLabelsnot_yet_valid_order["English"]["total"] = "Total";
	$fieldToolTipsnot_yet_valid_order["English"]["total"] = "";
	$placeHoldersnot_yet_valid_order["English"]["total"] = "";
	$fieldLabelsnot_yet_valid_order["English"]["currency"] = "Currency";
	$fieldToolTipsnot_yet_valid_order["English"]["currency"] = "";
	$placeHoldersnot_yet_valid_order["English"]["currency"] = "";
	$fieldLabelsnot_yet_valid_order["English"]["review_member"] = "Review Member";
	$fieldToolTipsnot_yet_valid_order["English"]["review_member"] = "";
	$placeHoldersnot_yet_valid_order["English"]["review_member"] = "";
	$fieldLabelsnot_yet_valid_order["English"]["rating_member"] = "Rating Member";
	$fieldToolTipsnot_yet_valid_order["English"]["rating_member"] = "";
	$placeHoldersnot_yet_valid_order["English"]["rating_member"] = "";
	if (count($fieldToolTipsnot_yet_valid_order["English"]))
		$tdatanot_yet_valid_order[".isUseToolTips"] = true;
}


	$tdatanot_yet_valid_order[".NCSearch"] = true;



$tdatanot_yet_valid_order[".shortTableName"] = "not_yet_valid_order";
$tdatanot_yet_valid_order[".nSecOptions"] = 0;

$tdatanot_yet_valid_order[".mainTableOwnerID"] = "";
$tdatanot_yet_valid_order[".entityType"] = 1;
$tdatanot_yet_valid_order[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatanot_yet_valid_order[".strOriginalTableName"] = "group_member_order";

	



$tdatanot_yet_valid_order[".showAddInPopup"] = false;

$tdatanot_yet_valid_order[".showEditInPopup"] = false;

$tdatanot_yet_valid_order[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanot_yet_valid_order[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanot_yet_valid_order[".listAjax"] = false;
//	temporary
$tdatanot_yet_valid_order[".listAjax"] = false;

	$tdatanot_yet_valid_order[".audit"] = false;

	$tdatanot_yet_valid_order[".locking"] = false;


$pages = $tdatanot_yet_valid_order[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanot_yet_valid_order[".edit"] = true;
	$tdatanot_yet_valid_order[".afterEditAction"] = 1;
	$tdatanot_yet_valid_order[".closePopupAfterEdit"] = 1;
	$tdatanot_yet_valid_order[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanot_yet_valid_order[".add"] = true;
$tdatanot_yet_valid_order[".afterAddAction"] = 1;
$tdatanot_yet_valid_order[".closePopupAfterAdd"] = 1;
$tdatanot_yet_valid_order[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanot_yet_valid_order[".list"] = true;
}



$tdatanot_yet_valid_order[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanot_yet_valid_order[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanot_yet_valid_order[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanot_yet_valid_order[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanot_yet_valid_order[".printFriendly"] = true;
}



$tdatanot_yet_valid_order[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanot_yet_valid_order[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanot_yet_valid_order[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanot_yet_valid_order[".isUseAjaxSuggest"] = true;

$tdatanot_yet_valid_order[".rowHighlite"] = true;



																					

$tdatanot_yet_valid_order[".ajaxCodeSnippetAdded"] = false;

$tdatanot_yet_valid_order[".buttonsAdded"] = false;

$tdatanot_yet_valid_order[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanot_yet_valid_order[".isUseTimeForSearch"] = false;


$tdatanot_yet_valid_order[".badgeColor"] = "E67349";


$tdatanot_yet_valid_order[".allSearchFields"] = array();
$tdatanot_yet_valid_order[".filterFields"] = array();
$tdatanot_yet_valid_order[".requiredSearchFields"] = array();

$tdatanot_yet_valid_order[".googleLikeFields"] = array();
$tdatanot_yet_valid_order[".googleLikeFields"][] = "group_member_order";
$tdatanot_yet_valid_order[".googleLikeFields"][] = "group_member_id";
$tdatanot_yet_valid_order[".googleLikeFields"][] = "member_id";
$tdatanot_yet_valid_order[".googleLikeFields"][] = "group_id";
$tdatanot_yet_valid_order[".googleLikeFields"][] = "order_date";
$tdatanot_yet_valid_order[".googleLikeFields"][] = "valid";
$tdatanot_yet_valid_order[".googleLikeFields"][] = "total";
$tdatanot_yet_valid_order[".googleLikeFields"][] = "currency";
$tdatanot_yet_valid_order[".googleLikeFields"][] = "review_member";
$tdatanot_yet_valid_order[".googleLikeFields"][] = "rating_member";



$tdatanot_yet_valid_order[".tableType"] = "list";

$tdatanot_yet_valid_order[".printerPageOrientation"] = 0;
$tdatanot_yet_valid_order[".nPrinterPageScale"] = 100;

$tdatanot_yet_valid_order[".nPrinterSplitRecords"] = 40;

$tdatanot_yet_valid_order[".geocodingEnabled"] = false;










$tdatanot_yet_valid_order[".pageSize"] = 20;

$tdatanot_yet_valid_order[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanot_yet_valid_order[".strOrderBy"] = $tstrOrderBy;

$tdatanot_yet_valid_order[".orderindexes"] = array();


$tdatanot_yet_valid_order[".sqlHead"] = "SELECT group_member_order,  	group_member_id,  	member_id,  	group_id,  	order_date,  	valid,  	total,  	currency,  	review_member,  	rating_member";
$tdatanot_yet_valid_order[".sqlFrom"] = "FROM group_member_order";
$tdatanot_yet_valid_order[".sqlWhereExpr"] = "";
$tdatanot_yet_valid_order[".sqlTail"] = "";

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
$tdatanot_yet_valid_order[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanot_yet_valid_order[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanot_yet_valid_order[".arrGroupsPerPage"] = $arrGPP;

$tdatanot_yet_valid_order[".highlightSearchResults"] = true;

$tableKeysnot_yet_valid_order = array();
$tableKeysnot_yet_valid_order[] = "group_member_order";
$tdatanot_yet_valid_order[".Keys"] = $tableKeysnot_yet_valid_order;


$tdatanot_yet_valid_order[".hideMobileList"] = array();




//	group_member_order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_order";
	$fdata["GoodName"] = "group_member_order";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("not_yet_valid_order","group_member_order");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_order";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatanot_yet_valid_order["group_member_order"] = $fdata;
		$tdatanot_yet_valid_order[".searchableFields"][] = "group_member_order";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("not_yet_valid_order","group_member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_id";

	
	
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


	$tdatanot_yet_valid_order["group_member_id"] = $fdata;
		$tdatanot_yet_valid_order[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("not_yet_valid_order","member_id");
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


	$tdatanot_yet_valid_order["member_id"] = $fdata;
		$tdatanot_yet_valid_order[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("not_yet_valid_order","group_id");
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


	$tdatanot_yet_valid_order["group_id"] = $fdata;
		$tdatanot_yet_valid_order[".searchableFields"][] = "group_id";
//	order_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "order_date";
	$fdata["GoodName"] = "order_date";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("not_yet_valid_order","order_date");
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


	$tdatanot_yet_valid_order["order_date"] = $fdata;
		$tdatanot_yet_valid_order[".searchableFields"][] = "order_date";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("not_yet_valid_order","valid");
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


	$tdatanot_yet_valid_order["valid"] = $fdata;
		$tdatanot_yet_valid_order[".searchableFields"][] = "valid";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("not_yet_valid_order","total");
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


	$tdatanot_yet_valid_order["total"] = $fdata;
		$tdatanot_yet_valid_order[".searchableFields"][] = "total";
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("not_yet_valid_order","currency");
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


	$tdatanot_yet_valid_order["currency"] = $fdata;
		$tdatanot_yet_valid_order[".searchableFields"][] = "currency";
//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("not_yet_valid_order","review_member");
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


	$tdatanot_yet_valid_order["review_member"] = $fdata;
		$tdatanot_yet_valid_order[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("not_yet_valid_order","rating_member");
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


	$tdatanot_yet_valid_order["rating_member"] = $fdata;
		$tdatanot_yet_valid_order[".searchableFields"][] = "rating_member";


$tables_data["not_yet_valid_order"]=&$tdatanot_yet_valid_order;
$field_labels["not_yet_valid_order"] = &$fieldLabelsnot_yet_valid_order;
$fieldToolTips["not_yet_valid_order"] = &$fieldToolTipsnot_yet_valid_order;
$placeHolders["not_yet_valid_order"] = &$placeHoldersnot_yet_valid_order;
$page_titles["not_yet_valid_order"] = &$pageTitlesnot_yet_valid_order;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["not_yet_valid_order"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["not_yet_valid_order"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_not_yet_valid_order()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_order,  	group_member_id,  	member_id,  	group_id,  	order_date,  	valid,  	total,  	currency,  	review_member,  	rating_member";
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
	"m_strName" => "group_member_order",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "not_yet_valid_order"
));

$proto6["m_sql"] = "group_member_order";
$proto6["m_srcTableName"] = "not_yet_valid_order";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "not_yet_valid_order"
));

$proto8["m_sql"] = "group_member_id";
$proto8["m_srcTableName"] = "not_yet_valid_order";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "not_yet_valid_order"
));

$proto10["m_sql"] = "member_id";
$proto10["m_srcTableName"] = "not_yet_valid_order";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "not_yet_valid_order"
));

$proto12["m_sql"] = "group_id";
$proto12["m_srcTableName"] = "not_yet_valid_order";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "order_date",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "not_yet_valid_order"
));

$proto14["m_sql"] = "order_date";
$proto14["m_srcTableName"] = "not_yet_valid_order";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "not_yet_valid_order"
));

$proto16["m_sql"] = "valid";
$proto16["m_srcTableName"] = "not_yet_valid_order";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "not_yet_valid_order"
));

$proto18["m_sql"] = "total";
$proto18["m_srcTableName"] = "not_yet_valid_order";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "not_yet_valid_order"
));

$proto20["m_sql"] = "currency";
$proto20["m_srcTableName"] = "not_yet_valid_order";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "review_member",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "not_yet_valid_order"
));

$proto22["m_sql"] = "review_member";
$proto22["m_srcTableName"] = "not_yet_valid_order";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rating_member",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "not_yet_valid_order"
));

$proto24["m_sql"] = "rating_member";
$proto24["m_srcTableName"] = "not_yet_valid_order";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "group_member_order";
$proto27["m_srcTableName"] = "not_yet_valid_order";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "group_member_order";
$proto27["m_columns"][] = "group_member_id";
$proto27["m_columns"][] = "member_id";
$proto27["m_columns"][] = "group_id";
$proto27["m_columns"][] = "order_date";
$proto27["m_columns"][] = "valid";
$proto27["m_columns"][] = "total";
$proto27["m_columns"][] = "currency";
$proto27["m_columns"][] = "review_member";
$proto27["m_columns"][] = "rating_member";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "group_member_order";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "not_yet_valid_order";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="not_yet_valid_order";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_not_yet_valid_order = createSqlQuery_not_yet_valid_order();


	
		;

										

$tdatanot_yet_valid_order[".sqlquery"] = $queryData_not_yet_valid_order;



$tableEvents["not_yet_valid_order"] = new eventsBase;
$tdatanot_yet_valid_order[".hasEvents"] = false;

?>