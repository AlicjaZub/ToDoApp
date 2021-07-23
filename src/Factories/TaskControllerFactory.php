<?php


namespace ToDoList\Factories;


use Psr\Container\ContainerInterface;
use ToDoList\Controllers\TaskController;

class TaskControllerFactory
{
    public function __invoke(ContainerInterface $container): TaskController
    {
       $model = $container->get('TaskModel');
       $renderer = $container->get('renderer');
       return new TaskController($model, $renderer);
    }

}