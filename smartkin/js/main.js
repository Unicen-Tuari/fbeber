$(function () {
  $('[data-toggle="popover"]').popover()
})
function getSlides()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
		document.getElementById("tableData").innerHTML = "";
	       document.getElementById("tableData").innerHTML=xmlhttp.responseText;
	    }
	  }
	 e = document.getElementById("slides");
	 
	xmlhttp.open("GET","index.php?slides=" ,true);
	xmlhttp.send();
}

function getPortfolios()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
		document.getElementById("tableData").innerHTML = "";
	       document.getElementById("tableData").innerHTML=xmlhttp.responseText;
	    }
	  }
	 e = document.getElementById("potfolios");
	 
	xmlhttp.open("GET","index.php?portfolios=" ,true);
	xmlhttp.send();
}
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
