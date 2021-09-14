<?php
    require_once('assets/functions/constErros.php');
	require_once('assets/functions/calculoTabuada.php');
	require_once('assets/functions/validar.php');
   
    $resposta = (string) null;
    $tabuada = null;
    $contador = null;
    //Efetuando processamento quando o botão for clicado
    if(isset($_POST['btnCalcular'])){
        $tabuada =(string) $_POST['txtTabuada'];    
        $contador =(string) $_POST['txtContador'];
         
        if(campoStringVazio($tabuada, $contador)){
			$resposta = ERRO_CAIXA_VAZIA;
		}
        else if(campoNumerico($tabuada, $contador)){
			$resposta = ERRO_NAN;
		}
        else if(campoZero($tabuada, $contador)){
            $resposta = ERRO_TABUADA_ZERO;         
		}
		else{
			$resposta = calcularTabuada($tabuada, $contador);
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>
           Tabuada
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
						<h1>Calculando Tabuada</h1>
					</div>
                    <div class="form-itens">
                        <input class="campo" type="text" name="txtTabuada" placeholder="Tabuada" maxlength="5" value="<?=$tabuada?>">
                    </div>
                    <div class="form-itens">
                        <input class="campo" type="text" name="txtContador" placeholder="contador" maxlength="5" value="<?=$contador?>">
                    </div>
                    <div class="form-itens">
                        <input class="button-calcular" type="submit" name="btnCalcular" value="Calcular">
                        <div class="button-novo-calculo">
							<a href="tabuada.php">Novo Cálculo</a>
				        </div>
                    </div>
                    
					<div class="form-resultado">
						<label class="txt-padrao">
							<?=$resposta?>
						</label>
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