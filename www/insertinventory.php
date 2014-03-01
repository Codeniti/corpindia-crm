  <?php 
  //--------------------------------------------------------------------------
  // Example php script for inserting data to mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "";
  $uid=$_REQUEST['uid'];
  $sid=$_REQUEST['sid'];
  $databaseName = "corpindia";
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
 $con=mysqli_connect("localhost","root","","corpindia");
   //--------------------------------------------------------------------------
  // 2) Execute query on database
  //--------------------------------------------------------------------------
  mysqli_query($con,"insert into inventory values ('$uid','$sid')") or die(mysqli_error());          //query
  header("Location:form.html");
?>
