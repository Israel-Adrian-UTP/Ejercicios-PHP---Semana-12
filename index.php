<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<center>
		<?php
		echo "----------------------------------------<br/>";
		echo "EJERCICIOS SEMANA 12 - PHP <br/>";
		//Ejercicio 1
		echo "----------------------------------------<br/>";
		echo "Ejercicio 1 <br/>";
		$HorasTrabajadas = 8;
		echo "Horas Trabajadas = " . $HorasTrabajadas . "<br/>";
		if ($HorasTrabajadas >= 8) {
			$Tarifa = 25;
			$Total = $Tarifa * $HorasTrabajadas;
			echo "Salario Total: " . $Total . "<br/>";
		}
		if ($HorasTrabajadas < 8) {
			$Tarifa = 17;
			$Descuento = 0.12;
			$Total = $Tarifa * $HorasTrabajadas;
			$TotalDescuento = $Total * $Descuento;
			$PagoTotal = $Total - $TotalDescuento;
			echo "Salario Total: " . $PagoTotal . "<br/>";
		}
		//Ejercicio 2
		echo "----------------------------------------<br/>";
		echo "Ejercicio 2 <br/>";
		$tipoMoneda = "Soles"; 
		$meses = 10;           
		$montoDepositado = 5000; 
		$porcentaje = 0;
		if ($tipoMoneda == "Soles") {
			if ($meses >= 0 && $meses <= 5) {
				$porcentaje = 3;
			} elseif ($meses >= 6 && $meses <= 12) {
				$porcentaje = 6;
			} elseif ($meses >= 13) {
				$porcentaje = 9;
			}
		} elseif ($tipoMoneda == "Dolares") {
			if ($meses >= 0 && $meses <= 5) {
				$porcentaje = 2;
			} elseif ($meses >= 6 && $meses <= 12) {
				$porcentaje = 4;
			} elseif ($meses >= 13) {
				$porcentaje = 7;
			}
		}
		$interes = ($montoDepositado * $porcentaje) / 100;
		$montoTotal = $montoDepositado + $interes;
		$simboloMoneda = ($tipoMoneda == "Soles") ? "S/." : "$";
		echo "Tipo de Moneda: " . $tipoMoneda . "<br/>";
		echo "Tiempo de deposito: " . $meses . " meses<br/>";
		echo "Monto depositado: " . $simboloMoneda . " " . number_format($montoDepositado, 2) . "<br/>";
		echo "Tasa de interes aplicada: " . $porcentaje . "%<br/>";
		echo "Interes ganado: " . $simboloMoneda . " " . number_format($interes, 2) . "<br/>";
		echo "Monto total a recibir: " . $simboloMoneda . " " . number_format($montoTotal, 2) . "<br/>";
		//Ejercicio 3
		echo "----------------------------------------<br/>";
		echo "Ejercicio 3 <br/>";
		$Velocidad = array(148, 150, 176, 158, 26, 182, 173, 68, 101, 173, 179, 80, 113, 34, 51);
		echo "Velocidades: <br/>";
		$TotalMulta = 0; 
		foreach ($Velocidad as $Veloz) {
			echo $Veloz . " "; 
			$Multa = 0; 
			if ($Veloz >= 60 and $Veloz <= 100) {
				$Multa = 250;
			} elseif ($Veloz >= 101 and $Veloz <= 130) {
				$Multa = 380;
			} elseif ($Veloz >= 131) {
				$Multa = 590;
			}
			$TotalMulta += $Multa; 
		}
		echo "<br/>";
		echo "Monto total de multas: S/. " . $TotalMulta;
		echo "<br/>";
		//Ejercicio 4
		echo "----------------------------------------<br/>";
		$Nombre = "Israel";
		$Categoria = "A";
		$CantidadHorasTrabajadas = 10;
		echo "Ejercicio 4 <br/>";
		echo "Nombre: " . $Nombre . "<br/>";
		echo "Categoria: " . $Categoria . "<br/>";
		echo "Horas Trabajadas: " . $CantidadHorasTrabajadas . "<br/>";
		switch ($Categoria) {
			case "A": $PagoPorHora = 36.90;
					  $PagoTotalHora = $CantidadHorasTrabajadas * $PagoPorHora;
					  echo "Pago: $/." . $PagoTotalHora . "<br/>";
					break;
			case "B": $PagoPorHora = 25.80;
					  $PagoTotalHora = $CantidadHorasTrabajadas * $PagoPorHora;
					  echo "Pago: $/." . $PagoTotalHora . "<br/>";
					break;
			case "C": $PagoPorHora = 21.30;
					  $PagoTotalHora = $CantidadHorasTrabajadas * $PagoPorHora;
					  echo "Pago: $/." . $PagoTotalHora . "<br/>";
					break;
			default: echo "Categoria Incorrecta. <br/>";
		}
		echo "----------------------------------------<br/>";
		?>
		</center>
	</body>
</html>
