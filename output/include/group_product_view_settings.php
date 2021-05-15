<?php
$tdatagroup_product_view = array();
$tdatagroup_product_view[".searchableFields"] = array();
$tdatagroup_product_view[".ShortName"] = "group_product_view";
$tdatagroup_product_view[".OwnerID"] = "";
$tdatagroup_product_view[".OriginalTable"] = "group_product_view";


$tdatagroup_product_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatagroup_product_view[".originalPagesByType"] = $tdatagroup_product_view[".pagesByType"];
$tdatagroup_product_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatagroup_product_view[".originalPages"] = $tdatagroup_product_view[".pages"];
$tdatagroup_product_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatagroup_product_view[".originalDefaultPages"] = $tdatagroup_product_view[".defaultPages"];

//	field labels
$fieldLabelsgroup_product_view = array();
$fieldToolTipsgroup_product_view = array();
$pageTitlesgroup_product_view = array();
$placeHoldersgroup_product_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_product_view["English"] = array();
	$fieldToolTipsgroup_product_view["English"] = array();
	$placeHoldersgroup_product_view["English"] = array();
	$pageTitlesgroup_product_view["English"] = array();
	$fieldLabelsgroup_product_view["English"]["product_name"] = "Product Name";
	$fieldToolTipsgroup_product_view["English"]["product_name"] = "";
	$placeHoldersgroup_product_view["English"]["product_name"] = "";
	$fieldLabelsgroup_product_view["English"]["price"] = "Price";
	$fieldToolTipsgroup_product_view["English"]["price"] = "";
	$placeHoldersgroup_product_view["English"]["price"] = "";
	$fieldLabelsgroup_product_view["English"]["group_product_id"] = "Group Product Id";
	$fieldToolTipsgroup_product_view["English"]["group_product_id"] = "";
	$placeHoldersgroup_product_view["English"]["group_product_id"] = "";
	if (count($fieldToolTipsgroup_product_view["English"]))
		$tdatagroup_product_view[".isUseToolTips"] = true;
}


	$tdatagroup_product_view[".NCSearch"] = true;



$tdatagroup_product_view[".shortTableName"] = "group_product_view";
$tdatagroup_product_view[".nSecOptions"] = 0;

$tdatagroup_product_view[".mainTableOwnerID"] = "";
$tdatagroup_product_view[".entityType"] = 6;
$tdatagroup_product_view[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatagroup_product_view[".strOriginalTableName"] = "group_product_view";

	



$tdatagroup_product_view[".showAddInPopup"] = false;

$tdatagroup_product_view[".showEditInPopup"] = false;

$tdatagroup_product_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_product_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_product_view[".listAjax"] = false;
//	temporary
$tdatagroup_product_view[".listAjax"] = false;

	$tdatagroup_product_view[".audit"] = false;

	$tdatagroup_product_view[".locking"] = false;


$pages = $tdatagroup_product_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_product_view[".edit"] = true;
	$tdatagroup_product_view[".afterEditAction"] = 1;
	$tdatagroup_product_view[".closePopupAfterEdit"] = 1;
	$tdatagroup_product_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_product_view[".add"] = true;
$tdatagroup_product_view[".afterAddAction"] = 1;
$tdatagroup_product_view[".closePopupAfterAdd"] = 1;
$tdatagroup_product_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_product_view[".list"] = true;
}



$tdatagroup_product_view[".strSortControlSettingsJSON"] = "";

$tdatagroup_product_view[".strClickActionJSON"] = "{\"fields\":{\"price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"product_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"code\",\"codeData\":{\"snippet\":\"buy_single_product_ajax\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatagroup_product_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_product_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_product_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_product_view[".printFriendly"] = true;
}



$tdatagroup_product_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_product_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_product_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_product_view[".isUseAjaxSuggest"] = true;

$tdatagroup_product_view[".rowHighlite"] = true;



											
					


$tdatagroup_product_view[".ajaxCodeSnippetAdded"] = true;

$tdatagroup_product_view[".buttonsAdded"] = true;

$tdatagroup_product_view[".addPageEvents"] = true;

// use timepicker for search panel
$tdatagroup_product_view[".isUseTimeForSearch"] = false;


$tdatagroup_product_view[".badgeColor"] = "3CB371";


$tdatagroup_product_view[".allSearchFields"] = array();
$tdatagroup_product_view[".filterFields"] = array();
$tdatagroup_product_view[".requiredSearchFields"] = array();

$tdatagroup_product_view[".googleLikeFields"] = array();
$tdatagroup_product_view[".googleLikeFields"][] = "group_product_id";
$tdatagroup_product_view[".googleLikeFields"][] = "product_name";
$tdatagroup_product_view[".googleLikeFields"][] = "price";




$tdatagroup_product_view[".printerPageOrientation"] = 0;
$tdatagroup_product_view[".nPrinterPageScale"] = 100;

$tdatagroup_product_view[".nPrinterSplitRecords"] = 40;

$tdatagroup_product_view[".geocodingEnabled"] = false;










$tdatagroup_product_view[".pageSize"] = 20;

$tdatagroup_product_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_product_view[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_product_view[".orderindexes"] = array();


$tdatagroup_product_view[".sqlHead"] = "";
$tdatagroup_product_view[".sqlFrom"] = "";
$tdatagroup_product_view[".sqlWhereExpr"] = "";
$tdatagroup_product_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_product_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_product_view[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_product_view[".highlightSearchResults"] = true;

$tableKeysgroup_product_view = array();
$tdatagroup_product_view[".Keys"] = $tableKeysgroup_product_view;


$tdatagroup_product_view[".hideMobileList"] = array();




//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group_product_view","group_product_id");
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


	$tdatagroup_product_view["group_product_id"] = $fdata;
		$tdatagroup_product_view[".searchableFields"][] = "group_product_id";
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group_product_view","product_name");
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatagroup_product_view["product_name"] = $fdata;
		$tdatagroup_product_view[".searchableFields"][] = "product_name";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("group_product_view","price");
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


	$tdatagroup_product_view["price"] = $fdata;
		$tdatagroup_product_view[".searchableFields"][] = "price";


$tables_data["group_product_view"]=&$tdatagroup_product_view;
$field_labels["group_product_view"] = &$fieldLabelsgroup_product_view;
$fieldToolTips["group_product_view"] = &$fieldToolTipsgroup_product_view;
$placeHolders["group_product_view"] = &$placeHoldersgroup_product_view;
$page_titles["group_product_view"] = &$pageTitlesgroup_product_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_product_view"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_product_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/group_product_view_ops.php" ) );



	
		;

			

$tdatagroup_product_view[".sqlquery"] = $queryData_group_product_view;



include_once(getabspath("include/group_product_view_events.php"));
$tableEvents["group_product_view"] = new eventclass_group_product_view;
$tdatagroup_product_view[".hasEvents"] = true;

?>