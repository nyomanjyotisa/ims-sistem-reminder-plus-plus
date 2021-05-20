<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}


require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/group_product_view_events.php"));
$tableEvents["group_product_view"] = new eventclass_group_product_view;
include_once(getabspath("include/group_joined_view_events.php"));
$tableEvents["group_joined_view"] = new eventclass_group_joined_view;
include_once(getabspath("include/add_new_order_events.php"));
$tableEvents["Add New Order"] = new eventclass_add_new_order;
include_once(getabspath("include/not_reviewed_order_view_events.php"));
$tableEvents["not_reviewed_order_view"] = new eventclass_not_reviewed_order_view;
include_once(getabspath("include/add_new_checkin_events.php"));
$tableEvents["add_new_checkin"] = new eventclass_add_new_checkin;
include_once(getabspath("include/group_as_adminview_events.php"));
$tableEvents["Group as AdminView"] = new eventclass_group_as_adminview;
include_once(getabspath("include/group_room_view_events.php"));
$tableEvents["group_room_view"] = new eventclass_group_room_view;
include_once(getabspath("include/not_reviewed_checkin_view_events.php"));
$tableEvents["not_reviewed_checkin_view"] = new eventclass_not_reviewed_checkin_view;
include_once(getabspath("include/add_checkin_review_events.php"));
$tableEvents["add_checkin_review"] = new eventclass_add_checkin_review;
include_once(getabspath("include/on_progres_order_events.php"));
$tableEvents["on_progres_order"] = new eventclass_on_progres_order;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>