/*categorias*/
$("#tab_container").ready(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "cat=true",
		success: function(data)
		{
			$("#tablacategorias").html(data);
			$('a[href=#tablacategorias]').tab('show');
		}
	});
	return false;
});
$("#tab_categorias").click(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "cat=true",
		success: function(data)
		{
			$("#tablacategorias").html(data);
			$('a[href=#tablacategorias]').tab('show');
		}
	});
	return false;
});
$('#tablacategorias').on('click','table tbody tr',function() 
{
	$("#modal_body").load("admin.php",{id_categoria:$(this).children('td').html()});
	$('#modal_emergente').modal('show');
	return false;
});

$('#modal_body').on('click','#boton_modificacat',activaFormcat);
function activaFormcat()
{
	$('#modal_body input').not("[name=id_categoria]").prop('readonly',false);
	$('#modal_body input[name=nombre_categoria]').focus();
	$('#modal_body').off('click','#boton_modificacat',activaFormcat).on('click','#boton_modificacat',modificaFormcat);
	$('#boton_modificacat').removeClass('btn-primary').addClass('btn-success');
	$('#boton_modificacat span').removeClass('glyphicon-edit').addClass('glyphicon-ok');
	$('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
	{
		$('#modal_body').off('click','#boton_modificacat',modificaFormcat).on('click','#boton_modificacat',activaFormcat);
	});
};
function modificaFormcat()
{	
	$("#modal_body").load("admin.php",$("#actualiza_cat").serializeArray());
	$('#modal_body').off('closed.bs.alert').on('closed.bs.alert','#alerta', function ()
	{
		$('#modal_emergente').modal('hide');
	});
	$('#modal_emergente').on('hidden.bs.modal', function ()
	{
		$.ajax({
			type: "POST",
			url: "admin.php",
			data: "cat=true",
			success: function(data)
			{
				$("#tablacategorias").html(data);
			}
		});
		return false;
	});
};

$('#modal_body').on('click','#boton_borracat',function ()
{
	if (confirm('Seguro desea eliminar la categoria?'))
	{
		$("#modal_body").load("admin.php",{id_delcat:$('#modal_body input[name=id_categoria]').val()});
		$('#modal_body').off('closed.bs.alert').on('closed.bs.alert','#alerta', function ()
		{
			$('#modal_emergente').modal('hide');
		});
		$('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
		{
			$.ajax({
				type: "POST",
				url: "admin.php",
				data: "cat=true",
				success: function(data)
				{
					$("#tablacategorias").html(data);
				}
			});
			return false;
		});
	}
});



/*colecciones*/
$("#tab_colecciones").click(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "col=true",
		success: function(data)
		{
			$("#tablacolecciones").html(data);
			$('a[href=#tablacolecciones]').tab('show');
		}
	});
	return false;
});
$('#tablacolecciones').on('click','table tbody tr',function() 
{
	$("#modal_body").load("admin.php",{id_coleccion:$(this).children('td').html()});
	$('#modal_emergente').modal('show');
	return false;
});

$('#modal_body').on('click','#boton_modificacol',activaFormcol);
function activaFormcol()
{
	$('#modal_body input').not("[name=id_coleccion]").prop('readonly',false);
	$('#modal_body input[name=nombre_coleccion]').focus();
	$('#modal_body input[name=img_col]').focus();
	$('#modal_body').off('click','#boton_modificacol',activaFormcol).on('click','#boton_modificacol',modificaFormcol);
	$('#boton_modificacol').removeClass('btn-primary').addClass('btn-success');
	$('#boton_modificacol span').removeClass('glyphicon-edit').addClass('glyphicon-ok');
	$('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
	{
		$('#modal_body').off('click','#boton_modificacol',modificaFormcol).on('click','#boton_modificacol',activaFormcol);
	});
};

$('#modal_body').on('click','#boton_borracol',function ()
{
	if (confirm('Seguro desea eliminar esta coleccion?'))
	{
		$("#modal_body").load("admin.php",{id_delcol:$('#modal_body input[name=id_coleccion]').val()});
		$('#modal_body').off('closed.bs.alert').on('closed.bs.alert','#alerta', function ()
		{
			$('#modal_emergente').modal('hide');
		});
		$('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
		{
			$.ajax({
				type: "POST",
				url: "admin.php",
				data: "col=true",
				success: function(data)
				{
					$("#tablacolecciones").html(data);
				}
			});
			return false;
		});
	}
});

/*modelos*/
$("#tab_modelos").click(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "mod=true",
		success: function(data)
		{
			$("#tablamodelos").html(data);
			$('a[href=#tablamodelos]').tab('show');
		}
	});
	return false;
});
$('#tablamodelos').on('click','table tbody tr',function() 
{
	$("#modal_body").load("admin.php",{id_modelo:$(this).children('td').html()});
	$('#modal_emergente').modal('show');
	return false;
});

