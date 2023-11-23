<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include("config/config.php");
    include("config/autoload.php");

    session_start();

    $core = new \System\Core();

    $routes = new \System\Router("index", SUBDIR);
    $option = $routes->getController();

    $notFound = true;
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
                $notFound = false;
                call_user_func_array([$controller, $method], $params);
            }
        }
    }
    if($notFound == true){
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        die();
    }
?>