<?php
	function selectMinimo(){
		for($count = 0; $count <=500;$count++){
			$option = $option . '<option>' . $count . '</option>' ;
		}
		return $option;
	}
	function selectMaximo(){
		for($count = 100; $count <=1000;$count++){
			$option = $option . '<option>' . $count . '</option>' ;
		}
		return $option;
	}
?>