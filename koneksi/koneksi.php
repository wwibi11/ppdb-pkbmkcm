<?php  

//Database Configuration
$db_name 	= "pendaftaran";
$host		= "localhost";
$username	= "root";
$password	= "";

//make connection to database
$conn 		= mysqli_connect($host,$username,$password,$db_name);

if (!$conn) {
				echo 'Error : ' .mysqli_connect_error($conn);
		}

?>