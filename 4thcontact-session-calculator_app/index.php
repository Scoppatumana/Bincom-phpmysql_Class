
<?php
    if(isset($_POST['calculate'])){
        unset($_POST['result'], $_POST['calculate']);
        $first_num = $_POST['firstNumber'];
        $second_num = $_POST['secondNumber'];
        $operator = $_POST['operator'];

        if ($operator === "Sum") {
            $result = $first_num + $second_num;
        }

        if ($operator === "Difference") {
            $result = $first_num - $second_num;
        }

        if ($operator === "Product") {
            $result = $first_num * $second_num;
        }

        if ($operator === "Fraction") {
            $result = $first_num / $second_num;
        }

        if ($operator === "Remainder") {
            $result = $first_num % $second_num;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My calculator App</title>
</head>

<body>
    <h1>Calculator App</h1>
    <div class="body-div">
        <form action="index.php" method="post">
        <div class="value-container">
            <div>
                <label for="firstNumber"> First Number</label>
                <input type="number" value="<?php echo $first_num ?>" name="firstNumber" id="firstNumber">
            </div>

            <div>
                <label for="secondNumber"> Second Number</label>
                <input type="number" value="<?php echo $second_num ?>" name="secondNumber" id="secondNumber">
            </div>

            <div>
                <label for="operator"> Find the:</label>
                <select name="operator" id="operator">
                    <?php
                        if($_POST['operator'] == "Sum"){
                    ?>
                    <option value="<?php echo $_POST['operator'] ?>" selected><?php echo $_POST['operator'] ?></option>
                    <option value="Difference">Difference</option>
                    <option value="Product">Product</option>
                    <option value="Fraction">Fraction</option>
                    <option value="Remainder">Remainder</option>
                    <?php
                        }elseif($_POST['operator'] == "Difference")  {
                    ?>
                    <option value="<?php echo $_POST['operator'] ?>" selected><?php echo $_POST['operator'] ?></option>
                    <option value="Sum">Sum</option>
                    <option value="Product">Product</option>
                    <option value="Fraction">Fraction</option>
                    <option value="Remainder">Remainder</option>
                    <?php
                        }elseif($_POST['operator'] == "Product")  {
                    ?>
                    <option value="<?php echo $_POST['operator'] ?>" selected><?php echo $_POST['operator'] ?></option>
                    <option value="Sum">Sum</option>
                    <option value="Difference">Difference</option>
                    <option value="Fraction">Fraction</option>
                    <option value="Remainder">Remainder</option>
                    <?php
                        }elseif($_POST['operator'] == "Fraction")  {
                    ?>
                    <option value="<?php echo $_POST['operator'] ?>" selected><?php echo $_POST['operator'] ?></option>
                    <option value="Sum">Sum</option>
                    <option value="Difference">Difference</option>
                    <option value="Product">Product</option>
                    <option value="Remainder">Remainder</option>
                    <?php
                        }elseif($_POST['operator'] == "Remainder")  {
                    ?>
                    <option value="<?php echo $_POST['operator'] ?>" selected><?php echo $_POST['operator'] ?></option>
                    <option value="Sum">Sum</option>
                    <option value="Difference">Difference</option>
                    <option value="Fraction">Fraction</option>
                    <option value="Product">Product</option>
                    <?php
                        }elseif($_POST['operator'] == "")  {
                    ?>
                    <option value="" selected> Select an Operator</option>
                    <option value="Sum">Sum</option>
                    <option value="Difference">Difference</option>
                    <option value="Fraction">Fraction</option>
                    <option value="Product">Product</option>
                    <option value="Remainder">Remainder</option>
                    <?php
                        }
                    ?>
                </select>
            </div>

        </div>

        <div class="calculate">
            <button type="submit" name="calculate">
                Calculate
            </button>
        </div>

        <div class="result">
            <div>
                <label for="result"> The Answer is:</label>
                <input type="number" value="<?php echo $result ?>" name="result" id="result">
            </div>
        </div>
        </form>
    </div>

  
</body>

</html>