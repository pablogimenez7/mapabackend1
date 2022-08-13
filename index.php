<?php
include ("dados.php");
?>
     <style>
        div.box {
            width: 150px;
	        display: inline-block;
        }
        .contato{
			margin: 0px auto;
			width: 300px;
			height: 200px;
			background-color: bzflush;
		}
        .contat1{
			margin: 0px auto;
			width: 300px;
			height: 200px;
			
		}

    </style>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="uft-8">
        <title> <?=$title;?></title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        
        </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>                     
                    <li><a href="#">Blog 2</a></li>    
                    <li><a href="#">Conheça Dona Moema 2</a></li>    
                    <li><a href="#">Contatos</a></li>  
                </ul>
            </nav>

        </header>

        <main>
        <section class="contato">
            <header>
            <section>
                <h1> Trabalhando com imagens</h1>
                <img src="img/img1.jpg" width="500px" title="titulo" alt="texto Alternativo">
                <br>
                <br>
            </section>

            </header>
            <?php foreach ($Marmitas as $key => $value) {              
           
            ?>

            <tr>
		        <td>    
                    <article>
                        <div class="div.box">
                        <a href="#"><img src=<?=$value['imagem'];?>></a>
                        <h1><?=$value['nomemarmita'];?></h1>
                        <h2><?=$value['preco'];?></h2>
                        <h3><?=$value['tamanho'];?></h3>
                        <p><?=$value['ingredientes'];?></p>          
                        </div>                
                    </article>  
                 </tb>       
            </tr>
              
       
            <?php
                }
            ?>

        </section>
            
        <!--
            <section>
                <h1> Trabalhando com imagens</h1>
                <img src="img/img1.jpg" width="250px" title="titulo" alt="texto Alternativo">
                <img src="img/img2.jpg" width="250px" title="titulo" alt="texto Alternativo">
               
            </section>
            <section>
                <h1> Trabalhando com Formulários</h1>
                <br>
                <form action="pagina1.php" method="get">
                    Nome: <input type ="text" name="nome" placeholder="Informe o seu nome">
                    <br>
                    E-mail <input type="email" name="e-mail"placeholder="Informe o seu e-mail" required></imput> 
                    <br>
                    Estado <select name="estado">
                        <option value="PR">Paraná</option>
                        <option value="SP">São Paulo</option>
                    </select>
                    <br>
                    <input type="submit" valeu="CADASTRAR">
                  
                </form>
                <br>
            </section>-->

        </main>

        <footer>
        <section class="contato1">
            <tr>
                <td>  
                    <h1>Quer Saber Mais </h1>
                    <h4>Nossas Páginas</h4>
                    <h4>Home</h4>
                    <h4>Conheça Dona Moema</h4>
                    <h4>Contato</h4>
                </tb>       
            </tr>
        </section>
        <tr>
		    <td>  
                <h1>Quer Saber Mais </h1>
                <h4>Nossas Páginas</h4>
                <h4>Home</h4>
                <h4>Conheça Dona Moema</h4>
                <h4>Contato</h4>
            </tb>       
        </tr>
        </footer>
    </body>

</html>