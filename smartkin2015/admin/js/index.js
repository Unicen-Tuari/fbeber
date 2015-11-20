
$("#logout").click(function() {

	$.ajax({
	  type: "POST",
	  url: "logout.php",
	  data:$("#formloginadmin").serialize(),
	  success: function(data)
			   {
				   window.location = "login.php";
				}
	});
 
	return false;
});
