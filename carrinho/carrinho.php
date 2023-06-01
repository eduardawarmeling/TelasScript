<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="carrinho.css">
  <title>Carrinho</title>
</head>
<body>
  
</body>
</html>
    
</head>
<body>
    <h1>Carrinho de Compras</h1>
    
    <div class="cart">

    <?php 
        include ("../conecta.php");

        $comando = $pdo->prepare("SELECT * FROM carrinho"); 
        $resultado = $comando->execute();
    
        while( $linhas = $comando->fetch()) 
            {
                $m = $linhas["codigo_produto"]; //nome da coluna xampp
                $n = $linhas["valor"];
    
                echo('<div class="cart-item">
                    <div>
                        <h3 class="cart-item-title">' . $m . '</h3>
                        <p>Descrição do livro 1</p>
                        <p>Preço: R$ <span class="item-price">' . $n . '</span></p>
                    </div>
                </div>');

            }
    
    ?>
        

        
        <!-- Adicione mais itens do carrinho aqui -->
        
    </div>
    
    <div class="total">
        <p>Total: R$ <span id="total-price">0.00</span></p>
        <button>
          <a href="../pagamentos/pagamentos.html"
              style="color: #ffffff">Finalizar Compra!</a>
          </a>
    </div>

    <script>
        // Atualiza o total do carrinho
        function updateTotal() {
            const itemPrices = document.getElementsByClassName("item-price");
            let totalPrice = 0;
            
            for (let i = 0; i < itemPrices.length; i++) {
                const price = parseFloat(itemPrices[i].textContent);
                totalPrice += price;
            }
            
            document.getElementById("total-price").textContent = totalPrice.toFixed(2);
        }
        
        updateTotal(); // Chama a função inicialmente para calcular o total
        
        // Adicione aqui qualquer outra lógica necessária, como adicionar ou remover itens do carrinho
        
    </script>
</body>
</html>