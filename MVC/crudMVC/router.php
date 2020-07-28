<?php

// VARIAVEIS QUE SERAM ENCAMINHADAS PARA VIEW

// Pra saber a controler que sera instanciada 
	$controler = null;
// Variavel pra identificar qual a ação da controler(método ao ser usado)	
	$modo = null;


	if (isset($_GET['controler'])){
		$controler = strtoupper($_GET['controler']);

		switch ($controler) {
			case 'CONTATOS':
				
				if (isset($_GET['modo'])){
					
					// RECEBENDO VARIAVEL COM O MODO DESEJADO (MÉTODO DESEJADO)
					$modo = strtoupper($_GET['modo']);	
					
					// IMPORTANDO O AQUIVO CONTROLER(CONTEM OS MÉTODOS)
					require_once('controler/contatosControler.php');

					# INSTANCIANDO A CLASSE CONTROLER PARA USAR SEUS MÉTODOS 
					$contatosControler = new contatosControler();

					switch ($modo) {
						case 'INSERIR':
							$contatosControler -> inserirContato();
							break;

						case 'EDITAR':
							$contatosControler -> atualizarContato();
							break;

						case 'EXCLUIR':
							$id = $_GET['id'];
							$contatosControler -> deletarContato($id);
							break;
							
						default:
							echo "ERROR 404. NOT FOUND";
							break;
					}
				}

				break;
			
			default:
				# code...
				break;
		}
	} 

