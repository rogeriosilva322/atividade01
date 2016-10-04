window.onload = function () {
    var url   = window.location.search.replace("?", "");
    var items = url.split("&");

  BuscarLivros(items);


}


 function BuscarLivros(items){
      ajaxx();



      var p = 'action=BuscarLivros';
      	p += '&' + items[0];
        p += '&' + items[2];
        p += '&' + items[1];
        p += '&' + items[3];

      ajax.open("POST", "../php/detalhes.php", false); 
      ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      ajax.onreadystatechange = function() { 
	     var json = JSON.parse(ajax.responseText);

	     if(json == 0){
	         alert('Nenhum dado encontrado');
	       //  window.location.href="http://localhost/TrabalhoFinal/clientes.html";
	         return;
	     }
       var conta = 0;
       var conta2 = 0;
       var conta3 = 0;
        document.getElementById("livros").innerHTML ='';
      	 for (var i = 0 ; i < json.length ; i++) {  
          document.getElementById("livros").innerHTML += "<div  style='padding:15px;' >"+
                           " <div  class='product' style='padding:15px;'>"+
                                   "<img style='width:250px; height:300px;' src='" + json[i].img +"'   class='img-responsive'>"+
                                   "</a>"+
                                   '<div style=" font-size: 20px;"> Titulo:</div><span style="font-size: 18px;">'+  json[i].title + '</span><br>'+
                                   '<div style=" font-size: 20px;"> Autor:</div><span style="font-size: 18px;">'+  json[i].authors + '</span><br>'+
                                   '<div style=" font-size: 20px;"> Código Isbn:</div><span style="font-size: 18px;">'+  json[i].isbn + '</span><br>'+   
                                   '<div style=" font-size: 20px;"> Descrição :</div><span style="font-size: 18px;">'+  json[i].descricao + '</span><br>'+   
                                   
                        "</div>" +
                        "</div>"; 
             } 
                
    } 
    ajax.send(p); 
    

   
   }


function verdetalhes( isbn){



  window.location.href = 'detail.html?isbn='+isbn ;
  alert()
  alert(isbn);
}
