
            <!-- Inhalt -->
        <div id="hauptkomponente" class="col-md">

            <div class="row">
                <div class="col-lg">
                    <form class="form-group">
                            <label class="my-1 mr-2" for="Project"><h3>Projekt w&auml;hlen</h3></label>
                            <select class="custom-select my-1 mr-sm-2" id="Project">
                                <option selected>- ausw&auml;hlen -</option>

                                <?php foreach ($projekteliste as $projekt): ?>
                                <option value="<?= $projekt['id'] ?>"><?= $projekt['name'] ?></option>
                                <?php endforeach; ?>

                            </select>
                            <button type="submit" class="btn btn-primary my-1">Ausw&auml;hlen</button> &nbsp;
                            <button type="submit" class="btn btn-primary my-1">Bearbeiten</button> &nbsp;
                            <button type="submit" class="btn btn-danger my-1">L&ouml;schen</button>
                        </p><br />

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

