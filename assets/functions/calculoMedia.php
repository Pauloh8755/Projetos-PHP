<?php
	//calulo da média
	function calculoMedia($nota1,$nota2,$nota3,$nota4){
		$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
		return $media;
	}
    function camposVazios($campo1,$campo2,$campo3,$campo4){
        if($campo1 === "" || $campo2 === "" || $campo3 === "" || $campo4 === ""){
          return true;
       }
    }
    function validarNumerico($campo1,$campo2,$campo3,$campo4){
        if(!is_numeric($campo1) || !is_numeric($campo2) ||!is_numeric($campo3) ||!is_numeric($campo4)){
       	return true;
        }
    }
?>