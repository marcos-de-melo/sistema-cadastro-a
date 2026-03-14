<?php
if (isset($_GET['acao']) && $_GET['acao'] == 'excluir') {
    $idUsuario = $_GET['idUsuario'];
    $sql = "DELETE FROM tbusuarios WHERE idUsuario = $idUsuario";
    mysqli_query($conn, $sql);

}

?>

<h2>Lista de Cadastro</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Excluir</th>

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
                    <a href="index.php?menu=lista&acao=excluir&idUsuario=<?php echo $linha['idUsuario']; ?>">
                        Excluir
                    </a>
                </td>

            </tr>

            <?php
        }
        ?>
    </tbody>
</table>