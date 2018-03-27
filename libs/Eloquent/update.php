<?php
require "init.php";
$id= $_GET['id'];

if(!empty($id))
{
    $user = User::find($id); //User::update($array);
    $user->name = $_POST['name'];
    $user->password= $_POST['password'];
    $user->info = $_POST['info'];
    $user->save();
}
