
<?php
   session_start();
   include("libs/db_config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connection,$_POST['log_vardas']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['log_slaptazodis']); 
      
      $sql = "SELECT id FROM nariai WHERE vardas = '$myusername' and slaptazodis = '$mypassword'";
      $result = mysqli_query($connection,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_start("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Prisijungimo vardas arba slaptažodis yra neteisingas";
      }
   }

?>

<!-- HTML PART -->


<!-- NAVBAR -->


        <?php
        require_once('navbar.php');
        ?>

<!-- HOME PAGE BACKGROUND -->

        <?php
        require_once('homepageBG.php');
        ?>

<!-- PROJEKTAI -->
    <div id="wrapper">
        <div class="bgd1 container-fluid">
            <div class="row">
                <div class="col-12 h-100 ">
                     <h3 class="sekcija pb-4"> </h3>
                </div>
            </div>  <!-- TITLE -->


            <div class="row projektai">

                    <div class="col-12 proj-col-2 pt-10 col-lg-6 col-md-6 col-xs-6">
                    <div class="proj-names-fonas">
                        <h3 class="proj-names-2"><i><?php echo $error ?></i></h3> 
                    </div>
                </div>
            </div>  <!-- end row -->
        </div> <!-- end container -->
    </div>

            <!-- Redirect -->
        <script type="text/JavaScript">
             setTimeout("location.href = 'index.php';", 4000);
        </script>
















        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
