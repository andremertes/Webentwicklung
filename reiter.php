<!DOCTYPE html>

<?php $name="reiter"; ?>

<html lang="de">
<head>

    <meta charset="UTF-8" />

    <title>Reiter</title>

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
                            <th scope="col">Beschreibung</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                        <!-- Tabelle -->
                        <?php include ("function/reiterliste.php")?>

                        </tbody>
                    </table>

                    <br />

                    <p>
                        <h3>Bearbeiten/Erstellen</h3>
                        <div class="form-group">
                            <label class="my-1 mr-2" for="Project">Zugewiesenes Projekt</label>
                            <select class="custom-select my-1 mr-sm-2" id="Project">
                                <option selected>- ausw&auml;hlen -</option>
                                <option value="1">Tolles Projekt</option>
                                <option value="2">Bl&ouml;des Projekt</option>
                                <option value="3">Geheimes Projekt</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="NeuName">Bezeichnung des Reiters</label>
                            <input type="text" id="NeuName" class="form-control" placeholder="Reiter"><br />

                            <label for="NeuDesc">Beschreibung</label>
                            <textarea id="NeuDesc" class="form-control my-1 mr-sm-2 mb-3" placeholder="Beschreibung" rows="3"></textarea>

                            <button type="submit" class="btn btn-primary my-1">Speichern</button> &nbsp;
                            <button type="submit" class="btn btn-info my-1">Reset</button>
                        </div>
                    </p>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
