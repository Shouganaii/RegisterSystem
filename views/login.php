<!DOCTYPE html>
<html>
<head>
	<title>Sistema de registros</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/materialize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/materialize.min.css" />
      <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/materialize.min.js" ></script>
      <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/materialize.js" /></script> <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
<style>
  /* label color */
   .input-field label {
     color: #000;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #000;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #000 ;
     box-shadow: 0 1px 0 0 #000;
   }
   /* valid color linha de baixo do input text */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #0d47a1 ;
     box-shadow: 0 1px 0 0 #000;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #000 ;
     box-shadow: 0 1px 0 0 #000;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #000 ;
   }
</style>     
</head>
<body>
	<div class="container">
            <h4 class="">Sistema de Registros</h4>

		<?php if(!empty($msg)): ?>
			<div class="warning">
				<?php echo $msg; ?>
			</div>
		<?php endif; ?>

                <form method="POST" action="<?php echo BASE_URL; ?>login/signin" class="align-center">
                    <div class="row ">
                        <div class="input-field col s6">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="icon_prefix" type="text" class="validate" name="username">
                          <label for="icon_prefix">Usuario</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" type="password" class="validate" name="pass">
                          <label for="password">Password</label>
                        </div>

			<button class="waves-effect waves-light btn" type="submit" />Entrar</button>
                    </div>
		</form>
		
              
		<!--<a  class="waves-effect waves-light btn-large left" href="<?php echo BASE_URL; ?>login/signup">Cadastre-se</a>-->
                
	</div>  
      <script type="text/javascript" href="<?php echo BASE_URL; ?>assets/js/materialize.min.js" ></script>
      <script type="text/javascript" href="<?php echo BASE_URL; ?>assets/js/materialize.js" /></script>
</body>
</html>