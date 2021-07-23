<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do List</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script defer src="js/script.js"></script>


</head>
<body>
<div>
    <h1>TO DO LIST:</h1>
    <div>
        <form action="/" method="post">
            <ul>
                <?php echo \ToDoList\ViewHelper\TasksViewHelper::displayTasks($tasks); ?>
            </ul>
        </form>
    </div>
    <div>
        <form action="/newTask" method="post">
            <ul>
                <li><label for="newTask">Add a new task:</label></li>
                <li><input type="text" id="newTask" name="newTask"></li>
                <li><input class="add_task" type="submit" value="Add task!"></li>
                <li><?php if(isset($_GET['error']) && $_GET['error'] == 1){
                        echo 'Please enter a new task :)';
                    } elseif ( isset($_GET['error']) && $_GET['error'] == 2) {
                        echo 'This task is a bit too long :)';
                    } ?></li>
            </ul>

        </form>

    </div>

</div>

</body>
</html>
