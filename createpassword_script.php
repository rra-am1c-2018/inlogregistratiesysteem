<?php
  
  include("./connect_db.php");

  include("./functions.php");

  $password = sanitize($_POST["password"]);
  $checkpassword = sanitize($_POST["checkpassword"]);
  $id = sanitize($_POST["id"]);
  $pw = sanitize($_POST["pw"]);

  $sql = "SELECT * FROM `login` WHERE `id` = $id";

  $result =  mysqli_query($conn, $sql);

  if ( mysqli_num_rows($result) == 1 ) {

    $record = mysqli_fetch_assoc($result);

    if ( password_verify($record["password"], $pw) ) {
          
      if ( !empty($password) && !empty($checkpassword)) {
    
        if ( !strcmp($password, $checkpassword)) {
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
          // Foutmelding
          // foutmelding
          echo '<div class="alert alert-danger" role="alert">U ingevoerde wachtwoorden zijn niet gelijk, probeer het nogmaals...</div>';
          header("Refresh: 3; url=./index.php?content=createpassword&id=$id&pw=$pw");
        }    
      } else {
        // foutmelding
        echo '<div class="alert alert-danger" role="alert">U heeft een van de wachtwoordvelden niet ingevuld probeer het nogmaals...</div>';
        header("Refresh: 3; url=./index.php?content=createpassword&id=$id&pw=$pw");
      }

    } else {
      // foutmelding
      echo '<div class="alert alert-danger" role="alert">Uw id en password in de activatielink zijn niet correct. U wordt doorgestuurd naar de homepage</div>';
      header("Refresh: 2; url=./index.php?content=home");
    }
  } else {
    // foutmelding
    echo '<div class="alert alert-danger" role="alert">U heeft activatielink met een onbekend id. U wordt doorgestuurd naar de homepage</div>';
    header("Refresh: 2; url=./index.php?content=home");
  }  
?>