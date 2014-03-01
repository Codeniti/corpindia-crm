<?php 
  //--------------------------------------------------------------------------
  // Example php script for inserting data into mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "";
  $uid = uniqid();
  $name=$_REQUEST['name'];
  $mother_name=$_REQUEST['mother_name'];
  $id_mark1=$_REQUEST['id_mark1'];
  $id_mark2=$_REQUEST['id_mark2'];
  $dob=$_REQUEST['dob'];
  $loc=$_REQUEST['loc'];
  $cid=$_REQUEST['cid'];
  $loc=$_REQUEST['loc'];
  $fid=$_REQUEST['fid'];
  $databaseName = "corpindia";
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
 $con=mysqli_connect("localhost","root","","corpindia");
  //$dbs = mysql_select_db($databaseName, $con);

   //--------------------------------------------------------------------------
  // 2) Execute query on database
  //--------------------------------------------------------------------------
  mysqli_query($con,"insert into beneficiary values ('$uid','$name','$dob','Male','$id_mark1','$id_mark2','','$cid','$fid','$loc','$mother_name','')") or die(mysqli_error());          //query
header("Location:form.html");
?>