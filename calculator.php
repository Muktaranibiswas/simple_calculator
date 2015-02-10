<?php
session_start();
?>

<html>
<head>
    <title>Simple Calculate</title>
</head>
<body>
    <form action="calc.php"method="post">
        <fieldset>
            <legend>Calculator</legend>
            <?php if(isset($_SESSION['result'])){?>
            <?php echo "output of your calculation is: <strong>".$_SESSION['result']."</strong>";session_unset();session_destroy();?>
            <?php } ?>
            <?php if (isset($_SESSION['msg'])){?>
            <?php echo "<strong>".$_SESSION['msg']."</strong>";session_unset();session_destroy(); ?>
            <?php } ?>
            <br>      <br>
            <label>Number1: </label>
            <input type="number"name="number1">
            <br><br>
            <label>Number2: </label>
            <input type="number" name="number2">
            <br>      <br>
            <input type="radio" name="calc" value="add">Add
            <input type="radio" name="calc" value="subtract">Subtract
            <input type="radio" name="calc" value="divide">Divide
            <input type="radio" name="calc" value="multiply">Multiply
            <br>      <br>
            <button type="submit">Calculate</button>
        </fieldset>

    </form>
</body>
</html>


