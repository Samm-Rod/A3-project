<?php 
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_products WHERE id = '$id'";
    $con = mysqli_connect("127.0.0.1","root","","crud");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }
    mysqli_query($con,$sql);
    echo "<center><h2>Product removed succecsfully!</h2></center>";
?>
<center><h2><a href="select_prod.php">Come back</a></h2></center>