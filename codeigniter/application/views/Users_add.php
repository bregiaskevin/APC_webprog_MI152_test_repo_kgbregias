<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<title>Add New User</title>
<style>
body {
	background-color: gray;
}
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

	<form method="post" action="<?php echo base_url();?>index.php/users/insert_users_db">
	
<div id="body">
 <div id="content">
<table align="center">
    <tr>
		<td align="center"><a href="<?php echo base_url();?>index.php/users/">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="complete_name" placeholder="Complete Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Email_Address" placeholder="Email Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Home_Address" placeholder="Home Address" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
	</td>
    </tr>
	<tr>
    <td><input type="number" name="cellphone" placeholder="Cellphone Number" required /></td>
    </tr>
	 <td>Comment: <br>
	 <textarea name="comment" placeholder="Comment" rows="5" cols="50"></textarea>
	 </td>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>

</form>
    </div>
</div>

</body>

</html>