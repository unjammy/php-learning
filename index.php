<?php
require 'functions.php';
$greeting = 'Hello';
$name = 'Freeman Bernstein';
$answer = htmlspecialchars($_GET['value']);
$toons = [
	'Jinx',
	'Lux',
	'Karma'
];
$Jinx_stats = [
	'faction' => 'Wood Elf',
	'class' => 'Ranger',
	'level' => 10
];
$Jinx_stats['name'] = 'Jinx';
// dd($Jinx_stats);
unset($Jinx_stats['class']);
$Quest = [
	'name' => 'Rat Infestation',
	'objective' => 'Kill 8 Large Rats.',
	'level' => '1',
	'prerequisites' => 'none',
	'active' => true
];

class Quest {
	public $name;
	public $active = true;
	public function __construct($name){
		$this->name = $name;
	}
	public function readQuest(){
		return $this->active;
	}
	public function completeQuest(){
		$this->active = false;
	}
}
$QuestLog = [
	new Quest('Bat Infestation'),
	new Quest('Trouble at the Mines'),
	new Quest('Postal Service')
];
$QuestLog[2]->completeQuest();
// dd($QuestLog);

require 'index.template.php';