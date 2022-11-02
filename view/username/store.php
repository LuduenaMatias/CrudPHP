<?php

    require_once("C:/xampp/htdocs/cursoCRUD/controller/usernamecontroller.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre']);

?>