<?php
$tdatagroup_room_view = array();
$tdatagroup_room_view[".searchableFields"] = array();
$tdatagroup_room_view[".ShortName"] = "group_room_view";
$tdatagroup_room_view[".OwnerID"] = "";
$tdatagroup_room_view[".OriginalTable"] = "group_room_view";


$tdatagroup_room_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatagroup_room_view[".originalPagesByType"] = $tdatagroup_room_view[".pagesByType"];
$tdatagroup_room_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatagroup_room_view[".originalPages"] = $tdatagroup_room_view[".pages"];
$tdatagroup_room_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatagroup_room_view[".originalDefaultPages"] = $tdatagroup_room_view[".defaultPages"];

//	field labels
$fieldLabelsgroup_room_view = array();
$fieldToolTipsgroup_room_view = array();
$pageTitlesgroup_room_view = array();
$placeHoldersgroup_room_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_room_view["English"] = array();
	$fieldToolTipsgroup_room_view["English"] = array();
	$placeHoldersgroup_room_view["English"] = array();
	$pageTitlesgroup_room_view["English"] = array();
	$fieldLabelsgroup_room_view["English"]["group_product_id"] = "Group Product Id";
	$fieldToolTipsgroup_room_view["English"]["group_product_id"] = "";
	$placeHoldersgroup_room_view["English"]["group_product_id"] = "";
	$fieldLabelsgroup_room_view["English"]["product_name"] = "Product Name";
	$fieldToolTipsgroup_room_view["English"]["product_name"] = "";
	$placeHoldersgroup_room_view["English"]["product_name"] = "";
	$fieldLabelsgroup_room_view["English"]["price"] = "Price";
	$fieldToolTipsgroup_room_view["English"]["price"] = "";
	$placeHoldersgroup_room_view["English"]["price"] = "";
	if (count($fieldToolTipsgroup_room_view["English"]))
		$tdatagroup_room_view[".isUseToolTips"] = true;
}


	$tdatagroup_room_view[".NCSearch"] = true;



$tdatagroup_room_view[".shortTableName"] = "group_room_view";
$tdatagroup_room_view[".nSecOptions"] = 0;

$tdatagroup_room_view[".mainTableOwnerID"] = "";
$tdatagroup_room_view[".entityType"] = 6;
$tdatagroup_room_view[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatagroup_room_view[".strOriginalTableName"] = "group_room_view";

	



$tdatagroup_room_view[".showAddInPopup"] = false;

$tdatagroup_room_view[".showEditInPopup"] = false;

$tdatagroup_room_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_room_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_room_view[".listAjax"] = false;
//	temporary
$tdatagroup_room_view[".listAjax"] = false;

	$tdatagroup_room_view[".audit"] = false;

	$tdatagroup_room_view[".locking"] = false;


$pages = $tdatagroup_room_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_room_view[".edit"] = true;
	$tdatagroup_room_view[".afterEditAction"] = 1;
	$tdatagroup_room_view[".closePopupAfterEdit"] = 1;
	$tdatagroup_room_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_room_view[".add"] = true;
$tdatagroup_room_view[".afterAddAction"] = 1;
$tdatagroup_room_view[".closePopupAfterAdd"] = 1;
$tdatagroup_room_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_room_view[".list"] = true;
}



$tdatagroup_room_view[".strSortControlSettingsJSON"] = "";

$tdatagroup_room_view[".strClickActionJSON"] = "{\"fields\":{\"group_product_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"product_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"code\",\"codeData\":{\"snippet\":\"group_room_view_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatagroup_room_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_room_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_room_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_room_view[".printFriendly"] = true;
}



$tdatagroup_room_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_room_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_room_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_room_view[".isUseAjaxSuggest"] = true;

$tdatagroup_room_view[".rowHighlite"] = true;



																				
					
			

$tdatagroup_room_view[".ajaxCodeSnippetAdded"] = true;

$tdatagroup_room_view[".buttonsAdded"] = true;

$tdatagroup_room_view[".addPageEvents"] = true;

// use timepicker for search panel
$tdatagroup_room_view[".isUseTimeForSearch"] = false;


$tdatagroup_room_view[".badgeColor"] = "9ACD32";


$tdatagroup_room_view[".allSearchFields"] = array();
$tdatagroup_room_view[".filterFields"] = array();
$tdatagroup_room_view[".requiredSearchFields"] = array();

$tdatagroup_room_view[".googleLikeFields"] = array();
$tdatagroup_room_view[".googleLikeFields"][] = "group_product_id";
$tdatagroup_room_view[".googleLikeFields"][] = "product_name";
$tdatagroup_room_view[".googleLikeFields"][] = "price";




$tdatagroup_room_view[".printerPageOrientation"] = 0;
$tdatagroup_room_view[".nPrinterPageScale"] = 100;

$tdatagroup_room_view[".nPrinterSplitRecords"] = 40;

$tdatagroup_room_view[".geocodingEnabled"] = false;










$tdatagroup_room_view[".pageSize"] = 20;

$tdatagroup_room_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_room_view[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_room_view[".orderindexes"] = array();


$tdatagroup_room_view[".sqlHead"] = "";
$tdatagroup_room_view[".sqlFrom"] = "";
$tdatagroup_room_view[".sqlWhereExpr"] = "";
$tdatagroup_room_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_room_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_room_view[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_room_view[".highlightSearchResults"] = true;

$tableKeysgroup_room_view = array();
$tdatagroup_room_view[".Keys"] = $tableKeysgroup_room_view;


$tdatagroup_room_view[".hideMobileList"] = array();




//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group_room_view","group_product_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_product_id";

	
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


	$tdatagroup_room_view["group_product_id"] = $fdata;
		$tdatagroup_room_view[".searchableFields"][] = "group_product_id";
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group_room_view","product_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "product_name";

	
		$fdata["FullName"] = "product_name";

	
	
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


	$tdatagroup_room_view["product_name"] = $fdata;
		$tdatagroup_room_view[".searchableFields"][] = "product_name";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group_room_view","price");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "price";

	
		$fdata["FullName"] = "price";

	
	
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


	$tdatagroup_room_view["price"] = $fdata;
		$tdatagroup_room_view[".searchableFields"][] = "price";


$tables_data["group_room_view"]=&$tdatagroup_room_view;
$field_labels["group_room_view"] = &$fieldLabelsgroup_room_view;
$fieldToolTips["group_room_view"] = &$fieldToolTipsgroup_room_view;
$placeHolders["group_room_view"] = &$placeHoldersgroup_room_view;
$page_titles["group_room_view"] = &$pageTitlesgroup_room_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_room_view"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_room_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/group_room_view_ops.php" ) );



	
		;

			

$tdatagroup_room_view[".sqlquery"] = $queryData_group_room_view;



include_once(getabspath("include/group_room_view_events.php"));
$tableEvents["group_room_view"] = new eventclass_group_room_view;
$tdatagroup_room_view[".hasEvents"] = true;

?>