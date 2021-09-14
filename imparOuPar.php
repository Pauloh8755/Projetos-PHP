<?php
    require_once('assets/functions/constErros.php');
	require_once('assets/functions/optionImparPar.php');
	require_once('assets/functions/validar.php');
   	
	$par = (string) null;
	$impar = (string) null;
	$quantImpar = (int) null;
	$quantPar = (int) null;
    $erro = (string) null;

	if(isset($_POST['btnCalcular'])){
		$minimo = $_POST['sltValorMinimo'];
		$maximo = $_POST['sltValorMaximo'];
		
		if(campoSelecionado($minimo, $maximo)){
			$erro = ERRO_OPTION_VAZIO;
		}
		else if(primeiroNumeroMaior($minimo,$maximo)){
			$erro = ERRO_INICIAL_MAIOR;
		}
		else{
			for($count=$minimo; $count <= $maximo; $count++){
				if($count % 2 == 0){
					$par = $par . $count . "<br>";
					$quantPar++;
				}
				else{
					$impar = $impar . $count . "<br>";
					$quantImpar++;
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>
           Impar ou par
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
                <form name="formTabuada" method="post" action="">
					<div class="form-itens">
						<h1>Impar ou Par</h1>
					</div>
                    <div class="form-itens">
                       	<label class="txt-padrao">N° Inicial: </label>
                       	<select class="select-num" name="sltValorMinimo">
							<option>Por favor selecione um número</option>
							<?=selectMinimo()?>
						</select>
                    </div>
					<div class="form-itens">
                       	<label class="txt-padrao">N° Final: </label>
                       	<select class="select-num" name="sltValorMaximo">
							<option>Por favor selecione um número</option>
							<?=selectMaximo()?>
						</select>
                    </div>
					<div class="form-itens">
                        <div class="container-erro">
                            <?=$erro?>
                        </div>
                        <div class="container-button">
						  <input class ="button-calcular"type="submit" name="btnCalcular" value="Calcular">
                        </div>
					</div>
                    <div class="container-resultado">                        
                        <label class="txt-padrao">Números pares:</label>
                        <div class="form-resultado">
                            <span class="txt-padrao"><?=$par?></span>
					   </div>
                    </div>
					<div class="container-resultado">
                        <label class="txt-padrao">Números Impares:</label>
                        <div class="form-resultado">
                            <span class="txt-padrao"><?=$impar?></span>
                        </div>
					</div>
					<div class="container-resultado">
						<label class="txt-padrao">Quant Impar:</label>
                        <span class="txt-padrao"><?=$quantImpar?></span>
					</div>
                    <div class="container-resultado">
						<label class="txt-padrao">Quant par:</label>
                        <span class="txt-padrao"><?=$quantPar?></span>
					</div>
                    <div>
                        
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