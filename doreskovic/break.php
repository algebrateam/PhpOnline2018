<html>
   <body>
       <h2>Kontrolne strukture i petlje - while/break</h2>
      <?php
   $dan = date('w');
   switch ($dan) {
       case 1:
           echo 'Danas je ponedjeljak';
           break;
       case 2:
           echo 'Danas je utorak';
           break;
       case 3:
           echo 'Danas je srijeda';
           break;
       case 4:
           echo 'Danas je četvrtak';
           break;
       case 5:
           echo 'Danas je petak';
           break;
       case 6:
           echo 'Danas je subota';
           break;
       default:
           echo 'Danas je nedjelja';
           break;
   }

?>
   </body>
</html>