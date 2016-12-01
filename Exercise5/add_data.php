<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $full_name = $_POST['full_name'];
 $nick_name = $_POST['nick_name'];
 $email = $_POST['email'];
 $home_add = $_POST['home_add'];
 $gender = $_POST['gender']; 
 $cell_num = $_POST['cell_num'];
 $comment = $_POST['comment']; 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(full_name,nick_name,email,home_add,gender,cell_num,comment) VALUES('$full_name','$nick_name','$email','$home_add','$gender','$cell_num','$comment')";
 mysqli_query($con, $sql_query);
        
        // sql query for inserting data into database
 }
?>
<center>

<div id="header">
 <div id="content">
    <label>Please fill out the form.</label>
    </div>
</div>
<div id="body">

<p id="form">enter the following details: </p>
	
<?php
		// define variables and set to empty values
		$nameErr = $nicknameErr = $emailErr = $genderErr =$cpnumErr = "";
		$full_name = $nick_name = $email = $home_add = $gender = $cell_num = $comment = "";
		
		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  	if (empty($_POST["full_name"])) {
				$nameErr = "Name is required";
		  	} else {
				$full_name = test_input($_POST["full_name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$full_name)) {
					$nameErr = "Only letters and white space allowed";
					$full_name = "";
				}
		  	}
			
			
			if(empty($_POST["nick_name"])){
		  		$nicknameErr = "Nickname is required";
			}else{
		  		$nick_name = test_input($_POST["nick_name"]);
		  		if (!preg_match("/^[a-zA-Z ]*$/",$nick_name)) {
				$nicknameErr = "Only letters and white space allowed";
				$nick_name = "";
				}
			}
		  
		  
		  
			if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		  	} else {
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  	$emailErr = "Invalid email format";
			  	$email = "";
				}
		  	}
			
			
			if(empty($_POST["home_add"])){
			  	$home_add = "";
			}else{
			  	$home_add = test_input($_POST["home_add"]);
			}
			
		  	if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
		  	} else {
				$gender = test_input($_POST["gender"]);
		  	}
			
			
			if (empty($_POST["cell_num"])) {
				$cpnumErr = "Mobile number is required";
		  	} else {
				$cell_num = test_input($_POST["cell_num"]);
				if(!preg_match("/^[0-9]*$/",$cell_num)){
					$cpnumErr = "Only numbers are allowed";
					$cell_num = "";
				}
		  	}
			
			
			
			if (empty($_POST["comment"])) {
				$comment = "";
		  	} else {
				$comment = test_input($_POST["comment"]);
		  	}	
		}
		
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
			}
	?>
	
	
			<p><span class="error">* required field.
			<u><strong>*Don't forget to save and cick the Display data below </u></strong></span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
   
    </tr>
    <tr>
    <td><input type="text" name="full_name" placeholder="Name" value="<?php echo $full_name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br> </td>
    </tr>
    <tr>
    <td><input type="text" name="nick_name" placeholder="Nick name" value="<?php echo $nick_name;?>">
			<span class="error">* <?php echo $nicknameErr;?></span></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span></td>
    </tr>
	<tr>
    <td><textarea name="home_add" placeholder ="home address" rows ="2" cols="30"><?php echo $home_add;?></textarea>></span></td>
    </tr>

	<tr>
    <td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">* <?php echo $genderErr;?></span>
    </tr>

	<tr>
    <td><input type="text" name="cell_num" placeholder="Cellphone Number" value="<?php echo $cell_num;?>">
			<span class="error">* <?php echo $cpnumErr;?></span></td>
    </tr>

	<tr>
    <td><textarea name="comment" placeholder="Comment" rows="5" cols="40"><?php echo $comment;?></textarea></span></td>
    </tr>
	
    <tr>
    <td><button type="submit" name="btn-save" onclick="location.href='index.php';"><strong>SAVE</strong></button>
	<button type="button" onclick="location.href='index.php';"><strong>DISPLAY DATA</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>