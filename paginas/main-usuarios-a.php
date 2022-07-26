<main class="container" id="main-usuarios-a">

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
                <button type="submit" name="novo">Novo</button> <button type="submit" name="editar">Editar</button> <button type="submit" name="excluir">Excluir</button>
            </div>
        </form>
    </div>
    <div>

        <form id="form-edit" method="post">

            <input type="hidden" name="usuario-id" id="usuario-id" value="">

            <input type="text" name="usuario-nome" id="usuario-nome" value="">

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