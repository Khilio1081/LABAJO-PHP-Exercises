<?php

spl_autoload_register(function($class)
{
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require_once $path;
});

use control\StringManipulationContr;
use model\StringManipulationModel;
use view\StringManipulationView;

$pageControl = new StringManipulationContr();
$pageData = new StringManipulationModel();
$pageView = new StringManipulationView();

$pageControl->getControl();
$pageData->showData();
$pageView->render();
