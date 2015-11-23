$("#saveForm").click(function() {

	$.ajax({
	  type: "POST",
	  url: "index.php",
	  data:$("#formComments").serialize(),
	  success: function(data)
			   {
				   alert(data);
				   if(data.indexOf("Error")== -1)
				   {
				    	$("#formComments").find('input:text, input:password, input:file, select, textarea').val('');
					}
			   }
	});
 
	return false;
});

$("#signin").click(function() {

	$.ajax({
	  type: "POST",
	  url: "login.php",
	  data:$("#formlogin").serialize(),
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
