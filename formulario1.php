<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);

    if (!empty($nombre) && !empty($email)) {
        header("Location: pag2.html");
        exit();
    } else {
        echo "<p>Por favor, completa todos los campos para que podamos responderte adecuadamente.</p>";
    }
} else {
    echo "<p>Acceso no autorizado.</p>";
}
?>
