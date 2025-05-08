<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Alunos</title>
    <link rel="stylesheet" href="../estilos/styleCadastrar.css">
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="">Início</a></li>
                <li><a href="">Cadastrar Usuário</a></li>
                <li><a href="">Listar Usuários</a></li>
            </ul>
        </nav>
    </header>


    <main>  
        <form action="cadastro.php" method='post'>
            <h2>Cadastro Aluno</h2>

            <label for="nome">Nome</label>
            <input type="text" name='nome' id='nome' required> 

            <label for="sobrenome">Sobrenome</label>
            <input type="text" name='sobrenome' id='sobrenome' required> 

            <label for="email">E-mail</label>
            <input type="email" name='email' id='email' required>

            <label for="curso">Selecione o curso: </label>
            <select name="curso" id="curso">
                <option value="ads">Análise e desenvolvimento de simtemas</option>
                <option value="engenharia_software">Engenharia de software</option>
                <option value="sistema_informação">Sistema da infromação</option>
                <option value="ciencias_computação">Ciências da computação</option>

                <input type="submit" value="Cadastrar">

            </select>
        </form>

        <?php

            echo var_dump($_POST)

        ?>
    </main>




</body>
</html>