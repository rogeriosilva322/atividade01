<!--
  @autor rogerio Lucio
  @ano 2016

-->
<!--
    Monta a div de pesquisa 
-->
     
    <?php echo form_open_multipart('Departamentos/Pesquisar')?>

     <div  class="col-md-12" style=" overflow:auto;  margin-top:90px; opacity:0.95; width:100% ; background-color:white; " >
     <div class="box"  style="height:200px; padding:30px; margin-top:10px;"  >
    <h1>Pesquisar:</h1>
    <span id="lblinfo"> </span>
    <div  style="  margin-top: 10px; display:inline-block; opacity:1.0;" class="input-group">
    <input type="text" class="form-control" name="barraPesquisa" id="barraPesquisa" style="margin-bottom:-13px; width:500px; opacity:1.0;" placeholder="Pesquise pelo local ou nome do objeto"></div>
    <button  style="display:inline-block;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    <div style="background-color:black; width:100%; margin-top:20px;" id="conteudo"> </div>
    </div>
    <div style="display:block; width:100%; height:20px; background-color:#D8D8D8; opacity:0.75; border-radius:20px;"></div>



 
