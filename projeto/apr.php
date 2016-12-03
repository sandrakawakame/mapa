<?php

$_POST['tipoNegocio'] = isset($_POST['tipoNegocio'])? $_POST['tipoNegocio'] : NULL;

$arrCombo =array(
	"restaurant" => "Restaurantes",
	"cafe" => "Cafeteria",
	"bus_station" => "Ponto de ônibus",
	"bakery" => "Padaria"

	);
$valor_selecionado="bakery"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>D</title>
</head>
<body>

<form action="mapa.php" method="post">
	<p>
		<select name="tipoNegocio">
			<option></option>			
			<?php foreach ($arrCombo as $key => $value): ?>
				<?php echo "<option value=\"$key\"> $value<\option>"; ?>
			<?php endforeach; ?>
		</select>
		<input type="submit" name="Submit me!">
	</p>

</form>
</body>
</html>