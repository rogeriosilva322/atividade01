

<!--
	@autor rogerio Lucio
	@ano 2016

-->


<!--
		Formulário de Cadastro de usuários
-->


<div class="text-center" style="padding:50px 0">
	<div class="logo">Cadastre-se</div>

	<?= validation_errors() ?>
	<?php echo form_open('Login/Cadastrar')?>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Nome</label>
						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="Nome">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Senha</label>
						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="Senha">
					</div>
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
					</div>
					<div class="form-group">
						<label for="reg_fullname" class="sr-only">CPF</label>
						<input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>Já tem cadastro? Entre em sua conta <a href="<?php echo("http://localhost/atividade01/")?>">Login</a></p>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$('#cpf').mask('000.000.000-00', {reverse: true});
</script>
