<?php

$query="insert into department values('".$_REQUEST['department_name']."','".$_REQUEST['department_head']."','".$_REQUEST['teachers']."','".$_REQUEST['no_of_courses']."','".$_REQUEST['total_credit']."','".$_REQUEST['no_of_lab']."','".$_REQUEST['budget']."')";

$con=mysqli_connect("localhost","root","","project");

if(mysqli_connect_error())
{
	echo "ERROR";
}

$result=mysqli_query($con,$query);
    
    
    if($result)
    echo "inserted";


?>