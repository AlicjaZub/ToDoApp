<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

//    $app->get('/', function ($request, $response, $args) use ($container) {
//        $renderer = $container->get('renderer');
//        return $renderer->render($response, "index.php", $args);
//    });

    $app->get('/', 'TaskController');
    $app->post('/newTask', 'NewTaskController');
    $app->get('/error', 'NewTaskController');
    $app->post('/complete-task', 'UpdateTaskStatusController');
};
