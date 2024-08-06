<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>

<!-- 
    <a href="index.php">Home</a>
    <a href="insert.php">insert</a>
    <a href="display.php">Display</a> -->
    
    <?php include "include/topnavbar.php" ?>
   <center><h1>All Students</h1></center>
   <table border="1" align="center" width="500" bgcolor="pink">
    <tr bgcolor="orange">
          
        <th>Roll no</th>
        <th>Name</th>
        <th>City</th>
        <th>Fees</th>

    </tr>

    <?php 
    $con=new mysqli("localhost", "root" ,"", "cybrom");  //creating connection between PHP to mysql 
    $qry = "select * from student";  

    $result = $con->query($qry);   

    while($row=$result->fetch_assoc()) //fetch assoc is used for fetch only one data for the table
    {
        echo "<tr>";
            echo "<td>".$row["rollno"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["city"]."</td>";
            echo "<td>".$row["Fees"]."</td>";
        echo "</tr>";
    }
?>


   </table>
 


</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- include and req is PHP 
 include annd req method are userd to included external php file in our main page but the basic diff is that include gerante just warning when included file does not avilable wher  
-->