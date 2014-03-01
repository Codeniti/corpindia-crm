<?php 
session_start();
  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  // by Trystan Lea : openenergymonitor.org : GNU GPL
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "";

  $databaseName = "corpindia";
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
 $con=mysqli_connect("localhost","root","","corpindia");
  //$dbs = mysql_select_db($databaseName, $con);

   //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $result = mysqli_query($con,"select * from login") or die(mysql_error());            //query
  //fetch result

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
		
        $js_array = array();   
        while($row=mysqli_fetch_array($result)){  
			$pass = @$row["password"]; 
			$uname = @$row["username"];
			
			$data = array( 
			'username' => $uname,
			'password' => $pass
		);
	array_push($js_array, $data); 
} 
$encodedData = json_encode($js_array);
   echo $encodedData; 
?>
