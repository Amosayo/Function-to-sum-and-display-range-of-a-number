<?php 

    // Function to check if the input box is empty 

    function EmptyInput($FirstValue, $SecondValue){

        $result;

        if(empty ($FirstValue) || empty ($SecondValue)){

            $result = true;
            
        }else{
            
            $result = false;
            
        }
        return $result;
        
    }

    //Function to Dispaly The Range Of Numbers. 
    
    function DisplayRange($FirstValue, $SecondValue){
        
        $Numbers = array();
        $Sum = 0;

        if($FirstValue <= $SecondValue){
            for($i = $FirstValue; $i <= $SecondValue; $i++){
                echo $Numbers[$i] = $i + 0 . "<br />";
                $Sum = $Sum + $i;
                
            }
        }else if($FirstValue >= $SecondValue){

            for($i = $FirstValue; $i >= $SecondValue; $i--){
                echo $Numbers[$i] = $i - 0 . "<br />";
                $Sum = $Sum + $i;
                
            }
            
        }  

        echo "<br /> The Total Sum of the Range of the input values are : " .$Sum;
    }

    // Function to Sum up a given array of number.

    
