<?php

$hostname="localhost";
$username="root";
$password="";
$database="esp_finger";

$conn=mysqli_connect($hostname,$username,$password,$database);

if(!$conn){
	die("connection failed: ".mysqli_connect_error());

}
echo "database connection is ok!!!!!!";

if(isset($_POST["Name"]) && isset($_POST["Finger_ID"])){
  $name=$_POST["Name"];
    $finID=$_POST["Finger_ID"];
    //$t=25;
    //$h=70;
    $sql= "INSERT INTO user_log (Name,Finger_ID) VALUES('.$name.',".$finID.")";

    if (mysqli_query($conn, $sql)){
    echo "New Record Created Successfully";
      }else 
       echo "Error:" .$sql. "<br>" .mysqli_error($conn);
 }

?>