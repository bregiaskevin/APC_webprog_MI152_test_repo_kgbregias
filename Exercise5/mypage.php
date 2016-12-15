<!DOCTYPE html>
<html>
<head>
<style>
body {
	
	color: gray;
}


div.container {
    width: 99%;
    height: 100%;
    border: 10px solid black;
}
header, footer {
    padding: 1em;
    color: blue;
    background-color: solid black;
    clear: left;
    text-align: center;

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 2em;
    overflow: hidden;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: gray;
}
.error {
	color : red;
}

a {
	text-decoration: none;
	color: white;
}

a:hover {
	color: blue;
}

</style>
</head>
<body style="background-image: url(blue.jpg);">

<div class="container">
</header>

<h2><a href="index.php">DATABASE SQL</a></h2>

<article>
  <h1>About me</h1>
<style>


</style>
</head>
</body>

<table>
  <tr>
    <th>Name</th>
    <th>Hobbies</th>
    <th>Interests</th>
<th>Favorite Websites</th>
  </tr>
  <tr>
<td><p>Kevin Cliff G. Bregias</p> 
<p>or sometimes my closest friends
</p> calls me "Doge" </td>
<td>
<h1>Boxing and Gaming</h1>
<img src="boxing.jpg" style="width:200px;height:150px;" >
<img src="gaming.jpg" style="width:200px;height:150px;">
</td>
 <td>
<h2>Animals and Photography</h2>
<img src="animals.jpg" style="width:200px;height:150px;">
<img src="photography.jpg" style="width:200px;height:150px;">
</td>
<td>
<a href="https://www.facebook.com/">
  <img src="fb.jpg" style="width:px200;height:150px;">
</a> 
<a href="https://www.instagram.com/">
<img src="ig.jpg" style="width:px200;height:150px;">
</a>
</td>
  </tr>
</table>
</article>
</body>
<head>
<style>
div.container1 {
    width: 100%;
    height: 100%;
    border: 1px solid black;
}
header, footer {
    padding: 1em;
    color: black;
    background-color: black;
    clear: left;
    text-align: center;

article {
    margin-left: 100px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}

</style>
</head>
<body>
<div class="container1">

<style>
body {
background-color: gray;
</style>
<body>

<h1>KNOW MORE??</h1>
<th>
<p>MY DREAM.</p>
<p image id="aboutme"  style="display:none"><img id="myImage" src="businessman.jpg" style="width:500px">
<br>I have dream to become a businessman and a stable company.
<br>I want it to be simple but known worldwid.
<br>After being stalbe, I want to help those who're in need.
<br>I'll have my own charity and help others.</p>

<button type="button" onclick="document.getElementById('aboutme').style.display='block'">CLICK THIS!</button></th>

<th>
<p>MY HOBBIES.</p>

<p id="t1" style="display:none"><img id="myImage" src="boxing1.jpg" style="width:500px">
<br>Ever since I was a kid I really like to watch boxing matches and playing games.
<br>Here is a photo of my idol Muhammad Ali with his favorite quote. 
<br>It helps me relax and I like imitating my idol doing his moves.</p>

<button type="button" onclick="document.getElementById('t1').style.display='block'">CLICK THIS!</button>
</th>

<th><p>MY INTEREST.</p>
<p id="t2" style="display:none"><img id="myImage" src="doge.jpg" style="width:500px">
<br>I REALLYYYYYYYYY LOVEEEEE ANIMALS ESPECIALLY DOGS!<br>
I actually have a dog which is a half chihuahua and a douchound.<br>
He's really adorable and his wagging tail beats the stress out of me every time I go home.<br>

</p>
<button type="button" onclick="document.getElementById('t2').style.display='block'">CLICK THIS!</button></th>

<th><p>MY FAVORITE WEBSITES.</p>
<p id="t3" style="display:none"><img id="myImage" src="image.jpg" style="width:500px">
<br>My favorite websites are Facebook, Youtube and Instagram.<br>
But, I got my eyes on Ingstagram because I really like looking at beautiful images.<br>
People share their memorable moments or one of a kind experiences and it makes me feel hapyy<br>
whenever I see some of those.

</p>
</th>

<button type="button" onclick="document.getElementById('t3').style.display='block'">CLICK THIS!</button></th>

<th><p>What makes me happy?</p>
<p id="t4" style="display:none"><img id="myImage" src="happy.jpg" style="width:500px">
<br>I like looking at comedy pictures to laugh till I hurt my stomach.

</p>

<button type="button" onclick="document.getElementById('t4').style.display='block'">CLICK THIS!</button>
</th>

<div id="fillform">
<?php	
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $nickErr = "";
$name = $email = $gender = $comment = $nick = $home = $num = "";

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
  
  if (empty($_POST["home"])) {
    $home = "";
  } else {
    $home = test_input($_POST["home"]);
  }
  
  if (empty($_POST["num"])){
	  $num = "";
  } else {
	  $num = test_input($_POST["num"]);
  }
  
  if (empty($_POST["nick"])) {
	  $nickErr = "Nickname is required";
  } else {
	  $nick = test_input($_POST["nick"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nickErr = "Only letters and white space allowed"; 
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

<h2>Fill Up the form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Complete Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname: <input type="text" name="nick" value="<?php echo $nick;?>">
  <span class="error">* <?php echo $nickErr;?></span>
  <br><br>
  Email Address: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
  Home Address: <input type="text" name="home" value="<?php echo $home;?>">
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Cellphone Number: <input type="number" name="num" value="<?php echo $num;?>">
  <br><br>
  Comment: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h2>Results:</h2>";
echo $name;
echo "<br>";
echo $nick;
echo "<br>";
echo $email;
echo "<br>";
echo $home;
echo "<br>";
echo $gender;
echo "<br>";
echo $num;
echo "<br>";
echo $comment;
echo "<br>";

?>

</body>
</head>
</html>
