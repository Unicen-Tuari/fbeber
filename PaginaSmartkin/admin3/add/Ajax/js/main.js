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

function getData()
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
	 e = document.getElementById("nombrecategoria");
	 nombre = e.options[e.selectedIndex].value;
	xmlhttp.open("GET","index.php?nombrecategoria=" + nombrecategoria,true);
	xmlhttp.send();
}
