

<!Doctype html>
<html lang="pt-br">
	<head><!-- USAR O CARRINHO COMO LISTA DE DESEJOS  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login| ETERNITY</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!--Responsavel pelos icones do site-->
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<!--Responsavel pela responsividade do site-->
	<link href="../css/responsive.css" rel="stylesheet">
	
	<!-- Somente estilizacao e fotos-->
	<link href="../css/photos.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="imagens/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../imagens/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../imagens/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../imagens/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../imagens/ico/apple-touch-icon-57-precomposed.png">
</head><!---->

	<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_topo---->
			<div class="container"><!--DIV CONTAINER-->
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> (055) 55 991524469</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> eternitypetshop@gmail.com.br</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="www.facebook.com.br"><i class="fa fa-facebook"></i></a></li>
								<li><a href="www.twitter.com.br"><i class="fa fa-twitter"></i></a></li>
								<li><a href="www.linkedin.com.br"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="www.dribble.com.br"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="www.googleplus.com.br"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_topo---->

		<div class="header-middle"><!--header-meio-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="../imagens/home/logo.png" alt="" /></a><!--logo -->
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Conta</a></li>

								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="../usuarios2.php"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-meio-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">

								<li class="dropdown"><a href="../index.html">Início<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Produtos</a></li>
										<li><a href="product-details.html">Detalhes Produto</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="cart.html">Carrinho</a></li>
										
                                    </ul>
                                </li>
								<li class="dropdown"><a href="blog.html">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
								<li><a href="../Listar/contato.php">Contato</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->		
		
	
		<section id="form"><!--form-->
		<div class="container">
			<div class="row"><!--tirar isso-->
				<div class="col-sm-6 col-sm-offset-3">
					<div class="login-form"><!--login form-->
						<h2>Login com sua conta</h2>
                       
						<form method="POST" action="login.php"><!-- forma de envio é o post, que vai chamar o login.php-->
                            
							<div class="blank-arrow">
                            <label>Login:</label><input type="text" name="login" id="login"><br>
                            </div>
                            <div class="blank-arrow">
							<label>Senha:</label><input type="password" name="senha" id="senha"><br>
                           </div>
				
						
					
							<button type="submit" value="entrar" id="entrar" name="entrar" class="btn btn-default">Entrar</button>
                            <!--<button type="submit" value="=cadastre-se" class="btn btn-default"><a href="cadastro.html">Cadastre-se</a></button>-->
						</form>
                        <!--tirei o formulário de cadastrar-se que tinha aqui-->
					</div><!--/login form-->
				</div>
				
				
			</div>
		</div>
       

	</section>
        <!--/form-->		
 <?php include("../Footer/footer.php"); ?>
	</body>
	<script src="js/main.js"></script>
</html>