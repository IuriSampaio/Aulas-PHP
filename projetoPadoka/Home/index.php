<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Padoka</title>
</head>
    <link rel="stylesheet" href="./style.css">
    <script src="./jquery.js"></script>
    <script src="./main.js"></script>
<body>
    <!-- Cabeçalho -->
    <header class="conteinerCabecalho">
        <div class="conteinerCabecalhomini">
            <figure class="logo"><img src="../logo.png" alt="Panificadora Alfa"></figure>
            <!-- Menu -->
        <div class="conteinerMenu">
            <div class="itemMenu"><a href="../Home/index.php">HOME</a></div>
            <div class="itemMenu"><a href="../Pagina2/index2.php">QUEM</a></div>
            <div class="itemMenu">HOME</div>
            <div class="itemMenu">HOME</div>
        </div>
            <!-- login -->
        <div class="conteinerForm">
            <form action="index.html" method="post" class="form">
               <div class="usuario"> Usuario:<br> <input type="text" name="usuario" class="inputs"></div>
                <div class="senha">Senha:<br> <input type="password" name="senha" class="inputs"></div>
                <div class="btnok"><input type="submit" value="Ok" class="btnOk"></div>
            </form>
        </div>
        </div>  
    </header>
    <!-- HOME -->
    <div class="conteinerGG">
        <div class="conteinerG">
            <!-- LADO -->
            <div class="ladoEsquedo"></div>
            <!-- CONTEUDO -->
            <div class="conteudoGG">   
                <div class="slide">
                   <div class="slide_nav">
                       <div class="slide_nav_item b"> >> </div>
                       <div class="slide_nav_item g"> << </div>
                    </div>
                    <?php
                    for($i=1;$i<=4;$i++) :
                        $slide=str_pad($i,2,0,STR_PAD_LEFT);
                        $primeiro=($i==1 ? 'primeiro':'');
                        
                    ?>
                    <article class="slide_item <?= $primeiro; ?>">
                        <img src="images/<?=$slide;?>.jpg" alt="[slide<?=$slide?>]" title="slide<?=$slide?>">
                    </article>
                    <?php endfor; ?>
                </div>
                <!-- PRODUTOS -->
                <div class="produtosGG">
                    <div class="produtosG">
                        <div class="paginas">
                          <div class="pags">Pagina</div>
                          <div class="pags">Pagina</div>
                          <div class="pags">Pagina</div>
                        </div>
                        <div class="produtos">
                            <table>
                                <tr>
                                    <td>
                                        <figure class="foto"></figure>
                                        <div class="descrisaoProduto">
                                            <span>nome:##</span><br>
                                            <span>Descrisao:@</span><br>
                                            <span>UR$199,00</span>
                                        </div>
                                        <input type="submit" value="Detalhes" class="detalhes">
                                    </td>
                                    <td>
                                        <figure class="foto"></figure>
                                        <div class="descrisaoProduto">
                                            <span>nome:#</span><br>
                                            <span>Descrisao:</span><br>
                                            <span>UR$199,00</span>
                                        </div>
                                        <input type="submit" value="Detalhes" class="detalhes">
                                    </td>
                                    <td>
                                        <figure class="foto"></figure>
                                        <div class="descrisaoProduto">
                                            <span>nome:##</span><br>
                                            <span>Descrisao:@@</span><br>
                                            <span>UR$199,00</span>
                                        </div>
                                        <input type="submit" value="Detalhes" class="detalhes">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="foto"></figure>
                                        <div class="descrisaoProduto">
                                            <span>nome:##</span><br>
                                            <span>Descrisao:@@</span><br>
                                            <span>UR$199,00</span>
                                        </div>
                                        <input type="submit" value="Detalhes" class="detalhes">
                                    </td>
                                    <td>
                                        <figure class="foto"></figure>
                                        <div class="descrisaoProduto">
                                            <span>nome:##</span><br>
                                            <span>Descrisao:@@</span><br>
                                            <span>UR$199,00</span>
                                        </div>
                                        <input type="submit" value="Detalhes" class="detalhes">
                                    </td>
                                    <td>
                                        <figure class="foto"></figure>
                                        <div class="descrisaoProduto">
                                            <span>nome:##</span><br>
                                            <span>Descrisao:@@</span><br>
                                            <span>UR$199,00</span>
                                        </div>
                                        <input type="submit" value="Detalhes" class="detalhes">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="foto"></figure>
                                        <div class="descrisaoProduto">
                                            <span>nome:##</span><br>
                                            <span>Descrisao:@@</span><br>
                                            <span>UR$199,00</span>
                                        </div>
                                        <input type="submit" value="Detalhes" class="detalhes">
                                    </td>
                                    <td> 
                                        <figure class="foto"></figure>
                                        <div class="descrisaoProduto">
                                            <span>nome:##</span><br>
                                            <span>Descrisao:@@</span><br>
                                            <span>UR$199,00</span>
                                        </div>
                                        <input type="submit" value="Detalhes" class="detalhes"></td>
                                    <td>
                                        <figure class="foto"></figure>
                                        <div class="descrisaoProduto">
                                            <span>nome:##</span><br>
                                            <span>Descrisao:@@</span><br>
                                            <span>UR$199,00</span>
                                        </div>
                                        <input type="submit" value="Detalhes" class="detalhes">
                                    </td>
                                </tr>
                            </table>    
                        </div>
                    </div>
                      <!-- RODAPÉ -->
                <footer class="rodape">
                    <input type="button" value="Sistema Interno" class="sistema">
                    <span class="endereco">
                        endereço:xxxxxxx xxxxxxxxxxxxxx xxxxxxxxx  n°xxxx
                    </span>
                    <div class="appGG">
                        <figure class="app"></figure>
                        <input type="button" value="Baixe Nosso App" class="appbtn">
                    </div>
                </footer>
                </div>    
            </div>
            <!-- LADO -->
            <div class="ladoDireito">
                    <div class="imglateral"></div>
                    <div class="imglateral"></div>
                    <div class="imglateral"></div>     
            </div>
        </div> 
         
    </div>
    
   
    
</body>
</html>