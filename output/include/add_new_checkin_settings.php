<?php
$tdataadd_new_checkin = array();
$tdataadd_new_checkin[".searchableFields"] = array();
$tdataadd_new_checkin[".ShortName"] = "add_new_checkin";
$tdataadd_new_checkin[".OwnerID"] = "";
$tdataadd_new_checkin[".OriginalTable"] = "group_member_checkin";


$tdataadd_new_checkin[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadd_new_checkin[".originalPagesByType"] = $tdataadd_new_checkin[".pagesByType"];
$tdataadd_new_checkin[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadd_new_checkin[".originalPages"] = $tdataadd_new_checkin[".pages"];
$tdataadd_new_checkin[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadd_new_checkin[".originalDefaultPages"] = $tdataadd_new_checkin[".defaultPages"];

//	field labels
$fieldLabelsadd_new_checkin = array();
$fieldToolTipsadd_new_checkin = array();
$pageTitlesadd_new_checkin = array();
$placeHoldersadd_new_checkin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadd_new_checkin["English"] = array();
	$fieldToolTipsadd_new_checkin["English"] = array();
	$placeHoldersadd_new_checkin["English"] = array();
	$pageTitlesadd_new_checkin["English"] = array();
	$fieldLabelsadd_new_checkin["English"]["group_member_checkin_id"] = "Group Member Checkin Id";
	$fieldToolTipsadd_new_checkin["English"]["group_member_checkin_id"] = "";
	$placeHoldersadd_new_checkin["English"]["group_member_checkin_id"] = "";
	$fieldLabelsadd_new_checkin["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsadd_new_checkin["English"]["group_member_id"] = "";
	$placeHoldersadd_new_checkin["English"]["group_member_id"] = "";
	$fieldLabelsadd_new_checkin["English"]["member_id"] = "Member Id";
	$fieldToolTipsadd_new_checkin["English"]["member_id"] = "";
	$placeHoldersadd_new_checkin["English"]["member_id"] = "";
	$fieldLabelsadd_new_checkin["English"]["group_id"] = "Group Id";
	$fieldToolTipsadd_new_checkin["English"]["group_id"] = "";
	$placeHoldersadd_new_checkin["English"]["group_id"] = "";
	$fieldLabelsadd_new_checkin["English"]["checkin_date"] = "Checkin Date";
	$fieldToolTipsadd_new_checkin["English"]["checkin_date"] = "";
	$placeHoldersadd_new_checkin["English"]["checkin_date"] = "";
	$fieldLabelsadd_new_checkin["English"]["checkout_date"] = "Checkout Date";
	$fieldToolTipsadd_new_checkin["English"]["checkout_date"] = "";
	$placeHoldersadd_new_checkin["English"]["checkout_date"] = "";
	$fieldLabelsadd_new_checkin["English"]["id_room"] = "Id Room";
	$fieldToolTipsadd_new_checkin["English"]["id_room"] = "";
	$placeHoldersadd_new_checkin["English"]["id_room"] = "";
	$fieldLabelsadd_new_checkin["English"]["valid"] = "Valid";
	$fieldToolTipsadd_new_checkin["English"]["valid"] = "";
	$placeHoldersadd_new_checkin["English"]["valid"] = "";
	$fieldLabelsadd_new_checkin["English"]["review_member"] = "Review Member";
	$fieldToolTipsadd_new_checkin["English"]["review_member"] = "";
	$placeHoldersadd_new_checkin["English"]["review_member"] = "";
	$fieldLabelsadd_new_checkin["English"]["rating_member"] = "Rating Member";
	$fieldToolTipsadd_new_checkin["English"]["rating_member"] = "";
	$placeHoldersadd_new_checkin["English"]["rating_member"] = "";
	if (count($fieldToolTipsadd_new_checkin["English"]))
		$tdataadd_new_checkin[".isUseToolTips"] = true;
}


	$tdataadd_new_checkin[".NCSearch"] = true;



$tdataadd_new_checkin[".shortTableName"] = "add_new_checkin";
$tdataadd_new_checkin[".nSecOptions"] = 0;

$tdataadd_new_checkin[".mainTableOwnerID"] = "";
$tdataadd_new_checkin[".entityType"] = 1;
$tdataadd_new_checkin[".connId"] = "notif_basic1_at_menkz_xyz";


$tdataadd_new_checkin[".strOriginalTableName"] = "group_member_checkin";

	



$tdataadd_new_checkin[".showAddInPopup"] = false;

$tdataadd_new_checkin[".showEditInPopup"] = false;

$tdataadd_new_checkin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadd_new_checkin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadd_new_checkin[".listAjax"] = false;
//	temporary
$tdataadd_new_checkin[".listAjax"] = false;

	$tdataadd_new_checkin[".audit"] = false;

	$tdataadd_new_checkin[".locking"] = false;


$pages = $tdataadd_new_checkin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadd_new_checkin[".edit"] = true;
	$tdataadd_new_checkin[".afterEditAction"] = 1;
	$tdataadd_new_checkin[".closePopupAfterEdit"] = 1;
	$tdataadd_new_checkin[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadd_new_checkin[".add"] = true;
$tdataadd_new_checkin[".afterAddAction"] = 1;
$tdataadd_new_checkin[".closePopupAfterAdd"] = 1;
$tdataadd_new_checkin[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadd_new_checkin[".list"] = true;
}



$tdataadd_new_checkin[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadd_new_checkin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadd_new_checkin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadd_new_checkin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadd_new_checkin[".printFriendly"] = true;
}



$tdataadd_new_checkin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadd_new_checkin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadd_new_checkin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadd_new_checkin[".isUseAjaxSuggest"] = true;

$tdataadd_new_checkin[".rowHighlite"] = true;



																					

$tdataadd_new_checkin[".ajaxCodeSnippetAdded"] = false;

$tdataadd_new_checkin[".buttonsAdded"] = false;

$tdataadd_new_checkin[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadd_new_checkin[".isUseTimeForSearch"] = false;


$tdataadd_new_checkin[".badgeColor"] = "9ACD32";


$tdataadd_new_checkin[".allSearchFields"] = array();
$tdataadd_new_checkin[".filterFields"] = array();
$tdataadd_new_checkin[".requiredSearchFields"] = array();

$tdataadd_new_checkin[".googleLikeFields"] = array();
$tdataadd_new_checkin[".googleLikeFields"][] = "group_member_checkin_id";
$tdataadd_new_checkin[".googleLikeFields"][] = "group_member_id";
$tdataadd_new_checkin[".googleLikeFields"][] = "member_id";
$tdataadd_new_checkin[".googleLikeFields"][] = "group_id";
$tdataadd_new_checkin[".googleLikeFields"][] = "checkin_date";
$tdataadd_new_checkin[".googleLikeFields"][] = "checkout_date";
$tdataadd_new_checkin[".googleLikeFields"][] = "id_room";
$tdataadd_new_checkin[".googleLikeFields"][] = "valid";
$tdataadd_new_checkin[".googleLikeFields"][] = "review_member";
$tdataadd_new_checkin[".googleLikeFields"][] = "rating_member";



$tdataadd_new_checkin[".tableType"] = "list";

$tdataadd_new_checkin[".printerPageOrientation"] = 0;
$tdataadd_new_checkin[".nPrinterPageScale"] = 100;

$tdataadd_new_checkin[".nPrinterSplitRecords"] = 40;

$tdataadd_new_checkin[".geocodingEnabled"] = false;










$tdataadd_new_checkin[".pageSize"] = 20;

$tdataadd_new_checkin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadd_new_checkin[".strOrderBy"] = $tstrOrderBy;

$tdataadd_new_checkin[".orderindexes"] = array();


$tdataadd_new_checkin[".sqlHead"] = "SELECT group_member_checkin_id,  	group_member_id,  	member_id,  	group_id,  	checkin_date,  	checkout_date,  	id_room,  	valid,  	review_member,  	rating_member";
$tdataadd_new_checkin[".sqlFrom"] = "FROM group_member_checkin";
$tdataadd_new_checkin[".sqlWhereExpr"] = "";
$tdataadd_new_checkin[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadd_new_checkin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadd_new_checkin[".arrGroupsPerPage"] = $arrGPP;

$tdataadd_new_checkin[".highlightSearchResults"] = true;

$tableKeysadd_new_checkin = array();
$tableKeysadd_new_checkin[] = "group_member_checkin_id";
$tdataadd_new_checkin[".Keys"] = $tableKeysadd_new_checkin;


$tdataadd_new_checkin[".hideMobileList"] = array();




//	group_member_checkin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_checkin_id";
	$fdata["GoodName"] = "group_member_checkin_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_new_checkin","group_member_checkin_id");
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


	$tdataadd_new_checkin["group_member_checkin_id"] = $fdata;
		$tdataadd_new_checkin[".searchableFields"][] = "group_member_checkin_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_new_checkin","group_member_id");
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


	$tdataadd_new_checkin["group_member_id"] = $fdata;
		$tdataadd_new_checkin[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_new_checkin","member_id");
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


	$tdataadd_new_checkin["member_id"] = $fdata;
		$tdataadd_new_checkin[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_new_checkin","group_id");
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


	$tdataadd_new_checkin["group_id"] = $fdata;
		$tdataadd_new_checkin[".searchableFields"][] = "group_id";
//	checkin_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "checkin_date";
	$fdata["GoodName"] = "checkin_date";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_new_checkin","checkin_date");
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


	$tdataadd_new_checkin["checkin_date"] = $fdata;
		$tdataadd_new_checkin[".searchableFields"][] = "checkin_date";
//	checkout_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "checkout_date";
	$fdata["GoodName"] = "checkout_date";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_new_checkin","checkout_date");
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


	$tdataadd_new_checkin["checkout_date"] = $fdata;
		$tdataadd_new_checkin[".searchableFields"][] = "checkout_date";
//	id_room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_room";
	$fdata["GoodName"] = "id_room";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_new_checkin","id_room");
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


	$tdataadd_new_checkin["id_room"] = $fdata;
		$tdataadd_new_checkin[".searchableFields"][] = "id_room";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_new_checkin","valid");
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


	$tdataadd_new_checkin["valid"] = $fdata;
		$tdataadd_new_checkin[".searchableFields"][] = "valid";
//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_new_checkin","review_member");
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


	$tdataadd_new_checkin["review_member"] = $fdata;
		$tdataadd_new_checkin[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("add_new_checkin","rating_member");
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


	$tdataadd_new_checkin["rating_member"] = $fdata;
		$tdataadd_new_checkin[".searchableFields"][] = "rating_member";


$tables_data["add_new_checkin"]=&$tdataadd_new_checkin;
$field_labels["add_new_checkin"] = &$fieldLabelsadd_new_checkin;
$fieldToolTips["add_new_checkin"] = &$fieldToolTipsadd_new_checkin;
$placeHolders["add_new_checkin"] = &$placeHoldersadd_new_checkin;
$page_titles["add_new_checkin"] = &$pageTitlesadd_new_checkin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["add_new_checkin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["add_new_checkin"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_add_new_checkin()
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
	"m_srcTableName" => "add_new_checkin"
));

$proto6["m_sql"] = "group_member_checkin_id";
$proto6["m_srcTableName"] = "add_new_checkin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_new_checkin"
));

$proto8["m_sql"] = "group_member_id";
$proto8["m_srcTableName"] = "add_new_checkin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_new_checkin"
));

$proto10["m_sql"] = "member_id";
$proto10["m_srcTableName"] = "add_new_checkin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_new_checkin"
));

