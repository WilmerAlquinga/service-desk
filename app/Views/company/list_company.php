<?=$header?>

<h3>Listado de Organizaciones</h3>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="<?=base_url('create_company')?>" class="btn btn-primary"  type="button">Agregar</a>
</div>
<div class="table-responsive mt-2">
    <table class="table table-dark table-striped
    table-hover	
    table-borderless
    align-middle">
        <thead class="table-light">
            <caption>Organizaciones</caption>
            <tr>
            <th>#</th>
            <th>Logo</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha de creación</th>
            <th>Titular de la Organización</th>
            <th>Opciones</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php foreach($companies as $company): ?>
                <tr class="table-light" >
                    <td scope="row"><?=$company['ID_COMPANY'];?></td>
                    <td>
                        <img src="<?=base_url()?>/uploads/logos/<?=$company['LOGO'];?>" class="img-fluid rounded-top" alt="Sin Logo" width=100>
                    </td>
                    <td><?=$company['NAME'];?></td>
                    <td><?=$company['DESCRIPTION'];?></td>
                    <td><?=$company['CREATION_DATE'];?></td>
                    <td><?=$company['REPRESENTATIVE'];?></td>
                    <td>
                        <a href="<?=base_url('edit_company/'.$company['ID_COMPANY']);?>" type="button" class="btn btn-success btn-sm">Editar</a>
                        <a href="<?=base_url('delete_company/'.$company['ID_COMPANY']);?>" type="button" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
</div>

<?=$footer?>
