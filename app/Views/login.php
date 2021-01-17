
<div class="row">
    <div class="col-md-3"></div>
    <div id="hauptkomponente" class="col-md-6">

        <?= form_open('login/index', array('role' => 'form')) ?>
            <legend class="card-header">Login</legend>
            <div class="card-body">
                <div class="form-group">
                    <label for="username">Benutzername</label>
                    <input type="text" class="form-control <?php if(isset($error['username'])){ echo 'is-invalid';} ?>" id="username" name="username" />
                    <div class="invalid-feedback">
                        <?= (isset($error['username']))?$error['username']:'' ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Passwort</label>
                    <input type="password" class="form-control <?php if(isset($error['password'])){ echo 'is-invalid';} ?>" id="password" name="password" />
                    <div class="invalid-feedback">
                        <?= (isset($error['password']))?$error['password']:'' ?>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static  <?php if(isset($error['checkDatenschutz'])){ echo 'is-invalid';} ?>" type="checkbox" id="checkDatenschutz" name="checkDatenschutz" value="true" aria-label="Datenschutzbedingungen akzeptieren">
                    <label for="checkDatenschutz">Datenschutzbedingungen akzeptieren</label>
                    <div class="invalid-feedback">
                        <?= (isset($error['checkDatenschutz']))?$error['checkDatenschutz']:'' ?>
                    </div>
                </div>
                <br />
                <button id="btnsubmit" type="submit" class="btn btn-primary">Einloggen</button>
            </div>
        </form>

        <br /><p>Noch kein Account? <a href="<?= base_url() . '/registrieren/registrieren' ?>">Jetzt einen Account anlegen!</a></p>
        <br /><p>F&uuml;r Blatt 5 den Login <a href="<?= base_url() . '/projekte/projekte' ?>">hier</a> &uuml;berspringen.</p>

    </div>
    <div class="col-md-3"></div>
</div>

