<?php
require_once('libs/db_config.php');

        $vardas = $_GET['vardas'];
        $zinute = $_GET['zinute'];
        $elpastas = $_GET['elpastas'];

//Load composer's autoloader
require_once 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587'; 
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 465;                                      // TCP port to connect to

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output erorai kuriuos mes, sukurus rasyti 0
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'email@gmail.com';                 // SMTP username
    $mail->Password = 'password';                           // SMTP password

    //Recipients
    $mail->setFrom('email@gmail.com', 'developers');
    $mail->addAddress('email@gmail.com', 'Joe User');     // Add a recipient
    $mail->addReplyTo($elpastas, $vardas);

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento klausimas';
    $mail->Body    = $zinute;
    $mail->AltBody = $zinute;

    if ($mail->send()) {
    	createZinute($vardas, $zinute, $elpastas); 
    }

	$mail->send();


    $taip = 'Dėkoju už Jūsų laišką!';
} catch (Exception $e) {
    $taip = 'siuntimas nepavyko, bandykite dar kartą: ' . $mail->ErrorInfo;
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
                        <h3 class="proj-names-2"><i><?php echo $taip?></i></h3> 
                    </div>
                </div>
            </div>  <!-- end row -->
        </div> <!-- end container -->
    </div>

            <!-- Redirect -->
        <script type="text/JavaScript">
             setTimeout("location.href = 'contact.php';", 3000);
        </script>















        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
