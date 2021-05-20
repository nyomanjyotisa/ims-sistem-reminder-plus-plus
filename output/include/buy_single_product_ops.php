<?php
$topsbuy_single_product = array();
		$topsbuy_single_product["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO `notif_basic1`.`group_product` (`group_id`, `product_type`, `product_name`, `stock_type`, `stock`, `order_type`, `price`, `curency`) VALUES ('1', '2', 'rere', '2', '12', '1', '4000', 'IDR');"
	);
		$tables_data["buy_single_product"][".operations"] = &$topsbuy_single_product;
?>