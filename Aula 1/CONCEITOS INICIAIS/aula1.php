<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Aula 1 PHP</title>
    </head>
    <body>

      <!-- para abrir a tag PHP: -->     <?php      //OS CODIGOS VAO AQUI                 ?> 
                                         <?         #OS CODIGOS VAO AQUI                 ?>
            
        <!--para fazer formulario no html:  <form name="TodosTemNome" method="get ou post" action=""(todo formulario tem esses especificações)>
        colocar uam coisa desejada no html:  <input type="text" name="qualquernome">(coloca uma caixa de texto no html)
                                                    type="submit"                   (coloca um botao)
                                                    type="button"                   (coloca um botao)
                                                                  value="NoBotão"   (coloca uma coisa escrita no btn)
                                            </form>           -->
        <style>
            .destaque{
                font-weight: bold;
                font-family: fantasy;
                font-size: 20px;
            }
            .alinhamento{
                text-align: center;
                align-content: center;
                
            }
        
        </style>
        <form name="frmBotao" method="get" action="aula1.php">
            DIGITE SEU NOME:
            <input type="text" name="txtnome" >
            <input type="submit" name="btnnome" value="Salvar">
        </form>   
        
        <?php
            /*  modos para escrever uma mensagem no PHP ----->  echo("") 
                                                                print("")  
                                                                print_r("")  
                                                                
                variavel no PHP ---------> $variavel = $_GET['nome do input quando se usa get no formulario'];     
                                           $variavel = $_PUT['nome do input quando se usa put no formulario'];  */
        
            $nome = $_GET['txtnome'];
            echo("BEM VINDO AO PHP, <span class='destaque'>" .$nome. "</span> é nois");
           
            
        ?>
    </body>
</html>