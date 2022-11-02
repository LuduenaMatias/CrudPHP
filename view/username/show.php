<?php
    require_once("C:/xampp/htdocs/cursoCRUD/view/head/head.php");
    require_once("C:/xampp/htdocs/cursoCRUD/controller/usernameController.php");
    $obj = new usernameController();
    $date = $obj->show($_GET['id']);
?>

<h2 class="text-center"> Detalles del Registro </h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary"> Regresar </a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success"> Actualizar </a>
    
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
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> Nombre </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"] ?></td>
            <td scope="col"><?= $date["nombre"] ?></td>
        </tr>
    </tbody>
</table>

<?php
    require_once("C:/xampp/htdocs/cursoCRUD/view/head/footer.php");
?>