<main class="container lista-produtos" id="main-produtos-a">

    <div id="area-editar"> 
        
        <form id="form-edita-produtos" method="post">

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

            <input type="hidden" id="operacao" name="operacao" value="editar">
            <input type="hidden" id="oldCodigo" name="oldCodigo" value="">
        </form>
    </div>
</main>