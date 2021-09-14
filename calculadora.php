<?php 
//importando  arquivo das fuções para calculo
require_once('assets/functions/calculos.php');
require_once('assets/functions/constErros.php');
require_once('assets/functions/validar.php');
/*
    include
    include_once
    require
    require_once        
*/
        
//declarando variável para fazer tratamento de inicialização do resultado
$resultado = (double) 0;
$num1 = null;
$num2 = null;
$operador = (string) null;
$erro = null;
    

//tratamento para execeução do código apenas quando o botão ser precionado
if(isset($_POST['btnCalcular'])){
    //resgatando valores do formulário HTML
    $num1 = $_POST['txtNum1'];
    $num2 = $_POST['txtNum2'];
    //tratamento radio não selecionado
    if(!isset($_POST['rdoOperadores'])){
		$erro = (ERRO_CAIXA_VAZIA);
	}
    //tratamento para campos vazios com o método empty() 
    else if(empty($num1) || empty($num2)){
        $erro= (ERRO_CAIXA_VAZIA);
        
    }
    else if(campoNumerico($num1,$num2)){
        $erro = (ERRO_NAN);   
	}
    else{
	//resgatando valor do rdo e convertendo em UpperCase
     	$operador = strtolower($_POST['rdoOperadores']);
        //chamando função calcular
        $resultado = calcular($num1, $num2, $operador); 
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>
           Calculadora
        </title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,900;1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/style/style.css">
        
    </head>
    <body>
        <header id="header">
            <div class="container">
                <div id="logo-menu">
                    <p>PHP</p>
                </div>
                <div id="menu">
                    <img class="img-burgue"src="assets/img/menu.png">
                    <nav id="menu-lateral">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
								<div class="hr-projeto"></div>
							</li>
                            <li>
                                <a href="media.php">Calculo de Médias</a>
								<div class="hr-projeto"></div>
							</li>
                            <li>
                                <a href="calculadora.php">Calculadora Basica</a>
								<div class="hr-projeto"></div>
							</li>
                            <li>
                                <a href="tabuada.php">Calculo da Taboada</a>
								<div class="hr-projeto"></div>
                            </li>
							<li>
                                <a href="imparOuPar.php">Impares e Pares</a> 
								<div class="hr-projeto"></div>
							</li>
                        </ul>
                    </nav>
                </div>
            </div>    
        </header>
        <section id="projetos">
            <div class="container-form">
                <form name="formCalculadora" method="post">
					<div class="formItens">
						<h1>
							Calculadora &#x221C;
						</h1>
					</div>
					<div class="form-itens">
						<input class="campo" type="text" name="txtNum1" placeholder="Primeiro valor" maxlength="5" value="<?=$num1?>">
					</div>
					<div class="form-itens">
						<input class="campo" type="text" name="txtNum2" placeholder="Segundo valor" maxlength="5" value="<?=$num2?>">
					</div>
					<div class="container-resultado">
						<div>
							<input class="rdosCalculo"type="radio" name="rdoOperadores" value="sum"  <?=$operador == 'sum' ? 'checked' : ''?>> 
							<label class="txt-padrao"> Somar</label>
						</div>
						<div>
							<input class="rdosCalculo" type="radio" name="rdoOperadores" value="sub" <?=$operador == 'sub' ? 'checked': ''?>>
							<label class="txt-padrao"> Subtrair</label>
						</div>
						<div>
							<input class="rdosCalculo" type="radio" name="rdoOperadores" value="mult" <?=$operador == 'mult' ? 'checked': ''?>>
							<label class="txt-padrao"> Multiplicar</label>
						</div>
						<div>
							<input class="rdosCalculo" type="radio" name="rdoOperadores" value="divi" <?=$operador == 'divi' ? 'checked': ''?>>
							<label class="txt-padrao"> Dividir</label>
						</div>
					</div>
					<div class="container-erro">
						<h4>
							<?=$resultado?>
						</h4>
					</div>
					<div class="form-itens">
						<input class="button-calcular" type="submit" name="btnCalcular" value="Calcular">
					</div>
                    <div class="form-itens">
                        <?=$erro?>
                    </div>
            	</form>
            </div>
        </section>
       <footer id="rodape">
            <p class="txt-simples">Desenvolvido por Paulo Henrique | &copy; Copright 2021.</p>
            <div id="container-redes-sociais">
                <div class="container-icon">
                    <img class="img-icon" src="assets/img/linkedin.png">
                </div>
                <div class="container-icon">
                    <img class="img-icon" src="assets/img/github.png">
                </div>
                <div class="container-icon">
                    <img class="img-icon" src="assets/img/insta.png">
                </div>
            </div>
        </footer>
    </body>
</html>