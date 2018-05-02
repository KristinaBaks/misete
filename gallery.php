
<!-- NAVBAR -->


    <?php
    require_once('navbar.php');
    ?>

<!-- HOME PAGE BACKGROUND -->

    <?php
    require_once('homepageBG.php');
    ?>

<!-- GALERIJA -->

    <div class="bgd1 container-fluid">
        <div class="row">
            <div class="col-12 h-100 ">
                <h3 class="sekcija pb-4">Galerija</h3>
            </div>
        </div> 

        <div class="row justify-content-center align-items-center d-flex">
            <div class="col-10 galerija">


                <?php

                require_once ('./libs/db_config.php');

                $result = mysqli_query($connection, "SELECT * FROM galerija ORDER BY id ASC")  or die (mysqli_error(getConnection(), $connection));

                for ($i=1; $i<200; $i++) {
                   $row = mysqli_fetch_array($result); 
                    if ($row != NULL) {
                            ?>
                                
                            <img class="card-gall" <?php echo " src='img/galerija/".$row['img']."' " ?> onclick="openModal();currentSlide(<?php echo $i ?>)"> 

                <?php } } ?>

            </div>  <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end container -->


<!-- lightbox -->
        <div class="container-fluid modalas">
            <div id="myModal" class="modal ">

                <div class="modal-content d-flex align-items-center justify-content-center">

                    <?php

                    require_once ('./libs/db_config.php');

                    $result = mysqli_query($connection, "SELECT * FROM galerija ORDER BY id ASC")  or die (mysqli_error(getConnection(), $connection));
//$length = count($row);

                    for ($i=1; $i<200; $i++) {
                       $row = mysqli_fetch_array($result); 
                        if ($row != NULL) {
                                ?>
                                    
                        <div class="mySlides">
                            <div class="numbertext"><?php echo $i ?><!-- / <?php //echo $length ?> --></div>
                            <div class="modal-img"><?php echo "<img src='img/galerija/".$row['img']."'>"; ?></div>
                        </div>

                    <?php } } ?>                    

                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div> <!-- end modal-content -->

            </div> <!-- end myModal - LIGHTBOX -->
        </div><!-- end LIGHTBOX -->















        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
