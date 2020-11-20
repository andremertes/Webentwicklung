<!DOCTYPE html>

<html lang="de">
    <head>
        <meta charset="UTF-8" />
        <title>Andre Mertes</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.0/dist/css/bootstrap.min.css" type="text/css" />
        <script src="https://unpkg.com/jquery@3.5.1/dist/jquery.min.js"></script>
        <script src="https://unpkg.com/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css" />
        <script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
    <div class="container">
        <div class="container-fluid">
            <div class="jumbotron text-center">
                <h1>Aufgabenplaner: ToDos (Aktuelles Projekt)</h1>
            </div>
            <div class="row">
                <div id="sidebar" class="col-md-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Register</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Aktuelle Projekte</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Reiter</a>
                                <a class="dropdown-item active" href="#">Aufgaben</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Mitglieder</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="hauptkomponente" class="col-md row">
                    <div class="box card col-md-3">
                        <div class="card-header">
                            Offen
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                        </ul>
                    </div>
                    <div class="box card col-md-3">
                        <div class="card-header">
                            Erledigt
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                        </ul>
                    </div>
                    <div class="box card col-md-3">
                        <div class="card-header">
                            Verschoben
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
