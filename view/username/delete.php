<?php

    require_once("C:/xampp/htdocs/cursoCRUD/controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET['id']);
?>