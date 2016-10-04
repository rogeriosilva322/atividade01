
<!--
	@autor rogerio Lucio
	@ano 2016

-->


<!--
		Formulário de upload de objetos perdidos
-->


<div class="text-center" style="padding:50px 0">
	<div class="logo">Cadastro</div>
	<!-- Main Form -->
	<div class="login-form-1">
	<?= validation_errors() ?>
	<?php echo form_open_multipart('Cadastrar/EnvioDados')?>
<form id="register-form" class="text-left" method="POST" 
 enctype="multipart/form-data" style="width:600px;margin-left:-150px;">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group" style="width:600px;margin-left:-150px;">
					<div class="form-group" >
						<label for="reg_username" class="sr-only">Titulo</label>
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
					</div>
					<div class="form-group">
						<label for="reg_username" class="sr-only"></label>
						<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe uma breve descrição ">
					</div>
					<div class="form-group" style="padding:22px;">
						<span><b>Imagem</b></span>	<input type="file" id="arquivo" name="arquivo"  class="botao">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Local</label>
						<input type="text" class="form-control" id="local" name="local" placeholder="Local da Perda/Achado">
					</div>
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Email de Contato">
					</div>
					<div class="form-group">
						<label for="reg_fullname" class="sr-only">Name</label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome">
					</div>
						
				</div>
				<div class="form-group" style="margin-left:100px;">
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
				</div>
			</div>
			
		</form>
	</div>
	<!-- end:Main Form -->
</div>
