<?php
$servername="localhost";
$username="root";
$password="";
$DB="Campaign";

//create connection
$conn=new mysqli($servername,$username,$password,$DB);

//check conneciton
if($conn->connect_error){
    die("Connection Failed " . $conn->connect_error );
}
else{
    echo "";
}

 ?>