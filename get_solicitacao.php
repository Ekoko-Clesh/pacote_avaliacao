<?php
    session_start();
    $accao = $_POST["acao"]; //acção que foi disparada [Relatório, Gráfico ou Pizza]
    $funcao = $_POST["funcao"]; //verifica a funcao [Consultor / Cliente]
    $mes_inicial = $_POST["select5"];
    $ano_inicial = $_POST["select"];
    $mes_final = $_POST["select3"];
    $ano_final = $_POST["select4"];
    $consultores = $_POST["list2"];
    $clientes    = $_POST["list2"];

    if($accao === "relatorio" && $funcao === "consultor"){
        $_SESSION["consultores"] = $consultores;
        $_SESSION["mes_inicial"] = $mes_inicial;
        $_SESSION["ano_inicial"] = $ano_inicial;
        $_SESSION["mes_final"] = $mes_final;
        $_SESSION["ano_final"] = $ano_final;
        header("Location:con_desem_consultor_rel.php");
    }else{
        if($accao === "relatorio" && $funcao === "cliente"){
            $_SESSION["clientes"] = $clientes;
            $_SESSION["mes_inicial"] = $mes_inicial;
            $_SESSION["ano_inicial"] = $ano_inicial;
            $_SESSION["mes_final"] = $mes_final;
            $_SESSION["ano_final"] = $ano_final;
            header("Location:con_desem_cliente_rel.php");

        }else{
            //VERIFICA PARA GERAR GRÁFICO COM DADOS DOS CONSULTORES
            if($accao === "grafico" && $funcao === "consultor"){
                $_SESSION["consultores"] = $consultores;
                header("Location:con_desem_consultor_graf.php");

            }else{
                 //VERIFICA PARA GERAR GRÁFICO COM DADOS DOS CLIENTES
                if($accao === "grafico" && $funcao === "cliente"){
                    $_SESSION["clientes"] = $clientes;
                    header("Location:con_desem_cliente_graf.php");

                }else{
                    //VERIFICA PARA GERAR GRÁFICO DO TIPO PIZZA COM DADOS DOS CONSULTORES
                    if($accao === "pizza" && $funcao === "consultor"){
                        $_SESSION["consultores"] = $consultores;
                        header("Location:con_desem_consultor_pizza.php");

                    }else{
                        //VERIFICA PARA GERAR GRÁFICO DO TIPO PIZZA COM DADOS DOS CLIENTES
                        if($accao === "pizza" && $funcao === "cliente"){
                            $_SESSION["clientes"] = $clientes;
                            header("Location:con_desem_cliente_pizza.php");
                        }
                    }
                }
            }
        }
    }
?>