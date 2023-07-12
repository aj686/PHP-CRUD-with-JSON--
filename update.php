<?php
include 'partials/header.php';
require __DIR__.'/users.php';

//if id not exist "!" 
if (!isset($_GET['id'])){
    include "partials/not_found.php";
    exit;
}

$userId = $_GET['id'];   //getting user id only


$user = getUsersbyId($userId);  //
if (!$user){
    include "partials/not_found.php";
    exit;
}

/*$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => "",
];*/

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    updateUser($_POST, $userId);

    //$user = array_merge($user, $_POST);

    //$isValid = validateUser($user, $errors);
    echo "<pre>";
    var_dump($_SERVER);    
    echo "</pre>";
 }


?>





<?php include 'partials/footer.php' ?>