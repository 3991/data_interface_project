<?php session_start();
require_once('./Ressources/Include/header.php');
require_once('./Ressources/Include/menu_log.php');
//require_once('./Controller/hp.php');
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <p>Tops sujets : <span class="label label-info" href="#" role="button">Lille</span>
        <span class="label label-info" href="#" role="button">Sujbect 2</span>
        <span class="label label-info" href="#" role="button">Sujbect 3</span>
        <span class="label label-info" href="#" role="button">Sujbect 4</span></p>
          <h3 id="test">Combien de livre(s) <strong><i>Harry Potter &#225; l&apos;Ecole des Sorciers*</i></strong> peut-on &eacute;crire avec les Tweets sur <span class="label label-info" href="#" role="button">Lille</span> de cette semaine <i class="glyphicon glyphicon-question-sign"></i></h3>
          <button type="button" class="btn btn-primary btn-block" onclick="add_harry_potter_picture();">R&eacute;ponse</button>
          <!-- La version américaine (~77523 mots) -->
      </div>
    </div>
    <div class="row">
    </div>
</div>

<script src="./Js/functions.js"></script>
<?php require_once('./Ressources/Include/footer.php'); ?>
