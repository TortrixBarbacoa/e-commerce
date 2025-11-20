<?php
// Script de prueba para verificar SQLite
echo "<h1>Prueba de Extensiones SQLite</h1>";

echo "<h2>Versión PHP:</h2>";
echo "PHP Version: " . PHP_VERSION . "<br>";
echo "PHP ini file: " . php_ini_loaded_file() . "<br>";

echo "<h2>Extensiones SQLite:</h2>";
$extensions = get_loaded_extensions();
$sqlite_extensions = array_filter($extensions, function($ext) {
    return stripos($ext, 'sqlite') !== false;
});

if (empty($sqlite_extensions)) {
    echo "<p style='color:red;'><strong>❌ NO se encontraron extensiones SQLite cargadas</strong></p>";
} else {
    echo "<p style='color:green;'><strong>✅ Extensiones SQLite encontradas:</strong></p>";
    echo "<ul>";
    foreach ($sqlite_extensions as $ext) {
        echo "<li>" . $ext . "</li>";
    }
    echo "</ul>";
}

echo "<h2>PDO Drivers disponibles:</h2>";
$drivers = PDO::getAvailableDrivers();
echo "<ul>";
foreach ($drivers as $driver) {
    $style = ($driver === 'sqlite') ? "color:green;font-weight:bold;" : "";
    echo "<li style='$style'>" . $driver . "</li>";
}
echo "</ul>";

if (in_array('sqlite', $drivers)) {
    echo "<p style='color:green;'><strong>✅ PDO SQLite está disponible</strong></p>";
} else {
    echo "<p style='color:red;'><strong>❌ PDO SQLite NO está disponible</strong></p>";
}

echo "<h2>Prueba de conexión:</h2>";
try {
    $db = new PDO('sqlite::memory:');
    echo "<p style='color:green;'><strong>✅ Conexión SQLite exitosa</strong></p>";
} catch (PDOException $e) {
    echo "<p style='color:red;'><strong>❌ Error de conexión:</strong> " . $e->getMessage() . "</p>";
}


