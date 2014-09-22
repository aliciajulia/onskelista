<?php

//variabler
$kakStr ="";
$kakArr = array();


var_dump($_COOKIE);
//kolla om vi har kaka
if(isset($_COOKIE["lista"])) {
    $kakStr = $_COOKIE["lista"];
    $kakArr = serialize($kakStr);
} else {
    setcookie("lista","tom aray",time()+10);
    echo "kaka finns ej , skapar";
}
echo $kakStr;
var_dump($kakArr);


//läsa formulärdata
if(isset($_GET["prod"])) {
    array_push($kakArr, $_GET["prod"]);
}
//var_dump($kakArr);

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
                <input type="hidden" value="planka" name="prod">
            </form>
        </div>
        <div class="varor">
            <form>
                Säng
                
                <input type="submit"> 
                <input type="hidden" value="sang" name="prod">
            </form>
        </div>
        <div class="varor">
            <form>
                Rådjur
                
                <input type="submit"> 
                <input type="hidden" value="radjur" name="prod">
            </form>
        </div>
        <div class="varor">
            <form>
                Pilsner
                
                <input type="submit"> 
                <input type="hidden" value="pilsner" name="prod">
            </form>
        </div>
        <div class="varor">
            <form>
                Chips
                
                <input type="submit"> 
                <input type="hidden" value="chips" name="prod">
            </form>
        </div>
        <div class="varor">
            <form>
                Kalle Anka
                
                <input type="submit"> 
                <input type="hidden" value="kalleanka" name="prod">
            </form>
        </div>
        <div class="varor">
            <form>
                Basker
                
                <input type="submit"> 
                <input type="hidden" value="basker" name="prod">
            </form>
        </div>  
        <div class="varor">
            <form>
                Hårddisk
                
                <input type="submit"> 
                <input type="hidden" value="harddisk" name="prod">
            </form>
        </div>
        <div class="varor">
            <form>
                Bongo
                
                <input type="submit"> 
                <input type="hidden" value="bongo" name="prod">
            </form>
        </div>
        <div class="varor">
            <form>
                Mobiltelefon
                
                <input type="submit"> 
                <input type="hidden" value="mobiltelefon" name="prod">
            </form>
        </div>
        <div class="varor">
            <form>
                Strömkabel
                
                <input type="submit"> 
                <input type="hidden" value="stromkabel" name="prod">
            </form>
        </div>  <div class="varor">
            <form>
                Chokladboll
                
                <input type="submit"> 
                <input type="hidden" value="chokladboll" name="prod">
            </form>
        </div>



    </body>
</html>

