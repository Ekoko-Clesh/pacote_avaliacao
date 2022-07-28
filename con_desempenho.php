<?php
    include 'classe_de_operacoes.php';
    $lista_de_consultores = Funcoes::Consultores();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="./js/jquery.js"></script>
    <link rel="stylesheet" href="./css/style1.css">
    <title>CAOL - Controle de Atividades Online - Agence Interativa</title>
</head>
<body>
        <!--NAV MENU  -->
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
    <div class="d-flex justify-content-center mt-4 mb-1">
        <form action="con_desempenho.php" method="POST">
            <button type="submit" class="btn btn-primary m-3" name="consultor">Por Consultor</button>
        </form> 
        <form action="con_desempenho_cliente.php" method="POST">
            <button type="submit" class="btn btn-secondary m-3" name="cliente">Por Cliente</button>
        </form>  
    </div>
    <h3 class="text-center fs-1 text-primary">Filtrar consultores</h3>
    <p class="text-center mt-4 fw-bolder text-primary">
        Per&iacute;odo
    </p>
<form action="get_solicitacao.php" method="POST">
    <div class="d-flex justify-content-center">
        <div class="d-flex mt-1 mb-1 w-50">
            <select name="select5" id="mes_inicial" class="form-select w-25 m-3" aria-label="Default select example">
                <option selected>Janeiro</option>
                <option>Fevereiro</option>
                <option>Mar&ccedil;o</option>
                <option>Abril</option>
                <option>Maio</option>                        
                <option>Junho</option>
                <option>Julho</option>
                <option>Agosto</option>
                <option selected>Setembro</option> 
                <option>Outubro</option>        
                <option>Novembro</option>
                <option>Dezembro</option>
            </select>
            <select name="select" id="ano_inicial" class="form-select w-25 m-3"  aria-label="Default select example">
                <option selected>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
            </select>
            <div class="mt-3 fw-bold text-primary fs-4">
                à
            </div>
            <select name="select3" id="mes_final" class="form-select w-25 m-3"  aria-label="Default select example">
                <option>Janeiro</option>
                <option>Fevereiro</option>
                <option>Mar&ccedil;o</option>
                <option>Abril</option>
                <option>Maio</option>                        
                <option>Junho</option>
                <option>Julho</option>
                <option>Agosto</option>
                <option selected>Setembro</option> 
                <option>Outubro</option>        
                <option>Novembro</option>
                <option>Dezembro</option>
            </select>
            <select name="select4" id="ano_final" class="form-select w-25 m-3"  aria-label="Default select example">
                    <option>2003</option>
                    <option>2004</option>
                    <option>2005</option>
                    <option>2006</option>
                    <option selected>2007</option>
            </select>
        </div>
    </div>
    <div class="d-flex mt-1 mb-1 justify-content-center">
        <!-- SELECT COM NOMES DOS CONSULTORES -->
        <select name="list1" id="list1" class="form-select w-25 m-3" multiple aria-label="multiple select example">
                  <?php if ($lista_de_consultores->num_rows > 0) {
                        while($row = $lista_de_consultores->fetch_assoc()) {?>
                            <option value=<?php echo $row["NO_USUARIO"]?>><?php echo $row["NO_USUARIO"]?></option>
                        <?php
                        }?>
                    <?php
                  }?>
        </select>
        <div class="d-flex flex-column p-2 mt-2">
            <a class="btn btn-primary m-2 fw-bold" id="btn-next" onClick="move(list1,list2)">
                >>
           </a>
            <a class="btn btn-primary m-2 fw-bold" id="btn-prev" onClick="move(list2,list1)">
                <<
           </a>
        </div>
        <select name="list2[]" id="list2" class="form-select w-25  m-3" multiple aria-label="multiple select example">
      </select>
    </div>

    <div class="d-flex mt-4 mb-2 justify-content-center">
          <!-- BOTÃO PARA GERAR RELATÓRIO-->
        <button name="acao" value="relatorio" id="relatorio" class="btn btn-outline-secondary m-2 fw-bold btn-sm" >
            <i class="fa fa-file-pdf-o m-2" aria-hidden="true"></i>Relat&oacute;rio
        </button>
            <!-- BOTÃO PARA GERAR GRÁFICO-->
        <button name="acao" value="grafico" id="grafico" class="btn btn-outline-success m-2 fw-bold btn-sm">
            <i class="fa fa-bar-chart m-2" aria-hidden="true"></i>Gr&aacute;fico
        </button>
            <!-- BOTÃO PARA GERAR GRÁFICO DO TIPO PIZZA-->
        <button name="acao" value="pizza" class="btn btn-outline-dark m-2 fw-bold btn-sm">
          <i class="fa fa-pie-chart m-2" aria-hidden="true"></i>Pizza
        </button>
        <!-- INDICA QUE É ABA DE CONSULTORES -->
        <input type="hidden" name="funcao" value="consultor">
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/eea23026e5.js" crossorigin="anonymous"></script>
<script src="./js/con_desempenho.js"></script>
</body>
</html>