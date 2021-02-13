<?php
require_once  'config.php';
require_once 'controller.php';
require_once 'controllers/error.php';
require_once 'view.php';

Class App {
  function __construct(){

    $url = isset($_GET['url'])? $_GET['url'] : null;

    if(empty($url[0])){
      $archivoController = 'controllers/main.php';
      require_once $archivoController;
      $controller = new Main();
      return false;
    }

    $url = rtrim($url, '/');
    $url = explode('/',$url);

    $archivoController = 'controllers/' . $url[0] . '.php';

    if(file_exists($archivoController)){
      require_once $archivoController;
      $controller = new $url[0];

      if(isset($url[1])){
        /* Ejecutar metodo */
        $controller->{$url[1]}();
      }
    } else {
      $controller = new AppError();
    }
    // echo $url;

  }
}


?>