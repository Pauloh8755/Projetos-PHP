<?php 
    
  	  require_once('assets/functions/validar.php');
	  require_once('assets/functions/calculoMedia.php');
	  require_once('assets/functions/constErros.php');

	//iniciando variáveis com valor nulo para não gerar erro
      $media = null;
      $erro = null;
      $nota1 = null;
      $nota2 = null;
      $nota3 = null;
      $nota4 = null;
    //Valida se o botão calcular foi acionado
   if(isset($_POST['btnCalcular'])){
       
       //Resgatando dados do input
       $nota1 = $_POST['txtNota1'];
       $nota2 = $_POST['txtNota2'];
       $nota3 = $_POST['txtNota3'];
       $nota4 = $_POST['txtNota4'];
       
       //tratamento de caixa vazia
       if(camposVazios($nota1, $nota2, $nota3, $nota4)){
          $erro = ERRO_CAIXA_VAZIA;
       }
       else {
            if(validarNumerico($nota1, $nota2, $nota3, $nota4)){
       		   $erro = ERRO_NAN;
            }
            else{
                $media = calculoMedia($nota1,$nota2,$nota3,$nota4);
	       }
       }
   }
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>
           Calculo de média
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
                <form name="formMedia" action="" method="post">
					<div class="itensForm">
						<h3>Calculo de médias</h3>
						<div class="hr-projeto"></div>
					</div>
					<div class="form-itens">
						<!--utilizando echo para mantar a nota no input (requer tratamento de inicialização de variáveis)-->
						<input class="campo" type="text" name="txtNota1" placeholder="Primeira nota" maxlength="5" value="<?=$nota1?>">
					</div>
					<div class="form-itens">
						<input class="campo" type="text" name="txtNota2" placeholder="Segunda nota" maxlength="5" value="<?=$nota2?>">
					</div>
					<div class="form-itens">
						<input class="campo" type="text" name="txtNota3" placeholder="Terceira nota" maxlength="5" value="<?=$nota3?>">
					</div>
					<div class="form-itens">
						<input class="campo" type="text" name="txtNota4" placeholder="Quarta nota" maxlength="5" value="<?=$nota4?>">
					</div>
					<div class="form-itens">
						<input class="button-calcular" type="submit" name="btnCalcular" value="Calcular">
						<div class="button-novo-calculo">
							<a href="media.php">Novo Cálculo</a>
						</div>
					</div>
					<div class="itensFormResultado">
						<h3>Média: 
							<span class="resultado"><?=$media?></span>
						</h3>
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