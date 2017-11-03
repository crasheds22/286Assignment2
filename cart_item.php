<?php
class cart_item {
	var $ProductName;
	var $Quantity;
	var $Price;

	function set_name($nam){
		$this->ProductName = $nam;
	}

	function set_quantity($qua){
		$this->Quantity = $qua;
	}
	
	function set_price($pri){
		$this->Price = $pri;
	}

	function get_name(){
		return $this->ProductName;
	}

	function get_quantity(){
		return $this->Quantity;
	}
	
	function get_price(){
		return $this->Price;
	}
}
?>