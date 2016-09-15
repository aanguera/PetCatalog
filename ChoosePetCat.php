<?php
	/* Program: ChoosePetCat.php
	 * Des:		Allows users to select a pet type. All the existing pet types from the
	 * 			PetType are displayed. A section to enter a new pet type is provided.
	 *				Selections are provided as radio buttons, with text fields for new
	 *				category name and description.
	 */
?>
<html>
<head><title>Pet Types</title></head>
<body>
<?php
	echo "hola";
	include("config.php");
	/* Gets types from PetType table in alphabetical order */
	echo $host;
	echo $user;
	echo $password;
	echo $database;
	
	$cxn = mysqli_connect($host,$user,$password,$database)
	or die ("couldn t connect to server");
	/* Display text before form */

?>
</div>
</body>
</html>	
