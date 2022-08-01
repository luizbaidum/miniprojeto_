<main class="container" id="main-usuarios-a">
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

            <div id="botoes">
                <button name="novo" id="novo">Novo</button> <button name="editar" id="editar">Editar</button> <button name="excluir" id="excluir">Excluir</button>
            </div>
        </form>
    </div>

    <!-- Faltam = botao cancelar e fazer se parar novo de editar de deletar. leia usuarios-crud.php  -->
    
    <!-- formulário para CRUD de usuário selecionado -->
    <div>

        <form id="form-crud" method="post">

            <input type="hidden" name="usuario-operacao" id="usuario-operacao" value="">

            <input type="hidden" name="usuario-oldnome" id="usuario-oldnome" value="">

            <input type="text" name="usuario-newnome" id="usuario-newnome" value="">

            <input type="text" name="usuario-passw" id="usuario-passw" value="">

            <select name="usuario-acesso" id="usuario-acesso" value="">

                <option value="0">Comum</option>
                <option value="1">Adm</option>
            </select>

            <div id="botoes">
                <button id="salvar">Salvar</button> <button id="cancelar">Cancelar</button>
            </div>
        </form>

        <div id="erro"></div>
    </div>
</main>