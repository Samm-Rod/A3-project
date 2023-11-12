
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Update Employees</title>
</head>
<body>
<header>
        <h2><a href="../index.html">Stock Mgex</a></h2>
    </header>
    <section>
        <center>
            <h2>Update Employees</h2>
        </center>
    </section>
    <?php

            $id = $_POST['id'];

            $con = mysqli_connect("127.0.0.1", "root", "", "crud");

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($con, "SELECT * FROM tb_employees WHERE id='$id'");

    ?>

<p>
<center>
    <form action="update.php" method="post">

        <?php while ($row = mysqli_fetch_array($result)) { ?>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            <label><input type="text" placeholder="Name" name="name" value="<?php echo $row['names']; ?>" /> </label><br/>
            <label><input type="text" placeholder="CPF" name="cpf" value="<?php echo $row['cpf']; ?>" /> </label><br/>
            <label><input type="text" placeholder="Age" name="age" value="<?php echo $row['age']; ?>" /> </label><br/>
            <label><input type="text" placeholder="Office" name="office" value="<?php echo $row['office']; ?>" /> </label><br/>
            <button type="submit" name="enviar" value="ok"> Update </button>

        <?php } ?>

    </form>
</center>
</p>
</body>
</html>