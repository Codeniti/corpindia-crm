<!DOCTYPE html>
<html lang="en">
    <body>
      <script src="http://code.jquery.com/jquery.js"></script>        
<body>
  <div id="s1"> <!-- Division to add formatted data -->
    hello 
    wassup
  </div>
<script id="source" language="javascript" type="text/javascript">
$(function () 
  {
    $.ajax({                                      
      url: 'display.php',              //the script to call to get data          
      data: "",                        //you can insert url arguments here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {	var j=0;
		$.each(data, function(i, v) {
      $('#s1').append("<br><div id='div2'><font size='4' ><a href=''>&nbsphi"+"hello"+"</a></font></div>");
		 $('#s1').append("<br><div id='div1'><font size='4' ><a href=''>&nbsp"+v.username+v.password+"</a></font></div>"); //format the data to be displayed
		});
      } 
    });
  
  }); 
</script>
</body>
</html>