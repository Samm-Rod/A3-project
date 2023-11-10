<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>List Suppliers</title>
</head>
<body>
    <header>
        <h2><a href="../index.html">Stock Mgex</a></h2>
    </header>
    <section>
        <ul>
            <li><a href="cad_supplier.html">Create</a></li>
            <li><a href="#">Select all</a></li>
            <li><a href="#">Update</a></li>
            <li><a href="#">Remove</a></li>
        </ul>
    </section>
    
    <?php
$conn = mysqli_connect("localhost", "root", "Summer1945", "crud");

if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($conn, "SELECT * FROM tb_supplier");

// Inicialize a variável para armazenar a soma
$sumAllProducts = 0;

// Inicialize um array para armazenar os resultados
$productData = array();

// Loop através dos resultados e armazene-os no array
while ($row = mysqli_fetch_array($result)) {
    $supplierData[] = $row;
}

?>

<p>
    <center>
        <table border="1">
            <!-- Cabeçalhos da tabela -->
            <tr>
                <th>Id</th>
                <th>Company</th>
                <th>ZIP</th>
                <th>Suppliers</th>
                <th>CNPJ</th>
                <th>Update</th>
                <th>Remove</th>
            </tr>
            <?php
            // Loop através dos dados no array
            foreach ($supplierData as $row) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['company']; ?></td>
                    <td><?php echo $row['zip']; ?></td>
                    <td><?php echo $row['supplier']; ?></td>
                    <td><?php echo $row['cnpj']; ?></td>
                    <td>
                        <form action="update.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                            <button type="submit" name="botaltprod" value="ok">Update</button>
                        </form>
                    </td>
                    <td>
                        <form action="removeProd.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                            <button type="submit" name="botaltprod" value="ok">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            mysqli_close($conn);
            ?>
        </table>
        
    </center>
</p>

</body>
</html>