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
            <P class="submitheader">Minecraft<p>
            <div class="container--tabs">
	        <section class="row">
		    <ul class="nav nav-tabs">
			<li class="active"><a href="#tab-1">All the Acheivments</a></li>
			<li class=""><a href="#tab-2">First Diamond</a></li>
			<li class=""><a href="#tab-3">Kill the Ender Dragon</a></li>
		    </ul>
		    <div class="tab-content">
			<div id="tab-1" class="tab-pane active" style="overflow-x:auto;"> 
				<span class="glyphicon glyphicon-leaf glyphicon--home--feature two columns text-center"></span>
				<span class="col-md-10">
                    <h1>All Acheivments</h1> 
                    <span class="platformselect">
                    <br>
                    <span class="platformselection">Select Platform</span><select id="1">
                    <option value="PC">All Platforms</option>
                    <option value="Playstation">Playstation</option>
                    <option value="Complete All Achievments">Complete All Achievments</option>
                    <option value="Complete Game NO CONVEYORS">Complete Game NO CONVEYORS</option>
                    <br>
                    <br>
</br>
                    </select>
                    <br>
                    </span>
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
                        foreach ($pdo -> query("SELECT * FROM `GameSpeedRunning` WHERE `Game` = 'minecraft' AND `Category` = 'Complete Game' ORDER BY Hours ASC, Minutes ASC, Seconds ASC")
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
				<span class="glyphicon glyphicon-fire glyphicon--home--feature two columns text-center"></span>
				<span class="col-md-10">
					<h3>Kill the Ender Dragon</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</span>
			</div>
			<div id="tab-3" class="tab-pane">
				<span class="glyphicon glyphicon-tint glyphicon--home--feature two columns text-center"></span>
				<span class="col-md-10">
					<h3>All the Acheivments</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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