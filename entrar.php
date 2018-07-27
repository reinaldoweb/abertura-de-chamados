<?php
 require_once('header.php')
?>

  <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Entre com seu usuário e senha.</h3>
	    		<p>Caso ainda não tenha clique em cadastre-se</p>
	    		<br />
				<form method="post" action="validar.php" id="formvalidar">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
						
					</div>
			
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>
					
					<button type="submit" class="btn btn-primary form-control">Logar</button>
				</form>
				
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>

	    