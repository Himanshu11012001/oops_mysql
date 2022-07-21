<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$databasename = 'employees';


// connection 
echo "username";
exit;

$conn = mysql_connect('localhost',$username,$password);

if(! $conn){
	echo "connection failed - ".mysqli_error();
}else{
	echo "connection successfully established";
	
}

	
	
?>
