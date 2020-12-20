<div class="row">

<div id="sidebar" class="col-lg-2">
    <ul class="list-group">
        <!-- <?php echo anchor('', 'Login', 'class="list-group-item list-group-item-action"'); ?> -->
        <a class="list-group-item list-group-item-action list-group-item-danger" href="<?php echo $baseURL.'/'; ?>">Log-Out</a>
        <a class="list-group-item list-group-item-action <?php if ($title=='Projekte'){echo 'active';} ?>" href="<?php echo $baseURL.'projekte'; ?>">Projekte</a>
        <a class="list-group-item list-group-item-action <?php if ($title=='Aktuelles Projekt'){echo 'active';} ?>" href="<?php echo $baseURL.'aktuellesprojekt'; ?>">Aktuelles Projekt</a>
        <ul>
            <a class="list-group-item list-group-item-action <?php if ($title=='Reiter'){echo 'active';} ?>" href="<?php echo $baseURL.'reiter'; ?>">Reiter</a>
            <a class="list-group-item list-group-item-action <?php if ($title=='Aufgaben'){echo 'active';} ?>" href="<?php echo $baseURL.'aufgaben'; ?>">Aufgaben</a>
            <a class="list-group-item list-group-item-action <?php if ($title=='Personen'){echo 'active';} ?>" href="<?php echo $baseURL.'mitglieder'; ?>">Mitglieder</a>
        </ul>
    </ul>
</div>
