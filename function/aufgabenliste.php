<?php

// Seite: aufgaben.php

$tasks = array(
    0 => array(
        'id' => '01',
        'name' => 'HTML-Datei erstellen',
        'beschreibung' => 'HTML-Datei erstellen',
        'reiter' => 'Offen',
        'bearbeiter' => 'John Doe',
    ),
    1 => array(
        'id' => '02',
        'name' => 'CSS-Datei erstellen',
        'beschreibung' => 'CSS-Datei erstellen',
        'reiter' => 'Offen',
        'bearbeiter' => 'John Doe',
    ),
    2 => array(
        'id' => '03',
        'name' => 'Schlafen gehen',
        'beschreibung' => 'Schlafen gehen',
        'reiter' => 'Verschoben',
        'bearbeiter' => 'Andre Mertes',
    ),
    3 => array(
        'id' => '04',
        'name' => 'Kaffee trinken',
        'beschreibung' => 'Kaffee trinken',
        'reiter' => 'Erledigt',
        'bearbeiter' => 'Andre Mertes',
    ),
    4 => array(
        'id' => '05',
        'name' => 'Für die Uni lernen',
        'beschreibung' => 'F&uuml;r die Uni lernen',
        'reiter' => 'Verschoben',
        'bearbeiter' => 'John Doe',
    ),
);

foreach ($tasks as $task){

    echo '<tr>';
    //echo '<td>'.($task['id'].'<br/>').'</td>';
    echo '<td>'.($task['name'].'<br/>').'</td>';
    echo '<td>'.($task['beschreibung'].'<br/>').'</td>';
    echo '<td>'.($task['reiter'].'<br/>').'</td>';
    echo '<td>'.($task['bearbeiter'].'<br/>').'</td>';
    echo '<td class="text-right">
            <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
            <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
          </td>';
    echo '</tr>';

}

?>
