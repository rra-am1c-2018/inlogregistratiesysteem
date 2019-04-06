<?php 
  $userrole = ['customer'];
  include("./security.php"); 
?>

<div class="webgl-content">
  <div id="gameContainer" style="width: 320px; height: 280px"></div>
  <div class="footer">
    <div class="webgl-logo"></div>
    <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
    <div class="title">RRA</div>
  </div>
</div>