$proto12["m_sql"] = "group_id";
$proto12["m_srcTableName"] = "add_new_checkin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "checkin_date",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_new_checkin"
));

$proto14["m_sql"] = "checkin_date";
$proto14["m_srcTableName"] = "add_new_checkin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "checkout_date",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_new_checkin"
));

$proto16["m_sql"] = "checkout_date";
$proto16["m_srcTableName"] = "add_new_checkin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_room",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_new_checkin"
));

$proto18["m_sql"] = "id_room";
$proto18["m_srcTableName"] = "add_new_checkin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_new_checkin"
));

$proto20["m_sql"] = "valid";
$proto20["m_srcTableName"] = "add_new_checkin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "review_member",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_new_checkin"
));

$proto22["m_sql"] = "review_member";
$proto22["m_srcTableName"] = "add_new_checkin";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rating_member",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "add_new_checkin"
));

$proto24["m_sql"] = "rating_member";
$proto24["m_srcTableName"] = "add_new_checkin";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "group_member_checkin";
$proto27["m_srcTableName"] = "add_new_checkin";
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
$proto26["m_srcTableName"] = "add_new_checkin";
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
$proto0["m_srcTableName"]="add_new_checkin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_add_new_checkin = createSqlQuery_add_new_checkin();


	
		;

										

$tdataadd_new_checkin[".sqlquery"] = $queryData_add_new_checkin;



include_once(getabspath("include/add_new_checkin_events.php"));
$tableEvents["add_new_checkin"] = new eventclass_add_new_checkin;
$tdataadd_new_checkin[".hasEvents"] = true;

?>