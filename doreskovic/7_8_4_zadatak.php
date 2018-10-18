<?php

/*
 * Napisati funkciju koja prima varijabilni broj parametara koji su
 * kombinirani brojevi i stringovi. Za svaki parametar ispiši kojeg je tipa.
 */
function param()
{
    $parametars = func_get_args();
    foreach ($parametars as $param) {
        if (is_int($param)) {
            echo $param.' '.'je broj.</br>';
        } else {
            echo $param.' '.'je string.</br>';
        }
    }
}
echo param('Ana', 'Vesna', 34, 35);
