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
                        <a href="../games.php">Games</a>
                        <ul>
                            <li class="sub">
                                <a href="../games/sandboxgames.php">Sandbox</a>
                                <ul>
                                    <li><a href="#.html">Minecraft</a></li>
                                    <li><a href="two.html">Factorio</a></li>
                                    <li><a href="three.html">Satisfactoy</a></li>
                                    <li><a href="three.html">More</a></li>      
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="../games/questinggames.php">Questing</a>
                                <ul>
                                    <li><a href="one.html">Withcher</a></li>
                                    <li><a href="two.html">Astroneer</a></li>
                                    <li><a href="three.html">Celeste</a></li>
                                    <li><a href="three.html">More</a></li>      
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="../games/fpvgames.php">First Person Shooter</a>
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
			<div id="tab-1" class="tab-pane active"> 
				<span class="glyphicon glyphicon-leaf glyphicon--home--feature two columns text-center"></span>
				<span class="col-md-10">
					<h3>First Diamond</h3>
					<table class="table">
                        <tr>
                            <th>Game</th>
                            <th>Hours</th>
                            <th>Minutes</th>
                            <th>Seconds</th>
                            <th>Platform</th>
                            <th>Username</th>
                            <th>Evidence</th>
                        </tr>
                        <br>
                        <?php
                        foreach ($pdo -> query("SELECT * FROM `GameSpeedRunning` WHERE `Game` = 'minecraft' AND `Platform` = 'PC'")
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