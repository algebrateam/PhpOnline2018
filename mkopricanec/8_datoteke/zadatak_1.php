<!DOCTYPE html>
<html>
<body>

<form>
  Broj:<br>
  <input type="number" name="Broj">
  <br>
  <br>
  Ime:<br>
  <input type="text" name="Ime">
  <br>
  <br>
  Datum:<br>
  <input type="date" name="Datum"
  <br>
  <br>
  <br>
  <select name="Prolaz">
    <option value="Prolaz">Prolaz</option>
    <option value="Prolaz">Pad</option>
  </select>
  <br>
  <br>
  <input type="submit" name="Potvrdi">
</form> 
    
</body>
</html>

<?php

if (isset($_GET['Potvrdi'])) {
    $filename = 'data.txt';
    $mode = 'a+';

    $handle = fopen($filename, $mode);
    fwrite($handle, $_GET['Broj'].','.$_GET['Ime'].','.$_GET['Datum'].','.$_GET['Prolaz']."\n");
    fclose($handle);
}

?>