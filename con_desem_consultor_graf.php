<?php
    session_start();
?>
<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="./js/con_desempenho.js"></script>
    <script src="./js/jquery.js"></script>
    <title>CAOL - Controle de Atividades Online - Agence Interativa</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Meses', 'Agence MS', 'Aline Chastel Lima', 'Ana Paula Fontes Martins Chiodaro', 'Bruno Sousa Freitas', 'Bruno Sousa Freitas'],
          ['Janeiro',  165,      938,         522,             998,           450],
          ['Fevereiro',  135,      1120,        599,             1268,          288],
          ['Março',  157,      1167,        587,             807,           397],
          ['Abril',  139,      1110,        615,             968,           215],
          ['Maio',  136,      691,         629,             1026,          366],
          ['Junho',  136,      691,         629,             1026,          366],
          ['Julho',  136,      691,         629,             1026,          366],
          ['Agosto',  136,      691,         629,             1026,          366],
          ['Setembro',  136,      691,         629,             1026,          366],
          ['Outubro',  136,      691,         629,             1026,          366],
          ['Novembro',  136,      691,         629,             1026,          366],
          ['Dezembro',  136,      691,         629,             1026,          366]
        ]);

        var options = {
          title : 'Performance comercial <?php echo $_SESSION['mes_inicial']?> de <?php echo $_SESSION['ano_inicial']?> a <?php echo $_SESSION['mes_final']?> de <?php echo $_SESSION['ano_final']?>',
          vAxis: {title: 'R$'},
          hAxis: {title: 'Meses'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home m-2" aria-hidden="true"></i>Agence</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-tasks m-2" aria-hidden="true"></i>Projetos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-users m-2" aria-hidden="true"></i>Administrativo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart m-2" aria-hidden="true"></i>Comercial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-credit-card-alt m-2" aria-hidden="true"></i>Financeiro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-user m-2" aria-hidden="true"></i>Usu&aacute;rio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-sign-out m-2" aria-hidden="true"></i>Sair</a>
        </li>
      </ul>
      <form class="d-flex">
        <img src="inc/logo.gif" alt="">
      </form>
    </div>
  </div>
</nav>
<div class="d-flex justify-content-center mt-3">
     <div class="alert alert-primary w-50 text-center" role="alert">
     Essa fun&ccedil;&atilde;o ainda est&aacute; em constru&ccedil;&atilde;o
     </div>
</div>
    <div id="chart_div" style="width: 1200px; height: 500px;"></div>

      <div class="d-flex justify-content-center">
            <a href="con_desempenho.php"  type="button" class="btn btn-primary w-25 mt-2 mb-4">Voltar</a>
      </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/eea23026e5.js" crossorigin="anonymous"></script>
  </body>
</html>
