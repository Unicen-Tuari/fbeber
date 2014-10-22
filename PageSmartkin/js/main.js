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
		document.getElementById("tableModelos").innerHTML = "";
	       document.getElementById("tableModelos").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","index.php?id_coleccion=" + id_coleccion,true);
	xmlhttp.send();
}
