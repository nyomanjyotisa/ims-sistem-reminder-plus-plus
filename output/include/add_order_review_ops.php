<?php
$topsadd_order_review = array();
		$topsadd_order_review["insert"] = array(
		"subtype" => "sql",
		"sql" => ""
	);
				$topsadd_order_review["selectList"] = array(
		"subtype" => "sql",
		"sql" => "select * from group_member_order"
	);
				$topsadd_order_review["update"] = array(
		"subtype" => "sql",
		"sql" => ""
	);
		$tables_data["Add Order Review"][".operations"] = &$topsadd_order_review;
?>