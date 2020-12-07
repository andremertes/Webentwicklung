<?php

// Seite: reiter.php

$reiter = array(
    0 => array(
        'id' => '01',
        'name' => 'Offen',
        'beschreibung' => 'Dinge, die erledigt werden m&uuml;ssen',
    ),
    1 => array(
        'id' => '02',
        'name' => 'Erledigt',
        'beschreibung' => 'Dinge, die erledigt sind',
    ),
    2 => array(
        'id' => '03',
        'name' => 'Verschoben',
        'beschreibung' => 'Dinge, die sp&auml;ter erledigt werden',
    ),
);

foreach ($reiter as $gruppe){

    echo '<tr>';
    //echo '<th>'.($gruppe['id'].'<br/>').'</th>';
    echo '<th>'.($gruppe['name'].'<br/>').'</th>';
    echo '<td>'.($gruppe['beschreibung'].'<br/>').'</td>';
    echo '<td class="text-right">
            <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
            <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
          </td>';
    echo '</tr>';

}

?>
