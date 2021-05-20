<?php
$topsproduk = array();
		$topsproduk["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT group_product.`product_name` AS \"Produk\", group_product.`price` AS \"Harga\", `group`.`group_name` AS \"Group\" FROM group_product 
INNER JOIN `group` ON group_product.`group_id` = `group`.`group_id`
WHERE group_product.order_type=1"
	);
		$tables_data["produk"][".operations"] = &$topsproduk;
?>