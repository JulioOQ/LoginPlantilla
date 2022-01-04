<!DOCTYPE html>
<html>
<head>


	<title>Verano-2022</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">  

</head>
<body>
	<img class="wave" src="img/rosa.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="public/php/validar.php" method="post">
			 <img src="img/avatar.svg">

				<h2 class="title">BIENVENIDOS</h2>
          <?php if (isset($_GET['error'])) { ?>
                 <p style="background:#FFB9B9;color:#9C0000;padding:5px;width: 90%;border-radius: 5px;margin: 20px auto;font-family: 'Poppins', sans-serif;}"> <?php echo $_GET['error']; ?></p>
            <?php } ?>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" autocomplete="off" class="input" name="cuenta" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input  type="password" class="input" name="pass">
            	   </div>
            	</div>
            	<a id="olvideContra" style="cursor:pointer">Olvide Contraseña?</a>
      
            	<input type="submit" class="btn" value="Iniciar Sesisión">
            </form>
        </div>
    </div>
<script type="text/javascript" src="public/js/main.js"></script>
	<script type="text/javascript" src="public/js/olvidePass.js"></script>

</body>
</html>
