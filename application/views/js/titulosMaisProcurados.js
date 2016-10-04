
window.onload = function () {
	var  escolha='1';
	MostrarLista(escolha);

}
/*
	Mostra os livros cadastrados no banco retornando quantas vezes o mesmo foi pesquisado.
*/

 function MostrarLista(escolha){
      ajaxx();
      var p = 'action=MostrarLista';
      p += '&escolha=' + escolha;
      ajax.open("POST", "../php/titulosMaisProcurados.php", false); 
      ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
      ajax.onreadystatechange = function() { 
	     var json = JSON.parse(ajax.responseText);
	     if(json == 0){
	         alert('Nenhum dado encontrado');
	         //window.location.href="http://localhost/TrabalhoFinal/clientes.html";
	         return;
	     }

        document.getElementById("livros").innerHTML ='';
      	 for (var i = 0 ; i < json.length ; i++) {  
      	 	if(json[i].titulo === 'Indefinido'){
      	 		 document.getElementById("livros").innerHTML += "<div >"+
                           " <div  class='product' style='padding:15px;'>"+
                                   '<div> <h4>Autor:</h4></div>'+  json[i].Autor + ''+
                                   '<div> <h4>Código Isbn:</h4></div>'+  json[i].isbn + ''+
                                   '<div> <h4>Qtd Busca:</h4></div>'+  json[i].qt_pesquisa + ''+   

			                        "</div>" +
			                        "</div>"; 

      	 	}else{
      	 		 document.getElementById("livros").innerHTML += "<div >"+
                           " <div  class='product' style='padding:15px;'>"+
                                   '<div id="titulo"> <h4>Titulo:</h4></div>'+  json[i].titulo + ''+
                                   '<div> <h4>Autor:</h4></div>'+  json[i].Autor + ''+
                                   '<div> <h4>Código Isbn:</h4></div>'+  json[i].isbn + ''+
                                   '<div> <h4>Qtd Busca:</h4></div>'+  json[i].qt_pesquisa + ''+   

			                        "</div>" +
			                        "</div>"; 
      	 	}
         		
             }
                
    } 
    ajax.send(p); 
   }
