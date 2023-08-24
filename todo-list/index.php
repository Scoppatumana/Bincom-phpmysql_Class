<?php
    include("action.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Todo List</title>
</head>
<body>
    <div class="todo-wrapper">
        <div class="title">
            Todo List Application
        </div>

       <form action="index.php" method="post">
            <div class="forms">
                <input type="text" class="task" name="task" id="task">
                <input type="submit" class="submit-btn" name="add-task" value="Add Task">
            </div>
       </form>
        <ul>
            <?php
                foreach ($errors as $key => $error) {
            ?>
            <li><?php echo $error ?></li>
            <?php
                }
            ?>
        </ul>
        <div class="list">
            <table>
            <thead>
                <th>S/N</th>
                <th>Task</th>
                <th>Action</th>
            </thead>

                <tbody>
                <?php
                    foreach ($tasks as $key => $task) {
                ?>
                <tr>
                        <td> <?php echo $key+1; ?> </td>
                        <td><?php echo $task['task']; ?></td>
                        <td class="action">
                            <a href="index.php?del_id=<?php echo $task['id']; ?>">
                                <button>X</button>
                            </a>
                        </td>
                    </tr>
                <?php
                        
                    }
                ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>