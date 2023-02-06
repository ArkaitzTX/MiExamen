<?


$hostDB = 'mysqlarkaitzLe';
$nombreDB = 'usuario';
$usuarioDB = 'root';
$contrasenyaDB = 'admin1234';

$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

$miConsulta = $miPDO->prepare('SELECT * FROM usuario;');
$miConsulta->execute();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuario</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table td {
            border: 1px solid orange;
            text-align: center;
            padding: 1.3rem;
        }
        .button {
            border-radius: .5rem;
            color: white;
            background-color: orange;
            padding: 1rem;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <p><a class="button" href="insert.php">Crear</a></p>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
    <?php foreach ($miConsulta as $clave => $valor): ?> 
        <tr>
           <td><?= $valor['nombre']; ?></td>
           <td><?= $valor['apellido']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

?>
