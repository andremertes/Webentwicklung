
            <!-- Inhalt -->
        <div id="hauptkomponente" class="col-md">
            <div class="row">
                <div class="col-lg">
                <form action="<?= base_url('Reiter/reiter_index') ?>" method="post">



                    <div class="card bg-light mt-4">
                        <div class="card-body">
                            <table id="grid" class="table table-responsive table-bordered table-striped table-hover d-table"
                                   data-show-columns="true"
                                   data-show-toggle="true"
                                   data-toggle="table"
                                   data-sort-stable="true"
                                   data-mobile-responsive="true"
                                   data-check-on-init="true"
                                   data-search="true"
                                   data-toolbar="#toolbar">
                                <thead align="left">
                                <tr>
                                    <th data-sortable="true">Reitername</th>
                                    <th data-sortable="false">Beschreibung</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($reiterliste as $reiter): ?>
                                    <tr>
                                        <td><?= $reiter['name'] ?></td>
                                        <td><?= $reiter['beschreibung'] ?></td>
                                        <td class="text-right">
                                            <button type="submit" name="btnBearbeiten" id="btnBearbeiten" class="btn btn-link" value="<?= $reiter['id'] ?>"><i class="fas fa-edit"></i></button>
                                            <button type="submit" name="btnLoeschen" id="btnLoeschen" class="btn btn-link" value="<?= $reiter['id'] ?>"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                <?php if(isset($warning)){if($warning = 1){

                                    echo'
                        
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            L&ouml;schen <strong>nicht m&ouml;glich</strong>. Der Reiter hat noch <strong>unerledigte Aufgaben!</strong>
                                            <button type="submit" class="close" data-dismiss="alert" aria-label="Close" name="alertclose" id="alertclose">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                        
                                    ';

                                }} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <br />

                    <p>
                        <h3>Bearbeiten/Erstellen</h3>

                        <div class="form-group">
                            <label for="reitername">Reitername</label>
                            <input type="hidden" id="ReiterID" name="ReiterID" value="<?= isset($reiterwahl['id']) ? $reiterwahl['id'] : ''; ?>">
                            <input type="text" class="form-control" id="reitername" name="reitername" placeholder="Wie soll der Reiter hei&szlig;en?" value="<?php if(isset($reiterwahl['name'])){echo $reiterwahl['name'];} ?>">
                        </div>
                        <div class="form-group">
                            <label for="reiterbeschreibung">Beschreibung</label>
                            <textarea rows="3" type="text" class="form-control" id="reiterbeschreibung" name="reiterbeschreibung" placeholder="Dieser Reiter hat nichts mit einem Pferd zu tun..."><?php if(isset($reiterwahl['beschreibung'])){echo $reiterwahl['beschreibung'];} ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-save"></i>&nbsp;Speichern</button>
                        <button class="btn btn-info mb-2" type="submit" name="btnAbbrechen" id="btnAbbrechen"><i class="fas fa-window-close"></i>&nbsp;Reset</button>
                    </p>
                </form>

                </div>
            </div>
        </div>