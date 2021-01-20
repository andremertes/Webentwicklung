
            <!-- Inhalt -->
            <div id="hauptkomponente" class="col-md">

                <div class="row">

                    <?php foreach($reiterliste as $reiter): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr> <th scope="col"><?=$reiter['name']?></th> </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($aufgabenliste as $aufgabe){if($aufgabe['reiterID'] == $reiter['id']){ ?>
                                            <tr><td><?=$aufgabe['bezeichnung']?></td></tr>
                                        <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>

