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

<div class="portfolios col-md-12 text-center">

      
<ul class="list-group">
  {foreach $portfolios as $portfolio}
      {foreach $portfolio['imagenes'] as $imagen}
        <img src="./images/{$imagen['img_port']}" class="lista" width="100px" id="{$imagen['id_img_port']}" />
      {/foreach}
  {/foreach}
</ul>
</body>
</html>  