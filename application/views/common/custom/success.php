<!--
  @autor rogerio Lucio
  @ano 2016

-->
<!--
    Mensagem padrão de cadastro efetuado com sucesso
-->
     

<div class="text-center" style="padding:50px 0">
	<div class="login-form-1">

	<?php echo form_open_multipart('Principal/Home')?>
<form id="register-form" class="text-left" method="POST" 
 enctype="multipart/form-data" style="width:600px;margin-left:-150px;">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group" style="width:600px;margin-left:-150px;">
					<div class="form-group">
					<h3> Cadastro efetuado com sucesso </h3>
					</div>	
				</div>
				<button type="submit" class="login-button"> <b>OK</b> <i class="fa fa-chevron-right"></i></button>
			</div>
			
		</form>
	</div>
	<!-- end:Main Form -->
</div>