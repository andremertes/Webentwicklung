<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="UTF-8" />
    <title>Registrieren</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.0/dist/css/bootstrap.min.css" type="text/css" />
    <script src="https://unpkg.com/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css" />
    <script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="img/fav.png" />
</head>
<body>
<div class="container container-fluid">
    <div class="jumbotron text-center">
        <h1>Aufgabenplaner: ToDos (Aktuelles Projekt)</h1>
    </div>
    <div class="row">
        <div id="sidebar" class="col-lg-2">
            <ul class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Login</a>
                <a href="#" class="list-group-item list-group-item-action">Register</a>
                <a href="#" class="list-group-item list-group-item-action">Aktuelles Projekt</a>
                <ul>
                    <a href="#" class="list-group-item list-group-item-action">Reiter</a>
                    <a href="#" class="list-group-item list-group-item-action active">Aufgaben</a>
                    <a href="#" class="list-group-item list-group-item-action">Mitglieder</a>
                </ul>
            </ul>


            <!--
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Register</a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="nav-item" style="text-indent: 1em">
                    <a class="nav-link disabled" href="#">Reiter</a>
                </li>
                <li class="nav-item" style="text-indent: 1em">
                    <a class="nav-link disabled" href="#">Aufgaben</a>
                </li>
                <li class="nav-item" style="text-indent: 1em">
                    <a class="nav-link disabled" href="#">Mitglieder</a>
                </li>
            </ul>
            -->

        </div>
        <div id="hauptkomponente" class="col-md">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-header">Offen</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <div class="card-header">Erledigt</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <div class="card-header">Verschoben</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
