<?php
	function somar($valor1, $valor2)
    {
		if (is_numeric($valor1)&& is_numeric($valor2)) { 
			return $valor1 + $valor2;
		} 
		return "Um dos valores é inválidos.";
        
    }
	function subtrair($valor1, $valor2)
    {
        if (is_numeric($valor1)&& is_numeric($valor2)) { 
			return $valor1 - $valor2;
		} 
		return "Um dos valores é inválidos.";
    }
	function multiplicar($valor1, $valor2)
    {
        if (is_numeric($valor1)&& is_numeric($valor2)) { 
			return $valor1 * $valor2;
		} 
		return "Um dos valores é inválidos.";
    }
	function dividir($valor1, $valor2)
    {
        if (is_numeric($valor1)&& is_numeric($valor2)) { 
			return $valor1 / $valor2;
		} 
		return "Um dos valores é inválidos.";
    }
?>