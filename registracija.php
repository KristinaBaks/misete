<?php
session_start();
require_once('libs/db_config.php');

    $vardas = $_POST['reg_vardas'];
    $slaptazodis = $_POST['reg_slaptazodis'];
    $elpastas = $_POST['reg_elpastas'];

  	$sql_u = "SELECT * FROM nariai WHERE vardas='$vardas'";
  	$sql_i = "SELECT * FROM nariai WHERE slaptazodis='$slaptazodis'";
  	$sql_e = "SELECT * FROM nariai WHERE elpastas='$elpastas'";
  	$res_u = mysqli_query($connection, $sql_u);
  	$res_i = mysqli_query($connection, $sql_i);
  	$res_e = mysqli_query($connection, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $false = "Vartotojo vardas užimtas"; 
  	  include ('reg_resp.php');	
  	}else if(mysqli_num_rows($res_i) > 0){
  	  $false = "Slaptažodis užimtas"; 	
  	  include ('reg_resp.php');	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $false = "Šis el.paštas užimtas"; 	
  	  include ('reg_resp.php');	
  	}else{
		createNarys($vardas, $slaptazodis, $elpastas);           
        exit();
  	}
