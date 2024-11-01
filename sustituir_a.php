<?php
// Definimos la cadena original fuera del bloque if
$cadena = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
$nuevaCadena = "";

// Solo se realiza la sustitución cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevaCadena = str_replace('a', '*', $cadena);
}
?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustituir 'a'</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <main class="presentacion__contenido">
        
    <div class="seccion__titulo__logo">

            <div class="presentacion__logo">
                <img class="Logo" src="./assets/Logo.png" alt="Logotipo">
            </div>

            <h1 class="presentacion__titulo">Sustituir 'a'</h1>
            <h2 class="presentacion_subtitulo">Cadena Original: "<?php echo $cadena; ?>"</h2>
        </div>
        
        <div class="resultados">
            <h3>Resultado de Sustitución</h3>
            <p><?php echo $nuevaCadena ? $nuevaCadena : "Presiona el botón para ver el resultado"; ?></p>
        </div>

        <form method="POST" action="">
            <button type="submit">Sustituir 'a'</button>
        </form>

        <footer class="footer">
            <p>Desarrollado por Brenda Paola Navarro Alatorre</p>
        </footer>
    </main>
</body>
</html>
