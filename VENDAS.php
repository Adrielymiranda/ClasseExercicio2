<?php
include ('Produto.php');

class Vendas{
    public $produto;
    public $numVenda;
    public $valorUn;
    public $valor;
    public $tVenda;
    
    

    public function calcular(){
        $valor = 0;
        for($i=0; $i<=2; $i++){
            $this->valor = $this->produto[$i]->valorTotal + $this->valor;
        }
    }


    public function gerarProduto(){
        $prod1 = new Produto();
        $prod1->id = 1;
        $prod1->nome = 'Salgado';
        $prod1->valor = 3;
        $prod1->quant = 6;
        $prod1->valorCalc();
        
        $prod2 = new Produto();
        $prod2->id = 2;
        $prod2->nome = 'café';
        $prod2->valor = 16;
        $prod2->quant = 4;
        $prod2->valorCalc();

        $prod3 = new Produto();
        $prod3->id = 3;
        $prod3->nome = 'Pão';
        $prod3->valor = 8;
        $prod3->quant = 10;
        $prod3->valorCalc();

        $prod4 = new Produto();
        $prod4->id = 4;
        $prod4->nome = 'Mineiro ';
        $prod4->valor = 10;
        $prod4->quant = 55;
        $prod4->valorCalc();


        $this->produto[0] = $prod1;
        $this->produto[1] = $prod2;
        $this->produto[2] = $prod3;
        $this->produto[3] = $prod4;
    }
   
    public function mostraVendas(){

        
                
                for($i=0; $i<(count($this->produto)); $i++){
                echo "Produto:" . $this->produto[$i]->nome . 
              "- Valor un:" . $this->produto[$i]->valor .
              "- Quantidade:" . $this->produto[$i]->quant .
              "- Valor total:" . $this->produto[$i]->valorTotal . "</br>";

            
        }
        
        
    }

}
?>