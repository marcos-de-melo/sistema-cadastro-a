<?php
if (isset($_GET['acao']) && $_GET['acao'] == 'excluir') {
    $idUsuario = $_GET['idUsuario'];
    $sql = "DELETE FROM tbusuarios WHERE idUsuario = $idUsuario";
    mysqli_query($conn, $sql);

}

?>

<h2>Lista de Cadastro</h2>

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Excluir</th>
            <th>Editar</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT idUsuario, nomeUsuario, emailUsuario, 
       date_format(dataNascUsuario, '%d/%m/%Y') dataNascUsuario FROM tbusuarios";
        $resultado = mysqli_query($conn, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
                <td><?php echo $linha['idUsuario']; ?></td>
                <td><?php echo $linha['nomeUsuario']; ?></td>
                <td><?php echo $linha['emailUsuario']; ?></td>
                <td><?php echo $linha['dataNascUsuario']; ?></td>
                <td>
                    <a class="btn btn-danger"
                        href="index.php?menu=lista&acao=excluir&idUsuario=<?php echo $linha['idUsuario']; ?>">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </td>
                <td>
                    <a class="btn btn-warning"
                        href="index.php?menu=editar-cadastro&idUsuario=<?php echo $linha['idUsuario']; ?>">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </td>

            </tr>

            <?php
        }
        ?>
    </tbody>
</table>