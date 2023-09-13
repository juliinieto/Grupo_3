<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role'];
    $password = $_POST['password'];

    if ($role === '1' && $password === 'ipet363') {
        // Lógica para el login del alumno
        header('Location: crear_perfil_alumno.php');
        exit;
    } elseif ($role === '2' && $password === 'Espe363Prog') {
        // Lógica para el login del profesor
        header('Location: crear_perfil_prof.php');
        exit;
    } else {
        $error_message = 'Contraseña incorrecta';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión como <?php echo $_GET['role']; ?></h2>
        <form method="post">
            <input type="hidden" name="role" value="<?php echo $_GET['role']; ?>">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
            <button type="submit">Ingresar</button>
            <?php if (isset($error_message)) echo '<p class="error">' . $error_message . '</p>'; ?>
        </form>
    </div>
</body>
</html>
