<?php
    include_once 'classe_de_operacoes.php';
    $conexao = include_once './configs/conexao.php';
    $lista_de_consultores = Funcoes::Consultores();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" doubleegrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="./js/jquery.js"></script>
    <script src="./js/con_desempenho.js"></script>
    <title>CAOL - Controle de Atividades Online - Agence doubleerativa</title>
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
            <select name="select5" class="form-select w-25 m-3" aria-label="Default select example">
                <option selected>Janeiro</option>
                <option>Fevereiro</option>
                <option>Mar&ccedil;o</option>
                <option>Abril</option>
                <option>Maio</option>                        
                <option>Junho</option>
                <option>Julho</option>
                <option>Agosto</option>
                <option>Setembro</option> 
                <option>Outubro</option>        
                <option>Novembro</option>
                <option>Dezembro</option>
            </select>
            <select name="select" class="form-select w-25 m-3"  aria-label="Default select example">
                <option selected>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
            </select>
            <div class="mt-3 fw-bold text-primary fs-4">
                à
            </div>
            <select name="select3" class="form-select w-25 m-3"  aria-label="Default select example">
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
            <select name="select4" class="form-select w-25 m-3"  aria-label="Default select example">
                    <option>2003</option>
                    <option>2004</option>
                    <option>2005</option>
                    <option>2006</option>
                    <option selected>2007</option>
            </select>
        </div>
    </div>
    <div class="d-flex mt-1 mb-1 justify-content-center">
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
            <a class="btn btn-primary m-2 fw-bold" onClick="move(list1,list2)">
                >>
            </a>
            <a class="btn btn-primary m-2 fw-bold"  onClick="move(list2,list1)">
                <<
            </a>
        </div>
        <select name="list2[]" id="list2" class="form-select w-25 m-3" multiple aria-label="multiple select example">
        </select>
    </div>
    <!-- BUTTON TO GENERATE REPORT, GRAPH AND PIZZA -->
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

    <div class="w-100 mt-4">
    <?php 
            //RECUPERAR CONSULTORES ARMAZENADOS NA SESSAO
            $consultores = $_SESSION["consultores"];
            // echo "MES INICIAL ".$_SESSION["mes_inicial"]."<br>";
            // echo "ANO INICIAL ".$_SESSION["ano_inicial"]."<br>";
            // echo "MES FINAL ".$_SESSION["mes_final"]."<br>";
            // echo "ANO INICIAL ".$_SESSION["ano_final"]."<br>";
            $meses = array("","Janeiro","Fevevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
           
            foreach ($meses as $key => $mes) {
                if($mes === $_SESSION["mes_inicial"])
                    break;
            }
            foreach ($meses as $key1 => $mes) {
                if($mes === $_SESSION["mes_final"])
                    break;
            }
            $data_inicial = $_SESSION["ano_inicial"]."-".$key."-2";
            $data_final   = $_SESSION["ano_final"]."-".$key1."-2";
           if(isset($_SESSION["consultores"])){
            foreach ($consultores as $consultor){?>
                
                <?php
                     $nome = $consultor;
                     //DADOS DO MES INICIAL E ANO INICIAL
                     //OBTER O VALOR DARECEITA LÍQUIDA
                    $sql=("SELECT FORMAT(SUM(CAO_FATURA.VALOR) - (SUM(CAO_FATURA.valor) * (SUM(CAO_FATURA.total_imp_inc)/100)), 2, 'de_DE') AS 'RECEITA LÍQUIDA'
                    FROM CAO_SISTEMA, CAO_USUARIO, CAO_FATURA, CAO_OS WHERE CAO_SISTEMA.co_cliente = CAO_FATURA.co_cliente AND CAO_SISTEMA.co_sistema = CAO_FATURA.co_sistema
                    AND MONTH(CAO_FATURA.data_emissao) = MONTH('$data_inicial') AND YEAR(CAO_FATURA.data_emissao) = YEAR('$data_inicial')
                    AND CAO_OS.co_os = CAO_FATURA.co_os AND CAO_USUARIO.co_usuario = CAO_SISTEMA.co_usuario AND CAO_USUARIO.no_usuario ='$nome'");
                    $result = $conexao->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $receita_liquida = $row["RECEITA LÍQUIDA"];
                        }
                    } else {
                       $receita_liquida = (double) 0.0;
                    }

                   
                    //OBTER O VALOR DO CUSTO FIXO
                    $sql = ("SELECT FORMAT(CAO_SALARIO.brut_salario, 2, 'de_DE') AS 'CUSTO FIXO' FROM CAO_USUARIO, CAO_SALARIO WHERE CAO_USUARIO.co_usuariO = CAO_SALARIO.co_usuario AND CAO_USUARIO.no_usuario = '$nome'");
                    $result = $conexao->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $custo_fixo = $row["CUSTO FIXO"];
                        }
                    }else{
                        $custo_fixo = (double) 0.0;
                    }
                    //OBTER O VALOR DA COMISSÃO
                    $sql = ("SELECT FORMAT((SUM(CAO_FATURA.VALOR) - SUM(CAO_FATURA.total_imp_inc))* SUM((CAO_FATURA.comissao_cn)/ 100), 2, 'de_DE') AS 'COMISSAO' FROM CAO_SISTEMA, CAO_USUARIO, CAO_FATURA, CAO_OS WHERE CAO_SISTEMA.co_cliente = CAO_FATURA.co_cliente AND CAO_SISTEMA.co_sistema = CAO_FATURA.co_sistema
                    AND MONTH(CAO_FATURA.data_emissao) = MONTH('$data_inicial') AND YEAR(CAO_FATURA.data_emissao) = YEAR('$data_inicial')
                    AND CAO_OS.co_os = CAO_FATURA.co_os AND CAO_USUARIO.co_usuario = CAO_SISTEMA.co_usuario AND CAO_USUARIO.no_usuario = '$nome'");
                    $result = $conexao->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $comissao = $row["COMISSAO"];
                        }
                    }else{
                        $comissao = (double) 0.0;
                    }

                    //DADOS DO MES FINAL E ANO FINAL
                    //OBTER O VALOR DA RECEITA LÍQUIDA
                    $sql=("SELECT FORMAT(SUM(CAO_FATURA.VALOR) - (SUM(CAO_FATURA.valor) * (SUM(CAO_FATURA.total_imp_inc)/100)), 2, 'de_DE') AS 'RECEITA LÍQUIDA'
                    FROM CAO_SISTEMA, CAO_USUARIO, CAO_FATURA, CAO_OS WHERE CAO_SISTEMA.co_cliente = CAO_FATURA.co_cliente AND CAO_SISTEMA.co_sistema = CAO_FATURA.co_sistema
                    AND MONTH(CAO_FATURA.data_emissao) = MONTH('$data_final') AND YEAR(CAO_FATURA.data_emissao) = YEAR('$data_final')
                    AND CAO_OS.co_os = CAO_FATURA.co_os AND CAO_USUARIO.co_usuario = CAO_SISTEMA.co_usuario AND CAO_USUARIO.no_usuario = '$nome'");
                    $result = $conexao->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $receita_liquida2 = $row["RECEITA LÍQUIDA"];
                        }
                    }else{
                        $receita_liquida2 = (double) 0.0;
                    }

                    //OBTER O VALOR DO CUSTO FIXO
                    $sql = ("SELECT FORMAT(CAO_SALARIO.brut_salario, 2, 'de_DE') AS 'CUSTO FIXO' FROM CAO_USUARIO, CAO_SALARIO WHERE CAO_USUARIO.co_usuariO = CAO_SALARIO.co_usuario AND CAO_USUARIO.no_usuario = '$nome'");
                    $result = $conexao->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $custo_fixo2 = $row["CUSTO FIXO"];
                        }
                    }else{
                        $custo_fixo2 = (double) 0.0;
                    }

                    //OBTER O VALOR DA COMISSÃO
                    $sql = ("SELECT FORMAT((SUM(CAO_FATURA.VALOR) - SUM(CAO_FATURA.total_imp_inc))* SUM((CAO_FATURA.comissao_cn)/ 100), 2, 'de_DE') AS 'COMISSAO' FROM CAO_SISTEMA, CAO_USUARIO, CAO_FATURA, CAO_OS WHERE CAO_SISTEMA.co_cliente = CAO_FATURA.co_cliente AND CAO_SISTEMA.co_sistema = CAO_FATURA.co_sistema
                    AND MONTH(CAO_FATURA.data_emissao) = MONTH('$data_final') AND YEAR(CAO_FATURA.data_emissao) = YEAR('$data_final')
                    AND CAO_OS.co_os = CAO_FATURA.co_os AND CAO_USUARIO.co_usuario = CAO_SISTEMA.co_usuario AND CAO_USUARIO.no_usuario = '$nome'");
                    $result = $conexao->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $comissao2 = $row["COMISSAO"];
                        }
                    }else{
                        $comissao2 = (double) 0.0;
                    }
                    $lucro = (double)$receita_liquida - ((double)$custo_fixo + (double)$comissao);
                    $lucro2 = (double)$receita_liquida2 - ((double)$custo_fixo2 + (double)$comissao2);
                   
                ?>
                 <th scope="col"><?php echo "<p style='color:blue'>".$consultor."</p>";?></th>

                 <table class="table table-hover table-striped table-bordered">            
                    <thead>
                        <tr>
                            <th scope="col">Per&iacute;odo</th>
                            <th scope="col">Receita L&iacute;quida</th>
                            <th scope="col">Custo Fixo</th>
                            <th scope="col">Comiss&atilde;o</th>
                            <th scope="col">Lucro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php
                             echo $_SESSION["mes_inicial"]." de ".$_SESSION["ano_inicial"]?></td>
                            <td><?php 
                                echo "R$ ";
                                echo number_format((double)$receita_liquida, 2,',','.');?></td>
                            <td><?php
                                 echo "R$ ";
                                 echo  number_format((double)$custo_fixo, 2,',','.'); ?></td>
                            <td><?php
                                echo "R$ ";
                                echo number_format((double)$comissao, 2,',','.');?></td>
                            <td><?php
                              
                                if((double) $lucro < 0){
                                    echo "<p style='color:red';> R$ ".number_format($lucro, 2,',','.')."</p>"?></td>
                                <?php
                                }
                                else{?>
                                <?php echo "R$ ". number_format($lucro,2,',','.')?></td>
                                <?php
                            }?>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION["mes_final"]." de ".$_SESSION["ano_final"]?></td>
                            <td><?php 
                                echo "R$ ";
                                echo number_format((double)$receita_liquida2, 2,',','.');?></td>
                            <td><?php
                                echo "R$ ";
                                echo number_format((double)$custo_fixo2, 2,',','.');?></td>
                            <td><?php 
                                echo "R$ ";
                                echo number_format((double)$comissao2, 2,',','.');?></td>
                            <td><?php
                                echo "R$ ";
                                 echo number_format((double)$lucro2, 2,',','.');?></td>
                        </tr>
                        <tr>
                            <td>Saldo</td>
                            <td><?php
                                    $saldo_receita_liquida = number_format(((double)$receita_liquida + (double)$receita_liquida2), 2, ',','.');
                                    echo "R$ ".number_format((double)$saldo_receita_liquida, 2,',','.');;?></td>
                            <td><?php echo "R$ ".number_format(((double) $custo_fixo + (double)$custo_fixo2), 2,',','.') ?></td>
                            <td><?php echo "R$ ".number_format(((double)$comissao + (double)$comissao2), 2,',','.') ?></td>
                            <td><?php echo "R$ ".number_format((double) $lucro2, 2,',','.')?></td>
                        </tr>
                    </tbody>
                </table>
                <?php
            }
        }else{ echo "<h3 class='text-center'><span class='badge bg-primary'>coloque os nomes na segunda caixa e depois selecciona para gerar</span></h3>";}?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" doubleegrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" doubleegrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/eea23026e5.js" crossorigin="anonymous"></script>
</body>
</html>