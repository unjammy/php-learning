
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
	<ul>
		<?php foreach($toons as $toon) : ?>
			<li><?= $toon ?></li>
		<?php endforeach; ?>
	</ul>
	<ul>
		<?php
			foreach($Jinx_stats as $stat => $val) {
				echo "<strong>$stat</strong><li>$val</li>";
			}
		?>
	</ul>
	
</body>
</html>