<?php

// Seite: aktuellesProjekt.php

$todos = array(
    0 => array(
        'header' => 'Offen',
        'aufgaben' => array(
            0 => 'HTML-Datei erstellen',
            1 => 'CSS-Datei erstellen',
        ),
    ),
    1 => array(
        'header' => 'Erledigt',
        'aufgaben' => array(
            0 => 'Kaffee trinken',
        ),
    ),
    2 => array(
        'header' => 'Verschoben',
        'aufgaben' => array(
            0 => 'Schlafen gehen',
            1 => 'F&uuml;r die Uni lernen',
        ),
    ),
);

$i = count($todos);
$j = 0;

for ( $j ; $j < $i ; $j++ ){
    echo '<div class="col-lg">
            <div class="card">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">'.($todos[$j]['header']).'</th>
                        </tr>
                    </thead>
                    <tbody>';
    $k = count($todos[$j]['aufgaben']);
    $l = 0;
    for ( $l ; $l < $k ; $l++){
        echo '<tr><td>'.($todos[$j]['aufgaben'][$l]).'</td></tr>';
    }
    echo '</tbody></table></div></div>';
};

/*
foreach ($todos as $tabelle) {
    $elementsafter = array_slice($tabelle, $offset, null, true);
    echo '<div class="col-lg">
            <div class="card">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">'.($tabelle['header']).'</th>
                        </tr>
                    </thead>
                <tbody>';
                    echo '<tr><td>'.($tabelle['aufgaben']).'</td></tr>';
                echo '</tbody></table></div></div>';
}
*/

?>
