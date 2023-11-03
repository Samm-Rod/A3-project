<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Created</title>
</head>
<body>
    <?php 
        $code = $_POST['code'];
        $names = $_POST['names'];
        $color = $_POST['color'];
        $qtd = $_POST['qtd'];
        $price = $_POST['price'];
        $data = $_POST['date'];
        $vlTraffic = $_POST['vlTraffic'];
        $mktPlace = $_POST['mktPlace'];
      
        $total += $qtd * $price;
        $total = number_format($total,2,'.','');

        $conn = mysqli_connect("localhost","root","Summer1945","crud");

        $sql = "INSERT INTO tb_products (names, color, qtd, price, dates, total, codes, trafficValue, mktPlace)
        VALUES('$names','$color','$qtd','$price','$data','$total','$code','$vlTraffic','$mktPlace')";

        if(!$conn){
            die("Failed to MySQL connect: ". mysqli_connect_error());
        }
        $result = mysqli_query($conn, $sql);
        echo"<h1>Successfully registered <a href='create_prod.html'>Come back</a></h1>";
        mysqli_close($conn);
    ?>
</body>
</html>