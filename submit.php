<?php
//first connect to the database
require_once('includes/connect.php');

// Rick roll detector
if (isset($_POST['evidence'])) {
    $evidence = $_POST['evidence'];
    if (strpos($evidence, 'dQw4w9WgXcQ')) {
        header('Location: ' . $evidence);
        exit;
    }
}
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script async src="js/tabs.js"></script>
    <link rel="stylesheet" href="Css/style.css" type="text/css" charset="utf-8">
    <title>Gamerun - Submit</title>
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
                                <a href="contact.php">contact</a>
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
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="#.php">Questing</a>
                                <ul>
                                    <li><a href="games/witcher.php">Withcher</a></li>
                                    <li><a href="games/astroneer.php">Astroneer</a></li>
                                    <li><a href="games/celeste.php">Celeste</a></li> 
                                    </li>
                                </ul>
                            </li>
                            <li class="sub">
                                <a href="#.php">First Person Shooter</a>
                                <ul>
                                    <li><a href="games/r6seige.php">Rainbow Six Siege</a></li>
                                    <li><a href="games/doom.php">Doom</a></li>
                                    <li><a href="games/CSGO.php">CSGO</a></li>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                    <li><a href="submit.php">Submit Your Results</a></li>
                </ul>
            </nav>         </div>
            <div class="bodybox">
            <br>
            <br>
            <div class="formbox">
            <P class="submitheader">Submit Your Results Here<p>
            <form method="post" action="submit.php">
            <span class="submit">Game</span><select name ="Game" id="game_selector">
            <option value="Astroneer">Astroneer</option>
            <option value="Celeste">Celeste</option>
            <option value="CSGO">CSGO</option>
            <option value="Doom">Doom</option>
            <option value="Factorio">Factorio</option>
            <option value="Minecraft">Minecraft</option>
            <option value="RainbowSix">Rainbow Six Siege</option>
            <option value="Satisfactory">Satisfactory</option>
            <option value="Witcher">Witcher</option>
            </select>
            <br>
            <span class="game_only" data-game="Astroneer">
            <br>
            <span class="submit">Categories</span><select name ="Category-Astroneer">
            <option value="Pre Release">Pre Release</option>
            <option value="Post Release">Post Release</option>
            <option value="To Orbit">To Orbit</option>
            <br>
            </select>
            <br>
            </span>
            <span class="game_only" data-game="Celeste">
            <br>
            <span class="submit">Categories</span><select name ="Category-Celeste">
            <option value="Complete Game">Complete Full Game</option>
            <option value="Collect All Strawberries">Collect all Strawberries</option>
            <br>
            </select>
            <br>
            </span>
            <span class="game_only" data-game="CSGO">
            <br>
            <span class="submit">Categories</span><select name ="Category-CSGO">
            <option value="Weapons Course">Weapons Course</option>
            <option value="Any%">Any%</option>
            <br>
            </select>
            <br>
            </span>
            </span>
            <span class="game_only" data-game="Factorio">
            <br>
            <span class="submit">Categories</span><select name ="Category-Factorio">
            <option value="Research All Researches">Research All Researches</option>
            <option value="Complete All Achievments">Complete All Achievments</option>
            <option value="Launch Rocket">Launch Rocket</option>
            <br>
            </select>
            <br>
            </span>
            </span>
            <span class="game_only" data-game="Doom">
            <br>
            <span class="submit">Categories</span><select name ="Category-Doom" >
            <option value="Gain all Achievments">Gain all Achievments</option>
            <option value="Any%">Any%</option>
            <br>
            </select>
            <br>
            </span>
            <span class="game_only" data-game="Minecraft">
            <br>
            <span class="submit">Categories</span><select name ="Category-Minecraft">
            <option value="AllAcheivment">All Achievments</option>
            <option value="KillEnderdragon">Kill Enderdragon</option>
            <option value="FirstDiamond">First Diamond</option>
            <br>
            </select>
            <br>
            </span>
            <span class="game_only" data-game="RainbowSix">
            <br>
            <span class="submit">Categories</span><select name ="Category-RainbowSix" >
            <option value="Complete All Situations">Complete All Situations</option>
            <option value="Classic Terrorist Hunt Random Loadout">Classic Terrorist Hunt Random Loadout</option>
            <option value="Classic Terrorist Hunt Chosen Loadout">Classic Terrorist Hunt Chosen Loadout</option>
            <br>
            </select>
            <br>
            </span>
            <span class="game_only" data-game="Satisfactory">
            <br>
            <span class="submit">Categories</span><select name ="Category-Satisfactory">
            <option value="Complete Game">Complete Game</option>
            <option value="Any%">Any%</option>
            <br>
            </select>
            <br>
            </span>
            <span class="game_only" data-game="Witcher">
            <br>
            <span class="submit">Categories</span><select name ="Category-Witcher" id="1">
            <option value="Complete Game">Complete Full Game</option>
            <option value="Any%">Any%</option>
            <br>
            </select>
            <br>
            </span>
            <br>
            <span class="submit">Time:</span> <input type="number" name="Hours" min="0" step="1" max="99999" required > <span class="submit">Hrs     </span> <input type="number" name="Minutes" min="0" step="1" max="60" required><span class="submit">Mins     </span> <input type="number" name="Seconds" min="0" step="1" max="60" required><span class="submit">Secs     </span><br>
            <br>
            <span class="submit">Platform:</span><select name ="Platform" id="">
            <option value="PC">PC (Computer)</option>
            <option value="PlayStation">PlayStation</option>
            <option value="Xbox">XBOX</option>
            <option value="Nintendo">Nintendo</option>
            <option value="Android">Android</option>
            </select>
            <br>
            <br>
            <span class="submit">Date:</span> <input type="date" name="Date" required><br>
            <br>
            <span class="submit">Evidence (Please provide web links to all evidence and proof):</span> <input type="text" name="evidence" required><br>
            <br>
            <span class="submit">Username:</span> <input type="text" name="UserName" required>
            <br>
            <br>
            <br>
            <?php
