<?php

header('Access-Control-Allow-Origin: *');

    $con = new mysqli('localhost:3306', 'root', '', 'takmicarko');
    if($con->connect_errno)
    {
        $aaa="greska";
    }

    else 
    {
        $takmicari=$con->query("SELECT * FROM takmicar;");			  
        $red=[];
        while($row = mysqli_fetch_assoc($takmicari))
        $red[] = $row;
    }

    echo json_encode(array(
        "red"=>$red
    ));

?>