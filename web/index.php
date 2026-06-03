<?php include "config.php"; ?><!DOCTYPE html>
<html>

	<head>
		<title>Snake</title>
		<link rel="stylesheet" type="text/css" href="style.php">
		<script src="jquery.min.js"></script>
		<script src="snake.php" language="javascript"></script>
	</head>

	<body>
	<pre style="height: 400px; overflow: auto;">
	</pre>
		
		<div id="digits">
			<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
		</div>
		<div id="info">
			<ul>
				<li>Use arrow keys to move snake</li>
				<li>Eat as much as you can!</li>
				<li>Watch the environment!</li>
				<li>Avoid self colliding!</li>
				<li>Get a HI-Score!</li>
			</ul>
		</div>
		<div id="bigwrapper">
		<?php for($y=0;$y<$height; $y++){
				?><div class="wrapper"><?php
				for($x=0;$x<$width; $x++){
					?><div parity="<?=($y%2)?'odd':'even'?>" class="cell" id="cell_<?=$y?>_<?=$x?>"></div><?php 
				} 
				?></div><?php
		} ?>
		</div>
	</body>

</html>