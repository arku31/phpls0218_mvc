<?php
require "init.php";
$id= $_GET['id'];

if(!empty($id))
{
    $user = User::find($id);
    echo json_encode($user);



//    $posts = Post::with('userdata')->where('user_id', 17)->get()->toArray();
//    print_r($posts);
}
