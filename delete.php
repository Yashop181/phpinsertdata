
<?php 
 $rollno=$_GET["rno"];

 $con = new mysqli("localhost", "root", "", "bhopal");

 $qry="delete from student where rollno=$rollno";

 $con->query($qry);

 $con->close();

 header("location: update.php");

?>