//check to see if form has been submitted, if not the blank entries will be displayed
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// form was submitted, place data into appropriate variables
  $game = $_POST["Game"];
  $category = $_POST["Category-".$game];
  $hours = $_POST["Hours"];
  $minutes = $_POST["Minutes"];
  $seconds = $_POST["Seconds"];
  $platform = $_POST["Platform"];
  $date = $_POST["Date"];
  $evidence = $_POST["evidence"];
  $username = $_POST["UserName"];
  $timesubmitted = date('Y-m-d H:i:s');

  $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, stream_context_create([
    'http' => [
        'method' => 'POST',
        'header'  => "Content-type: application/x-www-form-urlencoded",
        'content' => http_build_query([
            'secret' => '6Ld0S_oUAAAAAJqPE67HsZxaf-5KVWyBU_VtNy-a', 'response' => $_POST['g-recaptcha-response']
        ])
    ]
]));
    $response = json_decode($response);
    if (!$response ->success){
        echo '<p class="submitmessage">Please fill in the captcha.</p>';
    } else {

        try {
            // check for a url
            if (!preg_match("/https?:\/\/.+/i", $evidence)) {
                throw new Exception('Please insert a link into Evidence');
            }

            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //insert data into activity table
            $sth = $pdo->prepare("INSERT INTO GameSpeedRunning (Game,Category,Hours,Minutes,Seconds,Platform,Date,UserName,evidence,timesubmited) VALUES (:game,:category,:hours,:minutes,:seconds,:platform,:date,:username,:evidence,:timesubmited)");
            $sth->bindValue(':game', $game, PDO::PARAM_STR);
            $sth->bindValue(':category', $category, PDO::PARAM_STR);
            $sth->bindValue(':platform', $platform, PDO::PARAM_STR);
            $sth->bindValue(':date', $date, PDO::PARAM_STR);
            $sth->bindValue(':username', $username, PDO::PARAM_STR);
            $sth->bindValue(':timesubmited', $timesubmitted, PDO::PARAM_STR);
            $sth->bindValue(':evidence', $evidence, PDO::PARAM_STR);
            $sth->bindValue(':hours', $hours, PDO::PARAM_STR);
            $sth->bindValue(':minutes', $minutes, PDO::PARAM_STR);
            $sth->bindValue(':seconds', $seconds, PDO::PARAM_STR);
            $count = $sth->execute();

            // echo the number of affected rows, if count =1 the record (row) was successfully inserted
            if($count == 1){
                echo "<p class=submit>Data has been submitted</p>";
            }

            // close the database connection 
            $pdo = null;
        }
        catch(Exception $e)
        {
            echo '<p class="error" id="error">'. $e->getMessage(). '</p>';
            echo '<script>location.href+="#error"</script>';
        }
    }
 }
?>
      <div class="g-recaptcha" data-sitekey="6Ld0S_oUAAAAALAdofZg4ytrZmYraAgXYPWEoHrk"></div>
      <p class="submit"> All Data submitted will be displayed only on this Website.</p><p class="submit" style="font-size: small;">Other Data Submitted is Time-Submitted, All data is stored with the only identifying data being the User submitted Username.</p>
      <input type="submit" value="Submit" class="button" style="float: left">
</form>
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