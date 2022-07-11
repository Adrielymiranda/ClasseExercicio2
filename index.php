<?php

include ('VENDAS.php');

//Tipos de Venda
//0 - a prazo
//1 - a vista
//2 - a prazo pago

$ve1 = new VENDAS();
$ve1->numVenda = 1;
$ve1->tVenda = 0;
$ve1->gerarProduto();
$ve1->calcular();

$ve2 = new VENDAS();
$ve2->numVenda = 1;
$ve2->tVenda = 1;
$ve2->gerarProduto();
$ve2->calcular();

$ve3 = new VENDAS();
$ve3->numVenda = 2;
$ve3->tVenda = 2;
$ve3->gerarProduto();
$ve3->calcular();



$VENDAS = [];
$VENDAS[0] = $ve1;
$VENDAS[1] = $ve2;
$VENDAS[2] = $ve3;


$aprazo = [];
$avista = [];
$aprazopago = [];

for($z=0; $z<3; $z++){
    $tipo = $VENDAS[$z]->tVenda;

    if($tipo == 0){
        array_push($aprazo, $VENDAS[$z]);
    }

    if($tipo == 1){
        array_push($avista, $VENDAS[$z]);
    }

    if($tipo == 2){
        array_push($aprazopago, $VENDAS[$z]);
    }
}

function mostraDados($v){
    for($h=0; $h<(count($v)); $h++){

        $v[$h]->mostraVENDAS();
    }
}


echo '<h2>A Prazo</h2>';
echo "</br>";
mostraDados($aprazo);


echo '<h2>A Vista</h2>';
echo "</br>";
mostraDados($avista);


echo '<h2>A Prazo Pagas</h2>';
echo "</br>";
mostraDados($aprazopago);



?>