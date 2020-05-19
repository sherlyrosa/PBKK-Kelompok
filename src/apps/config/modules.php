<?php

return array(
    'dashboard' => [
        'namespace' => 'Its\Example\Dashboard',
        'webControllerNamespace' => 'Its\Example\Dashboard\Presentation\Web\Controller',
        'apiControllerNamespace' => '',
        'className' => 'Its\Example\Dashboard\Module',
        'path' => APP_PATH . '/modules/dashboard/Module.php',
        'defaultRouting' => true,
        'defaultController' => 'user',
        'defaultAction' => 'index'
    ],
);