<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "Envio de valores com POST e testes <br><br>";
                $sNome=empty($_POST["name"])?"Nome não informado":$_POST["nome"];
                //date("Y") pega o ano atual com 4 digitos no PHP
                $iAno = empty($_POST["ano"])?date("Y"):$_POST["ano"];
                $sGenero =$_POST["genero"];
                $iIdade = date("Y")-$iAno;
                echo "$sNome tem $iIdade anos de idade e seu gênero é $sGenero.<br>";
            ?>
           
        </div>
    </body>
</html>