$('#modal_body').on('click','#boton_modificamod',activaFormmod);
function activaFormmod()
{
	$('#modal_body input').not("[name=id_modelo]").prop('readonly',false);
	$('#modal_body input[name=nombre_modelo]').focus();
	$('#modal_body input[name=img_mod]').focus();
	$('#modal_body').off('click','#boton_modificamod',activaFormmod).on('click','#boton_modificamod',modificaFormmod);
	$('#boton_modificamod').removeClass('btn-primary').addClass('btn-success');
	$('#boton_modificamod span').removeClass('glyphicon-edit').addClass('glyphicon-ok');
	$('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
	{
		$('#modal_body').off('click','#boton_modificamod',modificaFormmod).on('click','#boton_modificamod',activaFormmod);
	});
};

$('#modal_body').on('click','#boton_borramod',function ()
{
	if (confirm('Seguro desea eliminar este modelo?'))
	{
		$("#modal_body").load("admin.php",{id_delmod:$('#modal_body input[name=id_modelo]').val()});
		$('#modal_body').off('closed.bs.alert').on('closed.bs.alert','#alerta', function ()
		{
			$('#modal_emergente').modal('hide');
		});
		$('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
		{
			$.ajax({
				type: "POST",
				url: "admin.php",
				data: "mod=true",
				success: function(data)
				{
					$("#tablamodelos").html(data);
				}
			});
			return false;
		});
	}
});


/*portfolios*/
$("#tab_portfolios").click(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "port=true",
		success: function(data)
		{
			$("#tablaportfolios").html(data);
			$('a[href=#tablaportfolios]').tab('show');
		}
	});
	return false;
});
$('#tablaportfolios').on('click','table tbody tr',function() 
{
	$("#modal_body").load("admin.php",{id_portfolio:$(this).children('td').html()});
	$('#modal_emergente').modal('show');
	return false;
});

$('#modal_body').on('click','#boton_modificaport',activaFormport);
function activaFormport()
{
	$('#modal_body input').not("[name=id_portfolio]").prop('readonly',false);
	$('#modal_body input[name=nombre_portfolio]').focus();
	$('#modal_body input[name=img_port]').focus();
	$('#modal_body').off('click','#boton_modificaport',activaFormport).on('click','#boton_modificaport',modificaFormport);
	$('#boton_modificaport').removeClass('btn-primary').addClass('btn-success');
	$('#boton_modificaport span').removeClass('glyphicon-edit').addClass('glyphicon-ok');
	$('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
	{
		$('#modal_body').off('click','#boton_modificaport',modificaFormport).on('click','#boton_modificaport',activaFormport);
	});
};

$('#modal_body').on('click','#boton_borraport',function ()
{
	if (confirm('Seguro desea eliminar este portfolio?'))
	{
		$("#modal_body").load("admin.php",{id_delcol:$('#modal_body input[name=id_portfolio]').val()});
		$('#modal_body').off('closed.bs.alert').on('closed.bs.alert','#alerta', function ()
		{
			$('#modal_emergente').modal('hide');
		});
		$('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
		{
			$.ajax({
				type: "POST",
				url: "admin.php",
				data: "port=true",
				success: function(data)
				{
					$("#tablaportfolios").html(data);
				}
			});
			return false;
		});
	}
});



/*usuarios*/
$("#tab_usuarios").click(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "user=true",
		success: function(data)
		{
			$("#tablausuarios").html(data);
			$('a[href=#tablausuarios]').tab('show');
		}
	});
	return false;
});
$('#tablausuarios').on('click','table tbody tr',function() 
{
	$("#modal_body").load("admin.php",{id_usuario:$(this).children('td').html()});
	$('#modal_emergente').modal('show');
	return false;
});

$('#modal_body').on('click','#boton_modificauser',activaFormuser);
function activaFormuser()
{
	$('#modal_body input').not("[name=id_usuario]").prop('readonly',false);
	$('#modal_body input[name=nombre_usuario]').focus();
	$('#modal_body').off('click','#boton_modificauser',activaFormcli).on('click','#boton_modificauser',modificaFormuser);
	$('#boton_modificauser').removeClass('btn-primary').addClass('btn-success');
	$('#boton_modificauser span').removeClass('glyphicon-edit').addClass('glyphicon-ok');
	$('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
	{
		$('#modal_body').off('click','#boton_modificauser',modificaFormuser).on('click','#boton_modificauser',activaFormuser);
	});
};

$('#modal_body').on('click','#boton_borrauser',function ()
{
	if (confirm('Seguro desea eliminar a el usuario?'))
	{
		$("#modal_body").load("admin.php",{id_deluser:$('#modal_body input[name=id_usuario]').val()});
		$('#modal_body').off('closed.bs.alert').on('closed.bs.alert','#alerta', function ()
		{
			$('#modal_emergente').modal('hide');
		});
		$('#modal_emergente').off('hidden.bs.modal').on('hidden.bs.modal', function ()
		{
			$.ajax({
				type: "POST",
				url: "admin.php",
				data: "user=true",
				success: function(data)
				{
					$("#tablausuarios").html(data);
				}
			});
			return false;
		});
	}
});

/*------------logout*/



$('#logout').click(function()
{
	$.ajax({
		type: "POST",
		url: "logout.php",
		success: function(data)
		{
			window.location = "login.php";
		}
	});
	return false;
});
