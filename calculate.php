<?php 

if(isset($_POST["calculate_circle"])){

    if($_POST['input_radius'] != 0){
        $radius = $_POST['input_radius'];

        $area = M_PI * pow($radius,2);
        $circumference = 2 * M_PI * $radius;
        header("Location:./index.php?circle_area=$area&circle_circumference=$circumference");
    }
    else{
        header("Location:./index.php?undefined_radius=true");
    }
}

if(isset($_POST["calculate_square"])){

    if($_POST['input_side'] != 0){
        $side = $_POST['input_side'];

        $area = pow($side,2);
        $circumference = 4 * $side;
        header("Location:./index.php?square_area=$area&square_circumference=$circumference");
    }
    else{
        header("Location:./index.php?undefined_side=true");
    }
}

if(isset($_POST["calculate_triangle"])){

    if($_POST['input_side'] != 0 && $_POST['input_height'] != 0){
        $side = $_POST['input_side'];
        
        $height = $_POST['input_height'];
        $area = ($side * $height) / 2;
        $circumference = $side * 3;
        header("Location:./index.php?triangle_area=$area&triangle_circumference=$circumference");
    }
    else{
        header("Location:./index.php?undefined_triangle_side=true");
    }
}

if(isset($_POST["calculate_rectangle"])){

    if($_POST['input_width'] != 0 && $_POST['input_height']){
        $width = $_POST['input_width'];
        $height = $_POST['input_height'];

        $area = $height * $width;
        $circumference = 2 * ($width + $height);

        header("Location:./index.php?rectangle_area=$area&rectangle_circumference=$circumference");
    }
    else{
        header("Location:./index.php?undefined_rectangle_side=true");
    }
}
?>