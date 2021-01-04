
<!-- Inhalt -->
<div id="hauptkomponente" class="col-md">

    <div class="row">
        <div class="col-lg">

            <form action="<?= base_url('Personen/index_personen') ?>" method="post">
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
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Benutzername</th>
                            <th data-sortable="true">E-Mail</th>
                            <!-- <th>Passwort</th> -->
                            <th data-sortable="true">Stadt</th>
                            <th data-sortable="true">PLZ</th>
                            <th data-sortable="true">Land</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <? foreach ($personen as $item): ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['username'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <!-- <td><?//= $item['password'] ?></td> -->
                                <td><?= $item['stadt'] ?></td>
                                <td><?= $item['postleitzahl'] ?></td>
                                <td><?= $item['land'] ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="submit" name="btnBearbeiten" id="btnBearbeiten" class="btn btn-link" value="<?= $item['id'] ?>"><i class="fas fa-edit"></i></button>
                                        <?php
                                            if ($sessionuserid != $item['id']) {
                                                echo '<button type="submit" name="btnLoeschen" id="btnLoeschen" class="btn btn-link" value="<?= '.$item['id'].' ?>"><i class="fas fa-trash-alt"></i></button>';
                                            }
                                        ?>
                                    </div>
                                </td>
                            </tr>
                        <? endforeach; ?>

                        <?php
                        //echo '<pre>';
                        //var_dump($personen);
                        //echo '</pre>';
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>
