<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './data.php';



$array1 = ['prezime' => 'Ivic', 'ime' => 'Iva','datum prijave' => '01.03.2011', 'Placeno'];
$array2 = ['prezime' => 'Peric', 'ime' => 'Petra','datum prijave' => '05.03.2011', 'placeno' => ' '];
$array3 = ['prezime' => 'Maric', 'ime' => 'Marko','datum prijave' => '06.03.2011', 'placeno' => ' '];
$array4 = ['prezime' => 'Anic', 'ime' => 'Ana','datum prijave' => '08.03.2011', 'placeno' => ' '];
$array5 = ['prezime' => 'Maric', 'ime' => 'Marko','datum prijave' => '08.03.2011','placeno' => ' '];
$array6 = ['prezime' => 'Juric', 'ime' => 'Jure','datum prijave' => '12.03.2011', 'placeno' => ' '];
$array7 = ['prezime' => 'Antic', 'ime' => 'Antonia','datum prijave' => '15.03.2011', 'placeno' => ' '];
$array8 = ['prezime' => 'Zvonkic', 'ime' => 'Zvonko','datum prijave' => '16.03.2011', 'placeno' => ' '];
$array9 = ['prezime' => 'Marijovic', 'ime' => 'Mario','datum prijave' => '16.03.2011', 'placeno' => ' '];
$array10 =['prezime' => 'Zlatic', 'ime' => 'Zlatan','datum prijave' => '16.03.2011', 'placeno' => ' '];

$multi_array = array('ime1'=>$array1,'ime2'=>$array2,'ime3'=>$array3,'ime4'=>$array4,'ime5'=>$array5,'ime6'=>$array6,'ime7'=>$array7,'ime8'=>$array8,'ime9'=>$array9,'ime10'=>$array10);

function tablica($multi_array)
{
    echo '<table border=1>';
    foreach ($multi_array as $imena) {
        echo '<tr>';
        foreach ($imena as $red) {
            echo '<td>'.$red.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
tablica($multi_array);
echo '<br>';
echo '<br><hr>';

?>

<form method="POST">
    <select name="Placeno">
      <input type="checkbox" name="Placeno" value="Yes">
      <input type="checkbox" name="Placeno" value ="No">
      
                <option>Yes</option>
                <option>No</option>
    </select>
            <input name="potvrdi" type="submit">
            <td>
              <input type="text" name="Placeno">
            </td>

        </form>
       <table border="1">
  <tr>
    <th>Rbr</th>
    <th>Prezime</th>
    <th>Ime</th>
    <th>Datum prijave</th> 
    <th>Placeno</th>

<tr>
            <td>1</td>
            <td>Ivic</td>
            <td>Iva</td>
            <td>01.03.20111</td>
            <td></td>
          </tr>
          <tr>
          <td>2</td>
          <td>Peric</td>
          <td>Petar</td>
          <td>05.03.2011</td>
          <td></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Maric</td>
            <td>Marko</td>
            <td>06.03.2011</td>
            <td></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Anic</td>
            <td>Ana</td>
            <td>08.03.2011</td>
            <td></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Maric</td>
            <td>Marko</td>
            <td>08.03.2011</td>
            <td></td>
            </tr>
            <tr>
              <td>6</td>
              <td>Juric</td>
            <td>Jure</td>
            <td>12.03.2011</td>
            <td></td>
            </tr>
            <tr>
              <td>7</td>
              <td>Antic</td>
            <td>Antonia</td>
            <td>15.03.2011</td>
            <td></td>
            </tr>
            <tr>
              <td>8</td>
              <td>Zvonkic</td>
              <td>Zvonko</td>
              <td>16.03.20111</td>
              <td></td>
            </tr>
            <tr>
              <td>9</td>
              <td>Marijovic</td>
              <td>Mario</td>
              <td>16.03.2011</td>
              <td></td>
            </tr>
            <tr>
              <td>10</td>
              <td>Zlatic</td>
              <td>Zlatan</td>
              <td>16.03.2011</td>
              <td></td>
              
            </tr>


          
</table>
 