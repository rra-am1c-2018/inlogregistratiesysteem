<?php
  var_dump($_POST);
  include("./connect_db.php");
  include("./functions.php");

  $email = sanitize($_POST["email"]);
  $password = sanitize($_POST["password"]);

  $sql = "SELECT * FROM  `login` WHERE `email` = '$email'";

  $result = mysqli_query($conn, $sql);

  if ( mysqli_num_rows($result) == 1 ) {
    // Ga verder met de inlogprocedure
    $record = mysqli_fetch_assoc($result);

    $blowfish_password = $record["password"];

    echo password_verify($password, $blowfish_password); exit();

  } else {
    // E-mailadres is niet bekend in database, terugsturen naar het inlogformulier
    echo '<div class="alert alert-danger" role="alert">E-mail is niet bekend, probeer het nogmaals</div>';
    header("Refresh: 2; url=./index.php?content=login_form");
  }
?>