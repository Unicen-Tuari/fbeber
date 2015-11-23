//login
$("#signin").click(function() {

	$.ajax({
	  type: "POST",
	  url: "login.php",
	  data:$("#formloginadmin").serialize(),
	  success: function(data)
			   {
				   if(data.indexOf("Error")== -1)
				   {
						window.location = data;
					}
					else
					{
						$( "#error" ).text(data);
				    	$( "#error" ).show();
					}
			   }
	});
 
	return false;
});
