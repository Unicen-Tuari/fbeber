            <div class="col-md-4">

                <div class="well">
                    <h4>Buscar</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>Go!</button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <div class="well">
                    <h4>Categor&iacute;as</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                {section name=lnombres loop=$nombre_categoria}
                                <li>
                                <a href="./consulta_colecciones.php">{$nombre_categoria[lnombres]}
                                </li>
                                {/section}
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
        <!-- /.row -->