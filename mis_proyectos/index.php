<?php
    $directorio = getcwd();
    echo "Archivos y directorios en: " . $directorio . "\n";

    // Abre el directorio.
        $gestor = opendir($directorio);

    if ($gestor === false) {
    echo "No se pudo abrir el directorio: " . $directorio;
    exit;
    }

    // Lee el directorio.
    while (false !== ($entrada = readdir($gestor))) {
        // Ignora "." y ".."
        if ($entrada != "." && $entrada != "..") {
            echo "<br><a href='". $entrada ."\'>" . $entrada . "</a>" ;
        }
    }

?>