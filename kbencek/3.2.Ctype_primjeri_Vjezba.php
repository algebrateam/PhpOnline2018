<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 'test1';

$b = 'test2';

$c = 'test3';

$d = 'test4';

$e = 'test5';

$f = 'test1';

test($a);
test($b);
test($c);
test($d);
test($e);
test($f);

function test($in)
{
    if (ctype_alnum($in)) {
        echo 'string '.$in.' se sastoji od alfanumeričkih znakova<br>';
    } else {
        echo 'string '.$in.' ima specijalne znakove<br>';
    }
    if (ctype_alpha($in)) {
        echo '<b>string </b>'.$in.' se sastoji od alfa znakova<br>';
    } else {
        echo '<b>string </b>'.$in.' ima specijalne non-alfa znakove<br>';
    }
    if (ctype_digit($in)) {
        echo '<i>string </i>'.$in.' se sastoji od ctype_digit znakova<br>';
    } else {
        echo '<i>string </i>'.$in.' ima specijalne non-ctype_digit znakove<br>';
    }
    if (is_numeric($in)) {
        echo '<u>string </u>'.$in.' se sastoji od is_numeric znakova<br>';
    } else {
        echo '<u>string </u>'.$in.' ima specijalne non-is_numeric znakove<br>';
    }
    if (is_string($in)) {
        echo '<b><u>string </u></b>'.$in.' se sastoji od is_string znakova<br>';
    } else {
        echo '<b><u>string </u></b>'.$in.' ima specijalne non-is_string znakove<br>';
    }

    echo '<hr/>';
}
