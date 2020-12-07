<!DOCTYPE html>

<?php $name="aktuellesProjekt"; ?>

<html lang="de">
<head>

    <meta charset="UTF-8" />

    <title>Aktuelles Projekt</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.0/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" type="text/css" />

    <link rel="stylesheet" href="style.css" type="text/css" />

    <link rel="shortcut icon" type="image/x-icon" href="img/icon.svg" />

    <script src="https://unpkg.com/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <div class="container container-fluid">

        <!-- Header -->
        <?php include ("elements/header.php") ?>

        <div class="row">

            <!-- Navigation -->
            <?php include ("elements/navigation.php") ?>

            <!-- Inhalt -->
            <div id="hauptkomponente" class="col-md">

                <div class="row">

                    <?php include ("function/todoliste.php"); ?>

                    <!--

                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header">Offen</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">HTML-Datei erstellen</li>
                                <li class="list-group-item">CSS-Datei erstellen</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header">Erledigt</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Kaffee trinken</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header">Verschoben</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Schlafen gehen</li>
                                <li class="list-group-item">F&uuml;r die Uni lernen</li>
                            </ul>
                        </div>
                    </div>

                    -->

                </div>

            </div>

        </div>

    </div>

</body>
</html>
