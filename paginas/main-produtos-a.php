<main class="container lista-produtos" id="main-produtos-a">
<!-- exibe produtos cadastrados -->
    <div class="card-produtos">

        <div class="produto codigo">Código: <span>001</span></div>

        <div class="produto nome">Nome: <span>Teste</span></div>

        <div class="produto valor">Valor: R$ <span>200.00</span></div>

        <div class="produto qtd">Qtd. disponível: <span>5</span></div>

        <form class="botoes" id="form-produtos">

            <input type="hidden" class="codigo-produto">

            <button id="usar">Usar 1</button>

            <button id="editar">Editar este</button>

            <button id="excluir">Excluir este</button>
        </form>
    </div>
    
    <!-- formulário para CRUD de usuário selecionado -->
    <div>

        <span id="confirma-exclusao"></span>

        <form id="form-crud" method="post">

            <input type="hidden" name="usuario-operacao" id="usuario-operacao" value="">

            <input type="hidden" name="usuario-oldnome" id="usuario-oldnome" value="">

            <input type="text" name="usuario-newnome" id="usuario-newnome" value="">

            <input type="text" name="usuario-passw" id="usuario-passw" value="">

            <select name="usuario-acesso" id="usuario-acesso" value="">

                <option value="0">Comum</option>
                <option value="1">Adm</option>
            </select>

            <div class="botoes">
                <button id="salvar">Salvar</button> <button id="cancelar">Cancelar</button>
            </div>
        </form>

        <div id="erro"></div>
    </div>
</main>