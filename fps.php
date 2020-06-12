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
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="stylesheet" href="Css/style.css" type="text/css" charset="utf-8">
    <script async src="../js/tabs.js"></script>
    <script async src="js/games.js"></script>
    <title>Gamerun - FPS</title>
</head>
<div>
    <div class="head">
    <nav>
                <ul>
                    <li class="sub">
                        <a href="index.php">Home</a>
                        <ul>
                            <li><a href="Details.php">Details</a></li>
                            <li class="sub">
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub">
                        <a href="games.php">Games</a>
                        <ul>
                            <li class="sub">
                                <a href="#.php">Sandbox</a>
                                <ul>
                                    <li><a href="games/minecraft.php">Minecraft</a></li>
                                    <li><a href="games/factorio.php">Factorio</a></li>
                                    <li><a href="games/Satisfactory.php">Satisfactory</a></li>
                                    <li><a href="sandbox.php">More</a></li>   
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="#.php">Questing</a>
                                <ul>
                                    <li><a href="games/witcher.php">Withcher</a></li>
                                    <li><a href="games/astroneer.php">Astroneer</a></li>
                                    <li><a href="games/celeste.php">Celeste</a></li>
                                    <li><a href="questing.php">More</a></li>     
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="#.php">First Person Shooter</a>
                                <ul>
                                    <li><a href="games/r6seige.php">Rainbow Six Siege</a></li>
                                    <li><a href="games/doom.php">Doom</a></li>
                                    <li><a href="games/CSGO.php">CSGO</a></li>
                                    <li><a href="fps.php">More</a></li>     
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
            <P class="submitheader">First Person Shooter Games<p>
            <div id="btnContainer">
            <button class="btn active" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
            <button class="btn" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
            </div>
            <br>
            <div class="gamelist">
            <div class="row">
            <a class="gamelinks" href="games/minecraft.php"><div class="column" style="background-color:#aaa;">
                <h2>Rainbow Six Siege</h2>
                <p>A First Person Shooter Game..</p>
            </div></a>
            <a class="gamelinks" href="games/factorio.php"><div class="column" style="background-color:#bbb;">
                <h2>DOOM (The Series)</h2>
                <p>A First Person Shooter Game..</p>
            </div></a>
            </div>
            <div class="row">
            <a class="gamelinks" href="games/satisfactory.php"><div class="column" style="background-color:#ccc;">
                <h2>CSGO</h2>
                <p>A First Person Shooter Game..</p>
            </div></a>
            </div>
            </div>

                <br>
                <br>
                <br>
                </div>
                </div>
            </div>      
            <footer>
                        <br>
                        <p2>Made By Kaden Adlington</p2>
                        <br>
                        <p1>Made For School Assignment</p1>
                        <br>
                        <p3>All Images Are Labeled For Non-Comercial Reuse and/or Royalty Free</p3>
                        <br>
                        <p4>This Website Uses The <a style="text-decoration: none" class="footer" href="https://www.apache.org/licenses/LICENSE-2.0">Apache 2.0</a></p4>
                        <br>
                        <p>
                            <!-- Icon for to show this page is CSS Validated -->
                                <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!">
                            </p>
                            <br>
                            <br>
</footer>          
</body>
</html>