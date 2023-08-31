<?php
    if($_GET["pw"] == "28374719"){
        $ip = $_SERVER['REMOTE_ADDR'];
        $array = array(
		    "ip" => $ip,
		);

        echo json_encode($array);
    }

    
?>