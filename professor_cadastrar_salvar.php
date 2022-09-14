<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Professor - Cadastrar</title>

    <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>

<body>

    <?php
    include './conexao_bd.php';

    $cpf = $_POST['txtCPF'];
    $nome = $_POST['txtNome'];
    $disciplina = $_POST['txtDisciplina'];

    $sql = "INSERT INTO professor (cpf, nome, disciplina) VALUES ('$cpf', '$nome', '$disciplina')";

    if (executarComando($sql)) {
        echo "<h1> Evento Cadastrado com Sucesso</h1>";
    } else {
        echo "<h1> Erro ao cadastrar </h1>";
    }

    ?>


</body>

</html>