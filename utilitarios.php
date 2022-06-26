<?php
    //Recebe um array com os produtos e injeta os dados no HTML. Retorna o código que deve ser exibido na página
    function exibirProdutos($produtos){

        if (count($produtos) != 0) {
            $html_code = "<div class='container'><div class='row'>";
            $contador = 0;
    
            foreach ($produtos as $produto) {
                $nome = $produto[1];
                $descricao = $produto[2];
                $valor = $produto[3];
                $img = $produto[4];
    
                if ($contador == 3) {
                    $html_code .= "</div><div class='row'>";
                    $contador = 0;
                }
                $html_code .= "<div class='col-4 pb-3'>
                <div class='card' style='width: 18rem;'>
                    <img src='$img' class='card-img-top' alt='...'>
                    <div class='card-body'>
                    <h5 class='card-title'>$nome</h5>
                    <p class='fs-5'><strong>R$ $valor</strong></p>
                    <p class='card-text'>$descricao</p>
                    <form class='form-row align-items-center' action='/adicionarProduto.php' method='POST'>
                        <input type='text' name='nome' value='$nome' hidden>
                        <input type='number' name='valor' value='$valor' hidden>
                        <label class='mr-sm-2 sr-only'>Quantidade: </label>
                        <select name='qtd' class='custom-select mr-sm-2 mb-2 quantidade' id='inlineFormCustomSelect'>
                        <option value='1'>Um</option>
                        <option value='2'>Dois</option>
                        <option value='3'>Três</option>
                        </select>
                        <button type='submit' class='btn btn-warning'>Adicionar ao Carrinho</button>
                    </form>
                    
                    </div>
                </div>
            </div>";
            $contador += 1;
            }
            $html_code .= "</div></div>";
            return $html_code;
            }else{
                return "<center><h1>Não encontramos resultados para sua pesquisa</h1></center>  ";
            }
        }
       
?>