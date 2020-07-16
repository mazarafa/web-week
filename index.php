<?php

    require_once 'app/Core/Core.php';
    require_once 'app/Controller/HomeController.php';


    $template = file_get_contents('app/template/main.html');
    
    $core = new Core;
	$core->start($_GET);
    //echo $template;
?>