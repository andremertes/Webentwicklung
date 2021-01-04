
    <div id="hauptkomponente" class="col-md">
        <div class="card bg-light mt-4">
            <legend class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="h5 mt-3"><?= isset($_POST['btnNeu']) ? 'Neuen' : '' ?>&nbsp;Datensatz&nbsp;<?php if (isset($_POST['btnLoeschen'])) {echo 'Löschen';} elseif (isset($_POST['btnNeu'])) {echo 'erstellen';} else {echo 'Bearbeiten';} ?></div>
                </div>
            </legend>
            <div class="card-body">

                <form action="<?= base_url('Personen/index_personen') ?>" method="post">

                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Benutzername</label>
                        <div class="col-sm-10">
                            <input type="hidden" id="PersonenID" name="PersonenID" value="<?= isset($personen['id']) ? $personen['id'] : ''; ?>">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Klaus" value="<?= $personen['username']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="bertigerbertjer@email.com" value="<?= $personen['email']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                        </div>
                    </div>

                    <?php
                        if (isset($personen['id'])) {
                            if ($sessionuserid == $personen['id'] || $_POST['btnNeu'] == TRUE) {
                                echo '<div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Passwort</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="password" name="password" placeholder="123istKeinSicheresPasswort!">
                                        </div>
                                      </div>';
                            }
                        } else {}
                    ?>

                    <div class="form-group row">
                        <label for="stadt" class="col-sm-2 col-form-label">Wohnort</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stadt" name="stadt" placeholder="Wo wohnt Klaus?" value="<?= $personen['stadt']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="postleitzahl" class="col-sm-2 col-form-label">Postleitzahl</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postleitzahl" name="postleitzahl" placeholder="50667" value="<?= $personen['postleitzahl']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="land" class="col-sm-2 col-form-label">Land</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="land" name="land" placeholder="Phantasialand" value="<?= $personen['land']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="land" class="col-sm-2 col-form-label">Projekt</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="project" name="project" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                                <option selected>- ausw&auml;hlen -</option>
                                <option value="1">Tolles Projekt</option>
                                <option value="2">Bl&ouml;des Projekt</option>
                                <option value="3">Geheimes Projekt</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-8">

                            <? if (isset($_POST['btnBearbeiten'])) : ?>
                                <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-save"></i>&nbsp;Speichern</button>
                            <? endif ?>

                            <? if (isset($_POST['btnNeu'])) : ?>
                                <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-save"></i>&nbsp;Speichern</button>
                            <? endif ?>

                            <? if (isset($_POST['btnLoeschen'])) : ?>
                                <button type="submit" class="btn btn-danger mb-2 mr-2" name="btnBestaetigen" id="btnBestaetigen"><i class="fas fa-trash"></i>&nbsp;L&ouml;schen</button>
                            <? endif ?>

                            <button class="btn btn-primary mb-2" type="submit" name="btnAbbrechen" id="btnAbbrechen"><i class="fas fa-window-close"></i>&nbsp;Abbrechen</button>

                        </div>
                    </div>

                </form>

            </div>
        </div>
