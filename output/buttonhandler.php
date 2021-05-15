<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

$params = (array)my_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$pSet = new ProjectSettings( $table, "", $page );
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

if($buttId=='New_Button')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button($params);
}


if( $eventId == 'group_joined_view_ajax' && "group_joined_view" == $table )
{
	require_once("include/group_joined_view_variables.php");
	$cipherer = new RunnerCipherer("group_joined_view");
	ajaxHandler_group_joined_view_ajax($params);
	return;
}
if( $eventId == 'group_joined_view_ajax' && "group_joined_view" == $table )
{
	require_once("include/group_joined_view_variables.php");
	$cipherer = new RunnerCipherer("group_joined_view");
	ajaxHandler_group_joined_view_ajax($params);
	return;
}
if( $eventId == 'buy_single_product_ajax' && "group_product_view" == $table )
{
	require_once("include/group_product_view_variables.php");
	$cipherer = new RunnerCipherer("group_product_view");
	ajaxHandler_buy_single_product_ajax($params);
	return;
}



// create table and non table handlers
function buttonHandler_New_Button($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}

function ajaxHandler_group_joined_view_ajax($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = 'grid';

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();


	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();

	$contextParams["data"] = $button->getRecordData();
	$contextParams["newData"] = $params['fieldsData'];
	$contextParams["masterData"] = $masterData;

	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function ajaxHandler_buy_single_product_ajax($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = 'grid';

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();


	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();

	$contextParams["data"] = $button->getRecordData();
	$contextParams["newData"] = $params['fieldsData'];
	$contextParams["masterData"] = $masterData;

	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams));
	// Put your code here.

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}

		
?>
