<html>
	<head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">        
		<title>Meu site</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
       
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/materialize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/materialize.min.css" />
                <meta charset="UTF-8">
	</head>
	<body>
            <div>
                
		<header>
			
		</header>
                <main>
		<section>
                    
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</section>
                </main>
                <footer>
                    
			
		</footer>
            </div>   
             <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/materialize.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/materialize.min.js"></script>
	</body>
</html>