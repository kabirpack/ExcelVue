<?php

$con= new mysqli("localhost","logic","lrl2002","excel_vue");
    if ($con->connect_error)
    {
        die("Connection failed: " . $con->connect_error);
    }

?>