<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oficina Mecânica</title>
        <link rel="stylesheet" href="principal.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    
    <body>
        <nav class="navbar navbar-expand navbar-dark bg-black">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link text-white" href="index.php">Início</a>
            </div>
        </nav>
    <main class="mx-auto p-4" style="width:800px">
        
        <h1>Sistemas de Pedidos</h1>
        <h2>Lista de Pedidos</h2>
      
<!--Início do código php -->           
 <?php
      // criando as variáveis
      $qtdoleo = $_POST ['qtdoleo'];
      $qtdpneu = $_POST ['qtdpneu'];
   $qtdvela = $_POST ['qtdvela'];
   $cliente = $_POST ['cliente'];
   
   $qtdtotal= 0;
   $qtdtotal= $qtdoleo + $qtdpneu + $qtdvela;
   $valortotal= 0.00;
   ?>
    <div class="card-header">
           <?php echo "Pedido processado ás ".date('H:i:s') ?>
           </div>
   <div class="card">
            <div class="card-body">
                <h4 class="card-title">Itens</h4>
<p class="card-text"> Quantidade de itens solicitados <?php echo $qtdtotal;?> </p>
</div>

<ul class="list-group list-group-flush">
    <li class="list-group-item">Quantidade de caixas de Óleo <?php echo $qtdoleo?></li>
    <li class="list-group-item">Quantidade de caixas de Pneu <?php echo $qtdpneu?></li>
    <li class="list-group-item">Quantiades de caixas de Vela <?php echo $qtdvela ?></li>
</ul>
  <div class="card-footer">
 <!-- valor a pagar php-->     
  <h3>Preço a pagar</h3>    
</div>
<!-- trabalhando com phpp -->
    <?php
     //definindo constantes//
     define('PRECOPNEU', 100);
     define('PRECOOLEO', 10);
     define('PRECOVELA', 4);
     
     //trabalhando com o if
     if ($qtdtotal == 0) {
         echo '<div class="alert alert-danger" role="alert">';
         echo "Faça a sua solicitação preenchendo os itens da página anterior";
         echo "</div>";   
     } 
        $resultadooleo=$qtdoleo * PRECOOLEO;
        $resultadopneu=$qtdpneu * PRECOPNEU;
        $resultadovela= $qtdvela * PRECOVELA;
        $valortotal= $resultadooleo +  $resultadopneu + $resultadovela;
       ?>
       <ul class="list-group list-group-flush">
       <li class="list-group-item"> Subtotal R$<?php echo $valortotal?></li>
        <?php
        //calculo do desconto do pneu
        if ($qtdpneu < 10) {
            $desconto = 0;
           } elseif (($qtdpneu >=10) && ($qtdpneu <=49)) {
               $desconto= 5;
             } elseif (($qtdpneu >=50) && ($qtdpneu <=99)){
                 $desconto = 10;
               } elseif ($qtdpneu >=100) {
                   $desconto = 15 ;
             }
    
        echo "<p> Desconto do pneu: ".$desconto. "% </p>";
          $descontopneu = $resultadopneu * ($desconto/100);
          $pneucomdesconto = $resultadopneu - $desconto;
      echo "valor com o desconto do pneu:R$".$pneucomdesconto. "</p>";
    $valortotal= $qtdoleo +  $pneucomdesconto + $resultadovela;
          $taxa = 0.10; //local sales tax is 10%
     $totalcomimposto = $valortotal * (1 + $taxa);   
     echo "Taxa de imposto: ". $taxa. "</p>";
     echo "Valor total com imposto:R$".number_format($totalcomimposto, 2). "</p>";
     
     
     
    switch ($cliente) {
        case 'a':
            echo "Cliente Costumeiro</p>";
            break;
              case 'b':
                echo "Televisão</p>";
                 break;
                  case 'c':
                    echo "Telefone</p>";
                 break;
                      case 'd':
                    echo "Boca a boca</p>";
                    break;
        default:
        echo "Cliente nao informou de onde veio</p>";}
      


 ?>
 </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>