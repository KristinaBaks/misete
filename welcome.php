
<?php
   include('session.php');
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
        include('homepageBG.php');
        ?>

<!-- PROJEKTAI -->

    <div id="wrapper">
        <div class="bgd1 pt-5 container-fluid">

            <div class="row pb-4"> <!-- TITLE -->
                <div class="col-12 h-100 ">
                     <h3 class="sekcija">Sveiki prisijungę, <?php echo $login_session ?>, </h3>
                     <h6 class="sekcija">galite redaguoti tinklapio turinį </h6>
                </div>
            </div>  <!-- TITLE -->


            <div class="row projektai">
                    <div class="col-12 proj-col-3">
                    <div class="proj-names-fonas pt">
                        <h3 class="proj-names-2">PAGRINDINIS</h3>

                        <?php
                        require_once ('./libs/db_config.php');
                        $homepage = getHomepage(1); 
                        ?>

                        
                    <form class="form" action="update_HP.php" method="post">
                        <table class="table table-hover .table-responsive{-sm|-md|-lg|-xl}">
                            <tr>
                                <th scope="col">Nr</th>
                                <th scope="col">Name</th>
                                <th scope="col">Content</th>
                                <th scope="col"></th>
                            </tr>
                            <tr><!-- 
                                <th scope="row"></th> -->
                                <td readonly name="nr" ><?php echo $homepage['id']; ?></td>
                                <td><textarea class="homepage" name="name" value=""><?php echo $homepage['name']; ?></textarea></td>
                                <td><textarea class="homepage" type="text" name="content" value=""><?php echo $homepage['content']; ?></textarea></td>
                                <td><button type="submit" name="update">UPDATE</button></td>
                            </tr>
                        </table>
                    </form>
                    </div>
                    </div>
            </div>  <!-- end row -->

            <div class="row projektai">
                    <div class="col-12 proj-col-3">
                    <div class="proj-names-fonas pt">
                        <h3 class="proj-names-2">APIE</h3>

                        <?php
                        require_once ('./libs/db_config.php');
                        $apie = getApie(1); 
                        ?>

                        
                    <form class="form" action="update_apie.php" method="post">
                        <table class="table table-hover">
                            <tr>
                                <th>Nr</th>
                                <th>Pasisveikinimas</th>
                                <th>Prisistatymas</th>
                                <th>Nuotrauka</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td readonly name="nr" value=""><?php echo $apie['id']; ?></td>
                                <td><textarea class="apie" type="text" name="pasisveikinimas" value=""><?php echo $apie['pasisveikinimas']; ?></textarea></td>
                                <td><textarea class="apie" type="text" name="prisistatymas" value=""><?php echo $apie['prisistatymas']; ?></textarea></td>
                                <td name="img" value=""><?php echo $apie['img']; ?></td>
                                <td><button type="submit" name="update">UPDATE</button></td>
                            </tr>
                        </table>
                    </form>
                    </div>
                </div>
            </div>  <!-- end row -->

            <div class="row projektai">
                    <div class="col-12 proj-col-3">
                    <div class="proj-names-fonas pt">
                        <h3 class="proj-names-2">GALERIJA</h3>

                        
                    <form class="form" action="img_upl.php" method="post" enctype='multipart/form-data'>
                        <table class="table table-hover">
                            <tr>
                                <th>Nr</th>
                                <th>IMG</th>
                                <th>Name</th>
                                <th></th>
                            </tr>

                            <?php
                                require_once ('./libs/db_config.php');

                                $result = mysqli_query($connection, "SELECT * FROM galerija ORDER BY id ASC")  or die (mysqli_error(getConnection(), $connection));
                                //while ($row = mysqli_fetch_array($result)) {
                                //  echo "<div id='img_div'>";
                                //    echo "<img src='img/galerija/".$row['img']."' >";
                                //    echo "<p>".$row['name']."</p>";
                                //  echo "</div>";

                                //}

                                for ($i=1; $i<200; $i++) {
                                //    $rezultatai=getGalerija($i);
                                   $row = mysqli_fetch_array($result); 
                                    if ($row != NULL) {
                            ?>

                            <tr>
                                <td> <?php echo "".$row['id'].""; ?></td><!-- 
                                <td> <?php //echo "<img src='img/galerija/".$row['img']."' >"; ?></td> -->
                                <td> <?php echo "".$row['img'].""; ?></td>
                                <td> <?php echo "<p>".$row['name']."</p>"; ?></td>
                                <td><a href="delete_img.php?action=delete&numeris=<?php echo "".$row['id'].""; ?>" class="btn" type="submit" method="post" name="delete">DELETE</a></td>

                            </tr>
                            
                            <?php } } ?>
                            <tr>
                                <td></td>
                                <td><input class="galerija" type='file' name='img'></td>
                                <td><textarea name='name'></textarea></td>
                                <td><button type="submit" name='upload'>UPLOAD</button></td>
                            </tr>
                        </table>
                    </form>
                    </div>
                </div>
            </div>  <!-- end row -->


            <div class="row projektai">
                    <div class="col-12 proj-col-3">
                    <div class="proj-names-fonas pt">
                        <h3 class="proj-names-2">KONTAKTAI</h3>

                        <?php
                        require_once ('./libs/db_config.php');
                        $kontaktai = getKontaktai(1); 
                        ?>

                        
                    <form class="form" action="update_kontaktai.php" method="post">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Nr</th>
                                <th>Adresas</th>
                                <th>Tel. nr</th>
                                <th>El. paštas</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td readonly name="nr" value=""><?php echo $kontaktai['id']; ?></td>
                                <td><textarea class="kontaktai" type="text" name="adresas" value=""><?php echo $kontaktai['adresas']; ?></textarea></td>
                                <td><textarea class="kontaktai" type="text" name="telnr" value=""><?php echo $kontaktai['telnr']; ?></textarea></td>
                                <td><textarea class="kontaktai" type="text" name="elpastas" value=""><?php echo $kontaktai['elpastas']; ?></textarea></td>
                                <td><button type="submit" name="update">UPDATE</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                    </div>
                    </div>
            </div>  <!-- end row -->

            <div class="row projektai">
                    <div class="col-12 proj-col-3">
                    <div class="proj-names-fonas pt">
                        <h3 class="proj-names-2">BALAI</h3>
                        
                        <table class="table table-hover">
                            <tr>
                                <th>Nr</th>
                                <th>SAKURA NO EMI</th>
                                <th>KUMAMOTO DIAMOND</th>
                                <th>KAMI NO GEEMU</th>
                                <th>STAR OF THE DESERT</th>
                                <th>TaTaTAKO</th>
                                <th>Data</th>
                                <th></th>
                            </tr>

                        <?php
                        require_once ('./libs/db_config.php');

                        for ($i=0; $i<50; $i++) {
                            $balas = getBalas($i); 
                            if ($balas != NULL) {
                        ?>

                            <tr>
                                <td><?php echo $balas['id']; ?></td>
                                <td><?php echo $balas['SAKURA_NO_EMI']; ?></td>
                                <td><?php echo $balas['KUMAMOTO_DIAMOND']; ?></td>
                                <td><?php echo $balas['KAMI_NO_GEEMU']; ?></td>
                                <td><?php echo $balas['STAR_OF_THE_DESERT']; ?></td>
                                <td><?php echo $balas['TaTaTAKO']; ?></td>
                                <td><?php echo $balas['data']; ?></td>
                                <td><a href="delete_balas.php?action=delete&numeris=<?php echo $balas['id']; ?>" class="btn" type="submit" method="post" name="delete">DELETE</a></td>
                            </tr>

                        <?php } } ?>

                        </table>
                    </div>
                </div>
            </div>  <!-- end row -->

            <div class="row projektai">
                    <div class="col-12 proj-col-3">
                    <div class="proj-names-fonas pt">
                        <h3 class="proj-names-2">KOMENTARAI</h3>
                        
                        <table class="table table-hover">
                            <tr>
                                <th>Nr</th>
                                <th>Vardas</th>
                                <th>SAKURA NO EMI</th>
                                <th>KUMAMOTO DIAMOND</th>
                                <th>KAMI NO GEEMU</th>
                                <th>STAR OF THE DESERT</th>
                                <th>TaTaTAKO</th>
                                <th>Data</th>
                                <th></th>
                            </tr>

                        <?php
                        require_once ('./libs/db_config.php');

                        for ($i=0; $i<50; $i++) {
                            $komentaras = getKomentaras($i); 
                            if ($komentaras != NULL) {
                        ?>

                            <tr>
                                <td><?php echo $komentaras['id']; ?></td>
                                <td><?php echo $komentaras['vardas']; ?></td>
                                <td><?php echo $komentaras['SAKURA_NO_EMI']; ?></td>
                                <td><?php echo $komentaras['KUMAMOTO_DIAMOND']; ?></td>
                                <td><?php echo $komentaras['KAMI_NO_GEEMU']; ?></td>
                                <td><?php echo $komentaras['STAR_OF_THE_DESERT']; ?></td>
                                <td><?php echo $komentaras['TaTaTAKO']; ?></td>
                                <td><?php echo $komentaras['data']; ?></td>
                                <td><a href="delete_komentaras.php?action=delete&numeris=<?php echo $komentaras['id']; ?>" class="btn" type="submit" method="post" name="delete">DELETE</a></td>
                            </tr>

                        <?php } } ?>

                        </table>
                    </div>
                </div>
            </div>  <!-- end row -->

            <div class="row projektai">
                    <div class="col-12 proj-col-3">
                    <div class="proj-names-fonas pt">
                        <h3 class="proj-names-2">ŽINUTĖS</h3>
                        
                        <table class="table table-hover">
                            <tr>
                                <th>Nr</th>
                                <th>Vardas</th>
                                <th>Žinutė</th>
                                <th>El. paštas</th>
                                <th>Data</th>
                                <th></th>
                            </tr>

                        <?php
                        require_once ('./libs/db_config.php');

                        for ($i=0; $i<50; $i++) {
                            $zinute = getZinute($i); 
                            if ($zinute != NULL) {
                        ?>
                            <tr>
                                <td><?php echo $zinute['id']; ?></td>
                                <td><?php echo $zinute['vardas']; ?></td>
                                <td><?php echo $zinute['zinute']; ?></td>
                                <td><?php echo $zinute['elpastas']; ?></td>
                                <td><?php echo $zinute['data']; ?></td>
                                <td><a href="delete_zinute.php?action=delete&numeris=<?php echo $zinute['id']; ?>" class="btn" type="submit" method="post" name="delete">DELETE</a></td>
                            </tr>

                        <?php } } ?>

                        </table>
                    </div>
                </div>
            </div>  <!-- end row -->


            <div class="row projektai">
                    <div class="col-12 proj-col-3">
                    <div class="proj-names-fonas">
                        <h3 class="proj-names-2">
                            <a href = "logout.php">Atsijungti</a>
                        </h3>
                    </div>
                </div>
            </div>  <!-- end row -->

        </div> <!-- end container -->
    </div>



















        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>




    </body>
</html>
