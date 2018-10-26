<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'autoload.php';
use primar\Krug;
use primar\Linija;
use primar\Tocka;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Primjer canvas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><h2>Primjer crtanje na HTML canvas komponenti</h2><br>
        <canvas id="myCanvas" width="400" height="400" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");

     ctx.translate(200, 200);
     
     ctx.lineWidth=2;
      ctx.beginPath();
      ctx.moveTo(-200, 0);
      ctx.lineTo(200, 0);
      ctx.stroke();
      ctx.moveTo(0, 200);
      ctx.lineTo(0, -200);
      ctx.stroke();
      
      ctx.lineWidth=1;
      ctx.beginPath();
ctx.strokeStyle="#00FF00";
  //Kruznice: 
<?php
 (new Krug(new Tocka(-50, 50), 70))->toCanvas();
 (new Krug(new Tocka(-100, 100), 70))->toCanvas();
 (new Krug(new Tocka(-20, 75), 70))->toCanvas();
 (new Krug(new Tocka(-70, 30), 70))->toCanvas();
 (new Krug(new Tocka(135, 150), 70))->toCanvas();
 (new Krug(new Tocka(0, 0), 70))->toCanvas();
?>

ctx.beginPath();
ctx.strokeStyle="#FF0000";
// tocke su male kruznice
<?php
 (new Tocka(20, 20))->toCanvas();
 (new Tocka(40, 40))->toCanvas();
 $tockearray = [[0, 45], [20, 70], [30, 75], [-40, 36], [-40, -40], [100, 150], [89, 145]];
 foreach ($tockearray as $t) {
     (new Tocka($t[0], $t[1]))->toCanvas();
 }
?>

ctx.beginPath();
ctx.strokeStyle="#FF00FF";  
// Linije
<?php
 (new Linija(new Tocka(50, 50), new Tocka(150, -30)))->toCanvas();
?>    

ctx.beginPath();
ctx.strokeStyle="#0000FF";
<?php
function kvadratna($a, $b)
{
    for ($i = -20; $i <= 20; $i += 0.4) {
        (new Tocka($a + $i, ($i * $i) + $b))->toCanvas();
    }
}
kvadratna(-40, -50);
kvadratna(-140, -140);
kvadratna(70, -150);
?>   


</script> 
        
        
        </div>
    </body>
</html>

