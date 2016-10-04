
<!--
	@autor rogerio Lucio
	@ano 2016

-->


<!--
		Formulário de envio de e-mail.
-->


<div class="text-center" style="padding:50px 0">
	<div class="logo">E-mail de Contato</div>
	<!-- Main Form -->
	<div class="login-form-1">
	<?= validation_errors() ?>
	<?php echo form_open_multipart('email/EnvioEmail')?>
<form id="register-form" class="text-left" method="POST" 
 enctype="multipart/form-data" style="width:600px;margin-left:-150px;">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group" style="width:600px;margin-left:-150px;">



					<div class="form-group">
						<label for="reg_fullname" class="sr-only">Name</label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
					</div>
					<div class="form-group" >
						<label for="reg_username" class="sr-only">Assunto</label>
						<input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto">
					</div>
					<div class="form-group" style="height:100px;">
						<label for="reg_username"   class="sr-only"></label>
						<textarea type="text" class="form-control" id="mensagem" name="mensagem" placeholder="Mensagem "></textarea>
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Local</label>
						<input type="text" class="form-control" id="emailPessoal" name="emailPessoal" placeholder="Digite Seu e-mail">
					</div>
					<div class="form-group">
					<span> Email do Contato </span>
						<label for="reg_password_confirm" class="sr-only">EmailContato</label>
		<input type="text" class="form-control"  readonly="readonly"  value="<?php echo $emailContato ?>" id="emailContato" name="emailContato" placeholder="Digite Seu e-mail">
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

