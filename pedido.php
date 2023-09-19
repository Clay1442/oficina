<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oficina Mecânica</title>
        <link rel="stylesheet" href="principal.css">
    </head>
    
    <body>
        <h1>Sistemas de Pedidos</h1>
        <h2>Lista de Pedidos</h2>
        <?php
 // criando as variáveis
 $qtdoleo = $_POST ['qtdoleo'];
 $qtdpneu = $_POST ['qtdpneu'];
 $qtdvela = $_POST ['qtdvela'];
 $cliente = $_POST ['cliente'];
 
 $qtdtotal= 0;
 $qtdtotal= $qtdoleo + $qtdpneu + $qtdvela;
 echo "<p> Quantidade de itens solicitados ". $qtdtotal. "</p>";
 $valortotal= 0.00;
 //definindo constantes//
 define('PRECOPNEU', 100);
 define('PRECOOLEO', 10);
 define('PRECOVELA', 4);
 
 echo "<p> Pedido processado ás ".date('H:i:s')."</p>";
 //trabalhando com o if
 if ($qtdtotal == 0) {echo '<p style="color:red">';
     echo "Faça a sua solicitação preenchendo os itens da página anterior";
     echo "</p>";
 } else {
 if ($qtdoleo > 0)
     echo "<p> Quantidade de caixas de óleo ". $qtdoleo."</p>";
 if ($qtdpneu > 0)    
     echo "<p> Quantidade de caixas de pneu ". $qtdpneu."</p>";
 if ($qtdvela > 0)
     echo "<p> Quantidade de caixas de vela ". $qtdvela."</p>";}

 if ($qtdpneu < 10) {
     $desconto = 0;
    } elseif (($qtdpneu >=10) && ($qtdpneu <=49)) {
        $desconto= 5;
      } elseif (($qtdpneu >=50) && ($qtdpneu <=99)){
          $desconto = 10;
        } elseif ($qtdpneu >=100) {
            $desconto = 15 ;
      }
 $resultadooleo=$qtdoleo * PRECOOLEO;
 $resultadopneu=$qtdpneu * PRECOPNEU;
 $resultadovela= $qtdvela * PRECOVELA;
 $valortotal= $qtdoleo +  $resultadopneu+ $resultadovela;
 echo "<p>Subtotal:R$". number_format($valortotal, 2). "</p>";
 //calculo do desconto do pneu
      echo "<p> Desconto do pneu: ".$desconto. "% </p>";
      $descontopneu = $resultadopneu * ($desconto/100);
      $pneucomdesconto = $resultadopneu - $desconto;

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
    echo "Cliente nao informou de onde veio</p>";
}
     echo "Seu desconto nos pneus sera de $desconto % </p>";
 ?>
<a href="http://localhost/oficina/index.php">Voltar</a>
</body>
</html>