<!DOCTYPE html>

<!-- 
 Z1:
Napraviti formu koja prima :
Broj (input type number)
Ime (input type text)
Datum (input type date)
Prolaz/Pad (padajući izbornik)
Forma sprema podatke u datoteku data.txt

PROČITATI KOMENTARE NA KRAJU
-->

<html>
    <head>
        <title>Zadaci za bodove</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Zadatak 1:</div>
        <div>
            <form method="post">  
                Upiši broj: <input type="number" name="broj" title="unesi starost"><br>
                Upiši text: <input type="text" name="unos" title="unesi ime"><br>                
                Upiši datum: <input type="date" name="datum" title="unesi datum"><br>
                Izaberi boju:   <select name="boje">
                    <option value="plava">plava</option>
                    <option value="crvena">crvena</option>
                    <option value="zelena">zelena</option>
                    <option value="žuta">žuta</option>
                                </select><br>
                <input name="potvrdi" type="submit">
            </form>
            
            
        </div>
    </body>
</html>
<?php
//print_r($_GET);

if (isset($_POST['potvrdi'])) {
    $filename = './data.txt';
    $mode = 'a+';
    $handle = fopen($filename, $mode);
    fwrite($handle, $_POST['broj'].', '.$_POST['unos'].', '.$_POST['datum'].', '.$_POST['boje']."\n");
    fclose($handle);
    
}

/*
*Z2
*Stranica provjerava postoji li datoteka data.txt
*Ukoliko postoji, generira HTML tablicu u kojoj izlistava podatke u 4 stupca.
*/
echo '<hr>Zadatak 2.<br>';

$filename = './data.txt';
if (is_file($filename)) {
    
$file = file_get_contents($filename); 
$rows = explode("\n", $file); 

$html = "<table border =1>"; 
$html = $html . "<tr><th>Broj</th><th>Ime</th><th>Datum</th><th>Boja</th></tr>";

foreach($rows as $row) {
    $html = $html . "<tr>"; 
    $rowEntry = explode(",", $row); 
    foreach($rowEntry as $entry) {
        $html = $html . "<td>". $entry ."</td>"; 
    }

    $html = $html . "</tr>"; 
}

$html = $html . "</table>"; 

echo $html;   
}
 else {
    echo 'Datoteka data.txt ne postoji.';
}
    
/*Z3:
 * Uneseni datum prikazati kao 16. ožujak, 2018. 
*/  
    
echo '<hr>Zadatak 3.<br>';

$file = file_get_contents($filename); 
$rows = explode("\n", $file); 



foreach($rows as $row) {
    $rowEntry = explode(',', $row);
    //print_r($rowEntry);
    
    $time = strtotime($rowEntry[2]);
     
    //echo strftime('%d.%A.%Y');

    $datum=date('d,F,Y',$time);
            
      echo $datum;
      echo '<br>';
    }
  