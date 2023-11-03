<?php 

    $id = $_POST['id'];
    $sql = "DELETE FROM tb_products WHERE id='$id'";
    $conn = mysqli_connect("localhost", "root", "Summer1945", "crud");
    if(!$conn){
        die("Failed to connect to MySQL: ". mysqli_connect_error());
    }
    mysqli_query($conn, $sql);
    echo"<center><h2></h2></center>";
    mysqli_close($conn);
?>
<center><h2><a href="select.php">Come Back</a></h2></center>