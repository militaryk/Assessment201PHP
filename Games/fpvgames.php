<?php
//first connect to the database
require_once('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Css/style.css" type="text/css" charset="utf-8">
    <script async src="../js/tabs.js"></script>
    <title>Document</title>
</head>
<div>
    <div class="head">
    <nav>
                <ul>
                    <li class="sub">
                        <a href="../index.php">Home</a>
                        <ul>
                            <li><a href="../Details.php">Details</a></li>
                            <li class="sub">
                                <a href="../contact.php">contact</a>
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
                        <a href="../games.php">Games</a>
                        <ul>
                            <li class="sub">
                                <a href="sandboxgames.php">Sandbox</a>
                                <ul>
                                    <li><a href="minecraft.php">Minecraft</a></li>
                                    <li><a href="factorio.php">Factorio</a></li>
                                    <li><a href="satisfactory.php">Satisfactoy</a></li>
                                    <li><a href="more">More</a></li>      
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="questinggames.php">Questing</a>
                                <ul>
                                    <li><a href="witcher.php">Withcher</a></li>
                                    <li><a href="astroneer.php">Astroneer</a></li>
                                    <li><a href="celeste.php">Celeste</a></li>
                                    <li><a href="more.php">More</a></li>      
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="fpvgames.php">First Person Shooter</a>
                                <ul>
                                    <li><a href="r6seige.php">Rainbow Six Siege</a></li>
                                    <li><a href="doom.php">Doom</a></li>
                                    <li><a href="CSGO.php">CSGO</a></li>
                                    <li><a href="CSGO.php">More</a></li>      
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                    <li><a href="../submit.php">Submit Your Results</a></li>
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