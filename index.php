<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>EXERCICIO PRÁTICO SOBRE PHP</title>

    <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!--------------------------------------------->
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <h1>Exercício prático sobre acesso a dados </h1>
            </div>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-sm-12">
                <h3>Cadastros - INSERT</h3>
                <a href="livro_cadastrar.php">
                    <input type="button" class="btn btn-info" value="Livro - Cadastrar" />
                </a>

                <a href="professor_cadastrar.php">
                    <input type="button" class="btn btn-info" value="Professor - Cadastrar" />
                </a>


            </div>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-sm-12">
                <h3>Listar - SELECT</h3>
                <a href="livro_listar.php">
                    <input type="button" class="btn btn-warning" value="Livro - Listar" />
                </a>

                <a href="professor_listar.php">
                    <input type="button" class="btn btn-warning" value="Professor - Listar" />
                </a>


            </div>
        </div>



        <div class="row" style="margin-top: 20px">
            <div class="col-sm-12">
                <h3>Editar e Remover - UPDATE e DELETE</h3>
                <a href="livro_pesquisar.php">
                    <input type="button" class="btn btn-success" value="Livro - Pesquisar" />
                </a>

                <a href="professor_pesquisar.php">
                    <input type="button" class="btn btn-success" value="Professor - Pesquisar" />
                </a>


            </div>
        </div>

    </div>
</body>

</html>