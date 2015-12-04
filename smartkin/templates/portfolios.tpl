<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/smartkin.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="body-sm">

<div class="portfolios text-center">

      
  {foreach $portfolios as $portfolio}
      {foreach $portfolio['imagenes'] as $imagen}
        <div class="text-center img-port" style="background:url('./images/{$imagen['img_port']}'); background-size:cover;"><br><br>
          {$imagen.descripcion}
        </div>
      {/foreach}
  {/foreach}
</div>
</body>
</html>  