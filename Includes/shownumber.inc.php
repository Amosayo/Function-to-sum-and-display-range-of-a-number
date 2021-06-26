
<?php

    require_once 'function.inc.php';

    if(isset($_POST["show"])){

        $FirstValue = $_POST["FirstValue"];
        $SecondValue = $_POST["SecondValue"];

        if(EmptyInput($FirstValue, $SecondValue) !== false){
                
            header("location: ../index.php?error=EmptyInput");
            exit();
        }  

        DisplayRange($FirstValue, $SecondValue);
    
    }
    else{
                
        header("location: ../index.php");
        exit();
    }