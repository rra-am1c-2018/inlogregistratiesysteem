<?php
  include("./connect_db.php");

  include("./functions.php");

  $password = sanitize($_POST["password"]);
  $checkpassword = sanitize($_POST["checkpassword"]);
  $id = sanitize($_POST["id"]);

  if ( !empty($password) && !empty($checkpassword)) {
    $blowfish_password =  password_hash($password, CRYPT_BLOWFISH);  

    $sql = "UPDATE `login`
            SET    `password` = '$blowfish_password'
            WHERE  `id` = $id";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
      // succes
      echo '<div class="alert alert-success" role="alert">U wachtwoord is succesvol veranderd. U wordt doorgestuurd naar de inlogpagina</div>';
      header("Refresh: 2; url=./index.php?content=login_form");
    } else {
      // foutmelding
      echo '<div class="alert alert-danger" role="alert">Er is iets misgegaan tijdens het registreren van uw wachtwoord. Probeer het opnieuw via de activatielink</div>';
      header("Refresh: 2; url=./index.php?content=home");
    }
  } else {
    // foutmelding
    echo '<div class="alert alert-danger" role="alert">U heeft een van de wachtwoordvelden niet ingevuld probeer het nogmaals...</div>';
    header("Refresh: 3; url=./index.php?content=createpassword&id=$id");
  }

  
?>