<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="Users_edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>
<style>
div.container {
    width: 99%;
    height: 100%;
    border: 10px solid black;
}
header, footer {
    padding: 1em;
    color: black;
    background-color: black;
    clear: left;
    text-align: center;

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 2em;
    overflow: hidden;
}


</style>
</head>
<body>
<div class="container">


<article>
<style>
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
	font-family: cursive;
	font-size: 18pt;
	color: white;
}

a:hover {
	opacity: 0.7;
}
</style>
</head>
</body>
<body>
<div id="body">
	<div id="content">
	<center><a href="<?php echo base_url();?>index.php/users/add_form">Add user here.</a></center>
		<table align="center">
			<tr>
				<th>Complete Name</th>
				<th>Nickname</th>
				<th>Email Address</th>
				<th>Home Address</th>
				<th>Gender</th>
				<th>Cellphone Number</th>
				<th>Comment</th>
				<th colspan="2">Operations</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->complete_name; ?></td>

				<td><?php echo $u_key->nickname; ?></td>

				<td><?php echo $u_key->Email_Address; ?></td>

				<td><?php echo $u_key->Home_Address; ?></td>
				
				<td><?php echo $u_key->gender; ?></td>
				
				<td><?php echo $u_key->cellphone; ?></td>
				
				<td><?php echo $u_key->comment; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>
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
<h1>About me</h1>

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
<img src="http://localhost/Exercise6/img/boxing.jpg" style="width:200px;height:150px;" >
<img src="http://localhost/Exercise6/img/gaming.jpg" style="width:200px;height:150px;">
</td>
 <td>
<h2>Animals and Photography</h2>
<img src="http://localhost/Exercise6/img/animals.jpg" style="width:200px;height:150px;">
<img src="http://localhost/Exercise6/img/photography.jpg" style="width:200px;height:150px;">
</td>
<td>
<a href="https://www.facebook.com/">
  <img src="http://localhost/Exercise6/img/fb.jpg" style="width:px200;height:150px;">
</a> 
<a href="https://www.instagram.com/">
<img src="http://localhost/Exercise6/img/ig.jpg" style="width:px200;height:150px;">
</a>
</td>
  </tr>
</table>

<div class="container1">

<style>
body {
background-color: gray;
</style>
<body>

<h1>KNOW MORE??</h1>
<th>
<p>MY DREAM.</p>
<p image id="aboutme"  style="display:none"><img id="myImage" src="http://localhost/Exercise6/img/businessman.jpg" style="width:500px">
<br>I have dream to become a businessman and to have a stable company.
<br>I want it to be simple but known worldwid.
<br>After being stalbe, I want to help those who're in need.
<br>I'll have my own charity and help others.</p>

<button type="button" onclick="document.getElementById('aboutme').style.display='block'">CLICK THIS!</button></th>

<th>
<p>MY HOBBIES.</p>

<p id="t1" style="display:none"><img id="myImage" src="http://localhost/Exercise6/img/boxing1.jpg" style="width:500px">
<br>Ever since I was a kid I really like to watch boxing and playing games.
<br>Here is a photo of my idol Muhammad Ali with his favorite quote. 
<br>It helps me relax and I like imitating my idol doing his moves.</p>

<button type="button" onclick="document.getElementById('t1').style.display='block'">CLICK THIS!</button>
</th>

<th><p>MY INTEREST.</p>
<p id="t2" style="display:none"><img id="myImage" src="http://localhost/Exercise6/img/doge.jpg" style="width:500px">
<br>I REALLYYYYYYYYY LOVEEEEE ANIMALS ESPECIALLY DOGS!<br>
I actually have a dog which is a half chihuahua and a douchound.<br>
He's really adorable and his wagging tail beats the stress out of me every time I go home.<br>

</p>
<button type="button" onclick="document.getElementById('t2').style.display='block'">CLICK THIS!</button></th>

<th><p>MY FAVORITE WEBSITES.</p>
<p id="t3" style="display:none"><img id="myImage" src="http://localhost/Exercise6/img/image.jpg" style="width:500px">
<br>My favorite websites are Facebook, Youtube and Instagram.<br>
But, I got my eyes on Ingstagram because I really like looking at beautiful images.<br>
People share their memorable moments or one of a kind experiences and it makes me feel hapyy<br>
whenever I see some of those.

</p>
</th>

<button type="button" onclick="document.getElementById('t3').style.display='block'">CLICK THIS!</button></th>

<th><p>What makes me happy?</p>
<p id="t4" style="display:none"><img id="myImage" src="http://localhost/Exercise6/img/happy.jpg" style="width:500px">
<br>I like looking at some comedy pictures to laugh till I hurt my stomach.

</p>

<button type="button" onclick="document.getElementById('t4').style.display='block'">CLICK THIS!</button>
</th>

</body>

</html>	