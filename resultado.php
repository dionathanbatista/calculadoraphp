<?php
    include('funcoes.php');	
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$acao = $_POST['acao'];
	switch ($acao) {
    case "f_somar":
        echo somar($valor1,$valor2);
        break;
    case "f_subtrair":
        echo subtrair($valor1,$valor2);
        break;
    case "f_multiplicar":
        echo multiplicar($valor1,$valor2);
        break;
	case "f_dividir":
        echo dividir($valor1,$valor2);
        break;
	default:
		echo "Ação Inválida.";
		break;
}
    
?>