<?php
    include './DB/conexion_inventario.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        echo '<p>esta en el buscador</p>';
        $busqueda = $_GET['nombre'];
        $consulta = $con->query("SELECT * FROM peliculas WHERE nompeli LIKE '%$busqueda%'");
        
        
        while ($row = $consulta -> fetch_array()){
            if ($row['nompeli'] == $busqueda){
                $info = $row['info'];
                header("Location: ../tus_peliculas/$info.html");
            }
            else{
                header("Location: ../tus_peliculas/no_encontrado.html");
            }
        }
    ?> 
</body>
</html>