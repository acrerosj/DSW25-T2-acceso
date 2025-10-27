<?php
    session_start();
    if (!isset($_SESSION['logueado']) || $_SESSION['logueado']!=="true") {
        header('Location: login.php');
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi aplicacion</title>
</head>
<body>
    <nav>
        Bienvenido <?php echo $_SESSION['name']; ?>
        <a href="logout.php">salir</a> | 
        <a href="index.php">Inicio</a> |
<?php
    if ($_SESSION['level']>=2) {
        echo '<a href="create.php">Crear usuarios</a>';
    }        
?>
   
    </nav>