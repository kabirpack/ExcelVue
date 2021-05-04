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

else if($_POST['getdata']=='main_form')
{
    $tbody='';
    $user_id=$_POST['id'];
    $sql="SELECT * from `excel_main` WHERE `user_id` like '$user_id' ORDER BY `timestamp` DESC";
    // echo $sql;
    $data=$con->query($sql);
    while($r=mysqli_fetch_array($data))
    {
        $tbody.='<tr style="cursor: pointer;" onclick="mainform_populate('.$r['id'].')">
        <td>'.$r["business"].'</td>
        <td>'.$r["product"].'</td>
        <td>'.$r["country"].'</td>
        <td>'.$r["type"].'</td>
        <td>'.$r["comments"].'</td>
        <td>'.$r["key_contact"].'</td>
        <td>'.$r["designation"].'</td>
        <td>'.$r["tel"].'</td>
        <td>'.$r["mobile"].'</td>
        <td>'.$r["email"].'</td>
        <td>'.$r["remarks"].'</td>
        <td>'.$r["status"].'</td>
        <td>'.$r["feedback"].'</td>
        <td>'.date ("d/m/Y h:i A", strtotime($r["data_time"])).'</td>
    </tr>';
    }   
    echo $tbody;
}























?>