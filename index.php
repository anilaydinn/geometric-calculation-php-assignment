
<?php 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematica</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-color">
    <h1 class="heading">Mathematica</h1>
    <div class="main-container">
        <div class="shape-area">
        <div class="calculate-section">
            <div class="circle"></div>
            <h4 class="heading">Calculate Circle</h4>
            <?php 
                    if($_GET['circle_area'] && $_GET['circle_circumference']){
                        echo "<p class='result'>Area is = "." ".$_GET['circle_area']."</p>";
                        echo "<p class='result'>Circumference is = "." ".$_GET['circle_circumference']."</p>";
                    }else if($_GET['undefined_radius'] == "true"){
                        echo "<p style='color:yellow;'>Warning Radius is not equal 0!</p>";
                    }
            ?>
            <form method="POST" action="./calculate.php">
                <label class="label">Radius: </label>
                <input type="number" min="1" name="input_radius">
                <input type="submit" name="calculate_circle" value="Calculate">
            </form>
        </div>
        </div>

        <div class="shape-area">
        <div class="calculate-section">
            <div class="square"></div>
            <h4 class="heading">Calculate Square</h4>
            <?php 
                    if($_GET['square_area'] && $_GET['square_circumference']){
                        echo "<p class='result'>Area is = "." ".$_GET['square_area']."</p>";
                        echo "<p class='result'>Circumference is = "." ".$_GET['square_circumference']."</p>";
                    }else if($_GET['undefined_side'] == "true"){
                        echo "<p style='color:yellow;'>Warning side is not equal 0!</p>";
                    }
            ?>
            <form method="POST" action="./calculate.php">
                <label class="label">Side: </label>
                <input type="number" min="1" name="input_side">
                <input type="submit" name="calculate_square" value="Calculate">
            </form>
        </div>
        </div>

        <div class="shape-area">
        <div class="calculate-section">
            <div class="arrow-up"></div>
            <div class="arrow-down"></div>
            <div class="arrow-left"></div>
            <div class="arrow-right"></div>
            <h4 class="heading">Calculate Triangle</h4>
            <?php 
                    if($_GET['triangle_area'] && $_GET['triangle_circumference']){
                        echo "<p class='result'>Area is = "." ".$_GET['triangle_area']."</p>";
                        echo "<p class='result'>Circumference is = "." ".$_GET['triangle_circumference']."</p>";
                    }else if($_GET['undefined_triangle_side'] == "true"){
                        echo "<p style='color:yellow;'>Warning side is not equal 0!</p>";
                    }
            ?>
            <form method="POST" action="./calculate.php">
                <label class="label">Side: </label>
                <input style="margin-left: 17px;" type="number" min="1" name="input_side"><br><br>
                <label class="label">Height: </label>
                <input type="number" min="1" name="input_height">
                <input type="submit" name="calculate_triangle" value="Calculate">
            </form>
        </div>
        </div>

        <div class="shape-area">
        <div class="calculate-section">
            <div class="rectangle"></div>
            <h4 class="heading">Calculate Rectangle</h4>
            <?php 
                    if($_GET['rectangle_area'] && $_GET['rectangle_circumference']){
                        echo "<p class='result'>Area is = "." ".$_GET['rectangle_area']."</p>";
                        echo "<p class='result'>Circumference is = "." ".$_GET['rectangle_circumference']."</p>";
                    }else if($_GET['undefined_rectangle_side'] == "true"){
                        echo "<p style='color:yellow;'>Warning side is not equal 0!</p>";
                    }
            ?>
            <form method="POST" action="./calculate.php">
                <label class="label">Height: </label>
                <input type="number" min="1" name="input_height"><br><br>
                <label class="label">Width: </label>
                <input type="number" min="1" name="input_width">
                <input type="submit" name="calculate_rectangle" value="Calculate">
            </form>
        </div>
        </div>
    </div>

    <div class="signature">
        <div>    
            <h1>Anıl Aydın</h1>
            <h2>B1605.090018</h2>
        </div>
    </div>
</body>
</html>