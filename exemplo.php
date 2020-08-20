<?php

require_once __DIR__."/configDb.php";

/**
 * @var $query Faz a consulta no banco de dados
 * @var $getAll pega todos os dados do banco de dados
 */

$sql = "SELECT * FROM cursos ORDER BY ordem ";
$query = $conexao->query($sql);

$getAll = $query->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Exemplo simples de Drag and Drop</title>
</head>
<body>
    
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <h3 id="new" class="text-center m-5"> Tabela de cursos</h3>
            <table class="table table-stripped table-bordered" id="lista">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Curso</td>
                        <td>Posição</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($getAll as $get): ?>
                    <tr id="arrayOrdem_<?php echo $get->id ?>">
                        <td><?php echo $get->id ?></td>
                        <td><?php echo $get->nome ?></td>
                        <td><?php echo $get->ordem ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="alljquery/external/jquery/jquery.js"></script>
    <script src="alljquery/jquery-ui.js"></script>
    <script src="exemplo.js"></script>
</body>
</html>