<?php
    require_once("C:/xampp/htdocs/cursoCRUD/view/head/head.php");
    require_once("C:/xampp/htdocs/cursoCRUD/controller/usernameController.php");
    $obj = new usernameController();
    $rows = $obj->index();
?>

<div class="mb-3">
    <a href="/cursoCRUD/view/username/create.php" class="btn btn-primary">Agregar Nuevo Usuario</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scrope="col">Id</th>
            <th scrope="col">Nombre</th>
            <th scrope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows):?>
            <?php foreach($rows as $row):?>
                <tr>
                    <th><?= $row[0]?></th>
                    <th><?= $row[1]?></th>
                    <th>
                        <a href="show.php?id=<?=$row[0]?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?=$row[0]?>" class="btn btn-success">Modificar</a>

                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eModal">Eliminar</a>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="eModal" tabindex="-1" aria-labelledby="eModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="eModalLabel"> Desea eliminar el registro? </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Una vez eliminado no se podra deshacer.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </th>
                </tr>
            <?php endforeach;?>
        <?php else:?>
            <tr>
                <td colspan="3" class="text-center"> No hay registros actualmente. </td>
            </tr>
        <?php endif;?>

    </tbody>
</table>


<?php
    require_once("C:/xampp/htdocs/cursoCRUD/view/head/footer.php");
?>