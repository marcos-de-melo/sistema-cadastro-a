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
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>
    </div>
    <div>
        <label for="obs">Observações</label>
        <textarea name="obs" id="obs"></textarea>
    </div>

    <div>
        <button class="btn btn-primary btn-sm" type="submit">Cadastrar</button>
    </div>

</form>
<?php
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$dataNasc = $_POST['dataNasc'] ?? '';
$senha = $_POST['senha'] ?? '';
$obs = $_POST['obs'] ?? '';

if ($nome && $email && $dataNasc && $senha && $obs) {

    $sql = "INSERT INTO tbusuarios 
        (nomeUsuario, emailUsuario, dataNascUsuario, senhaUsuario, obsUsuario) 
        VALUES ('$nome', '$email', '$dataNasc', '$senha', '$obs')";

    $resultado = mysqli_query($conn, $sql);
    if ($resultado) {
        echo "<p>Dados inseridos no banco de dados com sucesso!</p>";
    } else {
        echo "<p>Erro ao inserir dados: " . mysqli_error($conn) . "</p>";
    }


} else {
    echo "<p>Preencha todos os campos obrigatórios.</p>";
}



?>