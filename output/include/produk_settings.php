<?php
$tdataproduk = array();
$tdataproduk[".searchableFields"] = array();
$tdataproduk[".ShortName"] = "produk";
$tdataproduk[".OwnerID"] = "";
$tdataproduk[".OriginalTable"] = "produk";


$tdataproduk[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataproduk[".originalPagesByType"] = $tdataproduk[".pagesByType"];
$tdataproduk[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataproduk[".originalPages"] = $tdataproduk[".pages"];
$tdataproduk[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataproduk[".originalDefaultPages"] = $tdataproduk[".defaultPages"];

//	field labels
$fieldLabelsproduk = array();
$fieldToolTipsproduk = array();
$pageTitlesproduk = array();
$placeHoldersproduk = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproduk["English"] = array();
	$fieldToolTipsproduk["English"] = array();
	$placeHoldersproduk["English"] = array();
	$pageTitlesproduk["English"] = array();
	$fieldLabelsproduk["English"]["Produk"] = "Produk";
	$fieldToolTipsproduk["English"]["Produk"] = "";
	$placeHoldersproduk["English"]["Produk"] = "";
	$fieldLabelsproduk["English"]["Harga"] = "Harga";
	$fieldToolTipsproduk["English"]["Harga"] = "";
	$placeHoldersproduk["English"]["Harga"] = "";
	$fieldLabelsproduk["English"]["Group"] = "Group";
	$fieldToolTipsproduk["English"]["Group"] = "";
	$placeHoldersproduk["English"]["Group"] = "";
	if (count($fieldToolTipsproduk["English"]))
		$tdataproduk[".isUseToolTips"] = true;
}


	$tdataproduk[".NCSearch"] = true;



$tdataproduk[".shortTableName"] = "produk";
$tdataproduk[".nSecOptions"] = 0;

$tdataproduk[".mainTableOwnerID"] = "";
$tdataproduk[".entityType"] = 6;
$tdataproduk[".connId"] = "notif_basic1_at_menkz_xyz";


$tdataproduk[".strOriginalTableName"] = "produk";

	



$tdataproduk[".showAddInPopup"] = false;

$tdataproduk[".showEditInPopup"] = false;

$tdataproduk[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproduk[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproduk[".listAjax"] = false;
//	temporary
$tdataproduk[".listAjax"] = false;

	$tdataproduk[".audit"] = false;

	$tdataproduk[".locking"] = false;


$pages = $tdataproduk[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproduk[".edit"] = true;
	$tdataproduk[".afterEditAction"] = 1;
	$tdataproduk[".closePopupAfterEdit"] = 1;
	$tdataproduk[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproduk[".add"] = true;
$tdataproduk[".afterAddAction"] = 1;
$tdataproduk[".closePopupAfterAdd"] = 1;
$tdataproduk[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproduk[".list"] = true;
}



$tdataproduk[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproduk[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproduk[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproduk[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproduk[".printFriendly"] = true;
}



$tdataproduk[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproduk[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproduk[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproduk[".isUseAjaxSuggest"] = true;

$tdataproduk[".rowHighlite"] = true;





$tdataproduk[".ajaxCodeSnippetAdded"] = false;

$tdataproduk[".buttonsAdded"] = false;

$tdataproduk[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproduk[".isUseTimeForSearch"] = false;


$tdataproduk[".badgeColor"] = "DC143C";


$tdataproduk[".allSearchFields"] = array();
$tdataproduk[".filterFields"] = array();
$tdataproduk[".requiredSearchFields"] = array();

$tdataproduk[".googleLikeFields"] = array();
$tdataproduk[".googleLikeFields"][] = "Produk";
$tdataproduk[".googleLikeFields"][] = "Harga";
$tdataproduk[".googleLikeFields"][] = "Group";




$tdataproduk[".printerPageOrientation"] = 0;
$tdataproduk[".nPrinterPageScale"] = 100;

$tdataproduk[".nPrinterSplitRecords"] = 40;

$tdataproduk[".geocodingEnabled"] = false;










$tdataproduk[".pageSize"] = 20;

$tdataproduk[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproduk[".strOrderBy"] = $tstrOrderBy;

$tdataproduk[".orderindexes"] = array();


$tdataproduk[".sqlHead"] = "";
$tdataproduk[".sqlFrom"] = "";
$tdataproduk[".sqlWhereExpr"] = "";
$tdataproduk[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproduk[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproduk[".arrGroupsPerPage"] = $arrGPP;

$tdataproduk[".highlightSearchResults"] = true;

$tableKeysproduk = array();
$tdataproduk[".Keys"] = $tableKeysproduk;


$tdataproduk[".hideMobileList"] = array();




//	Produk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Produk";
	$fdata["GoodName"] = "Produk";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("produk","Produk");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Produk";

	
		$fdata["FullName"] = "Produk";

	
	
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


	$tdataproduk["Produk"] = $fdata;
		$tdataproduk[".searchableFields"][] = "Produk";
//	Harga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Harga";
	$fdata["GoodName"] = "Harga";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("produk","Harga");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "Harga";

	
		$fdata["FullName"] = "Harga";

	
	
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


	$tdataproduk["Harga"] = $fdata;
		$tdataproduk[".searchableFields"][] = "Harga";
//	Group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Group";
	$fdata["GoodName"] = "Group";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("produk","Group");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Group";

	
		$fdata["FullName"] = "Group";

	
	
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


	$tdataproduk["Group"] = $fdata;
		$tdataproduk[".searchableFields"][] = "Group";


$tables_data["produk"]=&$tdataproduk;
$field_labels["produk"] = &$fieldLabelsproduk;
$fieldToolTips["produk"] = &$fieldToolTipsproduk;
$placeHolders["produk"] = &$placeHoldersproduk;
$page_titles["produk"] = &$pageTitlesproduk;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["produk"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["produk"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/produk_ops.php" ) );



	
		;

			

$tdataproduk[".sqlquery"] = $queryData_produk;



$tableEvents["produk"] = new eventsBase;
$tdataproduk[".hasEvents"] = false;

?>