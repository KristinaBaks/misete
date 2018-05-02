<?php
   session_start();
      include('libs/db_config.php');
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($connection,"SELECT vardas FROM nariai WHERE vardas = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['vardas'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
   }


