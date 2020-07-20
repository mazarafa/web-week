<?php

    require_once 'app/Core/Core.php';

    require_once 'Database/Connection.php'; //conexão ao mysql

    require_once 'app/Controller/HomeController.php';
    require_once 'app/Controller/ErroController.php';
    
    require_once 'app/Model/Postagem.php';

    $template = file_get_contents('app/template/main.html');
    
    ob_start();
        $core = new Core;
        $core->start($_GET);

        $saida = ob_get_contents();

    ob_end_clean();
    $tplPronto = str_replace('{{area_dinamica}}', $saida, $template);
    echo $tplPronto;
?>