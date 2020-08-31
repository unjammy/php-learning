
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Document</title>
  <style type="text/css">
  		header {
  			background: #e3e3e3;
  			padding: 2em;
  			text-align: center;
  		}
  </style>
</head>
<body>
	<header>
		<h1><?="{$greeting}, {$name}."; ?></h1>
		<!--<h1><?= "What are we doing today? {$answer}?"; ?></h1>-->
	</header>
	<h2> Character List </h2>
	<ul>
		<?php foreach($toons as $toon) : ?>
			<li><?= ucwords($toon) ?></li>
		<?php endforeach; ?>
	</ul>
	<h2> Character Info </h2>
	<ul>
		<?php
			foreach($Jinx_stats as $stat => $val) {
				echo "<strong>$stat</strong><li>$val</li>";
			}
		?>
	</ul>
	<h2> Quest Log </h2>
	<ul>
		<li>
			<strong>Title: </strong><?= $questTemplate['name']; ?>
		</li>
		<li>
			<strong>Objective: </strong><?= $questTemplate['objective']; ?>
		</li>
		<li>
			<strong>Level Requirement: </strong><?= $questTemplate['level']; ?>
		</li>
		<li>
			<strong>Available: </strong><?= $questTemplate['active'] ? 'Yes' : 'No'; ?>
		</li>
		<li>
			<strong>Trivial: </strong>
			<?php questLevelCheck($Jinx_stats['level'], $questTemplate['level']); ?>
		</li>
	</ul>
	<h4> Nearby Quests </h4>
	<ul>
		<?php foreach( $QuestLog as $quest ) : ?>
			<?php if( $quest->active ) : ?>
				<li><?= $quest->origin; ?>: <?= $questlog[0]->name ?></li>
			<?php else: ?>
				<li><strike><?= $quest->origin; ?>: <?= $questlog[0]->name ?></strike></li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
	<h3> Inventory </h3>
	<nav>
		<ul>
			<li><a href="/views/jinx.template.php">Jinx</a></li>
			<li><a href="/views/lux.template.php">Lux</a></li>
		</ul>
	</nav>
	
</body>
</html>