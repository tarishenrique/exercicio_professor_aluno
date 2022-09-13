<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Livro - Cadastrar</title>

        <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR --> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    </head>
    <body>
        <form name="formCadastrar" action="livro_cadastrar_salvar.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Livro - Cadastrar</h2>
                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" class="form-control" required="" placeholder="ISBN do livro" name="txtISBN">
                        </div>
                        
                           <div class="form-group">
                            <label>Título</label>
                            <input type="text" class="form-control" required="" placeholder="Título do livro" name="txtTitulo">
                        </div>
                        
                            <div class="form-group">
                            <label>Autor</label>
                            <input type="text" class="form-control"  placeholder="Autor(es)" name="txtAutor">
                        </div>

                        
                           
                        </div>


                        <div class="form-group">

                            <input type="submit" value="Cadastrar" class="btn btn-info" name="btCadastrar"  >
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
