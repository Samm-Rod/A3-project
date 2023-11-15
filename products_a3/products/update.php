<?php

    $id = $_POST['id'];
    $names = $_POST['name'];
    $qtd = $_POST['qtd'];
    $price = $_POST['price'];
    $code = $_POST['codes'];


    $sql = "UPDATE tb_products SET names='$names', qtd='$qtd', price='$price', code='$code' WHERE id=$id";

    $con = mysqli_connect("127.0.0.1", "root", "", "crud");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query($con, $sql);

    echo "<center><h2>Product updated successfully!</h2></center><p><br>";

    mysqli_close($con);

?>
<center><h2><a href="select_prod.php">Come back</a></h2></center>
