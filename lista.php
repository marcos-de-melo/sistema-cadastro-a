<h2>Lista de Cadastro</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>

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
          
            </tr>

            <?php
        }
        ?>
    </tbody>
</table>