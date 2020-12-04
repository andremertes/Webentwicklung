<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="UTF-8" />
    <title>Personen</title>
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
        <h1>Aufgabenplaner: Personen</h1>
    </div>
    <div class="row">
        <div id="sidebar" class="col-lg-2">
            <ul class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action">Login</a>
                <a href="projects.php" class="list-group-item list-group-item-action">Projekte</a>
                <a href="this.php" class="list-group-item list-group-item-action">Aktuelles Projekt</a>
                <ul>
                    <a href="overview.php" class="list-group-item list-group-item-action">Reiter</a>
                    <a href="tasks.php" class="list-group-item list-group-item-action">Aufgaben</a>
                    <a href="members.php" class="list-group-item list-group-item-action active">Mitglieder</a>
                </ul>
            </ul>
        </div>
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
                            <tr>
                                <th scope="row">A.M.</th>
                                <td>me@andremertes.de</td>
                                <td>
                                    <div class="custom-control">
                                        <select class="custom-select" id="ProjectU1">
                                            <option value="1">Tolles Projekt</option>
                                            <option value="2">Bl&ouml;des Projekt</option>
                                            <option selected>Geheimes Projekt</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                    <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">John Doe</th>
                                <td>jd@andremertes.de</td>
                                <td>
                                    <div class="custom-control">
                                        <select class="custom-select" id="ProjectU2">
                                            <option selected>Tolles Projekt</option>
                                            <option value="2">Bl&ouml;des Projekt</option>
                                            <option value="3">Geheimes Projekt</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                    <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
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
