<?php

$i=1;
$zbroj=0;
while($i <=100)
{
 $zbroj += $i;
    $i++;
}
echo $zbroj;

echo '<hr>';

$i=1;
$zbroj=0;
while ($i <=100):
    $zbroj += $i;
    $i++;  
endwhile;

echo $zbroj;

echo '<hr>';

$i=1;
$zbroj=0;
while($i <=100)
{
    $zbroj += $i;
    $i++;
    
    if($zbroj>=80)
        break;
}
   echo $zbroj; 
   
   echo '<hr>';
   
   $x= 0;
   $y= 0;
   
   while($x <= 10)
   {
       while($y <=10)
       {
           echo 'kordinata x='.$x.'y='.$y;
           $y++;
       }
   $y=0;
   $x++;
       
       }
   
       $x=0;
       $y=0;
       $counter =1;
       
       while($x <= 10)
       {
           while($y <= 10)
           {
               echo'kordinata x='.$x.' ,y='.$y;
               $y++;
               $counter++;
               
               if($counter > 110)
                   break 2;
           }     
               $y=0;
               $x++;
               
               echo '<hr>';
             
       }
       
   
   
   