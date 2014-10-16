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
	 e = document.getElementById("id_categoria");
	 id_categoria = e.options[e.selectedIndex].value;
	xmlhttp.open("GET","index.php?id_categoria=" + id_categoria,true);
	xmlhttp.send();
}

function getMata()
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
	colecc = document.getElementById("id_coleccion");
	 id_coleccion = colecc.options[colecc.selectedIndex].value;
	xmlhttp.open("GET","index.php?id_coleccion=" + id_coleccion,true);
	xmlhttp.send();
}
