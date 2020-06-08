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
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <script async src="../js/tabs.js"></script>
    <title>Gamerun - Astroneer</title>
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
                                <a href="#.php">Sandbox</a>
                                <ul>
                                    <li><a href="minecraft.php">Minecraft</a></li>
                                    <li><a href="factorio.php">Factorio</a></li>
                                    <li><a href="Satisfactory.php">Satisfactory</a></li>
                                    <li><a href="more">More</a></li>      
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="#.php">Questing</a>
                                <ul>
                                    <li><a href="witcher.php">Withcher</a></li>
                                    <li><a href="astroneer.php">Astroneer</a></li>
                                    <li><a href="celeste.php">Celeste</a></li>
                                    <li><a href="more.php">More</a></li>      
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="#.php">First Person Shooter</a>
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
            <p class="submitheader">Astroneer<p>
                <!-- Details of the game in Question -->
                <p class="gamedetails">"Astroneer is a sandbox adventure game developed by System Era Softworks. An early access version of the game was released on December 16, 2016, and a 1.0 version of the game was released on February 6, 2019. The player is tasked with colonizing planets, creating structures, and mining resources. Astroneer has no set goal or storyline, though each planet holds challenges for players to complete."-Wikipedia </p>
            <!-- This class is the begining of my tab system that displays content dependent on what Tab the user selects -->
            <div class="container--tabs">
	        <section class="row">
		    <ul class="nav nav-tabs">
            <!-- List of Buttons to switch between the tabs -->
			<li class="active"><a href="#tab-1" class="tabbutton">Pre Release</a></li>
			<li class=""><a href="#tab-3" class="tabbutton">Post Release</a></li>
			<li class=""><a href="#tab-2" class="tabbutton">To Orbit</a></li>
		    </ul>
		    <div class="tab-content">
            <!-- This Div class tab-conent handels the responsiveness of tabs -->
            <div id="tab-1" class="tab-pane active" style="overflow-x:auto;">
				<span class="col-md-10">
                    <!-- This is the title for each of the tabs each tab represents each other -->
                    <h1>Pre Release</h1>
                    <!-- Quick Button to accses the Result submision page -->
                    <a href="../submit.php"><button class="button"> Submit Your Results Here </button></a>
                    <!-- Blurb about the significance and details of each page -->
                    <p class="typeblurb">
                    Astroneer has been open as the perfect play ground for speedrunning from before it was fully released and still in devalopement. Pre Release represnets attempts and records acheived at this time.
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
                        foreach ($pdo -> query("SELECT * FROM `GameSpeedRunning` WHERE `Game` = 'astroneer' AND `Category` = 'Pre Release' ORDER BY Hours ASC, Minutes ASC, Seconds ASC")
                        as $row) { 
                        ?>

                        <tr>
                        <td> <?php echo htmlspecialchars($row['Game']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Hours']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Minutes']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Seconds']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Platform']); ?></td>
                        <td> <?php echo htmlspecialchars($row['UserName']); ?></td>
                        <td class="scale"><a href="<?php echo htmlspecialchars($row['evidence']); ?>">Relevant Evidence</a></td>
                        <?php } ?>
                        </tbody>
                    </table>
				</span>
            </div> 
            
			<div id="tab-2" class="tab-pane">
				<span class="col-md-10">
                    <!-- This is the title for each of the tabs each tab represents each other -->
                <h1>To Orbit</h1>
                    <!-- Quick Button to accses the Result submision page -->
                    <a href="../submit.php"><button class="button"> Submit Your Results Here </button></a>
                    <!-- Blurb about the significance and details of each page -->
                    <p class="typeblurb">
                    Achieving Orbit in Astroneer is a important part of progress in the game and is key to continuing on with the game. It is often a hard acheivment to obtain but a must and was often used as a good target for Speedrunning before the game had its current storyline.
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
                        foreach ($pdo -> query("SELECT * FROM `GameSpeedRunning` WHERE `Game` = 'astroneer' AND `Category` = 'To Orbit' ORDER BY Hours ASC, Minutes ASC, Seconds ASC")
                        as $row) { 
                        ?>

                        <tr>
                        <td> <?php echo htmlspecialchars($row['Game']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Hours']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Minutes']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Seconds']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Platform']); ?></td>
                        <td> <?php echo htmlspecialchars($row['UserName']); ?></td>
                        <td class="scale"><a href="<?php echo htmlspecialchars($row['evidence']); ?>">Relevant Evidence</a></td>
                        <?php } ?>
                        </tbody>
                    </table>
				</span>
			</div>
			<div id="tab-3" class="tab-pane">
				<span class="col-md-10">
                        <!-- This is the title for each of the tabs each tab represents each other -->
                <h1>Post Release</h1>
                        <!-- Quick Button to accses the Result submision page -->
                    <a href="../submit.php"><button class="button"> Submit Your Results Here </button></a>
                     <!-- Blurb about the significance and details of each page -->
                    <p class="typeblurb">
                    Post Release SpeedRunning is Speedrunning the entire game without missing any parts of it following the storyline in Astroneer released when the game was released completly although this is still receiving updates.
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
                        foreach ($pdo -> query("SELECT * FROM `GameSpeedRunning` WHERE `Game` = 'astroneer' AND `Category` = 'Post Release' ORDER BY Hours ASC, Minutes ASC, Seconds ASC")
                        as $row) { 
                        ?>

                        <tr>
                        <td> <?php echo htmlspecialchars($row['Game']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Hours']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Minutes']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Seconds']); ?></td>
                        <td> <?php echo htmlspecialchars($row['Platform']); ?></td>
                        <td> <?php echo htmlspecialchars($row['UserName']); ?></td>
                        <td class="scale"><a href="<?php echo htmlspecialchars($row['evidence']); ?>">Relevant Evidence</a></td>
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