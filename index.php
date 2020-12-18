<!DOCTYPE html>

<?php $name="login"; ?>

<html lang="de">
<head>

    <meta charset="UTF-8" />

    <title>Login</title>

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
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Login Speichern</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                </form>

                <br /><p>Noch kein Account? <a href="registrieren.php">Hier registrieren</a>!</p>
                <br /><p>Da der Login technisch noch nicht realisiert wurde, <a href="projekte.php">hier &uuml;berspringen</a>.</p>

            </div>

        </div>

    </div>

</body>
</html>
