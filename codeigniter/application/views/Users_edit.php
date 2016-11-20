<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Edit User</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
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

<form method="post" action="<?php echo base_url();?>index.php/users/update">
<?php
extract($users);
?>
<div id="body">
 <div id="content">
<table align="center">
	<tr>
		<td align="center"><a href="<?php echo base_url();?>index.php/users/">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="complete_name" placeholder="Complete Name" value="<?php echo $complete_name; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $nickname; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Email_Address" placeholder="Email Address" value="<?php echo $Email_Address; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Home_Address" placeholder="Home Address" value="<?php echo $Home_Address; ?>" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo $gender; ?> value="Female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo $gender; ?> value="Male">Male
	</td>
    </tr>
	<tr>
    <td><input type="number" name="cellphone" placeholder="Cellphone Number" value="<?php echo $cellphone; ?>" required /></td>
    </tr>
	 <td>Comment: <br>
	 <textarea name="comment" rows="5" cols="50"><?php echo $comment; ?></textarea>
	 </td>
    <tr>
    <td>
	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <button type="submit" name="submit" value="Update" /><strong>UPDATE</strong></button>
    </td>
    </tr>
    </table>
</div>
</div>
</form>

</body>

</html>