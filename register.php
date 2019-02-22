<?php
  var_dump($_POST);
  include("./connect_db.php");

  $email = $_POST["email"];

  $sql = "INSERT into `login` (`id`,
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
?>