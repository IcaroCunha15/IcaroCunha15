<?php
require_once 'conexao.php';
if(!Empty($_GET['id'])){
    $id = $_GET['id'];

    $query = "select * from tb_clientes where id=$id";
    $retorno = $conexao->query($query);
    $lista = $retorno->fetchAll(PDO::FETCH_ASSOC);

          $nome = $lista[0]['nome'];
          $email = $lista[0]['email'];
          $telefone = $lista[0]['telefone'];
          $genero = $lista[0]['genero'];
          $data_nascimento = $lista[0]['data_nascimento'];
          $cidade = $lista[0]['cidade'];
          $estado = $lista[0]['estado'];
          $endereco = $lista[0]['endereco']; 
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Editar Cliente</title>
     <link rel="stylesheet" href="styleFormulario.css">
</head>

<body>
     <div style="text-align: end">

          <a href="logout.php">Sair</a>
     </div>


     <div class="box">
          <form action="saveEdit.php" method="get">
               <fieldset>
                    <legend><b>Atualização de dados </b></legend>
                    <br>
                    <div class="inputBox">
                         <input type="text" name="id" id="id" class="inputUser" value="<?php echo $id ?>" required >
                         <label for="id" class="labelInput">Código:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                         <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                         <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                         <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                         <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                         <input type="text" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                         <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <br>
                    <p>Gênero</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" <?php echo  $genero == 'feminino' ? 'checked' : '' ?> required>
                    <label for="feminino">Feminino</label><br>
                    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo $genero == 'masculino' ? 'checked' : '' ?> required>
                    <label for="masculino">Masculino</label><br>
                    <input type="radio" id="outro" name="genero" value="outro" <?php echo  $genero == 'outro' ? 'checked' : '' ?> required>
                    <label for="outro">Outro</label><br><br>


                    <div>
                         <label for="">Data de Nascimento:</label>
                         <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo  $data_nascimento ?>" required>
                    </div>
                    <br><br>
                    <div class="inputBox">
                         <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
                         <label for="cidade" class="labelInput">Cidade:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                         <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>" required>
                         <label for="estado" class="labelInput">Estado:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                         <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                         <label for="endereco" class="labelInput">Endereço:</label>
                    </div>
                    <br><br>
                  
                    <input type="submit"  name="submit" id="submit"><br><br>
                    <a style="color: white;" href="relatorio.php">Relatório</a><br>
                    
               </fieldset>
          </form>
     </div>
</body>

</html>