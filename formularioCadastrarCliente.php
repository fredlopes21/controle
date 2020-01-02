<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Clientes</title>
  <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
<body >
	<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary form-group">
      <a class="navbar-brand" href="index.html">Cadastro de Clientes</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSite">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toogle" href="#" id="dropdownSite" data-toggle="dropdown" >Cadastrar</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Chamados</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="formularioCadastrarCliente.php">Clientes</a>
            </div>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toogle" href="#" id="dropdownSite" data-toggle="dropdown" >Produtos</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Produto 01</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Produto 02</a>
              <a class="dropdown-item" href="#">Produto 03</a>
              <a class="dropdown-item" href="#">Produto 04</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"> Contatos </a>
          </li>
        </ul>     
        
      </div>
    </nav>

    <div class="corpoCadastroClientes">
      <form class="form-group form-collapse col-md-5" id="frmNovoCliente" name="frmNovoCliente" method="POST" action="cadastrarCliente.php">
       <label class="form-group">Código Gestão:</label>
       <input type="text" class="form-control" id="txtCod" name="txtCod" aria-describedby="Help">
       <small id="Help" class="form-text text-muted form-group">Insira o codigo do sistema Gestão.</small>

       <label class="form-group">Nome:</label>
       <input type="text" class="form-control form-group" id="txtNome" name="txtNome">

       <label class="form-group">CPF:</label>
       <input type="text" class="form-control form-group" id="txtCPF" name="txtCPF">

       <label class="form-group">Telefone:</label>
       <input type="text" class="form-control form-group" id="txtTelefone" name="txtTelefone">

       <input type="submit" id="botaoEnviar" name="botaoEnviar" class="btn btn-success btn-collapse"value="Salvar">

       <input type="button" id="botaoCancelar" name="botaoCancelar" class="btn btn-danger btn-collapse" value="Cancelar" onclick="javascript:location.href='index.html'">

       <input type="reset" id="botaoLimpar" name="botaoLimpar" class=" btn btn-primary btn-collapse" value="Limpar">


      </form>
    </div>
    


  </div>
</body>
</html>