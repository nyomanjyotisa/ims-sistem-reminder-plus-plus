<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_group_as_adminview  extends eventsBase
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

		$sql = "Select * from group_member
inner join `group` on `group`.`group_id` = group_member.`group_id`
where user_type = 2 and member_id =". $_SESSION["member_id"];
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
