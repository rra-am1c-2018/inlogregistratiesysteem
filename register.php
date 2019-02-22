<?php
  include("./connect_db.php");

  $email = $_POST["email"];

  if ( empty($_POST["email"])) {
    echo 'U heeft geen e-mailadres ingevoerd. Dit is een verplicht veld. Probeer het nogmaals';
    header("Refresh: 3; url=./index.php?content=register_form");
  } else {
    $sql = "SELECT * FROM `login` WHERE `email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if ( mysqli_num_rows($result) == 1 ) {
      echo '<div class="alert alert-info" role="alert">Het door u ingevoerde e-mailadres bestaat al. Kies een nieuw e-mailadres</div>';
      header("Refresh: 3; ./index.php?content=register_form");
    } else {
      $sql = "INSERT INTO `login` (`id`,
                                `email`,
                                `password`)
                        VALUES  (NULL,
                                '$email',
                                'geheim')";

      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo '<div class="alert alert-success" role="alert">U bent geregistreerd. Wij hebben u een mail gestuurd naar dit adres. Klik daarin op de activatielink om uw registratie te voltooien.</div>';
        header("Refresh: 2; url=./index.php?content=login_form");
      } else {
        echo '<div class="alert alert-danger" role="alert">Er is iets misgegaan tijdens het registreren probeer het nogmaals</div>';
        header("Refresh: 2; url=./index.php?content=register_form");
      }
    }
  }
?>