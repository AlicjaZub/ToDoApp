<?php


namespace ToDoList\Factories;


use ToDoList\Models\TaskModel;

class TaskModalFactory
{
    public function __invoke($container): TaskModel
    {
        $db = $container->get('db');
        return $taskModal = new TaskModel($db);
    }


}