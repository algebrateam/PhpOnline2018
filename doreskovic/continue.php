<html>
   <body>
       <h2>Posloži prema redoslijedu brojeve od 1 - 10 osim broja 4</h2>
       <p> To su brojevi:</p>
      <?php
         $array = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
         
         foreach( $array as $value ) {
            if( $value == 4 )continue;
            echo "$value<br />";
         }
      ?>
   
   </body>
</html>