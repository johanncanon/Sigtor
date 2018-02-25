<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Nuevo Deporte</h4>
            </div>
            <div class="card-content table-responsive">

                <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=adddeportes" role="form">


                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nombre de Deporte*</label>
                        <div class="col-md-6">
                            <input type="text" name="Nombre_Deportes" required class="form-control" id="Nombre_Deportes" placeholder="Nombre de Deporte">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Descripcion*</label>
                        <div class="col-md-6">
                            <input type="text" name="descripcion" required class="form-control" id="descripcion" placeholder="Descripcion">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Agregar Deporte</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>