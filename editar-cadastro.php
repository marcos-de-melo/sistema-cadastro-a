<h2>Editar Cadastro</h2>

<form class="bg-dark text-bg-dark p-3 rounded" action="index.php?menu=cadastro" method="post">

    <div class="mb-3">
        <label class="form-label" for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">E-mail</label>
        <input class="form-control" type="email" name="email" id="email" required>
    </div>

    <div class="mb-3">
        <label class="form-label" for="dataNasc">Data de Nascimento</label>
        <input class="form-control" type="date" name="dataNasc" id="dataNasc" required>
    </div>

    <div class="mb-3">
        <label class="form-label" for="senha">Senha</label>
        <input class="form-control" type="password" name="senha" id="senha" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="obs">Observações</label>
        <textarea class="form-control" name="obs" id="obs"></textarea>
    </div>

    <div class="mb-3">
        <button class="btn btn-primary btn-sm" type="submit">Atualizar</button>
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