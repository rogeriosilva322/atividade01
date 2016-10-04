window.onload = function () {



}
/*
* A função Buscar Livros faz uma requisição ao php com o ajax buscando os livros de acordo com a informação dada pelo usuario no campo de pesquisa,
* Ao retornar o resultado da busca, a função cria tabelas dinamicamente retornando ao usuario os resultados encontrados
*/
 function BuscarLivros(){
      ajaxx();
      var p = 'action=BuscarLivros';
      p += '&title=' + document.getElementById('barraPesquisa').value.trim() ;
      ajax.open("POST", "../php/livros.php", false); 
      ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
      ajax.onreadystatechange = function() { 
	     var json = JSON.parse(ajax.responseText);
	     if(json == 0){
	         alert('Nenhum dado encontrado');
	         //window.location.href="http://localhost/TrabalhoFinal/clientes.html";
	         return;
	     }
       var conta = 0;
       var conta2 = 0;
       var conta3 = 0;
        document.getElementById("livros").innerHTML ='';
      	 for (var i = 0 ; i < json.length ; i++) {  
          document.getElementById("lblinfo").innerHTML = 'Numero de livros' + i + '<br>';
          document.getElementById("livros").innerHTML += "<div  class='col-md-4 col-sm-6' >"+
                           " <div  class='product' style='padding:15px;'>"+
                                   "<img style='width:250px; height:300px;' src='" + json[i].img +"'   class='img-responsive'>"+
                                   "</a>"+
                                   '<div > <h2>Titulo:</h2></div><h4>'+  json[i].title + '</h4><br>'+
                                   '<div> <h2>Autor:</h2></div><h4>'+  json[i].authors + '</h4><br>'+
                                   '<div> <h2>Código Isbn:</h2></div><h4>'+  json[i].isbn + '</h4><br>'+   
                                    "<div><p class=\"buttons\">"+
                                       "<a href='#' style='margin-left:120px;margin-top:20px;' onclick=\"verdetalhes('"+ json[i].isbn  +  "', '" +  json[i].title + "', '" +  json[i].authors + "','" + document.getElementById('tipo').value + "')\" class=\"btn btn-default\">Ver Detalhes</a>"+
                                    "</p></div>"+
                        "</div>" +
                        "</div>"; 
             } 
                
    } 
    ajax.send(p); 
    

   
   }
/*
* A função Ver detalhes envia como parametro na url para a pagina de detalhes, onde será exposto a descrição do livro solicitado 
*/

function verdetalhes( isbn , titulo, author, tipo ){

  (author === 'Autor Desconhecido'? '' : author);
  (isbn === 'Código indefinido'? '' : isbn);
  (titulo === ''? '' : titulo);

      window.location.href = 'detail.html?title='+ titulo + '&authors='+ author + '&tipo=' +  tipo + '&isbn=' + isbn;

}
