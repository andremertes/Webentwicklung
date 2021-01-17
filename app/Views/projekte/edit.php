
<div id="hauptkomponente" class="col-md">
    <div class="card bg-light mt-4">
        <legend class="card-header">
            <div class="d-flex justify-content-between">
                <div class="h5 mt-3"><?= isset($_POST['btnNeu']) ? 'Neuen' : '' ?>&nbsp;Projekt&nbsp;<?php if (isset($_POST['btnLoeschen'])) {echo 'Löschen';} elseif (isset($_POST['btnNeu'])) {echo 'erstellen';} else {echo 'Bearbeiten';} ?></div>
            </div>
        </legend>
        <div class="card-body">

            <form action="<?= base_url('Projekte/index_projekte') ?>" method="post">

                <div class="form-group row">
                    <label for="projektname" class="col-sm-2 col-form-label">Name des Projekts</label>
                    <div class="col-sm-10">
                        <input type="hidden" id="ProjektID" name="ProjektID" value="<?= isset($projekte['id']) ? $projekte['id'] : ''; ?>">
                        <input type="text" class="form-control" id="projektname" name="projektname" placeholder="Wie soll das Projekt hei&szlig;en?" value="<?= $projekte['name']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="projektbeschreibung" class="col-sm-2 col-form-label">Projektbeschreibung</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="projektbeschreibung" name="projektbeschreibung" placeholder="Beschreibung" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>><?= $projekte['beschreibung']; ?></textarea>
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-sm-8">

                        <?php if (isset($_POST['btnLoeschen'])) : ?>
                            <button type="submit" class="btn btn-danger mb-2 mr-2" name="btnBestaetigen" id="btnBestaetigen"><i class="fas fa-trash"></i>&nbsp;L&ouml;schen</button>
                        <?php endif ?>

                        <button class="btn btn-primary mb-2" type="submit" name="btnAbbrechen" id="btnAbbrechen"><i class="fas fa-window-close"></i>&nbsp;Abbrechen</button>

                    </div>
                </div>

            </form>

        </div>
    </div>
