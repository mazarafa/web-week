<?php

    class Core
    {
        public function start($urlget)
        {
            $controller = ucfirst($urlget['pagina'].'Controller');

            if(!class_exists($controller)){
                $controller = 'ErroController';
            }
            echo $controller;

            
        }
    }