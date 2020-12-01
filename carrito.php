<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Boza Delivery's Pan</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
		 <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navegacion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Boza Delivery's Pan</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a >
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        ChatBoot
      </button>

				</a></li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Buscar</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Carrito<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Productos Seleccionados</div>
									<div class="col-md-3">Imagen del producto</div>
									<div class="col-md-3">nombre del producto</div>
									<div class="col-md-3">Precio en s/.</div>
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Login</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Iniciar sesion</div>
								<div class="panel-heading">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" required/>
									<label for="email">Password</label>
									<input type="password" class="form-control" id="password" required/>
									<p><br/></p>
									<input type="submit" onclick="Validar()" class="btn btn-success" style="float:right;" id="login" value="Login">
								</div>

   <script>
      function Validar(){
		  var cod = document.getElementById("email").value;
		  var cod2 = document.getElementById("password").value;
                if(cod ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}else
				if(cod2 ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}
        }
	  
   </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
				<li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span>Registrate</a></li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<div id="get_brand">
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Productos</div>
					<div class="panel-body">
						<div id="get_product">
						</div>

					</div>
					<div class="panel-footer">
<a href="" >Derechos Reservados </a>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
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
							<button id="send-btn" onclick="Validare()">Enviar</button>
							
                        </div>
                    </div>
                </div>
            </div>
			<script>
      function Validare(){
		  var cod = document.getElementById("data").value;
                if(cod ===""){
					swal("Error!", "Datos Incompletos!", "error");
				}else{
					swal("Correcto!", "Mensaje Enviado!", "success");
				}
        }
	  
   </script>
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
</body>
</html>
