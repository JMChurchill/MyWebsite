<?php
include_once "components/navbar.php";
include_once "components/footer.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="css/mainStyle.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/fca550da2e.js" crossorigin="anonymous"></script>
        <title>Linked data app</title>
    </head>
    <body>
        //scroll bar
        <div class="scrollBar">
            <div class="squares">
                <a href="#welcomeBlock"><div class="square" id="square1"></div></a>
                <a href="#projectsBlock"><div class="square" id="square2"></div></a>
                <a href="#aboutBlock"><div class="square" id="square3"></div></a>
                <a href="#languageBlock"><div class="square" id="square4"></div></a>
            </div>

        </div>


        <div class="block" id="welcomeBlock">
            <div class="dark">
                <h2 class="blockHeader">Welcome</h2>
            </div>
        </div>
        <div class="block" id="projectsBlock">
            <div class="lighter">
                <h2 class="blockHeader">Projects</h2>
            </div>
        </div>
        <div class="block" id="aboutBlock">
            <div class="dark">
                <h2 class="blockHeader">About</h2>
            </div>
        </div>
        <div class="block" id="languageBlock">
            <div class="lighter">
                <h2 class="blockHeader">Languages</h2>
            </div>
        </div>

        <script src="js/mainFunctions.js"></script>


    </body>
</html>



