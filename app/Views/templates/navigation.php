<div class="row">

<div id="sidebar" class="col-lg-2">
    <ul class="list-group">
        <!-- <?php echo anchor('', 'Login', 'class="list-group-item list-group-item-action"'); ?> -->
        <a class="list-group-item list-group-item-secondary text-truncate">Hallo,&nbsp;<?= $sessionusername ?></a>
        <a class="list-group-item list-group-item-action list-group-item-danger" href="<?= base_url() ?>/login/logout">Log-Out</a>
        <a class="list-group-item list-group-item-action <?php if ($title=='Projekte'){echo 'active';} ?>" href="<?= base_url() ?>/projekte/index_projekte">Projekte</a>
        <a class="list-group-item list-group-item-action <?php if ($title=='Aktuelles Projekt'){echo 'active';} ?>" href="<?= base_url() ?>/aktuellesProjekt/aktuelles_index" <?php if (!(isset($_SESSION['aktivesprojekt']))){echo 'hidden';}?>><?php if(isset($_SESSION['projektdaten'])){echo $_SESSION['projektdaten']['name'];} ?></a>
        <ul>
            <a class="list-group-item list-group-item-action <?php if ($title=='Reiter'){echo 'active';} ?>" href="<?= base_url() ?>/reiter/reiter_index" <?php if (!(isset($_SESSION['aktivesprojekt']))){echo 'hidden';}?>>Reiter</a>
            <a class="list-group-item list-group-item-action <?php if ($title=='Aufgaben'){echo 'active';} ?>" href="<?= base_url() ?>/aufgaben/aufgaben_index" <?php if (!(isset($_SESSION['aktivesprojekt']))){echo 'hidden';}?>>Aufgaben</a>
            <a class="list-group-item list-group-item-action <?php if ($title=='Mitglieder'){echo 'active';} ?>" href="<?= base_url() ?>/personen/index_personen" <?php if (!(isset($_SESSION['aktivesprojekt']))){echo 'hidden';}?>>Mitglieder</a>
        </ul>

    </ul>
</div>
