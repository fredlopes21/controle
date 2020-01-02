<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Clientes</title>
  <meta charset="utf-8">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
     $("#txtCpf").mask("000.000.000-00")
     $("#txtTelefone").mask("(00)00000-0000")
  })
</script>
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
       <input type="text" class="form-control form-group" id="txtCpf" name="txtCpf">

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