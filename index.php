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
<nav class="navbar navbar-expand-sm navbar-dark bg-black">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page">Início <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-3 my-sm-0 " type="submit ">Pesquisar </button>
        </form>
    </div>
</nav>
   
        <main class="mx-auto p-4" style="width:800px">  
   <section class="container text-center"><h1>Sistema pedidos</h1></section>
     <h1>Informe itens e quantidades</h1>
      <form action="pedido.php" method="post">
       <div class="mb-3">
         <label for="qtdoleo" class="form-label">Quantidade de Óleo</label>
         <input type="number" min="0" max="200" value="10"
           class="form-control" name="qtdoleo" id="qtdoleo" aria-describedby="helpId" placeholder="">
       </div>   
       <div class="mb-3">
         <label for="qtdpneu" class="form-label">Quantidade de Pneu</label>
         <input type="number" min="0" max="200" value="10"
           class="form-control" name="qtdpneu" id="qtdpneu" aria-describedby="helpId" placeholder="">
       </div>  
       <div class="mb-3">
         <label for="qtdvela" class="form-label">Quantidade de Vela</label>
         <input type="number" min="0" max="200" value="10"   
           class="form-control" name="qtdvela" id="qtdvela" aria-describedby="helpId" placeholder="">
       </div>    
       <div class="mb-3">
        <label for="cliente" class="form-label">Onde nos achou?</label>
        <select class="form-select form-select-lg" name="cliente" id="cliente">
          <option selected>Selecione uma opção</option>
          <option value="a">Um cliente costumeiro</option>
          <option value="b">Televisão</option>
          <option value="c">Telefone</option>
          <option value="d">Boca a boca</option>
        </select>
       </div>       
  <button type="submit" class="btn btn-primary">Enviar</button>
</form></main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
