<?php

require_once('libs/db_config.php');

if (isset($_POST)) {

	if ($_POST['vote1']) {
		$balas = $_POST['vote1'];
		createBalas1($balas); 
	} 
	elseif ($_POST['vote2']) {
		$balas = $_POST['vote2'];
		createBalas2($balas); 
	} 
	elseif ($_POST['vote3']) {
		$balas = $_POST['vote3'];
		createBalas3($balas); 
	} 
	elseif ($_POST['vote4']) {
		$balas = $_POST['vote4'];
		createBalas4($balas); 
	} 
	elseif ($_POST['vote5']) {
		$balas = $_POST['vote5'];
		createBalas5($balas); 
	} else {
		return null;
	}
}

// $balas = $_POST['vote'];

// switch ($balas) {
//     case "vote":
// 		createBalas($balas); 
//         break;
//     case "vote2":
// 		createBalas2($balas); 
//         break;
//     case "vote3":
// 		createBalas3($balas); 
//         break;
//     case "vote4":
// 		createBalas4($balas); 
//         break;
//     case "vote5":
// 		createBalas5($balas); 
//         break;
//     default:
//         echo null;
// }

?>

<h3 class="proj-names-2"><i>Dėkoju už Jūsų balsą</i></h3> 