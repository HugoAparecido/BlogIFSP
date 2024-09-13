<nav>
    <ul>
        <li><a href="./lista_posts.php">Posts</a></li>
        <?php
        if (!empty($_SESSION['login'])):
        ?>
            <li><a href="./inclusao_post.php">Criar Postagem</a></li>
            <?php
            if ($_SESSION['login']['adm']) {
            ?>
                <li><a href="./lista_usuarios.php">Cadastrar Usuário</a></li>
            <?php
            }
            ?>
            <li><a href="">Olá <?= $_SESSION['login']['nome'] ?></a></li>
        <?php
        endif
        ?>
    </ul>
</nav>