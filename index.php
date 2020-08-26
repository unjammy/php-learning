<?php
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
// dd($Jinx_stats);
unset($Jinx_stats['class']);
$questTemplate = [
	'name' => 'Rat Infestation',
	'objective' => 'Kill 8 Large Rats.',
	'level' => '1',
	'prerequisites' => 'none',
	'active' => true
];

class QuestTemplate {
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
	new QuestTemplate('Bat Infestation'),
	new QuestTemplate('Trouble at the Mines'),
	new QuestTemplate('Postal Service')
];
$QuestLog[2]->completeQuest();

// dd($QuestLog);

$pdo = connectToDB();
$statement = $pdo->prepare('select * from questlog');

$statement->execute();

var_dump($statement->fetchAll(PDO::FETCH_CLASS, 'Quest'));

require 'index.template.php';