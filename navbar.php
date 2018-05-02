<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gvido Diržio komiksų galerija</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./KCS/Diz/fonts/okami.otf"><link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    </head>

    <body>

<!-- NAVBAR -->

  <div class="container-fluid">
  <div class="row">

<nav class="col-12 navi">

  <ul id="menu" class="nav-meniu">
    <li class="nav-li-s"><a id="myReg" data-toggle="modal" data-target="#myModal2" class="nav-a">REGISTRACIJA</a></li>
    <li class="nav-li"><a href="index.php" class="nav-a">PAGRINDINIS</a></li>
    <li class="nav-li"><a href="about.php" class="nav-a">APIE</a></li>
    <li class="nav-li"><a href="projects.php" class="nav-a">PROJEKTAI</a></li>
    <li class="nav-li"><a href="gallery.php" class="nav-a">GALERIJA</a></li>
    <li class="nav-li"><a href="contact.php" class="nav-a">KONTAKTAI</a></li>
  </ul>

  <div id="toggle">
    <div class="span" id="one"></div>
    <div class="span" id="two"></div>
    <div class="span" id="three"></div>
  </div>

</nav>

<div id="resize">
  <ul id="menu">
    <li class="nav-li-s"><a id="myReg" data-toggle="modal" data-target="#myModal2">REGISTRACIJA</a></li>
    <li><a href="index.php">PAGRINDINIS</a></li>
    <li><a href="about.php">APIE</a></li>
    <li><a href="projects.php">PROJEKTAI</a></li>
    <li><a href="gallery.php">GALERIJA</a></li>
    <li><a href="contact.php">KONTAKTAI</a></li>
  </ul>
</div>

</div>
</div>

<!-- END NAVBAR / START REG/LOGIN FORMS-->

<div class="wrapper container-fluid d-flex align-items-center justify-content-center">

    <!-- Modal2 -->
  <div class="modal modal1 fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Prisijungimas</h4>
          <span class="close2 cursor" data-dismiss="modal">&times;</span>
        </div>
        <div class="modal-body">
          <form name="myForm2" role="form" action="login.php" method="post">
              <input type="text" name="log_vardas" class="form-control" placeholder="Jūsų vardas" required>
              <input type="text" name="log_slaptazodis" class="form-control" placeholder="Slaptažodis" required>
              <button type="submit" class="btn reg btn-block mt-2"> Prisijungti</button>
          </form>
        </div>

        <div class="modal-footer">
          <p>Norite <a id="modalbtn2" href="" data-toggle="modal" data-target="#myModal1">užsiregistruoti?</a></p>
        </div>
      </div>
    </div>
  </div> 

  <!-- Modal1 -->
  <div class="modal modal1 fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Registracija</h4>
          <span class="close2 cursor" data-dismiss="modal">&times;</span>
        </div>
        <div class="modal-body">
          <form name="myForm1" role="form" action="registracija.php" method="post" onsubmit="return validate(event);">
           <!--  <div class="error-message"></div>     -->
              <input type="text" name="reg_vardas" class="form-control" placeholder="Jūsų vardas">
              <input type="text" name="reg_slaptazodis" class="form-control" placeholder="Slaptažodis">
              <input type="email" name="reg_elpastas" class="form-control" placeholder="Jūsų el. paštas">
              <button type="submit" class="btn reg btn-block mt-3"> Registruotis</button>
          </form>
        </div>
    
        <div class="modal-footer">
          <p>Norite <a id="modalbtn1" href="" data-toggle="modal" data-target="#myModal1">prisijungti?</a></p>
        </div>
      </div>
    </div>
  </div> 

</div>

