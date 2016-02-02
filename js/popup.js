//inicio o jquery
$(document).ready(function() {
  $('#pesquisar').click(function(){
// inicio uma requisição
        $.ajax({
        // url para o arquivo json.php
            url : "banco.php",
        // dataType json
            dataType : "json",
        // função para de sucesso
            success : function(data){
            // vamos gerar um html e guardar nesta variável
                console.log(data);
     
            // executo este laço para ecessar os itens do objeto javaScript
                for($i=0; $i < data.length; $i++){

                $( "#clientes" ).append('<li>'+data[$i]+'</li>');
                }//fim do laço
            }
        });//termina o ajax
    });
});//termina o jquery