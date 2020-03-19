<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>Formularios</title>
        <meta charset="utf-8">
    </head>
    <style>
        .caixatextonome{
            width: 300px;
            height: 17px;
        }
        .textoformulario{
            font-family: sans-serif;
            font-size: 17px;
        }
        textarea{
            resize: none;
            /* SERVE PARA O TEXTAREA NAO SER REDIMENCIONADO PELO USUSARIO */
        }   
    </style>
    <body>
        <!--  action=""   significa que vai para o proprio arquivo  
              <span>      tag que serve apenas para edita-la no css
              
              <select>                                            cria uma lista para a escolha do usuario
                    <option value="valorQueVaiParaBD">            item da lista criada no select
                    <option value"" selected>                     item que vai estar selecionado por default 
              
              <input type="radio" name="" value="" checked       ESCOLHER ENTRE MARCADORES                      *O NOME VAI AO LADO DO MARCADOR
                     type="checkbox" name="" value=""            ESCOLLHER ENTRE MARCADORES (COM REPETIÇÃO)      *O NOME VAI AO LADO DO MARCADOR
                     type="text" name="" value=""                CAIXA DE TEXTO 
                     type="password" name="" value=""  />        CAIXA DE SENHA
              
              <textarea name="" cols="nº de caracteres(colunas)" rows="nº de linhas">       CAIXA DE TEXTO GIGANTE
        -->
        <form name="frmFormulario" method="get" action="aula2.php">
           <span class="textoformulario">Nome:</span> 
            <input type="text" name="nometxt" value="" class="caixatextonome" maxlength="10" />
            <br><!--********************************<br> nao pode ser ultilizado nos projetos reais *********************************-->
            <br>
            <span class="textoformulario">Estado:</span>
            <select name="sltestado">
                <option value="" selected>Selecione seu estado</option> 
                <option value="SP">São paulo</option>
                <option value="Ac">Acre</option>
                <option value="SC">Santa Catarina</option>
                <option value="MP">Macapá</option>
                <option value="RO">Rondonia</option>
                <option value="RJ">Rio de janeiro</option>
            </select>
            <br>
            <br>
            <span class="textoformulario">Sexo:</span>
                <input type="radio" name="rdosexo" value="F">Feminino
                <input type="radio" name="rdosexo" value="M">Masculino
                <input type="radio" name="rdosexo" value="NB" checked>Não Binario
            <br>
            <br>
            <span class="textoformulario">Idiomas:</span>
                <input type="checkbox" name="chkport" value="PT" checked>Português
                <input type="checkbox" name="chkport" value="ES">Espanhol
                <input type="checkbox" name="chkport" value="EN">Inglês
            <br>
            <br>
            <span class="textoformulario">Senha:</span>
                <input type="password" name="snhsenha" value="" maxlength="20">
            <br>
            <br>
            <span class="textoformulario">Reclame aqui:</span>
                <textarea name="txtreclame" cols="50" rows="7"></textarea>
            <br>
            <br>
            <input type="submit" name="btnsalvar" value="salvar">
            <input type="reset" name="btnreset" value="reset">
        </form>
    </body>
</html>