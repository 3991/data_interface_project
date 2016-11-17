<?php
require_once('./../Ressources/Include/header.php');
require_once('./../Ressources/Include/menu_log.php');$_SESSION['nb'] = $b;
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <p>Tops sujets : <span class="label label-info" href="#" role="button">Lille</span>
        <span class="label label-info" href="#" role="button">Sujbect 2</span>
        <span class="label label-info" href="#" role="button">Sujbect 3</span>
        <span class="label label-info" href="#" role="button">Sujbect 4</span></p>
          <h3 id="test">Combien de livre(s) <strong><i>Harry Potter &agrave; l&apos;Ecole des Sorciers*</i></strong> peut-on &eacute;crire avec les Tweets sur <span class="label label-info" href="#" role="button">Lille</span> depuis hier <i class="glyphicon glyphicon-question-sign"></i></h3>
          <button type="button" class="btn btn-primary btn-block" onclick="add_harry_potter_picture(document.getElementById('table'), ".$_SESSION['nb'].");">R&eacute;ponse</button>
          <!-- La version américaine (~77523 mots) -->
      </div>
    </div>
    <div class="row">
      <table id="table">
      </table>
    </div>
</div>

<script src="./../Js/functions.js"></script>
<?php require_once('./../Ressources/Include/footer.php'); ?>
