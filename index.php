<?php
var_dump($_GET);
echo $_GET["prod1"];

$minArray = array();

setcookie("onskelista", $_GET["prod1"], time() + 3600);

echo $_COOKIE["onskelista"];
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Önskelista</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="onskelista.css">
    </head>
    <body>
        <!--formulär-->
        <p>Gör en önskelista. Lägg de varor du önskar dig i önskelistan.</p>
        <div class="varor">
            <form>
                Planka
                
                <input type="submit"> 
                <input type="hidden" value="planka" name="prod1">
            </form>
        </div>
        <div class="varor">
            Säng
            <button>Lägg till</button>
        </div>
        <div class="varor">
            Rådjur
            <button>Lägg till</button>
        </div>
        <div class="varor">
            Pilsner
            <button>Lägg till</button>
        </div>
        <div class="varor">
            Chips
            <button>Lägg till</button>
        </div>
        <div class="varor">
            Kalle Anka
            <button>Lägg till</button>
        </div>
        <div class="varor">
            Basker
            <button>Lägg till</button>
        </div>  
        <div class="varor">
            Hårddisk
            <button>Lägg till</button>
        </div>
        <div class="varor">
            Bongo
            <button>Lägg till</button>
        </div>
        <div class="varor">
            Mobiltelefon
            <button>Lägg till</button>
        </div>
        <div class="varor">
            Strömkabel
            <button>Lägg till</button>
        </div>  <div class="varor">
            Chokladboll
            <button>Lägg till</button>
        </div>



    </body>
</html>

