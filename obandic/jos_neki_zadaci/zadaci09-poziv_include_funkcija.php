<?php

include_once './zadaci09-include_funkcija.php';

$ocjene = array('Duje' => array('Hrvatski' => 3, 'Matematika' => 3, 'Engleski jezik' => 4),
    'Andrea' => array('Hrvatski' => 4, 'Matematika' => 3, 'Engleski jezik' => 4),
    'Vita' => array('Hrvatski' => 5, 'Matematika' => 4, 'Engleski jezik' => 5),
    'Šime' => array('Hrvatski' => 5, 'Matematika' => 5, 'Engleski jezik' => 5));

echo '<table border="1" cellpadding="5" >';
echo '<tr>
<th width="100"></th>
<th width="100">Hrvatski</th>
<th width="100">Matematika</th>
<th width="100">Engleski jezik</th>
<th width="100">Prosjek</th>
</tr>';

foreach ($ocjene as $ime => $ucenik) {
    echo '<tr align="center" valign="middle">';
    echo '<th>' . $ime . '</th>';
    foreach ($ucenik as $ocjena) {
        echo '<td>' . $ocjena . '</td>';
    }
    echo '<td>' . prosjek($ucenik) . '</td>';
    echo '</tr>';
}
echo '</table>';