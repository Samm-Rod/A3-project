<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier</title>
</head>
<body>
<?php  
        $company = $_POST['company'];
        $zip = $_POST['zip'];
        $supplier = $_POST['supplier'];
        $cnpj = $_POST['cnpj'];
       

        $sql = "INSERT INTO tb_supplier(company, zip, supplier, cnpj) VALUES ('$company','$zip','$supplier','$cnpj')";

        $conn = mysqli_connect("localhost","root","","crud");
        if(!$conn){
            die("Failed to MySQL connect: ". mysqli_connect_error());
        }
        $result = mysqli_query($conn, $sql);
        echo"<h1>Successfully registered <a href='../supplier/index_supplier.html'>Come back</a></h1>";
        mysqli_close($conn);
    
    ?>
</body>
</html>