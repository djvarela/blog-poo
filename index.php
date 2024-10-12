<?php

require "./__autoload.php";


$entidad = $_GET['e'] ?? 'public';
$action = $_GET['a'] ?? null;



$entidad = ucfirst(strtolower($entidad));


$clase = 'App\\Controller\\'.$entidad.'Controller';

if( !class_exists($clase) ){
    die('no exite la clase'.$clase);
} 


$clase = $clase::index($action); 


$vista = $clase['view'] ?? null;

include("./src/Views/layouts/public.view.php");

