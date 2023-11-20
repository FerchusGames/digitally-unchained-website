<?php
    define("DEV_ENV", true);
    define("SUBDIR", "");
    define("URL", "https://".$_SERVER["SERVER_NAME"].SUBDIR);
    define("DOCUMENT_ROOT", $_SERVER["DOCUMENT_ROOT"].SUBDIR);
    define("APPLICATION", DOCUMENT_ROOT.'/app');
    define("SOURCE", APPLICATION);
    define("LIBS", DOCUMENT_ROOT.'libs');
    define("ASSETS", DOCUMENT_ROOT.'assets');
    define("THEMENAME", "architecui");

    // Configuración de la Base de Datos

    //TODO: Fill name, user, and password

    $dbconfig = array();
    $dbconfig["default"]["DB_TYPE"] = "mysql";
    $dbconfig["default"]["DB_HOST"] = "localhost";
    $dbconfig["default"]["DB_NAME"] = "***REMOVED***"; 
    $dbconfig["default"]["DB_USER"] = "***REMOVED***";
    $dbconfig["default"]["DB_PASS"] = "***REMOVED***";

    define("DB_CONFIG", $dbconfig);
    define('CHARSET','utf8');
  
    define("ERROR_NO", serialize (array (2002,1045,42000))); // Errores por 
    define("TIME_ZONE",'America/Mexico_City');
    define("LIMITROWS_DEFAULT",25);
    define("ROUTES", []);
?>