<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_not_reviewed_checkin_view  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["selectList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List
function selectList($dataSource, $command)
{

		$sql = "select * from group_member_checkin where review_member IS NULL AND rating_member IS NULL AND member_id=" . $_SESSION["member_id"];
$preparedSQL = DB::PrepareSQL( $sql );
$result = DB::Query( $preparedSQL );
if( !$result ) {
	$dataSource->setError( DB::LastError() );
	return false;
}
	// filter results, apply search, security & other filters
$result = $dataSource->filterResult( $result, $command->filter );
//	reorder results as requested
$dataSource->reorderResult( $command, $result );
return $result;

;		
} // function selectList

		
		
		
		
		



}
?>