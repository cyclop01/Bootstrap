<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Contato</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">  
  <link rel="shortcut icon" href="img/favicon.ico">  
  <script src="js/jquery-1.12.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  
  <style>

  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p{
    text-align: center;
    font-size: 20px;
  }

  h2, h3, footer{
    text-align: center;
  }
 
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }

  
  </style>
</head>
<body>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h2 class="">Quem sou eu?</h2>
  <img src="img/retrato.png" class="img-responsive img-circle margin"  style="display:inline" alt="retrato" width="350" height="350">
  <h3>Sou um amante da programação</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">O que eu faço?</h3>
  <p>Atualmente sou estudante de Análise e Desenvolvimento de Sistemas, o profissional desta área é responsável por desenvolver, analisar, projetar, implementar e atualizar sistemas de informação.</p>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Onde você pode me encontrar?</h3><br>
  <div class="row">
    <div class="col-sm-4 text-center">
    <img src="img/email.png" class="img-responsive margin" width="190" height="190" alt="email">
      <p>Entre em contato comigo através do endereço <strong>lucas_c10f@hotmail.com</strong></p>      
    </div>   
    <div class="col-sm-4"> 
       <img src="img/birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>     
    </div>
  </div>
  <a href="contato.php" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Topo
  </a>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Lucas Oliveira de Jesus<br /><small>Fastconv - 2017<small></p> 
</footer>

</body>
</html>
