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
            
            ?>
             <form method="post" action="exemplo23.php" name=formulario>
                <label>NOME:</label>
                <input type="text" name="nome">
                <label>ANO DE NASCIMENTO:</label>
                <input type="number" min=1900 max=2050 name="ano">
                <fieldset>
                    <legend>GÊNERO:</legend>
                    <input type="radio" name="genero" value="masculino" checked>
                    <label>MASCULINO</label>
                    <input type="radio" name="genero" value="feminino">
                    <label>FEMININO</label>
                </fieldset>
                <p><input type="submit" value="Exibir"></p>
                <p><input type="reset" value="limpar"></p>
            </form>
        </div>
    </body>
</html>