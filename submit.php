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
    <title>Document</title>
</head>
<div>
    <div class="head">
        <nav>
            <ul>
                <li class="sub">
                    <a href="index.php">Home</a>
                    <ul>
                        <li><a href="presentation.html">Details</a></li>
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
                    <a href="sumbit.html">Sumbit Your Results</a>
                    <ul>
                        <p> Put Search Bar Hear</p>
                    </ul>
                </li>
                <li class="sub">
                    <a href="shop.html">Games</a>
                    <ul>
                        <li class="sub">
                            <a href=".html">Sandbox</a>
                            <ul>
                                <li><a href="one.html">Minecraft</a></li>
                                <li><a href="two.html">Factorio</a></li>
                                <li><a href="three.html">Satisfactoy</a></li>
                                <li><a href="three.html">More</a></li>      
                                </li>
                            </ul>
                        </li>
                        <li class="sub">
                            <a href=".html">Questing</a>
                            <ul>
                                <li><a href="one.html">Withcher</a></li>
                                <li><a href="two.html">Astroneer</a></li>
                                <li><a href="three.html">Celeste</a></li>
                                <li><a href="three.html">More</a></li>      
                                </li>
                            </ul>
                        </li>
                        <li class="sub">
                            <a href=".html">First Person Shooter</a>
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
                <li><a href="news.html">Submit Your Results</a></li>
            </ul>
        </nav>
            </div>
            <div class="bodybox">
            <form method="post" action="submit.php">
            <span class="submit">Game:</span> <input type="text" name="Game" ><br>
            <br>
            <span class="submit">Genre:</span> <br><textarea name="Genre"></textarea>  <br>
            <br>
            <span class="submit">Type:</span> <input type="text" name="Type"><br>
            <br>
            <span class="submit">Time:</span> <input type="text" name="Time"><br>
            <br>
            <span class="submit">Platform:</span> <input type="text" name="Platform"><br>
            <br>
            <span class="submit">Date:</span> <input type="text" name="Date"><br>
            <br>
            <span class="submit">UserName:</span> <input type="text" name="UserName"><br>
            <?php
//check to see if form has been submitted, if not the blank entries will be displayed
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// form was submitted, place data into appropriate variables
	$Game = $_POST["Game"];
	$Genre = $_POST["Genre"];
	$Type = $_POST["Type"];
  $Time = $_POST["Time"];
  $Platform = $_POST["Platform"];
  $Date = $_POST["Date"];
  $UserName = $_POST["UserName"];

	try {
		// set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//insert data into activity table
    $count = $pdo->exec("INSERT INTO GameSpeedRunning (Game,Genre,Type,Time,Platform,Date,UserName) VALUES ('$Game', '$Genre','$Type','$Time','$Platform','$Date,'$UserName')");

       // echo the number of affected rows, if count =1 the record (row) was successfully inserted
    if($count == 1){
    	echo "record added to database";
    	}

    // close the database connection 
    $pdo = null;
	}
   	catch(PDOException $e)
    {
    echo $e->getMessage();
    }
 }
?>


<input type="submit" value ="submit">
</form>


                </div>
            </div>          
</body>
</html>