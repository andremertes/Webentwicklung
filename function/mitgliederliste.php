<?php

// Seite: personen.php

$persons = array(
    0 => array(
        'id' => '01',
        'name' => 'Andre Mertes',
        'email' => 's4aemert@uni-trier.de',
        'projektID' => '1',
    ),
    1 => array(
        'id' => '02',
        'name' => 'John Doe',
        'email' => 'john@doe.com',
        'projektID' => '1',
    ),
);

foreach ($persons as $person){

    echo '<tr>';
    //echo '<th>'.($person['id'].'<br/>').'</th>';
    echo '<th>'.($person['name'].'<br/>').'</th>';
    echo '<td>'.($person['email'].'<br/>').'</td>';
    echo '<td>'.($person['projektID'].'<br/>').'</td>';
    echo '<td class="text-right">
            <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
            <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
          </td>';
    echo '</tr>';

}

?>
