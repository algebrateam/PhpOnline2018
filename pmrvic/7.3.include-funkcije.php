<?php
function ispistablice($b){

    echo '<table border=1>';
    foreach ($b as $boja) {
       echo '<tr>';
         foreach ($boja as $v) {
           echo '<td>'.$v.'</td>';
         }
         echo '</tr>';
    }
    echo '</table>';

}
