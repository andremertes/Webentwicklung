<div id="sidebar" class="col-lg-2">
    <ul class="list-group">
        <li class="list-group-item list-group-item-action"><a href="index.php">Login</a></li>
        <li class="list-group-item list-group-item-action <?php if($name=="projekte"){echo "active";} ?>"><a href="projekte.php" style="color: <?php if($name=="projekte"){echo "white";} ?>">Projekte</a></li>
        <li class="list-group-item list-group-item-action <?php if($name=="aktuellesProjekt"){echo "active";} ?>"><a href="aktuellesProjekt.php" style="color: <?php if($name=="aktuellesProjekt"){echo "white";} ?>">Aktuelles Projekt</a></li>
        <ul>
            <li class="list-group-item list-group-item-action <?php if($name=="reiter"){echo "active";} ?>"><a href="reiter.php" style="color: <?php if($name=="reiter"){echo "white";} ?>">Reiter</a></li>
            <li class="list-group-item list-group-item-action <?php if($name=="aufgaben"){echo "active";} ?>"><a href="aufgaben.php" style="color: <?php if($name=="aufgaben"){echo "white";} ?>">Aufgaben</a></li>
            <li class="list-group-item list-group-item-action <?php if($name=="personen"){echo "active";} ?>"><a href="personen.php" style="color: <?php if($name=="personen"){echo "white";} ?>">Mitglieder</a></li>
        </ul>
    </ul>
</div>
