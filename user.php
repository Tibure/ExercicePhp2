<?php 

require_once("userModel.php");
require_once("userController.php");


$userModel = new userModel();
$userController = new userController($userModel);

if(!isset($_GET['id'])){
    $userController->show_users();
}
else {
    $userController->show_one_user($_GET['id']);
}

?>