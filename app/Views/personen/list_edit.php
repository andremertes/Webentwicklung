<div class="row">
    <div class="col-md-3"></div>
    <div id="hauptkomponente" class="col-md-6">

        <form action="<?= base_url('Personen/index_edit') ?>" method="post">
        <div class="card bg-light mt-4">
            <legend class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="h1"><?= $title ?></div>
                    <div class="h1"><a href="<?= base_url() ?>/login/logout">Logout</a></div>
                </div>
            </legend>
            <div class="card-body">
                <div id="toolbar">
                    <a href="#"><button class="btn btn-primary mb-2" type="button" value="button">Toolbar</button></a>
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
                        <th>Passwort</th>
                        <th data-sortable="true">Stadt</th>
                        <th data-sortable="true">PLZ</th>
                        <th data-sortable="true">Land</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($person as $item): ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['username'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td><?= $item['password'] ?></td>
                            <td><?= $item['stadt'] ?></td>
                            <td><?= $item['postleitzahl'] ?></td>
                            <td><?= $item['land'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <button type="submit" name="btnBearbeiten" id="btnBearbeiten" value="<?= $item['id'] ?>" class="btn">Bearbeiten</button>
                                    <button type="submit" name="btnLoeschen" id="btnLoeschen" value="<?= $item['id'] ?>" class="btn">L&ouml;schen</button>
                                </div>
                            </td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        </form>

    </div>
    <div class="col-md-3"></div>
</div>