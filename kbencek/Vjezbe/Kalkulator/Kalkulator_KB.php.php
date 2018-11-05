<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <input type="text" name="broj1" placeholder = "Unesi broj">
            <input type="text" name="broj2" placeholder = "Unesi broj">
            <select name="operator">
                
               <option>Odaberi</option>
                <option>Zbroji</option>
                <option>Oduzmi</option>
                <option>Pomnoži</option>
                <option>Podjeli</option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit"> Izračunaj </button>
        </form>
        <p>Rezultat je</p>
        <?php
          if (isset($_GET['submit'])){
              $rezultat1 = $_GET['broj1'];
              $rezultat2 = $_GET['broj2'];
              $operator = $_GET['operator'];
              switch ($operator){
                     case "Zbroji":{
                  echo $rezultat1 + $rezultat2;
                  
                      break;
                  }
                  
                  case "Oduzmi":{
                  echo $rezultat1 - $rezultat2;
                  
                      break;
                  }
                  
                  case "Pomnoži":{
                  echo $rezultat1 * $rezultat2;
                  
                      break;
                  }
                  
                  case "Podjeli":{
                  echo $rezultat1 / $rezultat2;
                  
                      break;
                  }
                  
                  case "Odaberi":{
                  echo 'Odaberi funkciju.';
                         
                  
                      break;
                  }
                  
                  
              }
          }
              
        ?>
    </body>
</html>
