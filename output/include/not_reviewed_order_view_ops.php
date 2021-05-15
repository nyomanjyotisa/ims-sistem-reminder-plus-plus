<?php
$topsnot_reviewed_order_view = array();
		$topsnot_reviewed_order_view["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT group_member_order, order_date, total FROM group_member_order WHERE review_member IS NULL AND rating_member IS NULL AND member_id=5"
	);
		$tables_data["not_reviewed_order_view"][".operations"] = &$topsnot_reviewed_order_view;
?>