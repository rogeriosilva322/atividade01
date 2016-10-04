<!--
  @autor rogerio Lucio
  @ano 2016

-->


<!--
    Formulario de Login de usuários
-->
<?php
session_start(); 
session_destroy(); 
?>
<div class="text-center" style="padding:50px 0">
	<div class="logo"><span style="font-size:50px;"> Encontre já</span></div>
	<div class="logo">Login</div>
	<?= validation_errors() ?>
	<div class="login-form-1">
		<?php echo form_open('Login/Home')?>
		<form id="login-form" class="text-left" >
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
			<input type="text" class="form-control" id="lg_username"  value="<?= set_value('lg_username')?>"  name="lg_username" placeholder="Digite seu CPF">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
				<input type="password" class="form-control" id="lg_password" value="<?= set_value('lg_password')?>" name="lg_password" placeholder="Digite sua senha">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">Lembrar-me</label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>Novo usuario? <a href="<?php echo base_url('Login/FormularioCadastro')?>">Crie uma nova conta</a></p>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$('#lg_username').mask('000.000.000-00', {reverse: true});
</script>
