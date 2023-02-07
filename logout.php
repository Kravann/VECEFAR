<?php
session_start();
session_destroy();
echo "<h1>sesion cerrada</h1>";
echo "<br><br><a href=index.php><button>Iniciar sesion</button></a>"
?>