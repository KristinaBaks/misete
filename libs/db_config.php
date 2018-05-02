<?php

error_reporting(E_ALL);
ini_set('display_errors', 'off');

// localhost/phpMyAdmin
define('DB_NAME', 'misete');
define('USER', 'root'); 
define('PASSWORD', 'root');
define('DB_HOST', 'localhost');


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 $connection = mysqli_connect(DB_HOST, USER, PASSWORD, DB_NAME); 

//---------------------------

$connection = mysqli_connect(DB_HOST, USER, PASSWORD, DB_NAME);
	mysqli_set_charset($connection, 'utf8');

	if (!function_exists('getConnection')) {
	function getConnection() { 
		global $connection;  
		if (!$connection) { 
				echo "ERROR prisijungti prie DB" . DB_NAME . "nepavyko <br>";
				echo "ERROR " . mysql_connect_error($connection) . "nepavyko <br>";
			}
			return $connection; 
		}
	}

//-----------------HOMEPAGE

function getHomepage($nr) {
	$manoSQL = "SELECT * FROM homepage WHERE id='$nr';"; 
	$rezultatai = mysqli_query(getConnection(), $manoSQL); 
	if (!$rezultatai) {
		echo "ieskomos nuotraukos nera: nr " . $nr . "<br>";
		return NULL;
	} else {
		$rezultatu_masyvas = mysqli_fetch_assoc($rezultatai); 
		return $rezultatu_masyvas;
	}
}

function updateHomepage($nr, $name, $content) {
    $nr = mysqli_real_escape_string(getConnection(), $nr);
    $name = mysqli_real_escape_string(getConnection(), $name);
    $content = mysqli_real_escape_string(getConnection(), $content);

    $manoSQL = "UPDATE homepage SET name='$name', content='$content' WHERE id='$nr'; ";
    mysqli_query(getConnection(), $manoSQL)  or die (mysqli_error(getConnection(), $connection));
}

//---------------APIE

function getApie($nr) {
	$manoSQL = "SELECT * FROM apie WHERE id='$nr';"; 
	$rezultatai = mysqli_query(getConnection(), $manoSQL); 
	if (!$rezultatai) {
		echo "ieskomo elemento nera: nr " . $nr . "<br>";
		return NULL;
	} else {
		$rezultatu_masyvas = mysqli_fetch_assoc($rezultatai);
		return $rezultatu_masyvas;
	}
}

function updateApie($nr, $pasisveikinimas, $prisistatymas, $img) {
    $nr = mysqli_real_escape_string(getConnection(), $nr);
    $pasisveikinimas = mysqli_real_escape_string(getConnection(), $pasisveikinimas);
    $prisistatymas = mysqli_real_escape_string(getConnection(), $prisistatymas);
    $img = mysqli_real_escape_string(getConnection(), $img);

    $manoSQL = "UPDATE apie SET pasisveikinimas='$pasisveikinimas', prisistatymas='$prisistatymas', img='$img' WHERE id='$nr'; ";
    mysqli_query(getConnection(), $manoSQL)  or die (mysqli_error(getConnection(), $connection));
}

//-------------------CONTACT

function updateKontaktai($nr, $adresas, $telnr, $elpastas) {
    $nr = mysqli_real_escape_string(getConnection(), $nr);
    $adresas = mysqli_real_escape_string(getConnection(), $adresas);
    $telnr = mysqli_real_escape_string(getConnection(), $telnr);
    $elpastas = mysqli_real_escape_string(getConnection(), $elpastas);

    $manoSQL = "UPDATE kontaktai SET adresas='$adresas', telnr='$telnr', elpastas='$elpastas' WHERE id='$nr'; ";
    mysqli_query(getConnection(), $manoSQL)  or die (mysqli_error(getConnection(), $connection));
}

function getKontaktai($nr) {
	$manoSQL = "SELECT * FROM kontaktai WHERE id='$nr';"; 
	$rezultatai = mysqli_query(getConnection(), $manoSQL);
	if (!$rezultatai) {
		echo "ieskomo elemento nera: nr " . $nr . "<br>";
		return NULL;
	} else {
		$rezultatu_masyvas = mysqli_fetch_assoc($rezultatai); 
		return $rezultatu_masyvas;
	}
}

function createZinute($vardas, $zinute, $elpastas) { 
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); 
	$zinute = mysqli_real_escape_string(getConnection(), $zinute); 
	$elpastas = mysqli_real_escape_string(getConnection(), $elpastas); 
	$manoSQL = " INSERT INTO zinutes VALUES ('', '$vardas', '$zinute', '$elpastas', CURDATE()); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
	if($arPavyko) {
	} else {
		echo "sukurti zinutes nepavyko <br>" . mysqli_error($getConnection()) . "<br>";
	}
}

function getZinute($nr) {
	$manoSQL = "SELECT * FROM zinutes WHERE id='$nr';"; 
	$rezultatai = mysqli_query(getConnection(), $manoSQL);
	if (!$rezultatai) {
		echo "Tokios žinutės nėra!";
		return NULL;
	} else {
		$rezultatu_masyvas = mysqli_fetch_assoc($rezultatai);
		return $rezultatu_masyvas;
	}
}

function deleteZinute($nr) {
    $manoSQL = "DELETE FROM zinutes WHERE id='$nr';";
    mysqli_query(getConnection(), $manoSQL);
}

//-------------REGISTRACIJA

