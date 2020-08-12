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

require 'index.template.php';