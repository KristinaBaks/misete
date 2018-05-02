<?php

require_once('libs/db_config.php');

if (isset($_POST)) {

	if ($_POST['vardas1']) {

		$vardas = $_POST['vardas1'];
        $komentaras = $_POST['komentaras1'];
		createKomentaras1($vardas, $komentaras);
	} 
	elseif ($_POST['vardas2']) {

		$vardas = $_POST['vardas2'];
        $komentaras = $_POST['komentaras2'];
		createKomentaras2($vardas, $komentaras);
	} 
	elseif ($_POST['vardas3']) {

		$vardas = $_POST['vardas3'];
        $komentaras = $_POST['komentaras3'];
		createKomentaras3($vardas, $komentaras);
	} 
	elseif ($_POST['vardas4']) {

		$vardas = $_POST['vardas4'];
        $komentaras = $_POST['komentaras4'];
		createKomentaras4($vardas, $komentaras); 
	} 
	elseif ($_POST['vardas5']) {

		$vardas = $_POST['vardas5'];
        $komentaras = $_POST['komentaras5'];
		createKomentaras5($vardas, $komentaras); 
	 } else {
		return null;
	}
}

?>

<h3 class="proj-names-2"><i>Dėkoju už Jūsų atsiliepimą</i></h3> 

