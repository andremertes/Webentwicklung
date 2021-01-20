
<div class="row">
    <div class="col-md-3"></div>
    <div id="hauptkomponente" class="col-md-6">

        <?= form_open('login/login', array('role' => 'form')) ?>
            <legend class="card-header">Login</legend>
            <div class="card-body">
                <div class="form-group">
                    <label for="username">Benutzername</label>
                    <input type="text" class="form-control" id="username" name="username" />
                </div>
                <div class="form-group">
                    <label for="passwort">Passwort</label>
                    <input type="password" class="form-control" id="passwort" name="passwort" />
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="checkDatenschutz" name="checkDatenschutz" value="option1" aria-label="Datenschutzbedingungen akzeptieren">
                    <label for="checkDatenschutz">Datenschutzbedingungen akzeptieren</label>
                </div>
                <button id="btnsubmit" type="submit" class="btn btn-primary">Einloggen</button>
            </div>
        </form>

        <br /><p>Noch kein Account? Kontaktiere bitte Andre Mertes f&uuml;r die Zugangsdaten!</p>

    </div>
    <div class="col-md-3"></div>
</div>

