<?php
session_start();

 if (isset($_SESSION['nome']) ==  FALSE){
    ?>
    <script>
            alert('Área Restrita, por favor cadastre-se no sistema');
            window.location.href="http://localhost/atividade01/login";
    </script>
    <?php
  
   
 }
?>
<div class="navbar-wrapper" style="position: absolute;">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container" style="">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                     
                    <a class="navbar-brand" href="#">---</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
    <li class="active"><a href="<?php echo base_url('Principal/Home') ?>" class="">HOME</a></li>
    <li class="active"><a href="<?php echo base_url('Departamentos') ?>" class="">PESQUISAR</a></li>
    <li class="active"><a href="<?php echo base_url('Cadastrar/') ?>" class="">CADASTRAR</a></li>              

        <ul class="nav navbar-nav pull-right" style="margin-left:350px;">
            
            <li ><a href="<?php echo base_url('login/') ?>">Logout</a></li>
            <li> <h5 style="float:right;"><b>Usuário: <?php echo $_SESSION["nome"]  ?>
                
            </b> <br> CPF: <?php echo $_SESSION["cpf"]  ?> </h5></li>
        </ul>

                

            </div>
        </nav>
    </div>

</div>
       
