
            <!-- Inhalt -->
        <div id="hauptkomponente" class="col-md">

            <div class="row">
                <div class="col-lg">
                    <form action="<?= base_url('Projekte/index_projekte') ?>" method="post">
                        <div class="form-group">
                            <label class="my-1 mr-2" for="Project"><h3>Projekt w&auml;hlen</h3></label>
                            <select class="custom-select my-1 mr-sm-2 form-control" id="projektID" name="projektID">
                                <option value="0" disabled <?php if(isset($_SESSION['aktivesprojekt']) && ($_SESSION['aktivesprojekt'] != '0')){echo 'hidden';} else{echo 'selected';} ?> >- ausw&auml;hlen -</option>

                                <?php foreach ($projekteliste as $projekt): ?>
                                <option value="<?= $projekt['id'] ?>" <?php if(isset($_SESSION['aktivesprojekt'])){ set_select('projektID', $_SESSION['aktivesprojekt']); } ?>><?= $projekt['name'] ?></option>             <!-- ANZEIGEFEHLER!!! Es wird nicht das aktive Projekt angezeigt. Fehlersuche!!! -->
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <pre>
                            <?php //var_dump($projekteliste); ?>
                        </pre>

                        <button type="submit" name="btnAuswaehlen" id="btnAuswaehlen" class="btn btn-primary mb-2 mr-2" value=""><i class="fas fa-check"></i>&nbsp;Ausw&auml;hlen</button>
                        <button type="submit" name="btnBearbeiten" id="btnBearbeiten" class="btn btn-primary mb-2 mr-2" value=""><i class="fas fa-edit"></i>&nbsp;Bearbeiten</button>
                        <button type="submit" name="btnLoeschen" id="btnLoeschen" class="btn btn-danger mb-2 mr-2" value=""><i class="fas fa-trash-alt"></i>&nbsp;L&ouml;schen</button>

                        </p><br />

                        <h3>Projekt Bearbeiten/erstellen</h3>
                        <div class="form-group">
                            <label for="projektname">Projektname</label>
                            <input type="hidden" id="ProjektID" name="ProjektID" value="<?= isset($projekte['id']) ? $projekte['id'] : ''; ?>">
                            <input type="text" class="form-control" id="projektname" name="projektname" placeholder="Wie soll das Projekt hei&szlig;en?" value="<?php if(isset($projekte['name'])){echo $projekte['name'];} ?>">
                        </div>
                        <div class="form-group">
                            <label for="projektbeschreibung">Projektbeschreibung</label>
                            <textarea rows="3" type="text" class="form-control" id="projektbeschreibung" name="projektbeschreibung" placeholder="Beschreibung"><?php if(isset($projekte['beschreibung'])){echo $projekte['beschreibung'];} ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-save"></i>&nbsp;Speichern</button>
                        <button class="btn btn-info mb-2" type="submit" name="btnAbbrechen" id="btnAbbrechen"><i class="fas fa-window-close"></i>&nbsp;Reset</button>

                        </p>
                    </form>
                </div>
            </div>
        </div>

