<?php


namespace ToDoList\ViewHelper;


class TasksViewHelper
{
    public static function displayTasks(array $tasks): string
    {
        $output = '';
        foreach ($tasks as $task)
        {
            $output .= '<li>';
            if ($task['completed'] == 1) {
                $output .= '<input class="task" type="checkbox" value="' . $task['id'] . '" checked>' . $task['task_name'];
            } else {
                $output .= '<input class="task" type = "checkbox" value="' . $task['id'] . '">' . $task['task_name'];
            }
            $output .='</li>';
        }
        return $output;
    }
}