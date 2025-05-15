<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Cadastro</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="verificarCadastro.php">Listar Usuários</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="containerSection">
            <form action="verificarCadastro.php" method="post">
                <input type="email" placeholder="informe  seu E-mail:"
                name="email" id="email">
                <input type="submit" value="Buscar">

            </form>
        </section>

        <section>

            <?php
                //verificar se o campo email está preenchido

                if(isset($_POST["email"])){
                    //exibir informações passadas pelo form
                    //echo var_dump($_POST);
                
                    //Salva a informação de email enviado pelo form
                    $email = $_POST["email"];
                
                    //Recebe as informações de conexão com o DB
                    include("../conexao/conexao.php");
                
                    //consulta ao banco de  dados
                    $sql = "SELECT * FROM usuarios WHERE email = ?";

                    //preparar a conexão junto com a consulta
                    $stmt = $conn->prepare($sql);

                    //Validando se a conexão foi feita com sucesso
                    if($stmt){
                        //Troca a informção e e-mail pela ? no sql
                        $stmt->bind_param("s", $email);
                        //Executa o comando
                        $stmt->execute();
                        //Salva o resultado da consulta
                        $resultado = $stmt->get_result();
                        

                        if($resultado->num_rows > 0){
                            echo "Ele Existe";
                            //Armazenar as informações dele
                            $row = $resultado->fetch_assoc();
                            echo var_dump($row);
                        }
                        else{
                            echo "Ele não Existe";
                        }
                    }


                }
            ?>

        </section>
    </main>

</body>
</html>