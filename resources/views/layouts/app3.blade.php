<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	@yield('css')
	<title></title>
</head>
<body>
	<div class="conteiner">
		<div class="row">
			<main class="py-4">
			    @yield('content')
			</main>
		</div>
	</div>

    @yield('js')
</body>
</html>