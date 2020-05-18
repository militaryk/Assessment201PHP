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
    <title>Gamerun - Witcher</title>
    <meta name="theme-color"content="#317EFB" >
</head>
<div>
    <!-- Div class Head at top of page contains, Navigation and Title -->
    <div class="head">
        <header>Gamerun</header>
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
            <!-- Div class Bodybox contains the main content of the page in a light grey colour box. This box helps the content stay responsive and adds a layer to contrast the main content on to make it more useable -->
            <div class="bodybox">
            <br>
            <br>
            <div class="formbox">
            <!-- Header of the page. Gives the game that this page is focused on -->
            <p class="submitheader">Witcher<p>
                <!-- Details of the game in Question -->
                <p class="gamedetails">"The Witcher 3: Wild Hunt is a 2015 action role-playing game developed and published by a Polish developer CD Projekt and is based on The Witcher series of fantasy novels by Andrzej Sapkowski. It is the sequel to the 2011 game The Witcher 2: Assassins of Kings, played in an open world with a third-person perspective. Players control protagonist Geralt of Rivia, a monster slayer (known as a Witcher) who is looking for his missing adopted daughter on the run from the Wild Hunt, an otherworldly force determined to capture her and use her powers. Players battle the game's many dangers with weapons and magic, interact with non-player characters, and complete main-story and side quests to acquire experience points and gold, which are used to increase Geralt's abilities and purchase equipment. Its central story has several endings, determined by the player's choices at certain points in the game." - Wikipedia</p>
            <!-- This class is the begining of my tab system that displays content dependent on what Tab the user selects -->
            <div class="container--tabs">
	        <section class="row">
		    <ul class="nav nav-tabs">
            <!-- List of Buttons to switch between the tabs -->
			<li class="active"><a href="#tab-1" class="tabbutton">Complete Game</a></li>
			<li class=""><a href="#tab-2" class="tabbutton">First Diamond</a></li>
		    </ul>
		    <div class="tab-content">
            <!-- This Div class tab-conent handels the responsiveness of tabs -->
            <div id="tab-1" class="tab-pane active" style="overflow-x:auto;">
				<span class="col-md-10">
                    <!-- This is the title for each of the tabs each tab represents each other -->
                    <h1>Complete Full Game</h1>
                    <!-- Quick Button to accses the Result submision page -->
                    <a href="../submit.php"><button class="button"> Submit Your Results Here </button></a>
                    <!-- Blurb about the significance and details of each page -->
                    <p class="typeblurb">
                    Complete game is completing the game to 100% without any skipping of anything and playing the game in the sequence it is supposed to be played
                    </p>
                    <!-- PhP table that handels the fluent displaying of infomation to the user that automaticly displays newly updated data to the user aslong as they refresh the page -->
					<table class="table">
                        <thead>
                        <tr>
                            <th>Game</th>
                            <th>Hours</th>
                            <th>Minutes</th>
                            <th>Seconds</th>
                            <th>Platform</th>
                            <th>Username</th>
                            <th>Evidence</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($pdo -> query("SELECT * FROM `GameSpeedRunning` WHERE `Game` = 'Witcher' AND `Category` = 'Complete Game' ORDER BY Hours ASC, Minutes ASC, Seconds ASC")
                        as $row) { 
                        ?>

                        <tr>
                        <td> <?php echo htmlspecialchars($row['Game']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Hours']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Minutes']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Seconds']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Platform']); ?></td>
                        <td> <?php echo htmlspecialchars($row['UserName']); ?></td>
                        <td class="scale"> <?php echo htmlspecialchars($row['evidence']); ?></td>
                        <?php } ?>
                        </tbody>
                    </table>
				</span>
            </div> 
            
			<div id="tab-2" class="tab-pane">
				<span class="col-md-10">
                    <!-- This is the title for each of the tabs each tab represents each other -->
                <h1>Any%</h1>
                    <!-- Quick Button to accses the Result submision page -->
                    <a href="../submit.php"><button class="button"> Submit Your Results Here </button></a>
                    <!-- Blurb about the significance and details of each page -->
                    <p class="typeblurb">
                    Any% is the fastest possible completion of the game without needing to do everything. This often includes skipping sections of the game or breaking the sequence that the game is suposed to take place.   
                    </p>
                    <!-- PhP table that handels the fluent displaying of infomation to the user that automaticly displays newly updated data to the user aslong as they refresh the page -->
					<table class="table">
                        <thead>
                        <tr>
                            <th>Game</th>
                            <th>Hours</th>
                            <th>Minutes</th>
                            <th>Seconds</th>
                            <th>Platform</th>
                            <th>Username</th>
                            <th>Evidence</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($pdo -> query("SELECT * FROM `GameSpeedRunning` WHERE `Game` = 'Witcher' AND `Category` = 'Any%' ORDER BY Hours ASC, Minutes ASC, Seconds ASC")
                        as $row) { 
                        ?>

                        <tr>
                        <td> <?php echo htmlspecialchars($row['Game']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Hours']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Minutes']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Seconds']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Platform']); ?></td>
                        <td> <?php echo htmlspecialchars($row['UserName']); ?></td>
                        <td class="scale"> <?php echo htmlspecialchars($row['evidence']); ?></td>
                        <?php } ?>
                        </tbody>
                    </table>
				</span>
			</div>
		</div>
	</section>
</div>
                <br>
                <br>
                <br>
                </div>
                </div>
            </div>          
</body>
</html>