function getColeccion()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
		document.getElementById("coleccion").innerHTML = "";
	       document.getElementById("coleccion").innerHTML=xmlhttp.responseText;
	    }
	  }
	 e = document.getElementById("categoria");
	 coleccion = e.options[e.selectedIndex].value;
	xmlhttp.open("GET","index.php?categoria=" + coleccion,true);
	xmlhttp.send();
}

function ocultar()
{
	var ocultar = document.getElementById('ocultar');
	ocultar.style.display = (ocultar.style.display == 'none') ? 'block' : 'none';
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

