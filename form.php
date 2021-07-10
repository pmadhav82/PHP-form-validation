




<html>


<head>

<style>
body {background-color: powderblue;}

.error {color:red;}
</style>

</head>


 <body>


 <p style = "color:blue;font-size:30px"> Form validation</p>



<?php
// define variables and set to empty value

$name = $email = $gender = "";

//define error variables of each variables and set to empty


$nameerr = $emailerr = $gendererr = " ";

// check each $_POST variables with test_input() function_exists




if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
		$nameerr = "Name is required";
	}else
	{
	
	$name = test_input($_POST["name"]);
	}
	if(empty($_POST["email"])){
		$emailerr = "Email is required";
	}else{
	
$email = test_input($_POST["email"]);
	}
	
	if(empty($_POST["gender"])){
		$gendererr = "Gender is required";
	}else{
$gender = test_input($_POST["gender"]);
	}
	
}
	
function test_input($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;

}	


?>
<p> <span class = "error">*required field </span></p>
<form action =  "practise.php" method = "POST">
Name: <input type = "text" name ="name"/>
<span class ="error">*<?php echo $nameerr;?> </span>
<br><br>
Email: <input type = "text" name ="email" />
<span class = "error">*<?php echo $emailerr; ?> </span>
<br> <br>
Gender: <input type = "radio" name = "gender" value = "male"> Male 
<input type = "radio" name = "gender" value = "female"> Female
<input type = "radio" name = "gender" value = "other"> Other
<span class = "error" >* <?php echo $gendererr; ?> </span>
<br> <br>

<input type = "submit" </>
</form>


<?php

echo " <h2> Your Inputs are here: </h2> ";
echo "<br> ";

echo "Name: " . $name . "</br>";
echo " Email: " .$email . "</br>";
echo "Gender: " .$gender . "</br>";



?>

</body>
</html>







