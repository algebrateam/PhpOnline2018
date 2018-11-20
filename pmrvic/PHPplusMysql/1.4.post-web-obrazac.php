<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Web Obrazac</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            
            <form method="GET" action="#">
                
                Ime:<input type="text" name="ime" value="" required="true"><br>
                Prezime<input type="text" name="prezime" value="" required><br>
                Spol:<br>
                <input type="radio" name='spol' value="M">M<br>
                <input type="radio" name='spol' value="Z">Z<br>
                Županija:<br>
                <select name="zupanija">
                    <optgroup>
                        <option value="1">Zagreb</option>
                        <option value="2">Split</option>
                    </optgroup>
                    <option value="3">zup3</option>
                    <option value="4">zup4</option>
                    <option value="5">zup5</option>
                </select><br>
                
                Interesi:<br>
                <input type="checkbox" name='intresi[]' value="sport">sport<br>
                <input type="checkbox" name='intresi[]' value="muzika">muzika<br>
                <input type="checkbox" name='intresi[]' value="racunala">racunala<br>
                
                Napomena <br>
                <textarea name="napomena" cols="50"></textarea><br>
                
                <input type="submit" name="submit_btn" value="Obrada">
            </form>
        
        
        </div>
        <hr>
        <div>
            <?php
            echo 'poz iz PHP';
            if (isset($_REQUEST['submit_btn'])){
                echo '<pre>';
                echo 'Ime:'.$_REQUEST['ime'].'<br>';
                echo 'Prezime:'.$_REQUEST['prezime'].'<br>';
                echo 'Spol:'.$_REQUEST['spol'].'<br>';
                echo 'Županija:'.$_REQUEST['zupanija'].'<br>';
                echo 'Interesi:';
                foreach ($_REQUEST['intresi'] as $key => $value) {
                    echo $value.', ';
                }
//                echo 'Interesi:'.$_POST['intresi_1'].'<br>';
//                echo 'Interesi:'.$_POST['intresi_2'].'<br>';
//                echo 'Interesi:'.$_POST['intresi_3'].'<br>';
   // print_r($_POST['intresi']);
                
                echo '<br>';
                echo 'Napomena:'.$_REQUEST['napomena'].'<br>';
                
                
                echo '</pre>';
            }
            
            ?>
            
        </div>
    </body>
</html>
