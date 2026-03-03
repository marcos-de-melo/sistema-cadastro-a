<h2>Página de Cadastro</h2>

<form action="index.php?menu=cadastro" method="post">

    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="dataNasc">Data de Nascimento</label>
        <input type="date" name="dataNasc" id="dataNasc" required>
    </div>
    <div>
        <button type="submit">Cadastrar</button>
    </div>

</form>