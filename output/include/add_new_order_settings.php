<?php
$tdataadd_new_order = array();
$tdataadd_new_order[".searchableFields"] = array();
$tdataadd_new_order[".ShortName"] = "add_new_order";
$tdataadd_new_order[".OwnerID"] = "";
$tdataadd_new_order[".OriginalTable"] = "group_member_order_detail";


$tdataadd_new_order[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" );
$tdataadd_new_order[".originalPagesByType"] = $tdataadd_new_order[".pagesByType"];
$tdataadd_new_order[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" ) );
$tdataadd_new_order[".originalPages"] = $tdataadd_new_order[".pages"];
$tdataadd_new_order[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"search\":\"search\"}" );
$tdataadd_new_order[".originalDefaultPages"] = $tdataadd_new_order[".defaultPages"];

//	field labels
$fieldLabelsadd_new_order = array();
$fieldToolTipsadd_new_order = array();
$pageTitlesadd_new_order = array();
$placeHoldersadd_new_order = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadd_new_order["English"] = array();
	$fieldToolTipsadd_new_order["English"] = array();
	$placeHoldersadd_new_order["English"] = array();
	$pageTitlesadd_new_order["English"] = array();
	$fieldLabelsadd_new_order["English"]["group_member_order_detail_id"] = "Group Member Order Detail Id";
	$fieldToolTipsadd_new_order["English"]["group_member_order_detail_id"] = "";
	$placeHoldersadd_new_order["English"]["group_member_order_detail_id"] = "";
	$fieldLabelsadd_new_order["English"]["group_member_order_id"] = "Group Member Order Id";
	$fieldToolTipsadd_new_order["English"]["group_member_order_id"] = "";
	$placeHoldersadd_new_order["English"]["group_member_order_id"] = "";
	$fieldLabelsadd_new_order["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsadd_new_order["English"]["group_member_id"] = "";
	$placeHoldersadd_new_order["English"]["group_member_id"] = "";
	$fieldLabelsadd_new_order["English"]["member_id"] = "Member Id";
	$fieldToolTipsadd_new_order["English"]["member_id"] = "";
	$placeHoldersadd_new_order["English"]["member_id"] = "";
	$fieldLabelsadd_new_order["English"]["group_id"] = "Group Id";
	$fieldToolTipsadd_new_order["English"]["group_id"] = "";
	$placeHoldersadd_new_order["English"]["group_id"] = "";
	$fieldLabelsadd_new_order["English"]["group_product_id"] = "Group Product Id";
	$fieldToolTipsadd_new_order["English"]["group_product_id"] = "";
	$placeHoldersadd_new_order["English"]["group_product_id"] = "";
	$fieldLabelsadd_new_order["English"]["nominal"] = "Nominal";
	$fieldToolTipsadd_new_order["English"]["nominal"] = "";
	$placeHoldersadd_new_order["English"]["nominal"] = "";
	$fieldLabelsadd_new_order["English"]["quantity"] = "Quantity";
	$fieldToolTipsadd_new_order["English"]["quantity"] = "";
	$placeHoldersadd_new_order["English"]["quantity"] = "";
	$fieldLabelsadd_new_order["English"]["total"] = "Total";
	$fieldToolTipsadd_new_order["English"]["total"] = "";
	$placeHoldersadd_new_order["English"]["total"] = "";
	$fieldLabelsadd_new_order["English"]["progress"] = "Progress";
	$fieldToolTipsadd_new_order["English"]["progress"] = "";
	$placeHoldersadd_new_order["English"]["progress"] = "";
	if (count($fieldToolTipsadd_new_order["English"]))
		$tdataadd_new_order[".isUseToolTips"] = true;
}


	$tdataadd_new_order[".NCSearch"] = true;



$tdataadd_new_order[".shortTableName"] = "add_new_order";
$tdataadd_new_order[".nSecOptions"] = 0;

$tdataadd_new_order[".mainTableOwnerID"] = "";
$tdataadd_new_order[".entityType"] = 1;
$tdataadd_new_order[".connId"] = "notif_basic1_at_menkz_xyz";


$tdataadd_new_order[".strOriginalTableName"] = "group_member_order_detail";

	



$tdataadd_new_order[".showAddInPopup"] = false;

$tdataadd_new_order[".showEditInPopup"] = false;

$tdataadd_new_order[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadd_new_order[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadd_new_order[".listAjax"] = false;
//	temporary
$tdataadd_new_order[".listAjax"] = false;

	$tdataadd_new_order[".audit"] = false;

	$tdataadd_new_order[".locking"] = false;


$pages = $tdataadd_new_order[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadd_new_order[".edit"] = true;
	$tdataadd_new_order[".afterEditAction"] = 1;
	$tdataadd_new_order[".closePopupAfterEdit"] = 1;
	$tdataadd_new_order[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadd_new_order[".add"] = true;
$tdataadd_new_order[".afterAddAction"] = 1;
$tdataadd_new_order[".closePopupAfterAdd"] = 1;
$tdataadd_new_order[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataadd_new_order[".list"] = true;
}



$tdataadd_new_order[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadd_new_order[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadd_new_order[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadd_new_order[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadd_new_order[".printFriendly"] = true;
}



$tdataadd_new_order[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadd_new_order[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadd_new_order[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadd_new_order[".isUseAjaxSuggest"] = true;

$tdataadd_new_order[".rowHighlite"] = true;



																					

$tdataadd_new_order[".ajaxCodeSnippetAdded"] = false;

$tdataadd_new_order[".buttonsAdded"] = false;

$tdataadd_new_order[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadd_new_order[".isUseTimeForSearch"] = false;


$tdataadd_new_order[".badgeColor"] = "D2AF80";


$tdataadd_new_order[".allSearchFields"] = array();
$tdataadd_new_order[".filterFields"] = array();
$tdataadd_new_order[".requiredSearchFields"] = array();

$tdataadd_new_order[".googleLikeFields"] = array();
$tdataadd_new_order[".googleLikeFields"][] = "group_member_order_detail_id";
$tdataadd_new_order[".googleLikeFields"][] = "group_member_order_id";
$tdataadd_new_order[".googleLikeFields"][] = "group_member_id";
$tdataadd_new_order[".googleLikeFields"][] = "member_id";
$tdataadd_new_order[".googleLikeFields"][] = "group_id";
$tdataadd_new_order[".googleLikeFields"][] = "group_product_id";
$tdataadd_new_order[".googleLikeFields"][] = "nominal";
$tdataadd_new_order[".googleLikeFields"][] = "quantity";
$tdataadd_new_order[".googleLikeFields"][] = "total";
$tdataadd_new_order[".googleLikeFields"][] = "progress";



$tdataadd_new_order[".tableType"] = "list";

$tdataadd_new_order[".printerPageOrientation"] = 0;
$tdataadd_new_order[".nPrinterPageScale"] = 100;

$tdataadd_new_order[".nPrinterSplitRecords"] = 40;

$tdataadd_new_order[".geocodingEnabled"] = false;










$tdataadd_new_order[".pageSize"] = 20;

$tdataadd_new_order[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadd_new_order[".strOrderBy"] = $tstrOrderBy;

$tdataadd_new_order[".orderindexes"] = array();


$tdataadd_new_order[".sqlHead"] = "SELECT group_member_order_detail_id,  	group_member_order_id,  	group_member_id,  	member_id,  	group_id,  	group_product_id,  	nominal,  	quantity,  	total,  	progress";
$tdataadd_new_order[".sqlFrom"] = "FROM group_member_order_detail";
$tdataadd_new_order[".sqlWhereExpr"] = "";
$tdataadd_new_order[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadd_new_order[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadd_new_order[".arrGroupsPerPage"] = $arrGPP;

$tdataadd_new_order[".highlightSearchResults"] = true;

$tableKeysadd_new_order = array();
$tableKeysadd_new_order[] = "group_member_order_detail_id";
$tdataadd_new_order[".Keys"] = $tableKeysadd_new_order;


$tdataadd_new_order[".hideMobileList"] = array();




//	group_member_order_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_order_detail_id";
	$fdata["GoodName"] = "group_member_order_detail_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("Add_New_Order","group_member_order_detail_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_order_detail_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail_id";

	
	
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


	$tdataadd_new_order["group_member_order_detail_id"] = $fdata;
		$tdataadd_new_order[".searchableFields"][] = "group_member_order_detail_id";
//	group_member_order_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_order_id";
	$fdata["GoodName"] = "group_member_order_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("Add_New_Order","group_member_order_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_member_order_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_id";

	
	
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
	$edata["LookupTable"] = "group_member_order";
	$edata["LookupConnId"] = "notif_basic1_at_menkz_xyz";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_member_order";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "currency";

	

	
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


	$tdataadd_new_order["group_member_order_id"] = $fdata;
		$tdataadd_new_order[".searchableFields"][] = "group_member_order_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("Add_New_Order","group_member_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "group_member";
	$edata["LookupConnId"] = "notif_basic1_at_menkz_xyz";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "token_group";

	

	
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


	$tdataadd_new_order["group_member_id"] = $fdata;
		$tdataadd_new_order[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("Add_New_Order","member_id");
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


	$tdataadd_new_order["member_id"] = $fdata;
		$tdataadd_new_order[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("Add_New_Order","group_id");
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


	$tdataadd_new_order["group_id"] = $fdata;
		$tdataadd_new_order[".searchableFields"][] = "group_id";
//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("Add_New_Order","group_product_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_product_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product_id";

	
	
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
	$edata["LookupTable"] = "group_product";
	$edata["LookupConnId"] = "notif_basic1_at_menkz_xyz";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_product_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "product_name";

	

	
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


	$tdataadd_new_order["group_product_id"] = $fdata;
		$tdataadd_new_order[".searchableFields"][] = "group_product_id";
//	nominal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nominal";
	$fdata["GoodName"] = "nominal";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("Add_New_Order","nominal");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "nominal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nominal";

	
	
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


	$tdataadd_new_order["nominal"] = $fdata;
		$tdataadd_new_order[".searchableFields"][] = "nominal";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("Add_New_Order","quantity");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "quantity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quantity";

	
	
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


	$tdataadd_new_order["quantity"] = $fdata;
		$tdataadd_new_order[".searchableFields"][] = "quantity";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("Add_New_Order","total");
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


	$tdataadd_new_order["total"] = $fdata;
		$tdataadd_new_order[".searchableFields"][] = "total";
//	progress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "progress";
	$fdata["GoodName"] = "progress";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("Add_New_Order","progress");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "progress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "progress";

	
	
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


	$tdataadd_new_order["progress"] = $fdata;
		$tdataadd_new_order[".searchableFields"][] = "progress";


$tables_data["Add New Order"]=&$tdataadd_new_order;
$field_labels["Add_New_Order"] = &$fieldLabelsadd_new_order;
$fieldToolTips["Add_New_Order"] = &$fieldToolTipsadd_new_order;
$placeHolders["Add_New_Order"] = &$placeHoldersadd_new_order;
$page_titles["Add_New_Order"] = &$pageTitlesadd_new_order;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Add New Order"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Add New Order"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_add_new_order()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_order_detail_id,  	group_member_order_id,  	group_member_id,  	member_id,  	group_id,  	group_product_id,  	nominal,  	quantity,  	total,  	progress";
$proto0["m_strFrom"] = "FROM group_member_order_detail";
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
	"m_strName" => "group_member_order_detail_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "Add New Order"
));

$proto6["m_sql"] = "group_member_order_detail_id";
$proto6["m_srcTableName"] = "Add New Order";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_order_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "Add New Order"
));

$proto8["m_sql"] = "group_member_order_id";
$proto8["m_srcTableName"] = "Add New Order";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "Add New Order"
));

$proto10["m_sql"] = "group_member_id";
$proto10["m_srcTableName"] = "Add New Order";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "Add New Order"
));

$proto12["m_sql"] = "member_id";
$proto12["m_srcTableName"] = "Add New Order";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "Add New Order"
));

$proto14["m_sql"] = "group_id";
$proto14["m_srcTableName"] = "Add New Order";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "group_product_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "Add New Order"
));

$proto16["m_sql"] = "group_product_id";
$proto16["m_srcTableName"] = "Add New Order";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nominal",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "Add New Order"
));

$proto18["m_sql"] = "nominal";
$proto18["m_srcTableName"] = "Add New Order";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "Add New Order"
));

$proto20["m_sql"] = "quantity";
$proto20["m_srcTableName"] = "Add New Order";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "Add New Order"
));

$proto22["m_sql"] = "total";
$proto22["m_srcTableName"] = "Add New Order";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "progress",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "Add New Order"
));

$proto24["m_sql"] = "progress";
$proto24["m_srcTableName"] = "Add New Order";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "group_member_order_detail";
$proto27["m_srcTableName"] = "Add New Order";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "group_member_order_detail_id";
$proto27["m_columns"][] = "group_member_order_id";
$proto27["m_columns"][] = "group_member_id";
$proto27["m_columns"][] = "member_id";
$proto27["m_columns"][] = "group_id";
$proto27["m_columns"][] = "group_product_id";
$proto27["m_columns"][] = "nominal";
$proto27["m_columns"][] = "quantity";
$proto27["m_columns"][] = "total";
$proto27["m_columns"][] = "progress";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "group_member_order_detail";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Add New Order";
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
$proto0["m_srcTableName"]="Add New Order";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_add_new_order = createSqlQuery_add_new_order();


	
		;

										

$tdataadd_new_order[".sqlquery"] = $queryData_add_new_order;



include_once(getabspath("include/add_new_order_events.php"));
$tableEvents["Add New Order"] = new eventclass_add_new_order;
$tdataadd_new_order[".hasEvents"] = true;

?>