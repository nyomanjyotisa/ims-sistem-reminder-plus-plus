<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_product.group_id"] )) {
			$lookupTableLinks["group"]["group_product.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_product.group_id"]["edit"] = array("table" => "group_product", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["product_type"] ) ) {
			$lookupTableLinks["product_type"] = array();
		}
		if( !isset( $lookupTableLinks["product_type"]["group_product.product_type"] )) {
			$lookupTableLinks["product_type"]["group_product.product_type"] = array();
		}
		$lookupTableLinks["product_type"]["group_product.product_type"]["edit"] = array("table" => "group_product", "field" => "product_type", "page" => "edit");
		if( !isset( $lookupTableLinks["stock_type"] ) ) {
			$lookupTableLinks["stock_type"] = array();
		}
		if( !isset( $lookupTableLinks["stock_type"]["group_product.stock_type"] )) {
			$lookupTableLinks["stock_type"]["group_product.stock_type"] = array();
		}
		$lookupTableLinks["stock_type"]["group_product.stock_type"]["edit"] = array("table" => "group_product", "field" => "stock_type", "page" => "edit");
		if( !isset( $lookupTableLinks["order_type"] ) ) {
			$lookupTableLinks["order_type"] = array();
		}
		if( !isset( $lookupTableLinks["order_type"]["group_product.order_type"] )) {
			$lookupTableLinks["order_type"]["group_product.order_type"] = array();
		}
		$lookupTableLinks["order_type"]["group_product.order_type"]["edit"] = array("table" => "group_product", "field" => "order_type", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member_order"] ) ) {
			$lookupTableLinks["group_member_order"] = array();
		}
		if( !isset( $lookupTableLinks["group_member_order"]["group_member_order_detail.group_member_order_id"] )) {
			$lookupTableLinks["group_member_order"]["group_member_order_detail.group_member_order_id"] = array();
		}
		$lookupTableLinks["group_member_order"]["group_member_order_detail.group_member_order_id"]["edit"] = array("table" => "group_member_order_detail", "field" => "group_member_order_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["group_member_order_detail.group_member_id"] )) {
			$lookupTableLinks["group_member"]["group_member_order_detail.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["group_member_order_detail.group_member_id"]["edit"] = array("table" => "group_member_order_detail", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["group_member_order_detail.member_id"] )) {
			$lookupTableLinks["personal"]["group_member_order_detail.member_id"] = array();
		}
		$lookupTableLinks["personal"]["group_member_order_detail.member_id"]["edit"] = array("table" => "group_member_order_detail", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_member_order_detail.group_id"] )) {
			$lookupTableLinks["group"]["group_member_order_detail.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_member_order_detail.group_id"]["edit"] = array("table" => "group_member_order_detail", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_product"] ) ) {
			$lookupTableLinks["group_product"] = array();
		}
		if( !isset( $lookupTableLinks["group_product"]["group_member_order_detail.group_product_id"] )) {
			$lookupTableLinks["group_product"]["group_member_order_detail.group_product_id"] = array();
		}
		$lookupTableLinks["group_product"]["group_member_order_detail.group_product_id"]["edit"] = array("table" => "group_member_order_detail", "field" => "group_product_id", "page" => "edit");
		if( !isset( $lookupTableLinks["country"] ) ) {
			$lookupTableLinks["country"] = array();
		}
		if( !isset( $lookupTableLinks["country"]["personal.country_id"] )) {
			$lookupTableLinks["country"]["personal.country_id"] = array();
		}
		$lookupTableLinks["country"]["personal.country_id"]["edit"] = array("table" => "personal", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["province"] ) ) {
			$lookupTableLinks["province"] = array();
		}
		if( !isset( $lookupTableLinks["province"]["personal.province_id"] )) {
			$lookupTableLinks["province"]["personal.province_id"] = array();
		}
		$lookupTableLinks["province"]["personal.province_id"]["edit"] = array("table" => "personal", "field" => "province_id", "page" => "edit");
}

?>