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
            
            <form method="POST" enctype="multipart/form-data" action="#">
                Upload:<br>
                <input type="file" name="datoteka" value=""><br>
                <input type="submit" name="submit_btn" value="Upload">
            </form>
        
        
        </div>
        <hr>
        <div>
            <?php
            echo 'Upload handling:'.'<br>';
            if (isset($_REQUEST['submit_btn'])){
                echo '<pre>';
                print_r($_FILES);
                echo '</pre>';
            
                
                //$uploaddir='/pmrvic/upload/';
                $uploaddir=__DIR__.'/../upload/';
                $uploadfile= basename($_FILES['datoteka']['name']);
                
                $file_array=explode(".",$uploadfile);
                $file_ext= end($file_array); // ime je moglo biti: slika.jedan.poz.dva.png
                $file_on_server="file_".time().".".$file_ext;
                
                $new_file_name=$uploaddir.$file_on_server;
                
                if(move_uploaded_file($_FILES['datoteka']['tmp_name'],$new_file_name)){
                    echo "<br>upload OK<br>";
                }
                
                
                
                
                
                
                
            }
            
            ?>
            
        </div>
    </body>
</html>
