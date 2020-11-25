<!DOCTYPE html>

<html lang="de">
    <head>
        <meta charset="UTF-8" />
        <title>Aufgaben</title>
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
            <h1>Aufgabenplaner: Aufgaben</h1>
        </div>
        <div class="row">
            <div id="sidebar" class="col-lg-2">
                <ul class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action">Login</a>
                    <a href="projects.php" class="list-group-item list-group-item-action">Projekte</a>
                    <a href="this.php" class="list-group-item list-group-item-action">Aktuelles Projekt</a>
                    <ul>
                        <a href="overview.php" class="list-group-item list-group-item-action">Reiter</a>
                        <a href="tasks.php" class="list-group-item list-group-item-action active">Aufgaben</a>
                        <a href="members.php" class="list-group-item list-group-item-action">Mitglieder</a>
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
                                    <th scope="col">Aufgabenbezeichnung</th>
                                    <th scope="col">Beschreibung der Aufgabe</th>
                                    <th scope="col">Reiter</th>
                                    <th scope="col">Zust&auml;ndig</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td scope="row">HTML-Datei erstellen</td>
                                    <td>HTML-Datei erstellen</td>
                                    <td>Offen</td>
                                    <td>John Doe</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">CSS-Datei erstellen</td>
                                    <td>CSS-Datei erstellen</td>
                                    <td>Offen</td>
                                    <td>John Doe</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Schlafen gehen</td>
                                    <td>Schlafen gehen</td>
                                    <td>Verschoben</td>
                                    <td>A.M.</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Kaffee trinken</td>
                                    <td>Kaffee trinken</td>
                                    <td>Erledigt</td>
                                    <td>A.M.</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">F&uuml;r die Uni lernen</td>
                                    <td>F&uuml;r die Uni lernen</td>
                                    <td>Verschoben</td>
                                    <td>John Doe</td>
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
                                <label for="NeuName">Aufgabenbezeichnung</label>
                                <input type="text" id="NeuName" class="form-control" placeholder="Aufgabe"><br />
                                <label for="NeuDesc">Beschreibung der Aufgabe</label>
                                <textarea id="NeuDesc" class="form-control my-1 mr-sm-2" placeholder="Beschreibung" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="StartDate">Erstellungsdatum</label>
                                <input type="text" class="form-control" id="StartDate" placeholder="MM/DD/YYYY">
                            </div>
                            <div class="form-group">
                                <label for="EndDate">f&auml;llig bis</label>
                                <input type="text" class="form-control" id="EndDate" placeholder="MM/DD/YYYY">
                            </div>

                            <label class="my-1 mr-2" for="Reiter">Zugeh&ouml;riger Reiter</label>
                            <select class="custom-select my-1 mb-3 mr-sm-2" id="Reiter">
                                <option selected>Offen</option>
                                <option value="1">Erledigt</option>
                                <option value="2">Verschoben</option>
                            </select><br />

                            <label class="my-1 mr-2" for="Project">Zust&auml;ndig</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="Per1" name="radio-person" required>
                                <label class="custom-control-label" for="Per1">A.M.</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" class="custom-control-input" id="Per2" name="radio-person" required>
                                <label class="custom-control-label" for="Per2">John Doe</label>
                            </div>

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
