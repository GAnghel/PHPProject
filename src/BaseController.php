<?php

namespace Framework;

class BaseController
{
    private $twig;

    public function __construct(){
        $loader = new \Twig_Loader_Filesystem(__DIR__.'/../app/Views');
        $this->twig = new \Twig_Environment($loader, 
        array(
            //'cache'=> __DIR__.'/../storage/cache/views'
            'cache' => false
            )
    );
    }
    public function view(string $viewFile, array $params=[]){

        echo $this->twig->render($viewFile, $params);
    }
}
