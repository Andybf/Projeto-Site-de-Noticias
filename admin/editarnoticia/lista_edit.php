<html>
    <head>
        <meta charset="utf8_general_ci">
        <title>Notícias Online</title>
        <link rel="stylesheet" type="text/css" href="/CSS/tema.css">
        <link rel="stylesheet" type="text/css" href="/CSS/botoes.css">
        <link rel="stylesheet" type="text/css" href="/CSS/lista_de_noticias.css">
        <link rel="icon" href="IMG/favicon.ico" />
    </head>
    
    <body>
        <?php
            include_once '../../navegacao.php';
        ?>
        <section>
            <h2>Editar Notícia</h2>
            <article id="corpo">
                <h3>Selecione a notícia no qual você quer editar</h3>
                <?php
                    session_start();
                    
                    $host = $_SESSION["host"];
                    $usuario = $_SESSION["usuario"];
                    $senha = isset($_SESSION["senha"])? $_SESSION["senha"] : $senha = '';
                    $basedados = $_SESSION["basedados"];
                    
                    if(mysqli_connect_errno($conexao = mysqli_connect($host, $usuario, $senha, $basedados))){
                        echo "Erro de conexao<br>";
                    }
                    
                    //Era para ter uma estrutura while aqui, mas devido a restrições do projeto
                    //ficou essa sequencia de comandos repetidos abaixo. Ao todo serão 10 repetições.
                    //1
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from Andybf_noticias where id = 1;"));
                    if($resultado[0] == "" || $resultado[0] == null){
                        echo '';
                    }else{
                        echo "<a id='lista' href='formulario_edit.php?id=1&titulo=$resultado[1]&slug=$resultado[2]&descricao=$resultado[3]&conteudo=$resultado[4]&palavraschave=$resultado[5]&imagem=$resultado[7]'>".
                                "id: $resultado[0] , data: $resultado[6] <br> titulo: $resultado[1] </a>";
                    }
                    //2
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from Andybf_noticias where id = 2;"));
                    if($resultado[0] == "" || $resultado[0] == null){
                        echo '';
                    }else{
                        echo "<a id='lista' href='formulario_edit.php?id=2&titulo=$resultado[1]&slug=$resultado[2]&descricao=$resultado[3]&conteudo=$resultado[4]&palavraschave=$resultado[5]&imagem=$resultado[7]'>" .
                                "id: $resultado[0] , data: $resultado[6] <br> titulo: $resultado[1] </a>";
                    }
                    //3
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from Andybf_noticias where id = 3;"));
                    if($resultado[0] == "" || $resultado[0] == null){
                        echo '';
                    }else{
                        echo "<a id='lista' href='formulario_edit.php?id=3&titulo=$resultado[1]&slug=$resultado[2]&descricao=$resultado[3]&conteudo=$resultado[4]&palavraschave=$resultado[5]&imagem=$resultado[7]'>".
                                "id: $resultado[0] , data: $resultado[6] <br> titulo: $resultado[1]</a>";
                    }
                    //4
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from Andybf_noticias where id = 4;"));
                    if($resultado[0] == "" || $resultado[0] == null){
                        echo '';
                    }else{
                        echo "<a id='lista' href='formulario_edit.php?id=4&titulo=$resultado[1]&slug=$resultado[2]&descricao=$resultado[3]&conteudo=$resultado[4]&palavraschave=$resultado[5]&imagem=$resultado[7]'>".
                                "id: $resultado[0] , data: $resultado[6] <br> titulo: $resultado[1]</a>";
                    }
                    //5
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from Andybf_noticias where id = 5;"));
                    if($resultado[0] == "" || $resultado[0] == null){
                        echo '';
                    }else{
                        echo "<a id='lista' href='formulario_edit.php?id=5&titulo=$resultado[1]&slug=$resultado[2]&descricao=$resultado[3]&conteudo=$resultado[4]&palavraschave=$resultado[5]&imagem=$resultado[7]'>".
                                "id: $resultado[0] , data: $resultado[6] <br> titulo: $resultado[1]</a>";
                    }
                    //6
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from Andybf_noticias where id = 6;"));
                    if($resultado[0] == "" || $resultado[0] == null){
                        echo '';
                    }else{
                        echo "<a id='lista' href='formulario_edit.php?id=6&titulo=$resultado[1]&slug=$resultado[2]&descricao=$resultado[3]&conteudo=$resultado[4]&palavraschave=$resultado[5]&imagem=$resultado[7]'>".
                                "id: $resultado[0] , data: $resultado[6] <br> titulo: $resultado[1]</a>";
                    }
                    //7
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from Andybf_noticias where id = 7;"));
                    if($resultado[0] == "" || $resultado[0] == null){
                        echo '';
                    }else{
                        echo "<a id='lista' href='formulario_edit.php?id=7&titulo=$resultado[1]&slug=$resultado[2]&descricao=$resultado[3]&conteudo=$resultado[4]&palavraschave=$resultado[5]&imagem=$resultado[7]'>".
                                "id: $resultado[0] , data: $resultado[6] <br> titulo: $resultado[1]</a>";
                    }
                    //8
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from Andybf_noticias where id = 8;"));
                    if($resultado[0] == "" || $resultado[0] == null){
                        echo '';
                    }else{
                        echo "<a id='lista' href='formulario_edit.php?id=8&titulo=$resultado[1]&slug=$resultado[2]&descricao=$resultado[3]&conteudo=$resultado[4]&palavraschave=$resultado[5]&imagem=$resultado[7]'>".
                                "id: $resultado[0] , data: $resultado[6] <br> titulo: $resultado[1]</a>";
                    }
                    //9
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from Andybf_noticias where id = 9;"));
                    if($resultado[0] == "" || $resultado[0] == null){
                        echo '';
                    }else{
                        echo "<a id='lista' href='formulario_edit.php?id=9&titulo=$resultado[1]&slug=$resultado[2]&descricao=$resultado[3]&conteudo=$resultado[4]&palavraschave=$resultado[5]&imagem=$resultado[7]'>".
                                "id: $resultado[0] , data: $resultado[6] <br> titulo: $resultado[1]</a>";
                    }
                    //10
                    $resultado = mysqli_fetch_array(mysqli_query($conexao, "select * from Andybf_noticias where id = 10;"));
                    if($resultado[0] == "" || $resultado[0] == null){
                        echo '';
                    }else{
                        echo "<a id='lista' href='formulario_edit.php?id=10&titulo=$resultado[1]&slug=$resultado[2]&descricao=$resultado[3]&conteudo=$resultado[4]&palavraschave=$resultado[5]&imagem=$resultado[7]'>".
                                "id: $resultado[0] , data: $resultado[6] <br> titulo: $resultado[1]</a>";
                    }
                    ?>
            </article>
        </section>
    </body>
</html>
