<?php
$tdatareview_order = array();
$tdatareview_order[".searchableFields"] = array();
$tdatareview_order[".ShortName"] = "review_order";
$tdatareview_order[".OwnerID"] = "";
$tdatareview_order[".OriginalTable"] = "group_member_order";


$tdatareview_order[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareview_order[".originalPagesByType"] = $tdatareview_order[".pagesByType"];
$tdatareview_order[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareview_order[".originalPages"] = $tdatareview_order[".pages"];
$tdatareview_order[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareview_order[".originalDefaultPages"] = $tdatareview_order[".defaultPages"];

//	field labels
$fieldLabelsreview_order = array();
$fieldToolTipsreview_order = array();
$pageTitlesreview_order = array();
$placeHoldersreview_order = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreview_order["English"] = array();
	$fieldToolTipsreview_order["English"] = array();
	$placeHoldersreview_order["English"] = array();
	$pageTitlesreview_order["English"] = array();
	$fieldLabelsreview_order["English"]["review_member"] = "Review Member";
	$fieldToolTipsreview_order["English"]["review_member"] = "";
	$placeHoldersreview_order["English"]["review_member"] = "";
	$fieldLabelsreview_order["English"]["rating_member"] = "Rating Member";
	$fieldToolTipsreview_order["English"]["rating_member"] = "";
	$placeHoldersreview_order["English"]["rating_member"] = "";
	$fieldLabelsreview_order["English"]["group_member_order"] = "Group Member Order";
	$fieldToolTipsreview_order["English"]["group_member_order"] = "";
	$placeHoldersreview_order["English"]["group_member_order"] = "";
	$fieldLabelsreview_order["English"]["group_id"] = "Group Id";
	$fieldToolTipsreview_order["English"]["group_id"] = "";
	$placeHoldersreview_order["English"]["group_id"] = "";
	$fieldLabelsreview_order["English"]["order_date"] = "Order Date";
	$fieldToolTipsreview_order["English"]["order_date"] = "";
	$placeHoldersreview_order["English"]["order_date"] = "";
	if (count($fieldToolTipsreview_order["English"]))
		$tdatareview_order[".isUseToolTips"] = true;
}


	$tdatareview_order[".NCSearch"] = true;



$tdatareview_order[".shortTableName"] = "review_order";
$tdatareview_order[".nSecOptions"] = 0;

$tdatareview_order[".mainTableOwnerID"] = "";
$tdatareview_order[".entityType"] = 1;
$tdatareview_order[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatareview_order[".strOriginalTableName"] = "group_member_order";

	



$tdatareview_order[".showAddInPopup"] = false;

$tdatareview_order[".showEditInPopup"] = false;

$tdatareview_order[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareview_order[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareview_order[".listAjax"] = false;
//	temporary
$tdatareview_order[".listAjax"] = false;

	$tdatareview_order[".audit"] = false;

	$tdatareview_order[".locking"] = false;


$pages = $tdatareview_order[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareview_order[".edit"] = true;
	$tdatareview_order[".afterEditAction"] = 1;
	$tdatareview_order[".closePopupAfterEdit"] = 1;
	$tdatareview_order[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareview_order[".add"] = true;
$tdatareview_order[".afterAddAction"] = 1;
$tdatareview_order[".closePopupAfterAdd"] = 1;
$tdatareview_order[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareview_order[".list"] = true;
}



$tdatareview_order[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareview_order[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareview_order[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareview_order[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareview_order[".printFriendly"] = true;
}



$tdatareview_order[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareview_order[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareview_order[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareview_order[".isUseAjaxSuggest"] = true;

$tdatareview_order[".rowHighlite"] = true;



									

$tdatareview_order[".ajaxCodeSnippetAdded"] = false;

$tdatareview_order[".buttonsAdded"] = false;

$tdatareview_order[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareview_order[".isUseTimeForSearch"] = false;


$tdatareview_order[".badgeColor"] = "4682B4";


$tdatareview_order[".allSearchFields"] = array();
$tdatareview_order[".filterFields"] = array();
$tdatareview_order[".requiredSearchFields"] = array();

$tdatareview_order[".googleLikeFields"] = array();
$tdatareview_order[".googleLikeFields"][] = "review_member";
$tdatareview_order[".googleLikeFields"][] = "rating_member";
$tdatareview_order[".googleLikeFields"][] = "group_member_order";
$tdatareview_order[".googleLikeFields"][] = "group_id";
$tdatareview_order[".googleLikeFields"][] = "order_date";



$tdatareview_order[".tableType"] = "list";

$tdatareview_order[".printerPageOrientation"] = 0;
$tdatareview_order[".nPrinterPageScale"] = 100;

$tdatareview_order[".nPrinterSplitRecords"] = 40;

$tdatareview_order[".geocodingEnabled"] = false;










$tdatareview_order[".pageSize"] = 20;

$tdatareview_order[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareview_order[".strOrderBy"] = $tstrOrderBy;

$tdatareview_order[".orderindexes"] = array();


$tdatareview_order[".sqlHead"] = "SELECT review_member,  rating_member,  group_member_order,  group_id,  order_date";
$tdatareview_order[".sqlFrom"] = "FROM group_member_order";
$tdatareview_order[".sqlWhereExpr"] = "";
$tdatareview_order[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareview_order[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareview_order[".arrGroupsPerPage"] = $arrGPP;

$tdatareview_order[".highlightSearchResults"] = true;

$tableKeysreview_order = array();
$tdatareview_order[".Keys"] = $tableKeysreview_order;


$tdatareview_order[".hideMobileList"] = array();




//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("review_order","review_member");
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


	$tdatareview_order["review_member"] = $fdata;
		$tdatareview_order[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("review_order","rating_member");
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


	$tdatareview_order["rating_member"] = $fdata;
		$tdatareview_order[".searchableFields"][] = "rating_member";
//	group_member_order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "group_member_order";
	$fdata["GoodName"] = "group_member_order";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("review_order","group_member_order");
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


	$tdatareview_order["group_member_order"] = $fdata;
		$tdatareview_order[".searchableFields"][] = "group_member_order";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("review_order","group_id");
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


	$tdatareview_order["group_id"] = $fdata;
		$tdatareview_order[".searchableFields"][] = "group_id";
//	order_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "order_date";
	$fdata["GoodName"] = "order_date";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("review_order","order_date");
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


	$tdatareview_order["order_date"] = $fdata;
		$tdatareview_order[".searchableFields"][] = "order_date";


$tables_data["review_order"]=&$tdatareview_order;
$field_labels["review_order"] = &$fieldLabelsreview_order;
$fieldToolTips["review_order"] = &$fieldToolTipsreview_order;
$placeHolders["review_order"] = &$placeHoldersreview_order;
$page_titles["review_order"] = &$pageTitlesreview_order;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["review_order"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["review_order"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_review_order()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "review_member,  rating_member,  group_member_order,  group_id,  order_date";
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
	"m_strName" => "review_member",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "review_order"
));

$proto6["m_sql"] = "review_member";
$proto6["m_srcTableName"] = "review_order";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rating_member",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "review_order"
));

$proto8["m_sql"] = "rating_member";
$proto8["m_srcTableName"] = "review_order";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_order",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "review_order"
));

$proto10["m_sql"] = "group_member_order";
$proto10["m_srcTableName"] = "review_order";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "review_order"
));

$proto12["m_sql"] = "group_id";
$proto12["m_srcTableName"] = "review_order";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "order_date",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "review_order"
));

$proto14["m_sql"] = "order_date";
$proto14["m_srcTableName"] = "review_order";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "group_member_order";
$proto17["m_srcTableName"] = "review_order";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "group_member_order";
$proto17["m_columns"][] = "group_member_id";
$proto17["m_columns"][] = "member_id";
$proto17["m_columns"][] = "group_id";
$proto17["m_columns"][] = "order_date";
$proto17["m_columns"][] = "valid";
$proto17["m_columns"][] = "total";
$proto17["m_columns"][] = "currency";
$proto17["m_columns"][] = "review_member";
$proto17["m_columns"][] = "rating_member";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "group_member_order";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "review_order";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="review_order";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_review_order = createSqlQuery_review_order();


	
		;

					

$tdatareview_order[".sqlquery"] = $queryData_review_order;



$tableEvents["review_order"] = new eventsBase;
$tdatareview_order[".hasEvents"] = false;

?>