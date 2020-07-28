      
        <script>
            
          
            $(document).ready(function(){
               $('.pesquisar').click(function(){
                    $('#modal').fadeIn(1000);
               });

               //quando o obj foto tiver um conteudo
               $('#foto').live('change',function(){
                        $('#frmFoto').ajaxForm({
                            target:'#imagemFoto'
                        }).submit();
               });
          });

     
          function vizualizarctt(idCtt){ 
               $.ajax({
                    // chamada via post
                    type:"POST",
                    // para está pagina
                    url: "BD/vizualizaCtt.php",
                    // modo vizualizar e id passado pelo argumento da função
                    data:{modo:'vizualizar',id:idCtt},
                    success:function(dados){
                         $('#modalConteudo').html(dados);
                    }
               });
          }

        
        </script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<div id="modal">
          <a id="fechar">close</a>
          <div id="modalConteudo"></div>
     </div>
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
              
                 <form action="router.php?controler=CONTATOS&modo=INSERIR" method="post" 
                    enctype="multipart/form-data" class="lala">
                
                    <input type="text" name="nome" value="<?=@$nome?>"  placeholder="digite seu nome" id="nome">
                   
                    
                    
                    <input type="text" name="cep" id="cep" value="<?=@$cep?>" placeholder="digite seu cep">
                    <input type="text" name="endereco" value="<?=@$endereco?>" id="endereco"  placeholder="digite seu endereco">
                    <input type="text" name="bairro" value="<?=@$bairro?>" id="bairro"  placeholder="digite seu bairro">
                    <select name="estados" id="estados" >
                       
                            <option value="">selecione um estado...</option> 
                 
                    </select>
                    <input type="text" name="tel" id="telefone" value="<?=@$telefone?>" placeholder="apenas numeros">
                    <input type="text" name="cel" id="cel" value="<?=@$celular?>" placeholder="apenas numeros">
                    <input type="text" name="email" value="<?=@$email?>" id="email"  placeholder="melhor email">
                    <input type="text" name="dataNasc" value="<?=@$dtNascBra?>" id="dataNasc"  placeholder="ex:01/01/1901">
                    <div class="sexo">
                    <input type="radio" name="rdoSexo" id="feminino" value="F" 
                    <?php  echo @$sexo == 'F' ? 'checked' : ''  ; ?> 
                    >Feminino
                    <input type="radio" name="rdoSexo" id="masculino" value="M"
                    <?php  echo @$sexo == 'M' ? 'checked' : ''  ; ?>
                    >Masculino
                    </div>
                    <textarea name="obs" placeholder="obs..." id="obs" cols="50" rows="5"><?=@$obs?></textarea>
                    <input type="submit" value="SALVAR" name="btnSalvar" id="btnSalvar">
                </form>
            </div>
        </div>
        <div class="consulta">
            <table>
                <tr class="titulo" >
                   <th colspan="5">Consulta de Contatos</th>    
                </tr>
                <tr>
                    <td>Nome</td>
                   
                    <td>Celular</td>
                    <td>Estado</td>
                    <td>Email</td>
                    <td>Opções</td>
                </tr>
                <?php
                    require_once 'controler/contatosControler.php';

                    $listaContatos = new contatosControler();
                
                    $dados = $listaContatos->listarCTT();

                    $cont = 0;
                    while($cont<count($dados)){
                ?>

                <tr>
                    <td><?=$dados[$cont]->getNome()?></td>
                    <td><?=$dados[$cont]->getCelular()?></td>
                    <td><?=$dados[$cont]->getIdEstado()?></td>
                    <td><?=$dados[$cont]->getEmail()?></td>
               

                    <td>
                    <div class="options">
                            <a class="fas fa-user-times" onclick="return confirm('Deseja realmente excluir o registro?');"
                             href="router.php?controler=contatos&modo=excluir&id=<?=$dados[$cont]->getIdCtt()?>"></a>

                            <a class="pesquisar fas fa-search-plus" onclick="vizualizarctt();"></a>
<!-- -->

                            <a class="fas fa-edit"
                            href="index.php?modo=consultaEditar&id=<?=$rsContatos['idContatos']?>" 
                            ></a>
                        </div>
                    </td>
                </tr>
                <?php
                    $cont+=1;
                    }
                ?>
            </table>
        </div>

    </div>

    </div>