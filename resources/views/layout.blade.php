<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Cliente</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-4.1.3-dist/css/bootstrap.css">
</head>
<body style="background-image: url(/img/bg.jpg); background-repeat: no-repeat; background-size: cover;">
	@include('cabecalho')

	@yield("conteudo-principal")

	@include('rodape')
</body>
<script type="text/javascript" src="/css/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
</html>