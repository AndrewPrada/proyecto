<?php
session_start();

// destrumos la sesion del usuario

unset($_SESSION);
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"],$params["httponly"]);
}
session_destroy();

// redireccionamos a la pantalla del login
header("Location: index.php");
