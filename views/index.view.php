<!DOCTYPE HTML>
<html>

    <head>
        <title>My home page</title>
    </head>

    <body>

<ul>
<li><a href= 'about'>About us</a></li>
<li><a href= 'contact'>Contact us</a></li>
</ul>

    <h1>My tasks</h1>
            <?php foreach($tasks as $task) : ?>
                <li>
                    <?php if($task->completed) :?>
                        <strike><?= $task->description ?></strike>
                    <?php else :?>
                        <?= $task->description ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
    </body>

</html>