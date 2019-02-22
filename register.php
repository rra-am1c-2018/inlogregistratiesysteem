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
    echo "gelukt";
  } else {
    echo "niet gelukt";
  }
?>