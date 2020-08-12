
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
		<h1><?= "What are we doing today? {$answer}?"; ?></h1>
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
			<strong>Title: </strong><?= $Quest['name']; ?>
		</li>
		<li>
			<strong>Objective: </strong><?= $Quest['objective']; ?>
		</li>
		<li>
			<strong>Level Requirement: </strong><?= $Quest['level']; ?>
		</li>
		<li>
			<strong>Available: </strong><?= $Quest['active'] ? 'Yes' : 'No'; ?>
		</li>
		<li>
			<strong>Trivial: </strong>
			<?php triviality($Jinx_stats['level'], $Quest['level']); ?>
		</li>
	</ul>
	
</body>
</html>