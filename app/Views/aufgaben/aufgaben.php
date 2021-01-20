
            <!-- Inhalt -->
            <div id="hauptkomponente" class="col-md">
                <div class="row">
                    <div class="col-lg">

                        <form action="<?= base_url('Aufgaben/aufgaben_index') ?>" method="post">

                        <div class="card bg-light mt-4">
                        <div class="card-body">
                            <div id="toolbar">
                                <a href="#"><button class="btn btn-primary mb-2" type="submit" value="button" name="btnNeu" id="btnNeu" value="Neu"><i class="fas fa-plus-square"></i>&nbsp;Neu</button></a>
                            </div>
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
                                <th data-sortable="true">Aufgabenbezeichnung</th>
                                <th data-sortable="false">Beschreibung der Aufgabe</th>
                                <th data-sortable="true">F&auml;llig</th>
                                <th data-sortable="true">Zust&auml;ndig</th>
                                <th data-sortable="true">Reiter</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($aufgabenliste as $aufgabe): ?>
                                <tr>
                                    <td><?= $aufgabe['bezeichnung'] ?></td>
                                    <td><?= $aufgabe['beschreibung'] ?></td>
                                    <td><?= $aufgabe['faelligkeitsdatum'] ?></td>
                                    <td><?= $aufgabe['username'] ?></td>
                                    <td><?= $aufgabe['name'] ?></td>
                                    <td class="text-right">
                                        <button type="submit" name="btnBearbeiten" id="btnBearbeiten" class="btn btn-link" value="<?= $aufgabe['id'] ?>"><i class="fas fa-edit"></i></button>
                                        <button type="submit" name="btnLoeschen" id="btnLoeschen" class="btn btn-link" value="<?= $aufgabe['id'] ?>"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                        </div>
                        </div>

                        <br />

                        </form>

                    </div>
                </div>
            </div>
