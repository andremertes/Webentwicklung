<!DOCTYPE html>

<?php $name="personen"; ?>

<html lang="de">
<head>

    <meta charset="UTF-8" />

    <title>Personen</title>

    <?php include ("elements/head.php") ?>

</head>
<body>

    <div class="container container-fluid">

        <!-- Header -->
        <?php include ("elements/jumbo.php") ?>

        <div class="row">

            <!-- Navigation -->
            <?php include ("elements/navigation.php")?>

            <!-- Inhalt -->
            <div id="hauptkomponente" class="col-md">

                <div class="row">
                    <div class="col-lg">

                        <form>
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">In Projekt</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>

                                <!-- Tabelle -->
                                <?php include ("function/mitgliederliste.php")?>

                                </tbody>
                            </table>

                            <br />

                            <p>
                            <h3>Bearbeiten/Erstellen</h3>
                            <div class="form-group">
                                <label for="NeuName">Name</label>
                                <input type="text" id="NeuName" class="form-control" placeholder="Name"><br />
                                <label for="NeuDesc">E-Mail</label>
                                <input type="text" id="NeuMail" class="form-control" placeholder="E-Mail">
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Passwort</label>
                                <input type="password" placeholder="Passwort" class="form-control" id="InputPassword1">
                            </div>
                            <label class="my-1 mr-2" for="Project">Projekt zuweisen</label>
                            <select class="custom-select my-1 mr-sm-2 mb-3" id="Project">
                                <option selected>- ausw&auml;hlen -</option>
                                <option value="1">Tolles Projekt</option>
                                <option value="2">Bl&ouml;des Projekt</option>
                                <option value="3">Geheimes Projekt</option>
                            </select><br />
                            <button type="submit" class="btn btn-primary my-1">Speichern</button> &nbsp;
                            <button type="submit" class="btn btn-info my-1">Reset</button>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
