<?php
            require_once ('./libs/db_config.php');


//$nr = (int)$_POST['id'];
//$nr =isset( $_POST['id']) ? $_POST['id'] : 0;
//             $_POST['id'] = '';
//             $nr = '';
//             $name = '';
//             $content = '';
// $nr = isset($_POST['id']) ? $_POST['id'] : '';
            if(isset($_POST['update'])) {

// if($_POST) {
           //print_r($_POST);
            $nr = $_POST['nr'];
            $pasisveikinimas = $_POST['pasisveikinimas'];
            $prisistatymas = $_POST['prisistatymas']; 
            $img = $_POST['img']; 

            updateApie($nr, $pasisveikinimas, $prisistatymas, $img); //}

}
?>

<!-- NAVBAR -->

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
                        <h3 class="proj-names-2"><i><?php echo "Atnaujinta sėkmingai"?></i></h3> 
                    </div>
                </div>
            </div>  <!-- end row -->
        </div> <!-- end container -->
    </div>

            <!-- Redirect -->
        <script type="text/JavaScript">
             setTimeout("location.href = 'welcome.php';", 2000);
        </script>







        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>

