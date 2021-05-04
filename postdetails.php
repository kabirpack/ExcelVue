<?php
include_once('kab_connect.php');


if(isset($_POST['filefrom']))
{

if($_POST['filefrom']=='mainform')
	{
        $user_id=$_POST['id'];
		$business=$_POST['business'];
        $product = $_POST['product'];
        $country=$_POST['country'];
		$type=$_POST['bus_type'];
		$comments=$_POST['comments'];
		$key_contact=$_POST['key_contact'];
		$designation=$_POST['designation'];
		$tel=$_POST['tel'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$remarks=$_POST['remarks'];
		$status=$_POST['status'];
		$data_time=$_POST['data_time'];
		$feedback=$_POST['feedback'];
        $datetime=date_create_from_format('m/d/Y H:i A',$data_time);
        $newdate = date("Y-m-d H:i", $datetime->getTimestamp()); 
		$sql="INSERT INTO `excel_main` (`id`, `user_id`, `business`, `product`, `country`, `type`, `comments`, `key_contact`, `designation`, `tel`, `mobile`, `email`, `remarks`, `status`, `data_time`, `feedback`) 
		VALUES (NULL, '$user_id', '$business', '$product', '$country', '$type', '$comments', '$key_contact', '$designation', '$tel', '$mobile', '$email', '$remarks', '$status', '$newdate','$feedback');";
        $response=$con->query($sql);
        echo $response;   
    
    }

}











?>