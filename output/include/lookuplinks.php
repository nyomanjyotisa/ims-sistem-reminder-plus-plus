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

		if( !isset( $lookupTableLinks["group_member_order"] ) ) {
			$lookupTableLinks["group_member_order"] = array();
		}
		if( !isset( $lookupTableLinks["group_member_order"]["add_new_order.group_member_order_id"] )) {
			$lookupTableLinks["group_member_order"]["add_new_order.group_member_order_id"] = array();
		}
		$lookupTableLinks["group_member_order"]["add_new_order.group_member_order_id"]["edit"] = array("table" => "Add New Order", "field" => "group_member_order_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["add_new_order.group_member_id"] )) {
			$lookupTableLinks["group_member"]["add_new_order.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["add_new_order.group_member_id"]["edit"] = array("table" => "Add New Order", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["add_new_order.member_id"] )) {
			$lookupTableLinks["personal"]["add_new_order.member_id"] = array();
		}
		$lookupTableLinks["personal"]["add_new_order.member_id"]["edit"] = array("table" => "Add New Order", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["add_new_order.group_id"] )) {
			$lookupTableLinks["group"]["add_new_order.group_id"] = array();
		}
		$lookupTableLinks["group"]["add_new_order.group_id"]["edit"] = array("table" => "Add New Order", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_product"] ) ) {
			$lookupTableLinks["group_product"] = array();
		}
		if( !isset( $lookupTableLinks["group_product"]["add_new_order.group_product_id"] )) {
			$lookupTableLinks["group_product"]["add_new_order.group_product_id"] = array();
		}
		$lookupTableLinks["group_product"]["add_new_order.group_product_id"]["edit"] = array("table" => "Add New Order", "field" => "group_product_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member_order"] ) ) {
			$lookupTableLinks["group_member_order"] = array();
		}
		if( !isset( $lookupTableLinks["group_member_order"]["on_progres_order.group_member_order_id"] )) {
			$lookupTableLinks["group_member_order"]["on_progres_order.group_member_order_id"] = array();
		}
		$lookupTableLinks["group_member_order"]["on_progres_order.group_member_order_id"]["edit"] = array("table" => "on_progres_order", "field" => "group_member_order_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["on_progres_order.group_member_id"] )) {
			$lookupTableLinks["group_member"]["on_progres_order.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["on_progres_order.group_member_id"]["edit"] = array("table" => "on_progres_order", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["on_progres_order.member_id"] )) {
			$lookupTableLinks["personal"]["on_progres_order.member_id"] = array();
		}
		$lookupTableLinks["personal"]["on_progres_order.member_id"]["edit"] = array("table" => "on_progres_order", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["on_progres_order.group_id"] )) {
			$lookupTableLinks["group"]["on_progres_order.group_id"] = array();
		}
		$lookupTableLinks["group"]["on_progres_order.group_id"]["edit"] = array("table" => "on_progres_order", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_product"] ) ) {
			$lookupTableLinks["group_product"] = array();
		}
		if( !isset( $lookupTableLinks["group_product"]["on_progres_order.group_product_id"] )) {
			$lookupTableLinks["group_product"]["on_progres_order.group_product_id"] = array();
		}
		$lookupTableLinks["group_product"]["on_progres_order.group_product_id"]["edit"] = array("table" => "on_progres_order", "field" => "group_product_id", "page" => "edit");
}

?>