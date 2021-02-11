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

<!--        <div class="container">-->
            <div class="block" id="welcomeBlock">
                <div class="dark">
                    <h2 class="blockHeader">Welcome</h2>
                </div>
            </div>
            <div class="block" id="projectsBlock">
                <div class="lighter">
                    <h2 class="blockHeader">Projects</h2>
                    <div class="carousel-container">
                        <!--    arrow BTNs-->
                        <div class="arrowBox-left" id="btnPreviousBox">
                            <i class="fas fa-arrow-left" id="btnPrevious"></i>
                        </div>
                        <div class="arrowBox-right" id="btnNextBox">
                            <i class="fas fa-arrow-right" id="btnNext"></i>
                        </div>
                        <div class="carousel-items">

                            <div class="carousel-Item" id="lastClone">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 5</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-Item">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 1</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-Item">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 2</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-Item">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 3</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-Item">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 4</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-Item">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 5</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <!--      clones     -->
                            <div class="carousel-Item" id="firstClone">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 1</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-Item">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 2</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-Item">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 3</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-Item">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 4</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-Item">
                                <div class="backgroundImg">
                                    <div class="text">
                                        <h4>Project 5</h4>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <button id="btnPrevious">Prev</button>-->
<!--                    <button id="btnNext">Next</button>-->

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
                    <div class="rows">
                        <div class="columns">
                            <h3>Programing languages</h3>
                            <div class="progressBars">
                                <p>C#</p>
                                <div class="progressBar">
                                    <div class="progressBarFill" id="cSharp"></div>
                                </div>
                                <p>Java</p>
                                <div class="progressBar">
                                    <div class="progressBarFill" id="Java"></div>
                                </div>
                                <p>HTML</p>
                                <div class="progressBar">
                                    <div class="progressBarFill" id="html"></div>
                                </div>
                                <p>CSS</p>
                                <div class="progressBar">
                                    <div class="progressBarFill" id="css"></div>
                                </div>
                                <p>Javascript</p>
                                <div class="progressBar">
                                    <div class="progressBarFill" id="js"></div>
                                </div>
                                <p>PHP</p>
                                <div class="progressBar">
                                    <div class="progressBarFill" id="php"></div>
                                </div>
                                <p>Python</p>
                                <div class="progressBar">
                                    <div class="progressBarFill" id="python"></div>
                                </div>
                                <p>C++</p>
                                <div class="progressBar">
                                    <div class="progressBarFill" id="cPlus"></div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <p>This is my text</p>
                        </div>
                    </div>


                </div>
            </div>
<!--        </div>-->


        <script src="js/mainFunctions.js"></script>
        <script src="js/carousel.js"></script>



    </body>
</html>



