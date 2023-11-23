<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include("config/config.php");
    include("config/autoload.php");

    $core = new \System\Core();

    $routes = new \System\Router("index", SUBDIR);
    $option = $routes->getController();
    if($option) 
    {
        $controller = $core->load->controller($option);
        if(is_object($controller)) 
        {
            $method = $routes->getMethod();
            $params = $routes->getParams();
            if($method == "")
            {
                $method = "main";
            }
            if(method_exists($controller, $method))
            {
                call_user_func_array([$controller, $method], $params);
            }
        }
    }
?>