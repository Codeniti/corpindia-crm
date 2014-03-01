<?php 
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  $con=mysqli_connect("localhost","root","","corpindia");
  if (mysqli_connect_errno($con))
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
   //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $sql="select * from login";
  $result = mysqli_query($con,$sql) or die(mysql_error());            //query
  //fetch result
  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
		
        $js_array = array();   
        while($row=mysqli_fetch_array($result)){   
			$username = @$row["username"]; 
			$password = @$row["password"]; 
			
			
			$data = array( 
			'username' => $username,
			'password' => $password,
		);
	array_push($js_array, $data); 
} 
$encodedData = json_encode($js_array);
   echo $encodedData; 
?>