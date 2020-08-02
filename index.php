
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
		<h1><?php
		$name = 'Freeman Bernstein';
		$greeting = 'Hello';
		echo "{$greeting}, {$name}"; 
		?></h1>
		<h1>
			<?= "What are we doing today? " . htmlspecialchars($_GET['value'] . '?');?>
		</h1>
	</header>
	
</body>
</html>

