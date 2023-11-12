<?php 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $cpf = $_POST['cpf'];
    $age = $_POST['age'];
    $office = $_POST['office'];
    
    $sql = "UPDATE tb_employees SET names='$name', cpf='$cpf', age='$age', office='$office' WHERE id=$id";

    $con = mysqli_connect("127.0.0.1", "root", "", "crud");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query($con, $sql);

    echo "<center><h2>Employees updated successfully!</h2></center><p><br>";

    mysqli_close($con);
?>

<center><h2><a href="select_empl.php">Come back</a></h2></center>
