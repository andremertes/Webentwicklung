
            <!-- Inhalt -->
            <div id="hauptkomponente" class="col-md">
                <div class="row">
                    <div class="col-lg">

                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Aufgabenbezeichnung</th>
                                <th scope="col">Beschreibung der Aufgabe</th>
                                <th scope="col">Reiter</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($aufgabenliste as $aufgabe): ?>
                                <tr>
                                    <td><?= $aufgabe['name'] ?></td>
                                    <td><?= $aufgabe['beschreibung'] ?></td>
                                    <td><?= $aufgabe['reiterID'] ?></td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>

                        <br />

                        <form>
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
