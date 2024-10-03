<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post | Projeto para Web com PHP</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                include 'includes/topo.php';
                include 'includes/valida_login.php';
                ?>
            </div>
        </div>
        <div class="row" style="min-height: 500px;">
            <div class="col-md-12">
                <?php include 'includes/valida_login.php' ?>
            </div>
            <div class="col-md-10" style="padding-top: 50px;">
                <?php
                require_once 'includes/funcoes.php';
                require_once 'core/conexao_mysql.php';
                require_once 'core/sql.php';
                require_once 'core/mysql.php';
                foreach ($_GET as $indice => $dado) {
                    $$indice = limparDados($dado);
                }
                if(!empty($id)){
                    $id =(int)$id;
                    $criterio = [
                        ['id', '=', $id];
                    ];
                    $retorno = buscar(
                        'post',
                        ['*'],
                        $criterio
                    );
                    $entidade = $retorno[0];
                }
                ?>
                <h2>Post</h2>
                <form action="core/post_repositorio.php" method="post">
                    <input type="hidden" name="acao" value="<?php echo empty($id)?'insert':'update' ?>">
                    <input type="hidden" name="id" value="<?php echo $entidade['id'] ?? '' ?>">
                    <div class="form-group"><label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" require="required" value="<?php echo $entidade['titulo'] ?? '' ?>"></div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>