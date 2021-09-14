<?php
 //função para calcular a tabuada
    function calcularTabuada($tabuada, $contador){
        $count = (int) 1;
        $resposta = (string) null;
         while($count <= $contador){
                $resultado = $tabuada * $count;
                $resposta = $resposta . $tabuada . ' x ' . $count . ' = ' . $resultado . "<br>";
                $count ++;
         }
        return $resposta;
    }
?>