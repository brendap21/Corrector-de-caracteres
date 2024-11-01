<?php
// Define la cadena y las vocales fuera del bloque if
$cadena = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
$vocales = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cuenta las vocales solo cuando se envía el formulario
    foreach ($vocales as $vocal => &$cantidad) {
        $cantidad = substr_count(strtolower($cadena), $vocal);
    }
}
?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Vocales</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <main class="presentacion__contenido">
        
        <div class="seccion__titulo__logo">

            <div class="presentacion__logo">
                <img class="Logo" src="./assets/Logo.png" alt="Logotipo">
            </div>

            <h1 class="presentacion__titulo">CONTAR VOCALES</h1>
            <h2 class="presentacion_subtitulo">Cadena: "<?php echo $cadena; ?>"</h2>
        </div>    
        
        <div class="container">
            <div class="resultados">
                <h3>Resultados de Vocales</h3>
                <?php
                // Verifica si el formulario fue enviado antes de mostrar resultados
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    foreach ($vocales as $vocal => $cantidad) {
                        echo "<p>La vocal '$vocal' aparece $cantidad veces.</p>";
                    }
                } else {
                    echo "<p>Presiona el botón para contar las vocales en la cadena.</p>";
                }
                ?>
            </div>

            <form method="POST" action="">
                <button type="submit">CONTAR VOCALES</button>
            </form>
        </div>

        <footer class="footer">
            <p>Desarrollado por Brenda Paola Navarro Alatorre</p>
        </footer>
    </main>
</body>
</html>
