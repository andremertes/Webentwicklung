<!DOCTYPE html>

<?php $name="registrieren"; ?>

<html lang="de">
<head>

    <meta charset="UTF-8" />

    <title>Registrieren</title>

    <?php include ("elements/head.php") ?>

</head>
<body>

    <div class="container container-fluid">

        <!-- Header -->
        <?php include ("elements/jumbo.php") ?>

        <div class="row">

            <div class="col-md-3"></div>
            <div id="hauptkomponente" class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="InputEmail1">E-Mail Adresse</label>
                        <input type="email" placeholder="E-Mail-Adresse" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Passwort</label>
                        <input type="password" placeholder="Passwort" class="form-control" id="InputPassword1">
                        <small id="emailHelp" class="form-text text-muted">Sichere Passw&ouml;rter haben mindestens 8 Zeichen, Groß- und Kleinschreibung, Zahlen und Sonderzeichen. Bitte wählen Sie ein nicht leicht zu erratendes Passwort!</small>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Passwort wiederholen" class="form-control" id="InputPassword2">
                    </div>
                    <label>Wohnort</label>
                    <div class="form-row form-group">
                        <div class="col-7">
                            <input type="text" class="form-control" placeholder="Stadt">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Land">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="PLZ">
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check2">
                        <label class="form-check-label" for="Check2"><a href="#">AGB</a> und <a href="#">Datenschutzerkl&auml;rung</a> zustimmen *</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrieren</button>
                </form>
                <br /><p>Hier geht es <a href="index.php">zur&uuml;ck zum Login</a>.</p>
            </div>
        </div>
    </div>
</body>
</html>
