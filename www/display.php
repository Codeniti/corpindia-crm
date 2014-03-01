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
  $sql="select * from beneficiary";
  $result = mysqli_query($con,$sql) or die(mysql_error());            //query
  //fetch result
  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
		
        $js_array = array();   
        while($row=mysqli_fetch_array($result)){   
			$username = @$row["username"]; 
			$password = @$row["password"] 
			$name=@row['name'];
      $mother_name=@$row['mother_name'];
      $id_mark1=@$row['id_mark1'];
      $id_mark2=@$row['id_mark2'];
      $dob=@$row['dob'];
      $loc=@$row['loc'];
      $cid=@$row['cid'];
      $loc=@$row['loc'];
      $pic=@$row['photo'];
      $fid=@$row['fid'];
			
			$data = array( 
			'username' => $username,
			'password' => $password,
      'username' = $username, 
      'password' => $password, 
      'name'=>$name,
      'mother_name'=>$mother_name,
      'id_mark1'=>$id_mark1,
      'id_mark2'=>$id_mark2,
      'dob'=>$dob,
      'loc'=>$loc,
      'cid'=>$cid,
      'loc'=>$loc,
      'pic'=>$photo,
      'fid'=>$fid
		);
	array_push($js_array, $data); 
} 
$encodedData = json_encode($js_array);
   echo $encodedData; 
?>