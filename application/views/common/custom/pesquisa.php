
<!--
  @autor rogerio Lucio
  @ano 2016

-->


<!--
    Monta a div  contendo os  objetos dinâmicamente 
-->
     


<body>

<span style="text-shadow: 1px 1px black ">*Caso encontrado, clique sobre o objeto para entrar em contato</span>
        <div id="conteudo" style=" padding-left:5%;">

<?php
        foreach ($objetos as $row) {
      ?>        
  <div  class='out-box'  title="Deixar uma mensagem" style='display:inline-block;padding:0px;' onclick="window.open('<?php echo 'http://localhost/atividade01/email/EmailSend?emailContato='.$row['email'] ;?>')" >
            		<h3 class="title-max">Nome do Objeto: <?php echo $row['titulo'] ?> 
                    <br> Publicado Por: <?php echo $row['nome'] ?></h3><br>

  <img class="img"  style='width:120px; margin-top:5px; height:120px;' src="<?php echo ($row['file'] == true ? base_url( "imagem/" . $row["file"] ) : "") ?>"><br>
                    <h5 class="title">Descrição do Itém: <?php echo $row['descricao'] ?> </h5><br>
                    <h5 class="title-max" >Contato </h5><br>
            		<h5 class="title" >E-mail: <?php echo $row['email'] ?> </h5>
		 		  	<h5>Local de Encontro/Perda: <?php echo $row['local'] ?> </h5>

                         </div>
 <?php
        }     
?>
 </div>
 
 </div>
</body>

