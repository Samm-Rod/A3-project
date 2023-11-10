<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>
<?php  
        $names = $_POST['name'];
        $cpf = $_POST['cpf'];
        $age = $_POST['age'];
        $office = $_POST['office'];

        $sql = "INSERT INTO tb_employees(names, cpf, age, office) VALUES ('$names','$cpf','$age','$office')";

        $conn = mysqli_connect("localhost","root","Summer1945","crud");
        if(!$conn){
            die("Failed to MySQL connect: ". mysqli_connect_error());
        }
        $result = mysqli_query($conn, $sql);
        echo"<h1>Successfully registered <a href='../employees/cad_empl.html'>Come back</a></h1>";
        mysqli_close($conn);
    
    ?>
</body>
</html>