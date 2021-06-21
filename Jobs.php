<?php
    $connection= mysqli_connect('localhost','root','','work spectrum');
   /* if(!$connection)
          die("connection failed");
    else
        echo "connection established";*/

    $query = "select * from jobs";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo $row['Company Name'], " ", $row['City'], " ", $row['Position'], " ",$row['Salary']," ", $row['Type'];
        }
    }
?>

