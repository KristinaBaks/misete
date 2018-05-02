
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

                    <?php
                    require_once('registracija.php');
                    ?>
                        <div class="col-12 proj-col-2 pt-10 col-lg-6 col-md-6 col-xs-6">
                        <div class="proj-names-fonas">
                            <h3 class="proj-names-2"><i><?php echo $false, $taip ?></i></h3> 
                        </div>
                    </div>
                </div>  <!-- end row -->
            </div> <!-- end container -->
        </div>

            <!-- Redirect -->
        <script type="text/JavaScript">
             setTimeout("location.href = 'index.php';", 3000);
        </script>
















        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
