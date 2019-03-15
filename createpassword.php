<div class="row">
  <div class="col-12">
    <h1>Wachtwoord kiezen</h1>
  </div>
</div>
<div class="row">
  <div class="col-6">
    <form action="./index.php?content=createpassword_script" method="post">
      <div class="form-group">
        <label for="InputPassword1">Wachtwoord</label>
        <input type="password" class="form-control" id="InputPassword1" placeholder="Kies een wachtwoord" name="password" required>
        <small id="passwordHelp" class="form-text text-muted">Maximaal 72 karakters gebruiken</small>
      </div>
      <div class="form-group">
        <label for="InputPassword">Herhaal wachtwoord</label>
        <input type="password" class="form-control" id="InputPassword2" placeholder="Herhaal wachtwoord" name="checkpassword" required>
      </div>
      <small id="passwordHelp" class="form-text text-muted">Maximaal 72 karakters gebruiken</small>
      <input type="hidden" value="<?php echo $_GET["id"]; ?>" name="id">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Sla op!</button>
    </form>  
  </div>
  <div class="col-6">
    <!-- Plaatje -->
    <img src="./images/discus.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
  </div>
</div>
