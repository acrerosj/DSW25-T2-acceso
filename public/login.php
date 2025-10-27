<?php
    session_start();
    require '../data/users.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //if($_POST['user'] === "pepe" && $_POST['password'] === '1234') {
        $user = $users[$_POST['user']] ?? null;
        if (isset($user) && $user['pw']==$_POST['password']) {
            $_SESSION['logueado']="true";
            $_SESSION['name'] = $user['name'];
            $_SESSION['level'] = $user['level'];
            header('Location: index.php');
            exit;
        } else {
            echo "usuario o contraseña incorrectos";
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    <h1>Control de acceso</h1>
    <form action="login.php" method="post">
        <p>
            <input type="text" name="user" placeholder="usuario...">
        </p>
        <p>
            <input type="password" name="password" placeholder="contraseña...">
        </p>
        <p>
            <input type="submit" value="Entrar">
        </p>
    </form>
<?php
    include '../templates/footer.php';
?>