<?php

    $company = $_POST['company'];
    $zip = $_POST['zip'];
    $supplier = $_POST['supplier'];
    $cnpj = $_POST['cnpj'];


    $sql = "UPDATE tb_supplier SET company='$company', zip='$zip', supplier='$supplier', cnpj='$cnpj' WHERE id=$id";

    $con = mysqli_connect("127.0.0.1", "root", "", "crud");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query($con, $sql);

    echo "<center><h2>Supplier updated successfully!</h2></center><p><br>";

    mysqli_close($con);

?>
<center><h2><a href="select_prod.php">Come back</a></h2></center>