<?=$header;?>

<h3>Listado de Organizaciones</h3>
<div class="table-responsive">
    <table class="table table-dark table-striped
    table-hover	
    table-borderless
    align-middle">
        <thead class="table-light">
            <caption>Organizaciones</caption>
            <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha de creación</th>
            <th>Titular de la Organización</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php foreach($companies as $company): ?>
                <tr class="table-light" >
                    <td scope="row"><?=$company['ID_COMPANY'];?></td>
                    <td><?=$company['NAME'];?></td>
                    <td><?=$company['DESCRIPTION'];?></td>
                    <td><?=$company['CREATION_DATE'];?></td>
                    <td><?=$company['REPRESENTATIVE'];?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
</div>

<?=$footer;?>
