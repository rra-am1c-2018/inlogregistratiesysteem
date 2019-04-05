<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      

      <?php
        if ( isset($_SESSION["id"])) {
          
          switch ($_SESSION["userrole"]) {
            case 'admin':
              echo '<li class="nav-item">
                      <a class="nav-link" href="./index.php?content=administrator_home">adminhome</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=change_userrole">gebruikersrol</a>
                    </li>';
            break;
            case 'root':
              echo '<li class="nav-item">
                      <a class="nav-link" href="./index.php?content=root_home">roothome</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=change_userrole">gebruikersrol</a>
                    </li>';
            break;
            case 'moderator':
              echo '<li class="nav-item">
                      <a class="nav-link" href="./index.php?content=moderator_home">moderatorhome</a>
                    </li>';
            break;
            case 'customer':
              echo '<li class="nav-item">
                      <a class="nav-link" href="./index.php?content=customer_home">customerhome</a>
                    </li>';
            break;
            default:
              header("Location: ./index.php?content=logout");
            break;
          }

          echo '<li class="nav-item">
                  <a class="nav-link" href="./index.php?content=logout">uitloggen</a>
                </li>';
        } else {
          // Biedt de login en register links aan
          echo '<li class="nav-item active">
                  <a class="nav-link" href="./index.php?content=home">Home<span class="sr-only">(current)</span></a>
                </li>         
                <li class="nav-item">
                  <a class="nav-link" href="./index.php?content=register_form">Registreer</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="./index.php?content=login_form">Inloggen</a>
                </li>';
        }


      ?>
    </ul>
  </div>
  <span id="welkom"><?php if (isset($_SESSION["email"])) { echo "Welkom " . $_SESSION["email"]; } ?></span>
</nav>