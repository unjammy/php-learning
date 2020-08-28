<?php

$query = require 'bootstrap.php';
require 'functions.php';
require 'Quest.php';

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
unset($Jinx_stats['class']);
// dd($Jinx_stats);


$questTemplate = [
	'name' => 'Rat Infestation',
	'objective' => 'Kill 8 Large Rats.',
	'level' => '1',
	'prerequisites' => 'none',
	'active' => true
];


class QuestTemplate {
	public $name;
	public $origin;
	public $active = true;
	public function __construct($name){
		$this->name = $name;
	}
	public function assignOrigin($NPC){
		$this->origin = $NPC;
	}
	public function readQuest(){
		return $this->active;
	}
	public function completeQuest(){
		$this->active = false;
	}
}
$QuestLog = [
	new QuestTemplate('Bat Infestation'),
	new QuestTemplate('Trouble at the Mines'),
	new QuestTemplate('Postal Service')
];
$QuestLog[2]->completeQuest();
$QuestLog[0]->assignOrigin('a senior citizen');
$QuestLog[1]->assignOrigin('a miner');
$QuestLog[2]->assignOrigin('the mayor');
// dd($QuestLog);


$questlog = $query->selectAll('questlog');
var_dump($questlog);

require 'index.template.php';