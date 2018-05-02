<?php
	require_once ('./libs/db_config.php');
  // Create database connection
  $connection = mysqli_connect(DB_HOST, USER, PASSWORD, DB_NAME);

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $img = $_FILES['img']['name'];
    // Get text
    $name = mysqli_real_escape_string($connection, $_POST['name']);

    // image file directory
    $target = "img/galerija/".basename($img);

    $sql = "INSERT INTO galerija (img, name) VALUES ('$img', '$name')";
    // execute query
    mysqli_query($connection, $sql);

    if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload img";
    }
  }


?>


            <!-- Redirect -->
        <script type="text/JavaScript">
             setTimeout("location.href = 'welcome.php';", 0);
        </script>