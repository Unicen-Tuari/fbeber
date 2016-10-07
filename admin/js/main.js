function getActividades()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
		document.getElementById("tableActividad").innerHTML = "";
	       document.getElementById("tableActividad").innerHTML=xmlhttp.responseText;
	    }
	  }
	 e = document.getElementById("id");
	 idProfesor = e.options[e.selectedIndex].value;
	xmlhttp.open("GET","index.php?id=" + idProfesor,true);
	xmlhttp.send();
}
