
            <!-- Inhalt -->
        <div id="hauptkomponente" class="col-md">
            <div class="row">
                <div class="col-lg">

                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Beschreibung</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($reiterliste as $reiter): ?>
                        <tr>
                            <td><?= $reiter['name'] ?></td>
                            <td><?= $reiter['beschreibung'] ?></td>
                            <td class="text-right">
                                <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>

                    <form>

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