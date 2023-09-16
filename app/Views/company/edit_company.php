<?=$header;?>

<div class="card mt-3">
    <div class="card-body">
        <h4 class="card-title">Editar Organización</h4>
        <form action="<?=site_url('/update_company')?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" id="id" placeholder="" value="<?=$company['ID_COMPANY'];?>">

            <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="" value="<?=$company['NAME'];?>">
            </div>
            
                        <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <input type="text" name="description" id="description" class="form-control" placeholder="" value="<?=$company['DESCRIPTION'];?>">
                        </div>

            <div class="mb-3">
            <label for="representative" class="form-label">Titular</label>
            <input type="text" name="representative" id="representative" class="form-control" placeholder="" value="<?=$company['REPRESENTATIVE'];?>">
            </div>

            <div class="mb-3">
            <label for="logo" class="form-label">Logo de la Organización</label><br>
            <img src="<?=base_url()?>/uploads/logos/<?=$company['LOGO'];?>" class="img-fluid rounded-top mb-3" alt="Sin Logo" width=100><br>
            <input type="file" name="logo" id="logo" class="form-control" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="<?=site_url('list_company')?>" class="btn btn-secondary"  type="button">Volver</a>
        </form>
    </div>
</div>

<?=$footer;?>