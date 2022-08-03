<main class="container" id="main-usuarios-f">
<!-- exibe usuários cadastrados -->
    <div>

        <form id="form-usuarios" method="post">

            <table id="table-usuarios">
                <tr>
                    <th>Selecione</th>
                    <th>Nome</th>
                    <th>Senha</th>
                    <th>Acesso</th>
                </tr>
            </table>

            <div class="botoes">
                <button name="editar" id="editar">Editar</button>
            </div>
        </form>
    </div>
    
    <!-- formulário para Editar usuário selecionado -->
    <div>

        <form id="form-crud" method="post">

            <input type="hidden" name="usuario-operacao" id="usuario-operacao" value="">

            <input type="hidden" name="usuario-oldnome" id="usuario-oldnome" value="">

            <input type="text" name="usuario-newnome" id="usuario-newnome" value="">

            <input type="text" name="usuario-passw" id="usuario-passw" value="">

            <select name="usuario-acesso" id="usuario-acesso" value="">

                <option value="0">Comum</option>
            </select>

            <div class="botoes">
                <button id="salvar">Salvar</button> <button id="cancelar">Cancelar</button>
            </div>
        </form>

        <div id="erro"></div>
    </div>
</main>