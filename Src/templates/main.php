<?php require_once __DIR__ . '/main/header.php';?>
    <h1>MAIN PAGE</h1>
    <?php foreach ($content as $task):?>
        <hr>
        <p>id: <?=$task->id?></p>
        <p>name: <?=$task->name?></p>
        <p>description: <?=$task->description?></p>
        <p>createdat: <?=$task->createdat?></p>
        <p>userid <?=$task->userid?></p>
        <hr>
    <?php endforeach; ?>
<?php require_once __DIR__ . '/main/footer.php'?>
