<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php  
        $names = $_POST['name'];
        $qtd = $_POST['qtd'];
        $price = $_POST['price'];
        $code = $_POST['code'];

        // Inicialize $total antes de usar
        $total = $qtd * $price;
        $total = number_format($total, 2, '.', '');

        $sql = "INSERT INTO tb_products(names, qtd, price, code, total) VALUES ('$names','$qtd','$price','$code','$total')";

        $conn = mysqli_connect("localhost", "root", "", "crud");
        if (!$conn) {
            die("Failed to MySQL connect: " . mysqli_connect_error());
        }
        $result = mysqli_query($conn, $sql);
        echo "<h1>Successfully registered <a href='../products/index_prod.html'>Come back</a></h1>";
        mysqli_close($conn);
    ?>
</body>
</html>