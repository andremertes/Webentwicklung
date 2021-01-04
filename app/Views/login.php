
<div class="row">
    <div class="col-md-3"></div>
    <div id="hauptkomponente" class="col-md-6">

        <?= form_open('login/index', array('role' => 'form')) ?>
            <legend class="card-header">Login</legend>
            <div class="card-body">
                <div class="form-group">
                    <label for="username">Benutzername</label>
                    <input type="text" class="form-control" id="username" name="username" />
                </div>
                <div class="form-group">
                    <label for="password">Passwort</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
                <button id="btnsubmit" type="submit" class="btn btn-primary">Einloggen</button>
            </div>
        </form>

        <br /><p>Noch kein Account? <a href="<?php echo $baseURL.'/registrieren'; ?>">Jetzt einen Account anlegen!</a></p>
        <br /><p>F&uuml;r Blatt 5 den Login <a href="<?php echo $baseURL.'/projekte'; ?>">hier</a> &uuml;berspringen.</p>

    </div>
    <div class="col-md-3"></div>
</div>

