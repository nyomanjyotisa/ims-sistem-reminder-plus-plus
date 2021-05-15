<?php
$tdatashow_not_reviewed_order = array();
$tdatashow_not_reviewed_order[".searchableFields"] = array();
$tdatashow_not_reviewed_order[".ShortName"] = "show_not_reviewed_order";
$tdatashow_not_reviewed_order[".OwnerID"] = "";
$tdatashow_not_reviewed_order[".OriginalTable"] = "group_member_order";


$tdatashow_not_reviewed_order[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatashow_not_reviewed_order[".originalPagesByType"] = $tdatashow_not_reviewed_order[".pagesByType"];
$tdatashow_not_reviewed_order[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatashow_not_reviewed_order[".originalPages"] = $tdatashow_not_reviewed_order[".pages"];
$tdatashow_not_reviewed_order[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatashow_not_reviewed_order[".originalDefaultPages"] = $tdatashow_not_reviewed_order[".defaultPages"];

//	field labels
$fieldLabelsshow_not_reviewed_order = array();
$fieldToolTipsshow_not_reviewed_order = array();
$pageTitlesshow_not_reviewed_order = array();
$placeHoldersshow_not_reviewed_order = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshow_not_reviewed_order["English"] = array();
	$fieldToolTipsshow_not_reviewed_order["English"] = array();
	$placeHoldersshow_not_reviewed_order["English"] = array();
	$pageTitlesshow_not_reviewed_order["English"] = array();
	$fieldLabelsshow_not_reviewed_order["English"]["group_id"] = "Group Id";
	$fieldToolTipsshow_not_reviewed_order["English"]["group_id"] = "";
	$placeHoldersshow_not_reviewed_order["English"]["group_id"] = "";
	$fieldLabelsshow_not_reviewed_order["English"]["order_date"] = "Order Date";
	$fieldToolTipsshow_not_reviewed_order["English"]["order_date"] = "";
	$placeHoldersshow_not_reviewed_order["English"]["order_date"] = "";
	$fieldLabelsshow_not_reviewed_order["English"]["total"] = "Total";
	$fieldToolTipsshow_not_reviewed_order["English"]["total"] = "";
	$placeHoldersshow_not_reviewed_order["English"]["total"] = "";
	if (count($fieldToolTipsshow_not_reviewed_order["English"]))
		$tdatashow_not_reviewed_order[".isUseToolTips"] = true;
}


	$tdatashow_not_reviewed_order[".NCSearch"] = true;



$tdatashow_not_reviewed_order[".shortTableName"] = "show_not_reviewed_order";
$tdatashow_not_reviewed_order[".nSecOptions"] = 0;

$tdatashow_not_reviewed_order[".mainTableOwnerID"] = "";
$tdatashow_not_reviewed_order[".entityType"] = 1;
$tdatashow_not_reviewed_order[".connId"] = "notif_basic1_at_menkz_xyz";


$tdatashow_not_reviewed_order[".strOriginalTableName"] = "group_member_order";

	



$tdatashow_not_reviewed_order[".showAddInPopup"] = false;

$tdatashow_not_reviewed_order[".showEditInPopup"] = false;

$tdatashow_not_reviewed_order[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashow_not_reviewed_order[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashow_not_reviewed_order[".listAjax"] = false;
//	temporary
$tdatashow_not_reviewed_order[".listAjax"] = false;

	$tdatashow_not_reviewed_order[".audit"] = false;

	$tdatashow_not_reviewed_order[".locking"] = false;


$pages = $tdatashow_not_reviewed_order[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatashow_not_reviewed_order[".edit"] = true;
	$tdatashow_not_reviewed_order[".afterEditAction"] = 1;
	$tdatashow_not_reviewed_order[".closePopupAfterEdit"] = 1;
	$tdatashow_not_reviewed_order[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatashow_not_reviewed_order[".add"] = true;
$tdatashow_not_reviewed_order[".afterAddAction"] = 1;
$tdatashow_not_reviewed_order[".closePopupAfterAdd"] = 1;
$tdatashow_not_reviewed_order[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatashow_not_reviewed_order[".list"] = true;
}



$tdatashow_not_reviewed_order[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatashow_not_reviewed_order[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatashow_not_reviewed_order[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatashow_not_reviewed_order[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatashow_not_reviewed_order[".printFriendly"] = true;
}



$tdatashow_not_reviewed_order[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatashow_not_reviewed_order[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatashow_not_reviewed_order[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatashow_not_reviewed_order[".isUseAjaxSuggest"] = true;

$tdatashow_not_reviewed_order[".rowHighlite"] = true;



									

$tdatashow_not_reviewed_order[".ajaxCodeSnippetAdded"] = false;

$tdatashow_not_reviewed_order[".buttonsAdded"] = false;

$tdatashow_not_reviewed_order[".addPageEvents"] = false;

// use timepicker for search panel
$tdatashow_not_reviewed_order[".isUseTimeForSearch"] = false;


$tdatashow_not_reviewed_order[".badgeColor"] = "D2AF80";


$tdatashow_not_reviewed_order[".allSearchFields"] = array();
$tdatashow_not_reviewed_order[".filterFields"] = array();
$tdatashow_not_reviewed_order[".requiredSearchFields"] = array();

$tdatashow_not_reviewed_order[".googleLikeFields"] = array();
$tdatashow_not_reviewed_order[".googleLikeFields"][] = "group_id";
$tdatashow_not_reviewed_order[".googleLikeFields"][] = "order_date";
$tdatashow_not_reviewed_order[".googleLikeFields"][] = "total";



$tdatashow_not_reviewed_order[".tableType"] = "list";

$tdatashow_not_reviewed_order[".printerPageOrientation"] = 0;
$tdatashow_not_reviewed_order[".nPrinterPageScale"] = 100;

$tdatashow_not_reviewed_order[".nPrinterSplitRecords"] = 40;

$tdatashow_not_reviewed_order[".geocodingEnabled"] = false;










$tdatashow_not_reviewed_order[".pageSize"] = 20;

$tdatashow_not_reviewed_order[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashow_not_reviewed_order[".strOrderBy"] = $tstrOrderBy;

$tdatashow_not_reviewed_order[".orderindexes"] = array();


$tdatashow_not_reviewed_order[".sqlHead"] = "SELECT group_id,  order_date,  total";
$tdatashow_not_reviewed_order[".sqlFrom"] = "FROM group_member_order";
$tdatashow_not_reviewed_order[".sqlWhereExpr"] = "";
$tdatashow_not_reviewed_order[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashow_not_reviewed_order[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashow_not_reviewed_order[".arrGroupsPerPage"] = $arrGPP;

$tdatashow_not_reviewed_order[".highlightSearchResults"] = true;

$tableKeysshow_not_reviewed_order = array();
$tdatashow_not_reviewed_order[".Keys"] = $tableKeysshow_not_reviewed_order;


$tdatashow_not_reviewed_order[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("show_not_reviewed_order","group_id");
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


	$tdatashow_not_reviewed_order["group_id"] = $fdata;
		$tdatashow_not_reviewed_order[".searchableFields"][] = "group_id";
//	order_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "order_date";
	$fdata["GoodName"] = "order_date";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("show_not_reviewed_order","order_date");
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


	$tdatashow_not_reviewed_order["order_date"] = $fdata;
		$tdatashow_not_reviewed_order[".searchableFields"][] = "order_date";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("show_not_reviewed_order","total");
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


	$tdatashow_not_reviewed_order["total"] = $fdata;
		$tdatashow_not_reviewed_order[".searchableFields"][] = "total";


$tables_data["show_not_reviewed_order"]=&$tdatashow_not_reviewed_order;
$field_labels["show_not_reviewed_order"] = &$fieldLabelsshow_not_reviewed_order;
$fieldToolTips["show_not_reviewed_order"] = &$fieldToolTipsshow_not_reviewed_order;
$placeHolders["show_not_reviewed_order"] = &$placeHoldersshow_not_reviewed_order;
$page_titles["show_not_reviewed_order"] = &$pageTitlesshow_not_reviewed_order;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["show_not_reviewed_order"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["show_not_reviewed_order"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_show_not_reviewed_order()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_id,  order_date,  total";
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
	"m_strName" => "group_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "show_not_reviewed_order"
));

$proto6["m_sql"] = "group_id";
$proto6["m_srcTableName"] = "show_not_reviewed_order";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "order_date",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "show_not_reviewed_order"
));

$proto8["m_sql"] = "order_date";
$proto8["m_srcTableName"] = "show_not_reviewed_order";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "show_not_reviewed_order"
));

$proto10["m_sql"] = "total";
$proto10["m_srcTableName"] = "show_not_reviewed_order";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "group_member_order";
$proto13["m_srcTableName"] = "show_not_reviewed_order";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "group_member_order";
$proto13["m_columns"][] = "group_member_id";
$proto13["m_columns"][] = "member_id";
$proto13["m_columns"][] = "group_id";
$proto13["m_columns"][] = "order_date";
$proto13["m_columns"][] = "valid";
$proto13["m_columns"][] = "total";
$proto13["m_columns"][] = "currency";
$proto13["m_columns"][] = "review_member";
$proto13["m_columns"][] = "rating_member";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "group_member_order";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "show_not_reviewed_order";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="show_not_reviewed_order";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_show_not_reviewed_order = createSqlQuery_show_not_reviewed_order();


	
		;

			

$tdatashow_not_reviewed_order[".sqlquery"] = $queryData_show_not_reviewed_order;



$tableEvents["show_not_reviewed_order"] = new eventsBase;
$tdatashow_not_reviewed_order[".hasEvents"] = false;

?>