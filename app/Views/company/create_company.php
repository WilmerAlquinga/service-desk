<?=$header;?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Crear Organización</h4>
            <form action="<?=site_url('/save_company')?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="">
                </div>

                <div class="mb-3">
                <label for="representative" class="form-label">Titular</label>
                <input type="text" name="representative" id="representative" class="form-control" placeholder="">
                </div>

                <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="">
                </div>

                <div class="mb-3">
                <label for="logo" class="form-label">Logo de la Organización</label>
                <input type="file" name="logo" id="logo" class="form-control" placeholder="">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="<?=site_url('list_company')?>" class="btn btn-secondary"  type="button">Volver</a>
            </form>
        </div>
    </div>

<?=$footer;?>