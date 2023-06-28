<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Nuevo titulo</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link href="styles.css" rel="stylesheet">
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="/laboratorio-2/validar.php">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username">

        <label for="password">Password</label>
        <input type="text" placeholder="Password" id="password" name="password">

        <input type="submit" value="Log In" />

        <div class="error-response">
            <?php
                if (isset($_GET['error'])){
                    echo htmlspecialchars($_GET['error']);
                }
            ?>
        </div>
        <div class="success-response">
            <?php
                if (isset($_GET['exito'])){
                    echo htmlspecialchars($_GET['exito']);
                }
            ?>
        </div>
        <br>
        <div>
            <a href="/laboratorio-2/registro.php">Registrarse</a>
        </div>
    </form>
</body>

<script src="script.js"></script>

</html>