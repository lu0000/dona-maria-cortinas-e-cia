<?php
    require "../arrays.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../estilo.css" rel="stylesheet">
        <title>Percianas</title>
</head>

<body>

    <header>
        <div class="logo-topo">
            <a href="../index.php"><img src="../imagens/elementos-do-site/logo-dona-maria-1.png"></a>
        </div>
        
        <div class="barra-pesquisa">
            <form action="" method="post">
                <label>
                    <input type="text" id="nome" name="nome" placeholder="O que você procura?" required>
                </label>
                <button><img src="../imagens/elementos-do-site/lupa.png"></button>
            </form>
        </div>

        <div id="menu-topo">
            <ul>
                <li><a href="login.html"><img src="../imagens/elementos-do-site/entrar.png"></a></li>
                <li><a href="favoritos.php"><img src="../imagens/elementos-do-site/favoritos.png"></a></li>
                <li><a href="carrinho.html"><img src="../imagens/elementos-do-site/carrinho.png"></a></li>
            </ul>
        </div>
    </header>

    <main><!--Corpo do Site-->
        <div class="bloco-itenspg">
            <?php
                foreach($produtos as $i => $f){
                    if($f["categoria"] == "percianas"){
            ?>
            <div class="itens">
                <a href="visualizar.php?i=<?=$i?>">
                    <div class="itens-img"><img src="../<?=$f["foto"]?>" alt="<?=$f["descricao"]?>"></div>
                    <div class="itens-descricao">
                        <div><p class="texto-limitado"><?=$f["nome"]?></p></div>
                        <h1><?=$f["preco"]?></h1>
                    </div>
                </a>
            </div>
            <?php
                }}
            ?>
        </div>
    </main>

    <footer><!--Rodapé do Site-->
        <p>© 2023 Dona Maria Cortinas e Cia. Todos os direitos reservados</p>    
    </footer>

</body>

</html>