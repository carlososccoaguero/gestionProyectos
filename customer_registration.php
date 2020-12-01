<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Boza Delivery's Pan</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
			<a href="index.php" class="navbar-brand">Boza Delivery's Pan</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="carrito.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
				<li><a >
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        ChatBoot
      </button>

				</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Formulario de registro de cliente</div>
					<div class="panel-body">
					
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">Nombre</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Apellidos</label>
								<input type="text" id="l_name" name="l_name" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="password" name="password" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Repetir Password</label>
								<input type="password" id="repassword" name="repassword" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Celular</label>
								<input type="text" id="mobile" name="mobile" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Dirección </label>
								<input type="text" id="address1" name="address1" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Referencia</label>
								<input type="text" id="address2" name="address2" class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" onclick="Validar()" value="Registrarse" type="button" id="signup_button" name="signup_button"  class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

		
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
		 <center>
		
		
            <div class="modal-body">
                <div class="wrapperr">
                    <div class="titlee">CHATT BOOT PANADERIA</div>
                    <div class="formm">
                        <div class="bot-inboxx inboxx">
                              <div class="iconn">
                                <i class="fas fa-user"></i>
                             </div>
                             <div class="msg-headerr">
                              <p>Hola soy tu asistente</p>
                            </div>     
                        </div>
                    </div>
                    <div class="typingg-fieldd">
                        <div class="inputt-dataa">
                            <input id="data" type="text" placeholder="Ingrese Datos" required>
                            <button id="send-btn">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
		  
		</center>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inboxx inboxx"><div class="msg-headerr"><p>'+ $value +'</p></div></div>';
                $(".formm").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'mensaje.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inboxx"><div class="iconn"><i class="fas fa-user"></i></div><div class="msg-headerr"><p>'+ result +'</p></div></div>';
                        $(".formm").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".formm").scrollTop($(".formm")[0].scrollHeight);
                    }
                });
            });
        });
    </script>


	<script>
      function Validar(){
		  var cod = document.getElementById("f_name").value;
		  var cod2 = document.getElementById("l_name").value;
		  var cod3 = document.getElementById("email").value;
		  var cod4 = document.getElementById("password").value;
		  var cod5 = document.getElementById("repassword").value;
		  var cod6 = document.getElementById("mobile").value;
		  var cod7 = document.getElementById("address1").value;
		  var cod8 = document.getElementById("address2").value;
		  		 
		        if(cod ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}else
				if(cod2 ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}else
				if(cod3 ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}else
				if(cod4 ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}else
				if(cod5 ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}else
				if(cod6 ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}else
				if(cod7 ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}else
				if(cod8 ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}else{
					swal("Correcto!", "Usuario Registrado!", "success");
				}
        }
	  
   </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>



















