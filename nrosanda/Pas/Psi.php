<?php

require_once './Doberman.php';
require_once './Dalmatiner.php';


$Doberman = new Doberman();
$Dalmatiner = new Dalmatiner();


echo '<table border=1>'
 . '<tr>'
 . '<td>'
 . 'Doberman'
 . '</td>'
 . '<td>'
 . 'Dalmatiner'
 . '</td>'
 . '</tr>'
 . '<tr>'
 . '<td>'
 . $Doberman->print()
 . '</td>'
 . '<td>'
 . $Dalmatiner->print()
 . '</td>'
 . '</tr>'
 . '</tr>'
 . '</table>';
