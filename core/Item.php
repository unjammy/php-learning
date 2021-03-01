<?php

class Item 
{
	public $name;
	public $equipped;
	public $owner;
	public function __construct($name, $equipped, $owner)
	{
		$this->name = $name;
		$this->equipped = $equipped;
		$this->owner = $owner;
	}
}

$inventory = [
	new Item('Short Sword', true, 'Freeman'),
	new Item('Hunting Bow', true, 'Jinx'),
	new Item('Wooden Club', true, 'Lux'),
	new Item('Buckler', false, 'Freeman')
];

$unequipped_items = array_filter($inventory, function ($item) {
	return ! $item->equipped;
});

$equipped_items = array_filter($inventory, function($item) {
	return $item->equipped;
});

$world_drops = array_map(function($item){
	return ['name' => $item->name];
}, $inventory);

$names = array_column($inventory, 'name');

// foreach ($inventory as $index => $item) {
// 	$inventory[$index] = (array) $item;
// }

$inventory = array_map(function($item){
	return (array) $item;
}, $inventory);

$owners = array_column($inventory, 'owner');

// $modified = array_map(function($item){
//	return new SomeOtherObject($item->name);
// }, $inventory);