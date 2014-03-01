<?php 
  //--------------------------------------------------------------------------
  // Example php script for inserting data to mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "";
  $sid=$_REQUEST['sid'];
  $sname=$_REQUEST['sname'];
  $databaseName = "corpindia";
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
 $con=mysqli_connect("localhost","root","","corpindia");
   //--------------------------------------------------------------------------
  // 2) Execute query on database
  //--------------------------------------------------------------------------
  mysqli_query($con,"insert into services values ('$sid','$sname')") or die(mysqli_error());          //query
  header("Location:form.html");
?>
