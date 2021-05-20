<?php
$tdataadd_checkin_review = array();
$tdataadd_checkin_review[".searchableFields"] = array();
$tdataadd_checkin_review[".ShortName"] = "add_checkin_review";
$tdataadd_checkin_review[".OwnerID"] = "";
$tdataadd_checkin_review[".OriginalTable"] = "group_member_checkin";


$tdataadd_checkin_review[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadd_checkin_review[".originalPagesByType"] = $tdataadd_checkin_review[".pagesByType"];
$tdataadd_checkin_review[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadd_checkin_review[".originalPages"] = $tdataadd_checkin_review[".pages"];
$tdataadd_checkin_review[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadd_checkin_review[".originalDefaultPages"] = $tdataadd_checkin_review[".defaultPages"];

//	field labels
$fieldLabelsadd_checkin_review = array();
$fieldToolTipsadd_checkin_review = array();
$pageTitlesadd_checkin_review = array();
$placeHoldersadd_checkin_review = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadd_checkin_review["English"] = array();
	$fieldToolTipsadd_checkin_review["English"] = array();
	$placeHoldersadd_checkin_review["English"] = array();
	$pageTitlesadd_checkin_review["English"] = array();
	$fieldLabelsadd_checkin_review["English"]["group_member_checkin_id"] = "Group Member Checkin Id";
	$fieldToolTipsadd_checkin_review["English"]["group_member_checkin_id"] = "";
	$placeHoldersadd_checkin_review["English"]["group_member_checkin_id"] = "";
	$fieldLabelsadd_checkin_review["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsadd_checkin_review["English"]["group_member_id"] = "";
	$placeHoldersadd_checkin_review["English"]["group_member_id"] = "";
	$fieldLabelsadd_checkin_review["English"]["member_id"] = "Member Id";
	$fieldToolTipsadd_checkin_review["English"]["member_id"] = "";
	$placeHoldersadd_checkin_review["English"]["member_id"] = "";
	$fieldLabelsadd_checkin_review["English"]["group_id"] = "Group Id";
	$fieldToolTipsadd_checkin_review["English"]["group_id"] = "";
	$placeHoldersadd_checkin_review["English"]["group_id"] = "";
	$fieldLabelsadd_checkin_review["English"]["checkin_date"] = "Checkin Date";
	$fieldToolTipsadd_checkin_review["English"]["checkin_date"] = "";
	$placeHoldersadd_checkin_review["English"]["checkin_date"] = "";
	$fieldLabelsadd_checkin_review["English"]["checkout_date"] = "Checkout Date";
	$fieldToolTipsadd_checkin_review["English"]["checkout_date"] = "";
	$placeHoldersadd_checkin_review["English"]["checkout_date"] = "";
	$fieldLabelsadd_checkin_review["English"]["id_room"] = "Id Room";
	$fieldToolTipsadd_checkin_review["English"]["id_room"] = "";
	$placeHoldersadd_checkin_review["English"]["id_room"] = "";
	$fieldLabelsadd_checkin_review["English"]["valid"] = "Valid";
	$fieldToolTipsadd_checkin_review["English"]["valid"] = "";
	$placeHoldersadd_checkin_review["English"]["valid"] = "";
	$fieldLabelsadd_checkin_review["English"]["review_member"] = "Review Member";
	$fieldToolTipsadd_checkin_review["English"]["review_member"] = "";
	$placeHoldersadd_checkin_review["English"]["review_member"] = "";
	$fieldLabelsadd_checkin_review["English"]["rating_member"] = "Rating Member";
	$fieldToolTipsadd_checkin_review["English"]["rating_member"] = "";
	$placeHoldersadd_checkin_review["English"]["rating_member"] = "";
	if (count($fieldToolTipsadd_checkin_review["English"]))
		$tdataadd_checkin_review[".isUseToolTips"] = true;
}


	$tdataadd_checkin_review[".NCSearch"] = true;



$tdataadd_checkin_review[".shortTableName"] = "add_checkin_review";
$tdataadd_checkin_review[".nSecOptions"] = 0;

$tdataadd_checkin_review[".mainTableOwnerID"] = "";
$tdataadd_checkin_review[".entityType"] = 1;
$tdataadd_checkin_review[".connId"] = "notif_basic1_at_menkz_xyz";


$tdataadd_checkin_review[".strOriginalTableName"] = "group_member_checkin";

	



$tdataadd_checkin_review[".showAddInPopup"] = false;

$tdataadd_checkin_review[".showEditInPopup"] = false;

$tdataadd_checkin_review[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadd_checkin_review[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadd_checkin_review[".listAjax"] = false;
//	temporary
$tdataadd_checkin_review[".listAjax"] = false;

	$tdataadd_checkin_review[".audit"] = false;

	$tdataadd_checkin_review[".locking"] = false;


$pages = $tdataadd_checkin_review[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadd_checkin_review[".edit"] = true;
	$tdataadd_checkin_review[".afterEditAction"] = 1;
	$tdataadd_checkin_review[".closePopupAfterEdit"] = 1;
	$tdataadd_checkin_review[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadd_checkin_review[".add"] = true;
$tdataadd_checkin_review[".afterAddAction"] = 1;
$tdataadd_checkin_review[".closePopupAfterAdd"] = 1;
$tdataadd_checkin_review[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadd_checkin_review[".list"] = true;
}



$tdataadd_checkin_review[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadd_checkin_review[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadd_checkin_review[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadd_checkin_review[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadd_checkin_review[".printFriendly"] = true;
}



$tdataadd_checkin_review[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadd_checkin_review[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadd_checkin_review[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadd_checkin_review[".isUseAjaxSuggest"] = true;

$tdataadd_checkin_review[".rowHighlite"] = true;



																					

$tdataadd_checkin_review[".ajaxCodeSnippetAdded"] = false;

$tdataadd_checkin_review[".buttonsAdded"] = false;

$tdataadd_checkin_review[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadd_checkin_review[".isUseTimeForSearch"] = false;


$tdataadd_checkin_review[".badgeColor"] = "008B8B";


$tdataadd_checkin_review[".allSearchFields"] = array();
$tdataadd_checkin_review[".filterFields"] = array();
$tdataadd_checkin_review[".requiredSearchFields"] = array();

$tdataadd_checkin_review[".googleLikeFields"] = array();
$tdataadd_checkin_review[".googleLikeFields"][] = "group_member_checkin_id";
$tdataadd_checkin_review[".googleLikeFields"][] = "group_member_id";
$tdataadd_checkin_review[".googleLikeFields"][] = "member_id";
$tdataadd_checkin_review[".googleLikeFields"][] = "group_id";
$tdataadd_checkin_review[".googleLikeFields"][] = "checkin_date";
$tdataadd_checkin_review[".googleLikeFields"][] = "checkout_date";
$tdataadd_checkin_review[".googleLikeFields"][] = "id_room";
$tdataadd_checkin_review[".googleLikeFields"][] = "valid";
$tdataadd_checkin_review[".googleLikeFields"][] = "review_member";
$tdataadd_checkin_review[".googleLikeFields"][] = "rating_member";



$tdataadd_checkin_review[".tableType"] = "list";

$tdataadd_checkin_review[".printerPageOrientation"] = 0;
$tdataadd_checkin_review[".nPrinterPageScale"] = 100;

$tdataadd_checkin_review[".nPrinterSplitRecords"] = 40;

$tdataadd_checkin_review[".geocodingEnabled"] = false;










$tdataadd_checkin_review[".pageSize"] = 20;

$tdataadd_checkin_review[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadd_checkin_review[".strOrderBy"] = $tstrOrderBy;

$tdataadd_checkin_review[".orderindexes"] = array();


$tdataadd_checkin_review[".sqlHead"] = "SELECT group_member_checkin_id,  	group_member_id,  	member_id,  	group_id,  	checkin_date,  	checkout_date,  	id_room,  	valid,  	review_member,  	rating_member";
$tdataadd_checkin_review[".sqlFrom"] = "FROM group_member_checkin";
$tdataadd_checkin_review[".sqlWhereExpr"] = "";
$tdataadd_checkin_review[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadd_checkin_review[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadd_checkin_review[".arrGroupsPerPage"] = $arrGPP;

$tdataadd_checkin_review[".highlightSearchResults"] = true;

$tableKeysadd_checkin_review = array();
$tableKeysadd_checkin_review[] = "group_member_checkin_id";
$tdataadd_checkin_review[".Keys"] = $tableKeysadd_checkin_review;


$tdataadd_checkin_review[".hideMobileList"] = array();




//	group_member_checkin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_checkin_id";
	$fdata["GoodName"] = "group_member_checkin_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_checkin_review","group_member_checkin_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_checkin_id";

	
		$fdata["isSQLExpression"] = true;
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


	$tdataadd_checkin_review["group_member_checkin_id"] = $fdata;
		$tdataadd_checkin_review[".searchableFields"][] = "group_member_checkin_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_checkin_review","group_member_id");
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


	$tdataadd_checkin_review["group_member_id"] = $fdata;
		$tdataadd_checkin_review[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_checkin_review","member_id");
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


	$tdataadd_checkin_review["member_id"] = $fdata;
		$tdataadd_checkin_review[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_checkin_review","group_id");
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


	$tdataadd_checkin_review["group_id"] = $fdata;
		$tdataadd_checkin_review[".searchableFields"][] = "group_id";
//	checkin_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "checkin_date";
	$fdata["GoodName"] = "checkin_date";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_checkin_review","checkin_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "checkin_date";

	
		$fdata["isSQLExpression"] = true;
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


	$tdataadd_checkin_review["checkin_date"] = $fdata;
		$tdataadd_checkin_review[".searchableFields"][] = "checkin_date";
//	checkout_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "checkout_date";
	$fdata["GoodName"] = "checkout_date";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_checkin_review","checkout_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "checkout_date";

	
		$fdata["isSQLExpression"] = true;
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


	$tdataadd_checkin_review["checkout_date"] = $fdata;
		$tdataadd_checkin_review[".searchableFields"][] = "checkout_date";
//	id_room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_room";
	$fdata["GoodName"] = "id_room";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_checkin_review","id_room");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_room";

	
		$fdata["isSQLExpression"] = true;
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataadd_checkin_review["id_room"] = $fdata;
		$tdataadd_checkin_review[".searchableFields"][] = "id_room";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_checkin_review","valid");
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


	$tdataadd_checkin_review["valid"] = $fdata;
		$tdataadd_checkin_review[".searchableFields"][] = "valid";
//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_checkin_review","review_member");
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


	$tdataadd_checkin_review["review_member"] = $fdata;
		$tdataadd_checkin_review[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_checkin_review","rating_member");
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


	$tdataadd_checkin_review["rating_member"] = $fdata;
		$tdataadd_checkin_review[".searchableFields"][] = "rating_member";


$tables_data["add_checkin_review"]=&$tdataadd_checkin_review;
$field_labels["add_checkin_review"] = &$fieldLabelsadd_checkin_review;
$fieldToolTips["add_checkin_review"] = &$fieldToolTipsadd_checkin_review;
$placeHolders["add_checkin_review"] = &$placeHoldersadd_checkin_review;
$page_titles["add_checkin_review"] = &$pageTitlesadd_checkin_review;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["add_checkin_review"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["add_checkin_review"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_add_checkin_review()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_checkin_id,  	group_member_id,  	member_id,  	group_id,  	checkin_date,  	checkout_date,  	id_room,  	valid,  	review_member,  	rating_member";
$proto0["m_strFrom"] = "FROM group_member_checkin";
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
	"m_strName" => "group_member_checkin_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_checkin_review"
));

$proto6["m_sql"] = "group_member_checkin_id";
$proto6["m_srcTableName"] = "add_checkin_review";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_checkin_review"
));

$proto8["m_sql"] = "group_member_id";
$proto8["m_srcTableName"] = "add_checkin_review";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_checkin_review"
));

$proto10["m_sql"] = "member_id";
$proto10["m_srcTableName"] = "add_checkin_review";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_checkin_review"
));

$proto12["m_sql"] = "group_id";
$proto12["m_srcTableName"] = "add_checkin_review";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "checkin_date",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_checkin_review"
));

$proto14["m_sql"] = "checkin_date";
$proto14["m_srcTableName"] = "add_checkin_review";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "checkout_date",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_checkin_review"
));

$proto16["m_sql"] = "checkout_date";
$proto16["m_srcTableName"] = "add_checkin_review";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_room",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_checkin_review"
));

$proto18["m_sql"] = "id_room";
$proto18["m_srcTableName"] = "add_checkin_review";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_checkin_review"
));

$proto20["m_sql"] = "valid";
$proto20["m_srcTableName"] = "add_checkin_review";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "review_member",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_checkin_review"
));

$proto22["m_sql"] = "review_member";
$proto22["m_srcTableName"] = "add_checkin_review";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rating_member",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_checkin_review"
));

$proto24["m_sql"] = "rating_member";
$proto24["m_srcTableName"] = "add_checkin_review";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "group_member_checkin";
$proto27["m_srcTableName"] = "add_checkin_review";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "group_member_checkin_id";
$proto27["m_columns"][] = "group_member_id";
$proto27["m_columns"][] = "member_id";
$proto27["m_columns"][] = "group_id";
$proto27["m_columns"][] = "checkin_date";
$proto27["m_columns"][] = "checkout_date";
$proto27["m_columns"][] = "id_room";
$proto27["m_columns"][] = "valid";
$proto27["m_columns"][] = "review_member";
$proto27["m_columns"][] = "rating_member";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "group_member_checkin";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "add_checkin_review";
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
$proto0["m_srcTableName"]="add_checkin_review";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_add_checkin_review = createSqlQuery_add_checkin_review();


	
		;

										

$tdataadd_checkin_review[".sqlquery"] = $queryData_add_checkin_review;



include_once(getabspath("include/add_checkin_review_events.php"));
$tableEvents["add_checkin_review"] = new eventclass_add_checkin_review;
$tdataadd_checkin_review[".hasEvents"] = true;

?>