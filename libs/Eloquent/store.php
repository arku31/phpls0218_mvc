<?php
require "init.php";

//$user = new User();
//$user->name = $_POST['name'];
//$user->password= $_POST['password'];
//$user->info= $_POST['info'];
//$user->save();

$data = [
    'name' => $_POST['name'],
    'password' => $_POST['password'],
    'info' => $_POST['info'],
];
$user = User::create($data);
echo $user->id;

