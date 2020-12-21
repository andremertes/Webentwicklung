<div class="row">
    <div class="col-md-3"></div>
    <div id="hauptkomponente" class="col-md-6">
        <div class="card bg-light mt-4">
            <legend class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="h5">Datensatz <?= isset($_POST['btnLoeschen']) ? ' löschen' : ' bearbeiten oder neu erstellen' ?></div>
                </div>
            </legend>
            <div class="card-body">

                <form action="<?= base_url('Personen/index_edit') ?>" method="post">

                    <div class="form-group-row">
                        <label for="username" class="col-sm-2 col-form-label">Benutzername</label>
                        <div class="col-sm-10">
                            <input type="hidden" id="PersonenID" value="<?= isset($personen['id']) ? $personen['id'] : ''; ?>">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Benutzername" value="<?= $personen['username']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>>
                        </div>
                    </div>

                    <div class="form-group-row">
                        <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail-Adresse" value="<?= $personen['email']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>">
                        </div>
                    </div>

                    <div class="form-group-row">
                        <label for="stadt" class="col-sm-2 col-form-label">Wohnort</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stadt" name="stadt" placeholder="Stadt" value="<?= $personen['stadt']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>">
                        </div>
                    </div>

                    <div class="form-group-row">
                        <label for="postleitzahl" class="col-sm-2 col-form-label">Postleitzahl</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postleitzahl" name="postleitzahl" placeholder="Postleitzahl" value="<?= $personen['postleitzahl']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>">
                        </div>
                    </div>

                    <div class="form-group-row">
                        <label for="land" class="col-sm-2 col-form-label">Land</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="land" name="land" placeholder="Land" value="<?= $personen['land']; ?>" <?= isset($_POST['btnLoeschen']) ? 'disabled' : '' ?>">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">

                            <? if (isset($_POST['btnBearbeiten'])) : ?>
                                <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern">Speichern</button>
                            <? endif ?>

                            <? if (isset($_POST['btnBearbeiten'])) : ?>
                                <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern">Speichern</button>
                            <? endif ?>

                            <? if (isset($_POST['btnBearbeiten'])) : ?>
                                <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern">Speichern</button>
                            <? endif ?>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>