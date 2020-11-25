<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="UTF-8" />
    <title>Projekte</title>
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
        <h1>Aufgabenplaner: Projekte</h1>
    </div>
    <div class="row">
        <div id="sidebar" class="col-lg-2">
            <ul class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action">Login</a>
                <a href="projects.php" class="list-group-item list-group-item-action active">Projekte</a>
                <a href="this.php" class="list-group-item list-group-item-action">Aktuelles Projekt</a>
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
                    <form class="form-group">
                        <p>
                            <label class="my-1 mr-2" for="Project"><h3>Projekt w&auml;hlen</h3></label>
                            <select class="custom-select my-1 mr-sm-2" id="Project">
                                <option selected>- ausw&auml;hlen -</option>
                                <option value="1">Tolles Projekt</option>
                                <option value="2">Bl&ouml;des Projekt</option>
                                <option value="3">Geheimes Projekt</option>
                            </select>
                            <button type="submit" class="btn btn-primary my-1">Ausw&auml;hlen</button> &nbsp;
                            <button type="submit" class="btn btn-primary my-1">Bearbeiten</button> &nbsp;
                            <button type="submit" class="btn btn-danger my-1">L&ouml;schen</button>
                        </p><br />
                        <p>
                        <h3>Projekt Bearbeiten/erstellen</h3>
                        <div class="form-group">
                            <label for="NeuName">Projektname</label>
                            <input type="text" id="NeuName" class="form-control" placeholder="Projekt"><br />
                            <label for="NeuDesc">Projektbeschreibung</label>
                            <textarea id="NeuDesc" class="form-control my-1 mr-sm-2" placeholder="Beschreibung" rows="3"></textarea>
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
