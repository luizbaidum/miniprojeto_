<main class="container" id="main-cadastro-produtos">

    <span>Cadastro de novos Produtos</span>

    <form id="form-cadastro-produtos" type="post">

        <input type='hidden' nome='operacao' id='operacao' value='novo'>

        <div>
            <label for="produto-codigo">Código do Produto</label>
            <input type="text" name="produto-codigo" id="produto-codigo" value="">
        </div>
        
        <div>
            <label for="produto-nome">Nome do Produto</label>
            <input type="text" name="produto-nome" id="produto-nome" value="">
        </div>

        <div>
            <label for="produto-valor">Valor do Produto</label>
            <input type="number" min="1" step="any" name="produto-valor" id="produto-valor" value="">
        </div>

        <div>
            <label for="produto-qtd">Quantidade do Produto</label>
            <input type="number" min="1" step="any" name="produto-qtd" id="produto-qtd" value="">
        </div>

        <div class="botoes">
            <button id="salvar">Salvar</button> <button id="cancelar">Cancelar</button>
        </div>
    </form>
</main>