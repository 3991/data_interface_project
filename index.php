<?php require_once('Ressources/Include/header.php');
?>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Test COUNT</a></li>
                <li><a href="#">Test GET</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <h1>Title</h1>
        <p>Combien de livre peut-on &eacute;crire avec les Tweets sur 'Lille' de cette semaine ?</p>
        <p><span class="label label-info">Info</span> test</p>
    </div>
</div>
<div class="container">
<?php
echo file_get_contents("");
?>
</div>
<?php
require_once('Ressources/Include/footer.php')
?>
