<?php

$projectDir = realpath(dirname(__FILE__) . '/../../');
$authDir = $projectDir . '/src/Common/Authentication';
$commonDir = $projectDir . '/src/Common';
$controllersDir = $projectDir . '/src/Controllers';
$configDir = $projectDir . '/src/Config';
$httpDir = $projectDir . '/src/Common/Http';
$routerDir = $projectDir . '/src/Common/Routers';
$srcDir = $projectDir . '/src';
$viewsDir = $projectDir . '/src/Views';
$modelsDir = $projectDir . '/src/Models';

$config = [
    'app' => [
        'classes'      => [
            'Common\\Authentication\\IAuthentication' => $authDir . '/IAuthentication.php',
            'Common\\Authentication\\FileBased' => $authDir . '/FileBased.php',
            'Common\\Authentication\\InMemory'  => $authDir . '/InMemory.php',
            'Common\\Authentication\\MySQL'     => $authDir . '/MySQL.php',
            'Common\\Http\\IRequest'            => $httpDir . '/IRequest.php',
            'Common\\Http\\SimpleRequest'       => $httpDir . '/SimpleRequest.php',
            'Common\\Routers\\IRouter'          => $routerDir . '/IRouter.php',
            'Common\\Routers\\SimpleRouter'     => $routerDir . '/SimpleRouter.php',
            'Models\\DataCleaner'               => $modelsDir . '/DataCleaner.php',
            'Controllers\\AuthController'       => $controllersDir . '/AuthController.php',
            'Controllers\\Controller'           => $controllersDir . '/Controller.php',
            'Controllers\\MainController'       => $controllersDir . '/MainController.php',
            'Controllers\\HomeController'       => $controllersDir . '/HomeController.php',
            'Views\\LoginForm'                  => $viewsDir . '/LoginForm.php',
            'Views\\View'                       => $viewsDir . '/View.php',
            'Views\\Home'                       => $viewsDir . '/Home.php',
        ],
        'dir'          => [
            'authentication' => $authDir,
            'common'         => $commonDir,
            'controllers'    => $controllersDir,
            'config'         => $configDir,
            'http'           => $httpDir,
            'routers'        => $routerDir,
            'src'            => $srcDir,
            'views'          => $viewsDir,
            'models'         => $modelsDir
        ],
        'uri-mappings' => [
            '/auth' => 'Controllers\\AuthController',
            '/'     => 'Controllers\\MainController',
            '/home' => 'Controllers\\HomeController'
        ]
    ]
];
