<?php 
     require_once('verificaCep.php');
     require_once('BD/banco.php');
     $conex = conexaoMysql('dbContatos20201A');
     //var_dump($conex);
 
      if(isset($_POST['btnSalvar'])){
              $nome = $_POST['nome'];
              $cep = $_POST['cep'];
              $cep = filtroDeCaracter($cep);
              $endereco = $_POST['endereco'];
              $bairro = $_POST['bairro'];
              $idEstado = $_POST['estados'];
              $telefone = $_POST['tel'];
              $celular = $_POST['cel'];
              $email = $_POST['email'];
              $nascimento = explode("/",$_POST['dataNasc']);
              $nascimentoAmericano = $nascimento[2]."-".$nascimento[1]."-".$nascimento[0];
              $sexo = $_POST['rdoSexo'];
              $observacao = $_POST['obs'];
              if(eCep($cep)){
                $sqli = "insert into tblContatos values (Default,'".$nome."',
                '".$endereco."','".$bairro."','".$cep."','".$idEstado."',
                '".$telefone."','".$celular."','".$email."','".$nascimentoAmericano."','".$sexo."','".$observacao."' )";
                   //  echo($sqli);
                if(mysqli_query($conex,$sqli))
                     echo("<script> console.log('inserido com suscesso') </script>");
                 else
                     echo("<script> alert('erro') </script>");
              }
      }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP e BD</title>
</head>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<body>
    <div class="conteinerGGG">
    <div class="conteinerGG">
        <div class="cabecalho">
            Integração do PHP com o Banco de Dados
        </div>
        <div class="conteinerG">
            <div class="cabecalhoForm">
                Cadastro de Contatos
            </div>
            <div class="conteinerPerg">
                <div class="perguntas">Nome:</div>
                <div class="perguntas">CEP:</div>
                <div class="perguntas">Endereço:</div>
                <div class="perguntas">Bairro:</div>
                <div class="perguntas">Estado:</div>
                <div class="perguntas">Telefone:</div>
                <div class="perguntas">Celular:</div>
                <div class="perguntas">Email:</div>
                <div class="perguntas">Data de Nascimento:</div>
                <div class="perguntas">Sexo:</div>
                <div class="perguntas obs">Observação:</div>
            </div>
            <div class="conteinerForm">
                <form action="" method="post">
                    <input type="text" name="nome" id="nome">
                    <input type="text" name="cep" id="cep" >
                    <input type="text" name="endereco" id="endereco">
                    <input type="text" name="bairro" id="bairro">
                    <select name="estados" id="estados">
                       <option value="">selecione um estado...</option>
                       <?php
                                        $sql = "select * from tblEstados20201A orderbyname" ;
                                        $selecionaEstados = mysqli_query($conex,$sql) ;
                                while( $rsEstados = mysqli_fetch_assoc($selecionaEstados)){
                            ?>
                        <option value="<?=$rsEstados['idEstado']?>"><?=$rsEstados['nome']?></option>
                            <?php } ?>
                    </select>
                    <input type="text" name="tel" id="telefone" value="apenas numeros">
                    <input type="text" name="cel" id="cel" value="apenas numeros">
                    <input type="text" name="email" id="email">
                    <input type="text" name="dataNasc" id="dataNasc">
                    <div class="sexo">
                    <input type="radio" name="rdoSexo" id="feminino" value="F">Feminino
                    <input type="radio" name="rdoSexo" id="masculino" value="M">Masculino
                    </div>
                    <textarea name="obs" placeholder="obs..." id="obs" cols="50" rows="5"></textarea>
                    <input type="submit" value="SALVAR" name="btnSalvar" id="btnSalvar">
                </form>
                
            </div>
        </div>
        <div class="consulta">
            <table>
                <tr class="titulo" >
                   <td colspan="5">Consulta de Contatos</td>    
                </tr>
                <tr>
                    <td>Nome</td>
                    <td>Celular</td>
                    <td>Estado</td>
                    <td>Email</td>
                    <td>Opções</td>
                </tr>
                <?php
                    //comando do mysql que ordena os contatos do ultimo cadastrado para o primeiro
                    $sql = "select * from tblcontatos order by idContatos desc";
                    //envia o comando para mysql
                    $dadosCtt = mysqli_query($conex,$sql);

                    // mysqli_fetch_array()  --> transforma oque vem do banco em um array, mas tem falhas de segurança
                    // mysqli_fetch_assoc() --> idem o anterior, mas possui mais segurança
                    // mysqli_fetch_object() --> transforma oque vem do banco em um objeto 
                    
                    // $rs --> record set --> retorno dos dados do banco 
                    // Repetição que lista os contatos
                    while( $rsContatos = mysqli_fetch_assoc($dadosCtt) ){
                ?>
                <tr>
                    <td><?= $rsContatos['nome'] ?></td>
                    <td><?= $rsContatos['celular'] ?></td>
                    <td><?= $rsContatos['idEstado'] ?></td>
                    <td><?= $rsContatos['email'] ?></td>
                    <td>
                    <div class="options">
                            <i class="fas fa-user-times"></i>
                            <i class="fas fa-search-plus"></i>
                            <i class="fas fa-edit"></i>
                        </div>
                    </td>
                </tr>
                    <?php } ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <div class="options">
                            <i class="fas fa-user-times"></i>
                            <i class="fas fa-search-plus"></i>
                            <i class="fas fa-edit"></i>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </div>

    </div>
  <script src="postmon.js"></script>  
</body>
</html>