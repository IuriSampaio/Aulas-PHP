<?php

echo "
<h1 style='background: orangered; color: white;font-size: 70px; 
text-align: center; font-family: monospace; 
border-radius: 40px; box-shadow: 2px 4px 18px black; padding: 10px;''>
		NOTE A DIFERENÇA ENTRE O USO DOS TIPOS DE URL´S
</h1>";
// USANDO QUERY STRINGS
var_dump($_GET);
echo"<hr><br>";
echo"<a href='?page=sobre'>SOBRE USANDO QUERY STRING</a>";

if(isset($_GET['page']) && $_GET['page']=='sobre' ){

	require_once 'PAGES/sobre.php';
}

//USANDO URL AMIGAVEL
echo"<hr style='margin-top:200px;'><br>";

echo"<a href='sobre'>SOBRE USANDO .htaccess</a>";
echo"<hr><br><h3>os parametros são divididos pela barra, como indicado no .htaccess:</h3>";

echo"<h4>RewriteEngine On<br>
RewriteCond %{REQUEST_FILENAME} !-f<br>
RewriteCond %{REQUEST_FILENAME} !-d<br>
RewriteRule ^(.*) index.php?url=$1 [QSA,L]</h4>";

$url = explode('/', $_GET['url']);
var_dump($url);

if(isset($url)){
	require_once'PAGES/'.$url[0].'.php';
}