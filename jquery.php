<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title></title>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</style>
<script>
	$(document).ready(function() {
		$("form").hide();
		$("#show").click(function() {
			$("form").show();
		});
		$("#hide").click(function() {
			$("form").hide();
		});
	});
</script>
</head>
<body>
	<input type="checkbox"  id="show">Crear usuario
	<form>
		aqui creamos el formulario	<br>
		<input type="checkbox" id="hide">Cancelar
	</form>
</body>
</html>