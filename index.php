<!doctype html>
<html>
<?php

    $con=mysqli_connect("localhost","root","","project");
    if(mysqli_connect_errno())
    {
        echo "error connecting database";
        
    }
    
    $test="select * from department";
    $result=mysqli_query($con,$test);
    
    
    while( $row=mysqli_fetch_array($result))
    
    {
        echo "<tr>";
        
        echo "<td>";
        echo "{$row[0]}";
        echo "</td>";
        

        echo "<td>";
        echo "$row[1]";
        echo "</td>";


        echo "<td>";
        echo "$row[2]";
        echo "</td>";
        


        echo "<td>";
        echo "$row[3]";
        echo "</td>";



        
        echo "<td>";
        echo "$row[4]";
        echo "</td>";
        
        

        echo "<td>";
        echo "$row[5]";
        echo "</td>";



        echo "<td>";
        echo "$row[6]";
        echo "</td>";
        
        
        echo "</tr>";
    
    }
    

?>
</html>







