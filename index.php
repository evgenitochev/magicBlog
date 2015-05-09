<?php

require_once('includes/config.php');

$reuestParts = explode('/', $_SERVER['REZUEST_URI']);

$controller = DEFAULT_CONTROLLER;
if(count($reuestParts)>2 && $reuestParts[1]!=''){
    $controller = $reuestParts[1];
}

$action = DEFAULT_ACTION;
if(count($reuestParts)>3 && $reuestParts[2]!=''){
    $action = $reuestParts[2];
}



echo "I am index.php";
echo "<br/>";
echo $_SERVER['REQUEST_URI'];