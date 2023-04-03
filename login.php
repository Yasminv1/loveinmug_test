<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login</title>

     <!-- Principal CSS do Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
   <!-- Estilos customizados para esse template -->
   <link href="css/estilo.css" rel="stylesheet">   

 <!-- Inicio do menu -->

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light" id="menu">
    <a class="navbar-brand" href="#"><img src="imagens/logo.png" width="50" class="img"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbarCollapse float-right bg-light" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link text-dark" href="index.php">Home <span class="sr-only" >(atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="colecao.php">Produtos<span class="sr-only">(atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="personalizados.php">Personalizados<span class="sr-only">(atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="quemsomos.php">Quem somos<span class="sr-only">(atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="trocas.php">Trocas e Devoluções<span class="sr-only">(atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="fale.php">Fale Conosco<span class="sr-only">(atual)</span></a>
        </li>
      </ul>
      <a class="nav-link" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
        <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
      </svg></a>

      <a class="nav-link" href="cadastro.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg></a>          

      <form class="form-inline my-2 my-lg-0" id="pesquisa">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>

      <a class="nav-link" href="carrinho.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg></a>   

    </div>
  </nav>
</header>


 <!-- Fim do menu -->

<div class="text-center">
    <img src="imagens/img-01.webp" alt="IMG">
  <form class="form-signin">
<!-- Imagem -->

    <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
<!-- Email -->
    <label for="inputEmail" class="sr-only">Endereço de email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
<!-- Senha -->
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
<!-- Seleção de Lembrar a Senha -->
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar
      </label>
      <button class="btn btn-lg btn-secondary btn-block" type="submit">Login</button>
    </div>
</div>

<!-- Rodapé-->
<footer class="container">
  <p class="float-right"><a href="#">Voltar ao topo</a></p>
  <p>&copy; Love In Mug - Canecas Personalizadas &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
</footer>

 <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</form>
</div>
</div>
</div>
</body>
</html>