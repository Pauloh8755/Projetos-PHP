<?php
//função para calcular operações matemáticas (argumentos com nome diferente)
function calcular($n1, $n2, $tipoCalculo){
    $numero1 = (double) $n1;
    $numero2 = (double) $n2;
    $opcaoCalculo = (String) $tipoCalculo;
     
        
    //verificando operador através do switch
    switch ($opcaoCalculo){
        case('sum'):
            $total = $numero1 + $numero2;
            break;
        case('sub'):
            $total = $numero1 - $numero2;
            break;
        case('mult'):
            $total = $numero1 * $numero2;
            break;
        case('divi'):
            $total = round($numero1 / $numero2,3);
            break;
        //opção executada caso nenhuma das opções anteriores forem válidas
        default:
            echo(ERRO_CAIXA_VAZIA);
    }
    return $total;
}
?>