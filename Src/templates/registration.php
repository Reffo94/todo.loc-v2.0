<?php require_once __DIR__ . '/main/header.php'?>
    <h1>REGISTRATION PAGE</h1>
    <form action="/registration" method="post">
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">password</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" name="submit" id="submit">
    </form>
<?php require_once __DIR__ . '/main/footer.php'?>
