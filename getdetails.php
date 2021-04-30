<?php
include_once('kab_connect.php');

if($_POST['getdata']=='login')
{
    $usr = $_POST['username'];
    $pwd = $_POST['password'];
    $sql="SELECT * from `users` WHERE `username` like '$usr' and `password` like '$pwd'";
    $data=$con->query($sql);
    if($data->num_rows!=0)
    {
        $data=$data->fetch_assoc();
        $id = $data['id'];
        session_start();
        $_SESSION['id'] = $id;
        echo $id;
    }
    else 
    {
        echo '';
    }
}






















?>