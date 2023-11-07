<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <form action="login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input name="username" type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i> 
            </div>
            <div class="input-box">
                <input name="password" type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember">
                <label>
                    <input type="checkbox" name="remember">
                    Recuerdame
                </label>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">               
                <p>No tienes una cuenta? <a href="#">Registrate</a></p>
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Este metodo verifica si el formulario se envia bien 
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "1234") {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['access_time'] = date("Y-m-d H:i:s");

            header("Location: opciones.php");
            exit();
        } else {
            echo "Datos incorrectos. Inténtalo de nuevo.";
        }
    }
    ?>
</body>
</html>

