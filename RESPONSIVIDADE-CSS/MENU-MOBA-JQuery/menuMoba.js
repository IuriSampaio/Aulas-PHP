 // o $ significa a abraveiação de JQuerry
 $(document).ready(function(){
    //todos os codigos tem que estar aqui dentro(ex: tipo o main() do java)
        $('#iconeMenu').click(function(){
            // função para click no icone de menu 
            $('#menuMobile').fadeToggle(1000)
        }); 
        // função que faz o menu subir ao clicar non itemn do menu 
        $('.itemMenu').click(function(){
            $('#menuMobile').fadeOut()
        })
    });