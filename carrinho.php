<?php
//Iniciar a sessão
session_start();
//Tratamento de warning na página
error_reporting (E_ALL &  ~E_WARNING );

//Liga o arquivo de produtos (pois ainda não há banco de dados)
include_once 'produtos.php';
//Liga o back-end do carrinho
include_once 'Carrinho.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Carrinho de Compras</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
    <!-- Estilos customizados para esse template -->
    <link href="css/estilo.css" rel="stylesheet">
  </head>
  <body>

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

          <a class="nav-link" id="login" href="cadastro.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
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
     
      <main id="carrinho">
      <div class="page-title">Seu Carrinho</div>
      <div class="content">
        <section>
          <table>
            <thead>
              <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th></th>
                <th>-</th>
              </tr>
            </thead>
            <tbody>

            <?php
              //Percorre todos os produtos
              foreach ($produtos as $key => $value) {
            ?>

              <tr>
                <td>
                  <div class="product box">
                    <!--Adiciona a imagem de acordo com o valor determinado pelo índice no arquivo produtos-->
                    <img class ="img_carrinho" src="imagens/<?= $value['img'] ?>" alt="" />
                    <div class="info">
                      <!--Adiciona o nome de cada produto de acordo com o índice-->
                      <div class="name"><?= $value['prod'] ?></div>
                      <div class="category">Personalizado</div>
                    </div>
                  </div>
                </td>
                <!--Atribui o valor do índice de cada produto-->
                <td><?= $value['valor'] ?></td>
                <td>
                  <div class="qty">
                    <!--Botão indicando quantidade (não feito)-->
                    <button>+</button>
                    <span>1</span>
                    <button>-</button>
                  </div>
                </td>
                <!--Botão para chamar o indice e adicionar ao carrinho--->
                <td><a href="?id=<?= $key ?>"><button class="btn btn-outline-secondary my-2 my-sm-0">Adicionar ao Carrinho</button></a></td>
               
                <td>
                  <!--Botão de remover um produto(não feito)-->
                  <button class="remove"><i class="bx bx-x"></i></button>
                </td>
              </tr>
              
              <?php
                }
              ?>
            </tbody>
          </table>
        </section>
        <aside>
          <div class="box">
            <header>Resumo da compra</header>
            <div class="info">
              <div><span>Sub-total</span><span></span></div>
              <div><span>
                <!--Código para adicionar os produtos que foram chamados no botão "Adicionar ao carrinho"-->
              <?php
              //Pega o id do produto
                $id = isset($_GET['id']) ? $_GET['id'] : "";
              //Monta a linha com nome,valor e quantidade, de acordo com o indice resgatado acima
                $carrinho = new Carrinho($produtos[$id]['prod'], $produtos[$id]['valor'], $id);
                $carrinho->getCarrinho();

                //Apaga todas as variaveis de uma sessão
                //unset($_SESSION['carrinho']);   
              ?>
            </span></div>
              <div><span>Frete</span><span>Gratuito</span></div>
              <div>
                <button>
                  <!--Botão para adicionar desconto não criado ainda -->
                  Adicionar cupom de desconto
                  <i class="bx bx-right-arrow-alt"></i>
                </button>
              </div>
            </div>
            <footer >
              <!--Total das compras(botão não criado)-->
              <span>Total</span>
              <span><?php echo $value['valor'] ?></span>
            </footer>

          </div>
          <!--Botão Finalizar compras (Não criado)-->
          <button>Finalizar Compra</button>
        </aside>
      </div>
    </main>
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


  </body>
</html>



<?php
class Carrinho
{
    public $prod;
    // public $quantidade = 1;
    public $valor;
    public $id;

    function __construct($prod, $valor, $id)
    {
        $this->prod = $prod;
        // $this->quantidade = $quantidade;
        $this->valor = $valor;
        $this->id = $id;
    }

    public function getCarrinho()
    {
        if (isset($_SESSION['carrinho'][$this->id])) {
            $_SESSION['carrinho'][$this->id]['quant']++;
        } else {
            $_SESSION['carrinho'][$this->id] = [
                "prod" => "{$this->prod}",
                "quant" => 1,
                "valor" => "{$this->valor}"
            ];
        }
   

        // print_r($_SESSION['carrinho']);

        foreach ($_SESSION['carrinho'] as $key => $value) {
            echo "<p>
                     <strong>Produto:</strong> " . $value['prod'] . " | 
                     <strong>Valor:</strong> " . $value['valor'] . " | 
                     <strong>Quantidade:</strong> " . $value['quant'] . 
                 "</p>";
        }
    }

    
}