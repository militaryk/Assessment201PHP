<?php
//first connect to the database
require_once('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/style.css" type="text/css" charset="utf-8">
    <script async src="../js/tabs.js"></script>
    <title>Document</title>
</head>
<div>
    <div class="head">
    <nav>
                <ul>
                    <li class="sub">
                        <a href="index.php">Home</a>
                        <ul>
                            <li><a href="Details.html">Details</a></li>
                            <li class="sub">
                                <a href="contact.html">contact</a>
                                <ul>
                                    <li><a href="one.html">One</a></li>
                                    <li><a href="two.html">Two</a></li>
                                    <li class="sub">
                                        <a href="three.html">Three</a>
                                        <ul>
                                            <li><a href="one.html">One</a></li>
                                            <li><a href="two.html">Two</a></li>
                                            <li><a href="three.html">Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sub">
                        <a href="#">SearchBar</a>
                        <ul>
                            <p> Put Search Bar Hear</p>
                        </ul>
                    </li>
                    <li class="sub">
                        <a href="#">Games</a>
                        <ul>
                            <li class="sub">
                                <a href="games/sandboxgames.php">Sandbox</a>
                                <ul>
                                    <li><a href="games/minecraft.php">Minecraft</a></li>
                                    <li><a href="games/factoro.php">Factorio</a></li>
                                    <li><a href="games/satisfacotry.php">Satisfactoy</a></li>
                                    <li><a href="games/more">More</a></li>      
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="games/questinggames.php">Questing</a>
                                <ul>
                                    <li><a href="one.html">Withcher</a></li>
                                    <li><a href="two.html">Astroneer</a></li>
                                    <li><a href="three.html">Celeste</a></li>
                                    <li><a href="three.html">More</a></li>      
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="games/fpvgames.php">First Person Shooter</a>
                                <ul>
                                    <li><a href="one.html">Rainbow Six Siege</a></li>
                                    <li><a href="two.html">Doom</a></li>
                                    <li><a href="three.html">CSGO</a></li>
                                    <li><a href="three.html">More</a></li>      
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                    <li><a href="submit.php">Submit Your Results</a></li>
                </ul>
            </nav>
            </div>
            <div class="bodybox">
            <br>
            <br>
            <div class="formbox">
            <P class="submitheader">Games<p>
</div>
                <br>
                <br>
                <br>
                </div>
                </div>
            </div>          
</body>
</html>