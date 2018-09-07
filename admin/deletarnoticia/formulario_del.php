<html>
    <head>
        <meta charset="utf8_general_ci">
        <title>Notícias Online</title>
        <link rel="stylesheet" type="text/css" href="/CSS/tema.css">
        <link rel="stylesheet" type="text/css" href="/CSS/botoes.css">
        <link rel="icon" href="/IMG/favicon.ico" />
    </head>
    
    <body>
        <?php
            include_once '../../navegacao.php';
            
            $id = $_GET['id'];
        ?>
        <section>
            <h2>Deletar Notícia</h2>
            <article id="corpo">
                <h3>Digite sua senha para confirmar</h3>
                <form action="deletar.php?id=<?php echo $id;?>" id="noticiaform" method="POST">
                    <label for="titulo">Senha da Base de Dados</label>
                    <br>
                    <input type="text" name="senha" maxlength="92" id="inputnoticia">
                    <br>
                    <center>
                        <input type="submit" name="enviarnoticia" value="Deletar Notícia" id="btnnegativo">
                    </center>
                </form>
            </article>
        </section>
    </body>
</html>