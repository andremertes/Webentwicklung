
<div id="hauptkomponente" class="col-md">
    <div class="card bg-light mt-4">
        <legend class="card-header">
            <div class="d-flex justify-content-between">
                <div class="h5 mt-3"><?= isset($_POST['btnNeu']) ? 'Neue' : '' ?>&nbsp;Aufgabe&nbsp;<?php if (isset($_POST['btnLoeschen'])) {echo 'L&ouml;schen';} elseif (isset($_POST['btnNeu'])) {echo 'erstellen';} else {echo 'Bearbeiten';} ?></div>
            </div>
        </legend>
        <div class="card-body">

            <form action="<?= base_url('Aufgaben/aufgaben_index') ?>" method="post">

                <div class="form-group row">
                    <label for="aufgabenbezeichnung" class="col-sm-2 col-form-label">Aufgabenbezeichnung</label>
                    <div class="col-sm-10">
                        <input type="hidden" id="AufgabeID" name="AufgabeID" value="<?= isset($task['id']) ? $task['id'] : ''; ?>">
                        <input type="text" class="form-control" id="aufgabenbezeichnung" name="aufgabenbezeichnung" placeholder="Holz hacken" value="<?= $task['bezeichnung']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="beschreibung" class="col-sm-2 col-form-label">Beschreibung</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="beschreibung" name="beschreibung" placeholder="Denke dir was aus!" value="<?= $task['beschreibung']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="faellig" class="col-sm-2 col-form-label">F&auml;lligkeitsdatum</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="faellig" name="faellig" placeholder="&Uuml;berzieh blo&szlig; nicht die Frist!" value="<?= $task['faelligkeitsdatum']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="reiterID" class="col-sm-2 col-form-label">Reiter</label>
                    <select class="custom-select my-1 mr-sm-2" name="reiterID" <?php if(isset($task['reiterID'])){set_select($task['reiterID']);} ?> <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                        <?php foreach($reiterliste as $reiter): ?>
                        <option value=<?= $reiter['id'] ?>"><?= $reiter['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group row">
                    <label for="zustaendig">Zuständig:</label>
                    <!-- lade alle Personen in die Multiselectbox -->
                    <!--name="zustaendig" gibt immer nur den letzen Eintrag aus -->
                    <select class="form-control" multiple="multiple" name="zustaendig[]" <?php if(isset($task['mitgliedID'])){set_select($task['mitgliedID']);} ?> <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                        <!-- Bei Mehrfach auswahl gib alle Mitglieder aus, wenn nicht schon jmd zustaendig für die Aufgabe ist-->
                        <?php foreach($mitglieder as $mitglied): ?>
                            <option value=<?= $mitglied['id'] ?>"><?= $mitglied['username'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-8">

                        <?php if (isset($_POST['btnBearbeiten'])) : ?>
                            <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-save"></i>&nbsp;Speichern</button>
                        <?php endif ?>

                        <?php if (isset($_POST['btnNeu'])) : ?>
                            <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-save"></i>&nbsp;Speichern</button>
                        <?php endif ?>

                        <?php if (isset($_POST['btnLoeschen'])) : ?>
                            <button type="submit" class="btn btn-danger mb-2 mr-2" name="btnBestaetigen" id="btnBestaetigen"><i class="fas fa-trash"></i>&nbsp;L&ouml;schen</button>
                        <?php endif ?>

                        <button class="btn btn-primary mb-2" type="submit" name="btnAbbrechen" id="btnAbbrechen"><i class="fas fa-window-close"></i>&nbsp;Abbrechen</button>

                    </div>
                </div>

            </form>

        </div>
    </div>
