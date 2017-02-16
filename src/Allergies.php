<?php
    class Allergies
    {
        function getAllergies($input)
        {
            echo "input type is " . gettype($input) . ",  ";
            echo "input is " . $input . ",  ";
            $inputAsNumber = intval($input);
            echo "inputAsNumber type is " . gettype($inputAsNumber) . ",  ";
            echo "input is " . $inputAsNumber;
            return $inputAsNumber;
        }
    }
?>
