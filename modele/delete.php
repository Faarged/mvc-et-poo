<?php
if(isset($_POST["id"])) {
    include_once '../controller/CrudController.php';
    $crudcontroller = new CrudController();
    $result = $crudcontroller->delete($_POST["id"]);
    print_r(json_encode("Records deleted successfully"));
}
?>
