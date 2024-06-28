<?php require_once __DIR__ . '/main/header.php'?>
    <h1>LOGIN PAGE</h1>
    <?php foreach ($content as $user):?>
        <hr>
        <p>id: <?=$user->id?></p>
        <p>name: <?=$user->email?></p>
        <p>password: <?=$user->password?></p>
        <p>authtoken <?=$user->authtoken?></p>
        <hr>
    <?php endforeach; ?>
<?php require_once __DIR__ . '/main/footer.php'?>
