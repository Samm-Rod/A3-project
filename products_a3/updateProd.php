<?php 

    $id = $_POST['id'];
    $codes = $_POST['codes'];
    $names = $_POST['names'];
    $color = $_POST['color'];
    $qtd = $_POST['qtd'];
    $price = $_POST['price'];
    $dates = $_POST['dates'];
    $total = $qtd * $price;

    
    $sql = "UPDATE tb_products SET id='$id', names='$names', color='$color', qtd='$qtd', price='$price', dates='$dates', total='$total', codes='$codes' WHERE id='$id'";

    $conn = mysqli_connect("localhost","root","Summer1945","crud");
    if(!$conn){
        die("Failed to connect to MySQL:". mysqli_connect_error());
    }
    mysqli_query($conn,$sql);
    echo"<center><h2>Product successfully changed</h2></center>";
    mysqli_close($conn);
    
    
?>

<center><h2><a href="select.php">Come Back</a></h2></center>