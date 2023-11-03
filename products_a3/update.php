    <?php 

        $id = $_POST['id'];
        $conn = mysqli_connect("localhost","root","Summer1945","crud");
        if(!$conn){
            die("Failed to connect to MySQL:". mysqli_connect_error());
        }
        $result = mysqli_query($conn,"SELECT * FROM tb_products WHERE id='$id'");
    ?>

    <p><center><form action="updateProd.php" method="post" >
        <?php while($row = mysqli_fetch_array($result)){?>
            <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
            <label>Code: <input type="text" name="codes" value="<?php echo $row['codes'];?>"/> </label><br>
            <label>Name: <input type="text" name="names" value="<?php echo $row['names'];?>"/> </label><br>
            <label>Color: <input type="text" name="color" value="<?php echo $row['color'];?>"/> </label><br>
            <label>qtd: <input type="text" name="qtd" value="<?php echo $row['qtd'];?>"/> </label><br>
            <label>Price: <input type="text" name="price" value="<?php echo $row['price'];?>"/> </label><br>
            <label>Data: <input type="date" name="dates" value="<?php echo $row['dates'];?>"/> </label><br>
            <label>Total: <input type="text" name="total" value="<?php echo $row['total'];?>"/> </label><br>
            <button type="submit" name="send" value="ok">Update</button>
            <?php }?>
    </form></center></p>
<!--
        $id = $_POST['id'];
    $codes = $_POST['codes'];
    $names = $_POST['names'];
    $color = $_POST['color'];
    $qtd = $_POST['qtd'];
    $price = $_POST['price'];
    $dates = $_POST['dates'];
    $total = $_POST['total'];
        -->