
            <!-- Inhalt -->
            <div id="hauptkomponente" class="col-md">

                <div class="row">

                    <?php

                    foreach ($reiterliste as $reiter)
                    {

                        echo '<div class="col-md-4 mb-4">
                                <div class="card">
                                    <table class="table">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">'.($reiter['name']).'</th>
                                        </tr>
                                        </thead>
                                        <tbody>';
                                            foreach ($aufgabenliste as $aufgabe)
                                            {
                                                if ($aufgabe['reiterID'] == $reiter['id'])
                                                {
                                                    echo '<tr><td>'.($aufgabe['name']).'</td></tr>';
                                                }
                                            }

                                        echo '</tbody></table></div></div>';
                    }

                    ?>

                </div>

            </div>

