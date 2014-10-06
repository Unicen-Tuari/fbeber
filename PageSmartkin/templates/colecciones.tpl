{include file="header.tpl"}
    
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Colecciones
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">/</li>
                    <li>Categor&iacute;as</li>
                    <li class="active">/</li>
                    <li class="active">Colecciones</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
         <div class="col-md-8">
            {section name=lnombres loop=$nombre_coleccion}            
                <a href="./modelos.php">{$nombre_coleccion[lnombres]}

                <!-- Elastislide Carousel -->
                        
                            <img class="img-responsive img-hover" src="./images/catalogo/{$img_coleccion[lnombres]}">
                        
                </a>
            {/section}
        </div>
        <!-- /.row -->

{include file="lateral.tpl"}        
{include file="footer.tpl"}