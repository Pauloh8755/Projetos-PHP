<?php
	//função para validar campos vazios valor e tipo
    function campoStringVazio($campo1, $campo2){
        if($campo1 === "" || $campo2 === ""){
            return true;
             //$resposta = (ERRO_CAIXA_VAZIA);
        }
    }
	//função validar campos vazios
	function campoVazio($campo1, $campo2){
        if(empty($campo1) || empty($campo2)){
            return true;
             //$resposta = (ERRO_CAIXA_VAZIA);
        }
    }
    //função para validar campos numéricos
    function campoNumerico($campo1, $campo2){
        if(!is_numeric($campo1) || !is_numeric($campo2)){
            return true;
        }
    }
    //função para validar campo com valor zero
    function campoZero($campo1, $campo2){
        if($campo1  == 0 || $campo2 == 0){
            return true;
        }
    }
	//função para validar se um option foi selecinado
	function campoSelecionado($option1, $option2){
		if(strpos($option1,'selecione') || strpos($option2, 'selecione')){
			return true;
		}
	}
	//função para validar se o primeiro número é maior que o segundo
	function PrimeiroNumeroMaior($num1, $num2){
		if($num1 >= $num2){
			return true;
		}	
	}


    
	
?>