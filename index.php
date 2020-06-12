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
    <title>Gamerun - Home</title>
</head>
<div>
    <div class="head">
        <header>Gamerun</header>
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
                <h2 class="nogrid">It looks like you don't have CSS Grid module enabled. Grid module is really cool. Try downloading Firefox Nightly, Safari Technology Preview, or go to chrome://flags and tick "Enable experimental Web Platform features". You won't be disappointed! </h2>
                    <div class="gridcontainer">
                    <a href="games/minecraft.php" class="item1"><div></div></a>
                    <a href="games/astroneer.php" class="item2"><div></div></a>
                    <a href="games/factorio.php" class="item3" ><div></div></a>
                   <a href="games/satisfactory.php"  class="item2-1" ><div></div></a>
                   <a href="games/doom.php" class="item2-2" ><div></div></a>
                   <a href="games/witcher.php" class="item2-3" ><div></div></a>
                   <a href="games/r6seige.php" class="item3-1" ><div></div></a>
                   <a href="games/celeste.php" class="item3-2" ><div></div></a>
                   <a href="games/csgo.php" class="item3-3" ><div></div></a>
                   <a href="games.php" style="grid-column:1/4;text-align:center"><button class="button" style="display:inline-block;float:none"> More Games.. </button></a>
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