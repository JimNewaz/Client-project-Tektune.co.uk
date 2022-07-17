<?php
    require_once('includes/config.php');
    
  
    if(isset($_POST['getModel'])){
        $make = $_POST['make'];
        $query = "SELECT model FROM `mytable` WHERE make LIKE '$make' GROUP BY model";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)) {
            $myArray[] = $row;
        }
        // $myArray[] = mysqli_num_rows($result);
        print_r(json_encode($myArray));
    }
    
    if(isset($_POST['getGeneration'])){
        $model = $_POST['model'];
        $make = $_POST['make'];
        $query = "SELECT year FROM `mytable` WHERE make='$make' AND model='$model' GROUP BY year";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)) {
            $myArray[] = $row;
        }
        // $myArray[] = $query;
        print_r(json_encode($myArray));
    }

    if(isset($_POST['getEngine'])){
        $model = $_POST['model'];
        $make = $_POST['make'];
        $generation = $_POST['generation'];
        
        $query = "SELECT engine FROM `mytable` WHERE make='$make' AND model='$model' AND year='$generation' GROUP BY engine";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)) {
            $myArray[] = $row;
        }
        // $myArray[] = $query;
        print_r(json_encode($myArray));
    }
    
    if(isset($_POST['getInformation'])){
        $model = $_POST['model'];
        $make = $_POST['make'];
        $generation = $_POST['generation'];
        $engine = $_POST['engine'];
        
        $query = "SELECT STANDARD_BHP, DYNO_CHIPTUNING_BHP, DIFFERENCE_BHP, STANDARD_TORQUE, DYNO_CHIPTUNING_TORQUE, DIFFERENCE_TORQUE, Type_of_fuel, Cylinder_content, Engine_ECU, Engine_number,Type_of_fuel,Cylinder_content,Engine_ECU,Engine_number FROM `mytable` WHERE make = '$make' AND model = '$model' AND YEAR = '$generation' AND ENGINE = '$engine'";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)) {
            $myArray[] = $row;
        }
        // $myArray[] = $query;
        print_r(json_encode($myArray));
    }

    
?>