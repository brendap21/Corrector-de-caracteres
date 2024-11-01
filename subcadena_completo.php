<?php
// Definimos la cadena original fuera del bloque if
$cadena = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
$nuevaSubcadena = "";

// Solo se ejecuta cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Buscamos la posición de la palabra "completo"
    $posicion = strpos($cadena, "completo");
    if ($posicion !== false) {
        // Extraemos la subcadena desde el final de "completo"
        $nuevaSubcadena = substr($cadena, $posicion + strlen("completo"));
    } else {
        $nuevaSubcadena = "La palabra 'completo' no se encontró en la cadena.";
    }
}
?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcadena desde 'completo'</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <main class="presentacion__contenido">
        <div class="seccion__titulo__logo">

            <div class="presentacion__logo">
                <img class="Logo" src="./assets/Logo.png" alt="Logotipo">
            </div>
            
            <h1 class="presentacion__titulo">Mostrar Subcadena desde 'completo'</h1>
            <h2 class="presentacion_subtitulo">Cadena Original: "<?php echo $cadena; ?>"</h2>
        </div>
        
        <div class="resultados">
            <h3>Resultado de Subcadena</h3>
            <p><?php echo $nuevaSubcadena ? $nuevaSubcadena : "Presiona el botón para ver el resultado"; ?></p>
        </div>

        <form method="POST" action="">
            <button type="submit">Mostrar Subcadena</button>
        </form>

        <footer class="footer">
            <p>Desarrollado por Brenda Paola Navarro Alatorre</p>
        </footer>
    </main>
</body>
</html>
