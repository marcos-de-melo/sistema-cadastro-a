<h2>Lista de Cadastro</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tbusuarios";
        $resultado = mysqli_query($conn, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
                <td><?php echo $linha['idUsuario']; ?></td>
                <td><?php echo $linha['nomeUsuario']; ?></td>
                <td><?php echo $linha['emailUsuario']; ?></td>
          
            </tr>

            <?php
        }
        ?>
    </tbody>
</table>