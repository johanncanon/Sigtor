<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Nueva entidad</h4>
            </div>
            <div class="card-content table-responsive">

                <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addentidad" role="form">


                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nombre de la entidad*</label>
                        <div class="col-md-6">
                            <input type="text" name="Nombre_Entidad" required class="form-control" id="name" placeholder="Nombre entidad">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
                        <div class="col-md-6">
                            <input type="text" name="Telefono" required class="form-control" id="name" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Direcció*</label>
                        <div class="col-md-6">
                            <input type="text" name="Direccion" required class="form-control" id="name" placeholder="Direccion">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Agregar Entidad</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>