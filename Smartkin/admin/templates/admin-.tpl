<!--INICIO-->
{include file="header.tpl"}    

    <h1>Administrador</h1>
    <h3>Panel de Control</h3>

    <div class="col-md-12">
        <ul class="nav nav-tabs tab_container">
            <li>
                <a data-toggle="tab" href="#tablaslides" id="tab_slides">Slides</a>
            </li>
                    
            <li>
                <a data-toggle="tab" href="#tablaportfolios" id="tab_portfolios">Portfolios</a>
            </li>
                
            <li>
                <a data-toggle="tab" href="#tablacolecciones" id="tab_colecciones">Colecciones</a>
            </li>
                
            <li>
                <a data-toggle="tab" href="#tablausuarios" id="tab_usuarios">Usuarios</a>
            </li>
                
            <li>
                <a data-toggle="tab" href="#tablacomentarios" id="tab_comentarios">Comentarios</a>
            </li>

            <li>
                <a data-toggle="tab" href="#tablainformacion" id="tab_informacion">Información</a>
            </li>
                        
        </ul>
    </div>
        
    <div class="row text-center">
        <div class="col-lm-12">
            <div class="tab-content">
                <div class="tab-pane fade" id="tablaslides">
                    {include file="admin_slides.tpl"}
                </div>
                <div class="tab-pane fade" id="tablaportfolios">
                    {include file="admin_portfolios.tpl"}
                </div>
                <div class="tab-pane fade" id="tablacolecciones">
                    {include file="admin_colecciones.tpl"}
                </div>
                <div class="tab-pane fade" id="tablausuarios">
                    {include file="admin_usuarios.tpl"}
                </div>
                <div class="tab-pane fade" id="tablacomentarios">
                    {include file="admin_comentarios.tpl"}
                </div>
                <div class="tab-pane fade" id="tablainformacion">
                    {include file="admin_informacion.tpl"}
                </div>
            </div>
        </div>
    </div>
</div>

<!--Moodal-->
    <div class="modal fade" id="modal_emergente">
        <div class="modal-dialog">
            <div class="modal-content" id="modal_body">
            </div>
        </div>
    </div>



{include file="footer.tpl"}