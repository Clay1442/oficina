<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="css/principal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
<body>
<header class="fixed-top">
    <div class="px-3 py-2 text-bg-dark border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <i class="bi-house d-block mx-auto mb-1" width="24" height="24"></i></svg>
                Home
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="bi bi-speedometer2 d-block mx-auto mb-1" width="24" height="24"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="bi-table d-block mx-auto mb-1" width="24" height="24"></i>
                Orders
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="bi-grid d-block mx-auto mb-1" width="24" height="24"></i>
                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="bi-person d-block mx-auto mb-1" width="24" height="24"></i>
                Customers
              </a>
            </li>
          </ul>
  </header>

  <h1>Sistema Pedidos</h1>
    <form action="pedido.php" method="post">
        <table>
            <th>itens</th>
            <th>Quantidade</th>
         <tr>
            <td>Óleo</td>
             <td><input type="number" name="qtdoleo" id="qtdoleo" min="0" max="200" value="10"></td>
        </tr>
       <tr>
        <td>Pneu</td>
             <td><input type="number" name="qtdpneu" id="qtdpneu" min="0" max="200" value="10"></td>
        </tr>
        <tr>
        <td>Vela</td>
             <td><input type="number" name="qtdvela" id="qtdvela" min="0" max="200" value="10"></td>
            </tr>
            <td>Como você nos achou</td>
             <td><select name="cliente" id="cliente">
                <option value="a">Um cliente costumeiro</option>
                <option value="b">Televisão</option>
                <option value="c">Telefone</option>
                <option value="d">Boca a boca</option>
             </select></td>
 
</table>
<input type="submit" value="Enviar">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
