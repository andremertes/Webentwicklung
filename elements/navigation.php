<div id="sidebar" class="col-lg-2">
    <ul class="list-group">
        <a class="list-group-item list-group-item-action" href="index.php">Login</a>
        <a class="list-group-item list-group-item-action <?php if($name=="projekte"){echo "active";} ?>" href="projekte.php">Projekte</a>
        <a class="list-group-item list-group-item-action <?php if($name=="aktuellesProjekt"){echo "active";} ?>" href="aktuellesProjekt.php">Aktuelles Projekt</a>
        <ul>
            <a class="list-group-item list-group-item-action <?php if($name=="reiter"){echo "active";} ?>" href="reiter.php">Reiter</a>
            <a class="list-group-item list-group-item-action <?php if($name=="aufgaben"){echo "active";} ?>" href="aufgaben.php">Aufgaben</a>
            <a class="list-group-item list-group-item-action <?php if($name=="personen"){echo "active";} ?>" href="personen.php">Mitglieder</a>
        </ul>
    </ul>
</div>
