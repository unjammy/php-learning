<?php
$greeting = 'Hello';
$name = 'Freeman Bernstein';
$answer = htmlspecialchars($_GET['value']);
$toons = [
	'Jinx',
	'Lux',
	'Karma'
];
require 'index.template.php';