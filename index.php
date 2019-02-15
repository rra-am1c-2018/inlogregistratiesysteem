<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/style.css">

  <title>AM1C Inlogregistratiesysteem</title>
</head>

<body>
  <main class="container">
    <div class="row">
      <div class="col-12">
        <div class="jumbotron">
          <h1 class="display-4">Inlogregistratiesysteem/AM1C</h1>
          <p>Een standaardtemplate voor een inlogregistratiesysteem</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              
              <li class="nav-item active">
                <a class="nav-link" href="./index.php?content=home">Home<span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./index.php?content=register_form">Registreer</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./index.php?content=login_form">Inloggen</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <section class="content">
          <?php 
            if (isset($_GET["content"])) {
              include("./" . $_GET["content"] . ".php"); 
            } else {
              include("./home.php");
            }
          ?>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <footer>
          Footer
        </footer>  
      </div>
    </div>
  </main>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>