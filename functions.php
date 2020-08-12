<?php
function dd($stats) {
	echo '<pre>';
	die(var_dump($stats));
	echo '</pre>';
}
function triviality($plevel, $qlevel) {
	if( ($plevel - $qlevel) > 7 ) {
		echo '<span class="icon">&#9989;</span>';
	} else {
		echo '<span class="icon">No</span>';
	}
}