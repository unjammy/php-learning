<?php

class Item 
{
	public $name;
	public $equipped;
	public function __construct($name, $equipped)
	{
		$this->name = $name;
		$this->equipped = $equipped;
	}
}

$inventory = [
	new Item('Short Sword', true),
	new Item('Hunting Bow', true),
	new Item('Wooden Club', true),
	new Item('Buckler', false)
];

$unequipped_items = array_filter($inventory, function ($item) {
	
});