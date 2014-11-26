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

function getDataColecciones(id_categoria)
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
	 
	xmlhttp.open("GET","index.php?id_categoria=" + id_categoria,true);
	xmlhttp.send();
}

function getDataModelos(id_coleccion)
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
		document.getElementById("modelos").innerHTML = "";
	       document.getElementById("modelos").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","index.php?id_coleccion=" + id_coleccion,true);
	xmlhttp.send();
}


function getDataContacto()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
		document.getElementById("contacto").innerHTML = "";
	       document.getElementById("contacto").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","index.php?contacto=" + contacto,true);
	xmlhttp.send();
}



