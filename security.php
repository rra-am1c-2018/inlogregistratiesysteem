<?php
  if ( !isset($_SESSION["id"])) {
    echo '<div class="alert alert-danger" role="alert">U bent niet ingelogd en heeft daarom geen rechten op deze pagina.</div>';
    header("Refresh: 6; url=./index.php?content=home");
    exit();
  }
?>