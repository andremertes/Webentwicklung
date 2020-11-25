<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="UTF-8" />
    <title>Aktuelles Projekt</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.0/dist/css/bootstrap.min.css" type="text/css" />
    <script src="https://unpkg.com/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css" />
    <script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.svg" />
</head>
<body>
<div class="container container-fluid">
    <div class="jumbotron text-center">
        <h1>Aufgabenplaner: ToDos (Aktuelles Projekt)</h1>
    </div>
    <div class="row">
        <div id="sidebar" class="col-lg-2">
            <ul class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action">Login</a>
                <a href="projects.php" class="list-group-item list-group-item-action">Projekte</a>
                <a href="this.php" class="list-group-item list-group-item-action active">Aktuelles Projekt</a>
                <ul>
                    <a href="overview.php" class="list-group-item list-group-item-action">Reiter</a>
                    <a href="tasks.php" class="list-group-item list-group-item-action">Aufgaben</a>
                    <a href="members.php" class="list-group-item list-group-item-action">Mitglieder</a>
                </ul>
            </ul>
        </div>
        <div id="hauptkomponente" class="col-md">
            <div class="row">
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
            </div>
        </div>
    </div>
</div>
</body>
</html>
