<html>
   <head>
      <title>Create tables in DB</title>
   </head>
   
   <body>
<?php

	$hostname = "localhost";
	$username = "petcatalog";
	$password = "password";
	$databaseName = "PetCatalog";

	$dbConnected = mysql_connect($hostname, $username, $password);
	$dbSelected = mysql_select_db($databaseName, $dbConnected);

	if ($dbConnected) { //check the connection to mysqlserver
		echo "MySQL connection OK <br>";
		if ($dbSelected) {
			echo "DB connection OK<br>";	
			echo 'Connected successfully<br />';
			$dbquery = "CREATE TABLE Pet(
			petID INT(5) NOT NULL AUTO_INCREMENT UNIQUE,
	  		petName CHAR(25) NOT NULL,
	  		petType CHAR(15) NOT NULL DEFAULT \"Prova\",
	  		petDescription VARCHAR(255),
	  		price DECIMAL(9,2),
	  		pix CHAR(15) NOT NULL,
	  		PRIMARY KEY(petID)
			)";
			echo $dbquery;
			mysql_select_db( 'PetCatalog' );
			$retval = mysql_query( $dbquery, $dbConnected );
			if(! $retval )
				{
				  die('Could not create table: ' . mysql_error());
				}
			// Create the second table, PetType
			$dbquery = "CREATE TABLE PetType(
			petType CHAR(15) NOT NULL,
	  		typeDescription VARCHAR(255),
	  		PRIMARY KEY(petType)
			)";
			echo $dbquery;
			mysql_select_db( 'PetCatalog' );
			$retval = mysql_query( $dbquery, $dbConnected );
			if(! $retval )
				{
				  die('Could not create table: ' . mysql_error());
				}
			// Create the third table, Color
			$dbquery = "CREATE TABLE Color(
			petName CHAR(25) NOT NULL,
			petColor CHAR(15) NOT NULL,
	  		pix CHAR(15) NOT NULL DEFAULT \"na.png\",
	  		PRIMARY KEY(petName,petColor)
			)";
			echo $dbquery;
			mysql_select_db( 'PetCatalog' );
			$retval = mysql_query( $dbquery, $dbConnected );
			if(! $retval )
				{
				  die('Could not create table: ' . mysql_error());
				}	
			//Ending creating tables
			echo "Table created successfully\n";
			mysql_close($dbConnected);	
		} else {
			echo "DB connection FAILED<br>";	
		}
	} else {
		echo "MySQL connection FAILED";
	}
?>	
      
      
   </body>
</html>
