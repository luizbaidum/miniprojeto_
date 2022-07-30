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
                <button type="submit" name="novo" value="novo">Novo</button> <button type="submit" name="editar">Editar</button> <button type="submit" name="excluir">Excluir</button>
            </div>
        </form>
    </div>

    <!-- tabela arrumada de forma a não permitir nomes duplicados. arrumei os códigos para se ajustar a nova tabela. Faltam = botao cancelar e fazer se parar novo de editar de deletar. tentar fazer reconhecer qual botao estou clicando. -->
    
    <!-- edit de usuário selecionado -->
    <div>

        <form id="form-edit" method="post">

            <input type="hidden" name="usuario-oldnome" id="usuario-oldnome" value="">

            <input type="text" name="usuario-newnome" id="usuario-newnome" value="">

            <input type="text" name="usuario-passw" id="usuario-passw" value="">

            <select name="usuario-acesso" id="usuario-acesso" value="">

                <option value="0">Comum</option>
                <option value="1">Adm</option>
            </select>

            <div id="botoes">
                <button type="submit" name="salvar">Salvar</button> <button type="submit" name="cancelar">Cancelar</button>
            </div>
        </form>

        <div id="erro"></div>
    </div>
</main>