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
            <input type="text" name="broj1" placeholder = "How old is your dog?">
            
           
                
               
                
            </select>
            <br>
            <button type="submit" name="submit" value="submit"> Calculate </button>
        </form>
        <p>How old is your dog in human years? </p>
        <?php
          if (isset($_GET['broj1'])) {
              $rezultat1 = 7;
              $rezultat2 = $_GET ['broj1'];
              
               echo 'Your dog is &nbsp' ,  ($rezultat1 * $rezultat2),  '&nbsp years old' ;
             
            
                  }
                  
 
            

         ?>
    </body>
</html>
