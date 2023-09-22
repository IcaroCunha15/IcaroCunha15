<?php
    require_once 'src/conexao.php';
    
    # solicita a conexão com o banco de dados e guarda na váriavel dbh.
    $dbh = Conexao::getConexao();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $nome = strtoupper(trim($_POST['nome']));

        # cria uma instrução SQL para inserir dados na tabela perfil.
        $query = "INSERT INTO escolabd.perfis (nome) 
        VALUES ('" . $nome . "');"; 

        # manda excecutar a instrução query na tabela do banco de dados (adicionar registro).
        # se tudo estiver certo, retorna um valor maior que zero (true).
        $result = $dbh->exec($query);

        if ($result)
        {
            echo '<script>alert("Perfil inserido com sucesso.");</script>';
        } else {
            echo 'Não foi fossível inserir perfil';
            # método da classe conexao que informa o error ocorrido na execução da query.
            $error = $dbh->errorInfo();
            print_r($error);
        }
    }
    echo "<a href='index.php'>Voltar</a>";

    $dbh = null;