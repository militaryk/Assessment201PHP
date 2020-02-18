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
                    <a href="home.html">Home</a>
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
                <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p><span class="submit"> Name:</span><p> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <p><span class="submit"> Email</span><p> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <p><span class="submit"> Website</span><p> <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  <p><span class="submit"> Comment</span><p> <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <p><span class="submit"> Gender</span><p>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

                </div>
            </div>          
</body>
</html>