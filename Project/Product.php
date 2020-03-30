<?php

class Display{
	public function display($cat){
		include 'config.php';
		$show = "SELECT * FROM products WHERE Product_Category='".$cat."'";
		return $show;
	}
}