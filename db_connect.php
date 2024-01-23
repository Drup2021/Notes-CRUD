<?php 
echo "Welcome<br>";


$servername = "127.0.0.1";
$username = "root";
$password = "Drup@2008";
$database = "drup";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn) 
{
    die("Sorry, we failed to connect " . mysqli_connect_error());
}
echo "Connection was successful";

// Create a table in the db (Here Table Name is phptrip )
// $sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
// $result = mysqli_query($conn, $sql);

//inserting data into the table

$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('harry', 'london')";
$result = mysqli_query($conn,$sql);

// Check for the table creation success
if($result){
    echo "The data was inserted successfully!<br>";
}
else{
    echo "The data was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>


