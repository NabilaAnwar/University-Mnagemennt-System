<?php

$query="insert into faculty values('".$_REQUEST['name']."','".$_REQUEST['dean']."','".$_REQUEST['department_no']."','".$_REQUEST['department_name']."')";

$con=mysqli_connect("localhost","root","","project");

if(mysqli_connect_error())
{
	echo "ERROR";
}

$result=mysqli_query($con,$query);
    
    
    if($result)
    echo "inserted";


?>