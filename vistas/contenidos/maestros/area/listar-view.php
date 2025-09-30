<div class="table-responsive">
    <table class="table table-dark table-sm">
        <thead>
            <tr class="text-center roboto-medium">
                <th>#</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Abreviatura</th>
                <th>Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $datos = maestrosControlador::fnListarMaestroAreas();
            $contador = 1;
            foreach ($datos as $rows) { ?>
                <tr class="text-center">
                    <td><?php $contador ?></td>
                    <td><?php $rows['codigo'] ?></td>
                    <td><?php $rows['nombre'] ?></td>
                    <td><?php $rows['abreviatura'] ?></td>
                    <td><?php ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') ?></td>
                    <td>
                        <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>';
            <?php $contador++;
            } ?>

        </tbody>
    </table>
</div>
<?php maestrosControlador::fnListarMaestroAreas(); ?>