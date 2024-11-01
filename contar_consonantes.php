<?php
// Define la cadena y las consonantes fuera del bloque if
$cadena = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
$consonantes = [];

// Solo cuenta las consonantes cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Convertimos la cadena a minúsculas para contar de manera insensible a mayúsculas
    $cadenaMinusculas = strtolower($cadena);
    
    // Recorre cada letra en la cadena y cuenta solo las consonantes
    foreach (count_chars($cadenaMinusculas, 1) as $ascii => $cantidad) {
        $letra = chr($ascii);
        if (ctype_alpha($letra) && !in_array($letra, ['a', 'e', 'i', 'o', 'u'])) {
            $consonantes[$letra] = $cantidad;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Consonantes</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <main class="presentacion__contenido">
        <div class="seccion__titulo__logo">

            <div class="presentacion__logo">
                <img class="Logo" src="./assets/Logo.png" alt="Logotipo">
            </div>

            <h1 class="presentacion__titulo">CONTAR CONSONANTES</h1>
            <h2 class="presentacion_subtitulo">Cadena: "<?php echo $cadena; ?>"</h2>
        </div>
        
        <div class="resultados">
            <h3>Resultados de Consonantes</h3>
            <?php
            // Verifica si el formulario fue enviado antes de mostrar los resultados
            if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($consonantes)) {
                foreach ($consonantes as $consonante => $cantidad) {
                    echo "<p>La consonante '$consonante' aparece $cantidad veces.</p>";
                }
            } else {
                echo "<p>Presiona el botón para contar las consonantes en la cadena.</p>";
            }
            ?>
        </div>

        <form method="POST" action="">
            <button type="submit">CONTAR CONSONANTES</button>
        </form>

        <footer class="footer">
            <p>Desarrollado por Brenda Paola Navarro Alatorre</p>
        </footer>
    </main>
</body>
</html>
