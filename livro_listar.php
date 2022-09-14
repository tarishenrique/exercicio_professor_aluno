<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Livro - Listar</title>

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
    $sql = "SELECT * FROM livro";

    $resultado = retornarDados($sql);
    ?>

    <form name="formListar" action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">


                    <h2>Livro - Listar</h2>

                    <div class="form-group">
                        <table>

                            <tr>
                                <td>ISBN</td>
                                <td>Título</td>
                                <td>Autor</td>

                            </tr>



                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>


                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>

</html>