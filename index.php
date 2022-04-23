<!DOCTYPE html>
<html>
<head>
	<title>FourZ | O mundo procura empresas como você</title>
	<meta charset="UTF-8">
	<meta name="description" content="A maior empresa de marketing digital do Brasil. Software de Marketing de conteúdo para sites e para redes sociais, com estratégias focadas no cliente.">
	<meta name="referrer" content="no-referrer-when-downgrade">
	<meta name="robots" content="all">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="ico" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css"

	</head>
	<body>
	
	
	<div class="size1 bg0 where1-parent">
	<div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('images/bg01.jpg');">
	<div class="wsize2 flex-w flex-c-m cd100 js-tilt">
	<img src="images/icons/logo.png" height="300" class="ca">
	</div>
	</div>
	
	<div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
	<div class="wrap-pic1">
	<img src="images/icons/logo.png" height="55">
	<img src="images/icons/logo2.png" height="30">
	</div>
	<div class="p-t-50 p-b-60">
	
	<p class="m1-txt1 p-b-36">
	O nosso site <span class="m1-txt2">está chegando</span>, siga-nos para proximas atualizações!
	</p>
	
	<form action="" method="post" enctype="multipart/form-data" class="form">
	<form class="contact100-form validate-form">
	<div class="wrap-input100 m-b-10 validate-input" data-validate = "Nome é necessário">
	<input class="s2-txt1 placeholder0 input100" type="text" name="nome" placeholder="Seu nome">
	<span class="focus-input100"></span>
	</div>

	<div class="wrap-input100 m-b-20 validate-input" data-validate = "Email é necessário: ex@abc.xyz">
	<input class="s2-txt1 placeholder0 input100" type="text" name="email" placeholder="Seu Email">
	<span class="focus-input100"></span>
	</div>

	<div class="w-full ">
	<label class="col-xs-2 col-form-label"></label>
	<button type="submit" class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04" id="btn-contato">
	Siga-nos
	</button>
	</div>
	<div class="mostrar"></div>
	</form>
	</form>

	<p class="s2-txt3 p-t-18">
	E não se preocupe, não lhe enviaremos SPAM! OK ? 
	</p>
	</div>

	<div class="flex-w">
	<a href="#" class="flex-c-m size5 bg1 how1 trans-04 m-r-5">
	<i class="fa fa-facebook"></i>
	</a>

	<a href="#" class="flex-c-m size5 bg1 how1 trans-04 m-r-5">
	<i class="fa fa-instagram"></i>
	</a>
	</a>
		
	</div>
	
	<p class="s2-txt3 p-t-4">
	© 2019 FourZ. Todos os direitos reservados.<br>
	Feito com ❤ por <font color="gray">
	<a href="www.alpha13.com.br" id="meulink">Alpha13.com.br</a></font>
	</p>
	</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script src="ajax/js/sweetalert.js"></script>
	<script >
	$('.js-tilt').tilt({
	scale: 1.1
	})
	</script>
	<script>
	$(function(){
		$('.form').submit(function(){
			$('.loading').html("<img src='ajax/loading.gif' width='45'>");
			$.ajax({
				url: 'ajax/send-form.php',
				type: 'POST',
				data: $('.form').serialize(),
				success: function(data){
					$('.mostrar').html(data);
					$('.loading').hide();
					$('.form')[0].reset();
				}
			});
			return false;
		});
	});
	</script>	
	<script src="js/main.js"></script>
	</body>
	</html>