function createNarys($vardas, $slaptazodis, $elpastas) {
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); 
	$slaptazodis = mysqli_real_escape_string(getConnection(), $slaptazodis); 
	$elpastas = mysqli_real_escape_string(getConnection(), $elpastas); 
	$manoSQL = " INSERT INTO nariai VALUES ('', '$vardas', '$slaptazodis', '$elpastas'); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
	if($arPavyko) {
		$taip = "užsiregistravote";
		include('reg_resp.php');			
	} else { 
		$taip =  "užsiregistruoti nepavyko <br>" . mysqli_error($getConnection()) . "<br>";
		include('reg_resp.php');
	}
}

function getNarys($nr) {
	$manoSQL = "SELECT * FROM nariai WHERE id='$nr';"; 

	$rezultatai = mysqli_query(getConnection(), $manoSQL); 
	if (!$rezultatai) {
		echo "Tokio nario nėra!";
		return NULL;
	} else {
		$rezultatu_masyvas = mysqli_fetch_assoc($rezultatai);
		return $rezultatu_masyvas;
	}
}

//-------------KOMENTARAI

function createKomentaras1($vardas, $komentaras) { 
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); 
	$komentaras = mysqli_real_escape_string(getConnection(), $komentaras); 
	$manoSQL = " INSERT INTO komentarai (vardas, SAKURA_NO_EMI, data) VALUES ('$vardas', '$komentaras', CURDATE()); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
}

function createKomentaras2($vardas, $komentaras) { 
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); 
	$komentaras = mysqli_real_escape_string(getConnection(), $komentaras); 
	$manoSQL = " INSERT INTO komentarai (vardas, KUMAMOTO_DIAMOND, data) VALUES ('$vardas', '$komentaras', CURDATE()); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
}

function createKomentaras3($vardas, $komentaras) { 
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); 
	$komentaras = mysqli_real_escape_string(getConnection(), $komentaras); 
	$manoSQL = " INSERT INTO komentarai (vardas, KAMI_NO_GEEMU, data) VALUES ('$vardas', '$komentaras', CURDATE()); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
}

function createKomentaras4($vardas, $komentaras) { 
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); 
	$komentaras = mysqli_real_escape_string(getConnection(), $komentaras); 
	$manoSQL = " INSERT INTO komentarai (vardas, STAR_OF_THE_DESERT, data) VALUES ('$vardas', '$komentaras', CURDATE()); ";
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
}

function createKomentaras5($vardas, $komentaras) { 
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); 
	$komentaras = mysqli_real_escape_string(getConnection(), $komentaras); 
	$manoSQL = " INSERT INTO komentarai (vardas, TaTaTAKO, data) VALUES ('$vardas', '$komentaras', CURDATE()); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
}

function getKomentaras($nr) {
	$manoSQL = "SELECT * FROM komentarai WHERE id='$nr';"; 
	$rezultatai = mysqli_query(getConnection(), $manoSQL); 
	if (!$rezultatai) {
		echo "Tokio komentaro nėra!";
		return NULL;
	} else {
		$rezultatu_masyvas = mysqli_fetch_assoc($rezultatai); 
		return $rezultatu_masyvas;
	}
}

function deleteKomentaras($nr) {
    $manoSQL = "DELETE FROM komentarai WHERE id='$nr';";
    mysqli_query(getConnection(), $manoSQL);
}

//-------------BALSAVIMAS

function createBalas1($balas) {
	$balas = mysqli_real_escape_string(getConnection(), $balas); 
	$manoSQL = "  INSERT INTO balsavimas (SAKURA_NO_EMI, data) VALUES ('$balas', CURDATE()); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
}

function createBalas2($balas) { 
	$balas = mysqli_real_escape_string(getConnection(), $balas); 
	$manoSQL = "  INSERT INTO balsavimas (KUMAMOTO_DIAMOND, data) VALUES ('$balas', CURDATE()); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
}

function createBalas3($balas) { 
	$balas = mysqli_real_escape_string(getConnection(), $balas); 
	$manoSQL = "  INSERT INTO balsavimas (KAMI_NO_GEEMU, data) VALUES ('$balas', CURDATE()); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
}

function createBalas4($balas) {
	$balas = mysqli_real_escape_string(getConnection(), $balas); 
	$manoSQL = "  INSERT INTO balsavimas (STAR_OF_THE_DESERT, data) VALUES ('$balas', CURDATE()); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
}

function createBalas5($balas) { 
	$balas = mysqli_real_escape_string(getConnection(), $balas); 
	$manoSQL = "  INSERT INTO balsavimas (TaTaTAKO, data) VALUES ('$balas', CURDATE()); "; 
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
}

function getBalas($nr) {
	$manoSQL = "SELECT * FROM balsavimas WHERE id='$nr';"; 
	$rezultatai = mysqli_query(getConnection(), $manoSQL); 
	if (!$rezultatai) {
		echo "Tokio balo nėra!";
		return NULL;
	} else {
		$rezultatu_masyvas = mysqli_fetch_assoc($rezultatai); 
		return $rezultatu_masyvas;
	}
}

function getGalerija($nr) {
	$manoSQL = "SELECT * FROM galerija ORDER BY id ASC;"; 
	$rezultatai = mysqli_query(getConnection(), $manoSQL); 
	if (!$rezultatai) {
		echo "Tokio elemento nėra!";
		return NULL;
	} else {
		$rezultatu_masyvas = mysqli_fetch_assoc($rezultatai); 
		return $rezultatu_masyvas;
	}
}

function deleteBalas($nr) {
    $manoSQL = "DELETE FROM balsavimas WHERE id='$nr';";
    mysqli_query(getConnection(), $manoSQL);
}

//-------------GALERIJA

function deleteGalerija($nr) {
    $manoSQL = "DELETE FROM galerija WHERE id='$nr';";
    mysqli_query(getConnection(), $manoSQL);
}


?>


