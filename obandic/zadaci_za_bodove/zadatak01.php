<!DOCTYPE html>

<html>
    <head>
        <title>Zadatak1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{margin:0;
              padding:0;
              box-sizing:border-box;}

            body{background-color:#f2f2f2;
                 font-family:"Trebuchet MS", sans-serif;
                 font-size:16px;
                 color:#000;}

            h2{text-align: center;}

            .wrapper{max-width:600px;
                     margin:100px auto;
                     padding:20px 0 0 0;
                     background-color:#DCDCDC;
                     border:1px solid #747474;}

            #polaznici{width:90%;
                       margin:20px auto;}

            .text{width:25%;
                  display:inline-block;
                  padding:5px 0px;
                  font-family: inherit;}

            .text-field{width:74%;
                        height:35px;
                        padding:5px;
                        font-size:100%;
                        font-family: inherit;
                        border:1px solid #C0C0C0;}

            .group{width:100%;
                   margin:20px auto;}

            .group2{width:30%;
                    margin:20px auto;}

            #result{width:74%;
                    height:35px;
                    padding:5px;
                    font-size:100%;
                    font-family: inherit;
                    border:1px solid #C0C0C0;}

            #submit{width:100%;
                    height:40px;
                    background-color:#999;
                    color:#fff;
                    text-shadow:1px 1px 1px #333;
                    font-size:16px;
                    font-weight: bold;}

            #submit{cursor:pointer;}

            #submit:hover{background:#C0C0C0;}

            #submit:focus, #submit:active{background:#C0C0C0;}
        </style>
    </head>
    <body>
        <div class="wrapper">
            <h2>Podaci polaznika</h2>
            <form name="polaznici" id="polaznici" method="POST" action="">

                <div class="group">
                    <label class="text" for="oib">OIB:</label>
                    <input class="text-field" type="number" name="oib" id="oib" required>
                </div>

                <div class="group">
                    <label class="text" for="name">Ime i prezime:</label>
                    <input class="text-field" type="text" name="name" id="name" required>
                </div>

                <div class="group">
                    <label class="text" for="date">Datum polaganja:</label>
                    <input class="text-field" type="date" name="date" id="date" required>
                </div>

                <div class="group">
                    <label class="text" for="result">Rezultat ispita:</label>
                    <select name="result" id="result">
                        <option value="prolaz">prolaz</option>
                        <option value="pad">pad</option>
                    </select>
                </div>

                <div class="group2">
                    <input type="submit" name="submit" id="submit" value="Potvrdi">
                </div>
            </form>
        </div>
    </body>
</html>

<?php
if (isset($_POST['submit'])) {
    $filename = 'data.txt';

    $mode = 'a+';

    $handle = fopen($filename, $mode);

    fwrite($handle, $_POST['oib']."\n".$_POST['name']."\n".$_POST['date']."\n".$_POST['result']."\n");

    fclose($handle);
}
?>