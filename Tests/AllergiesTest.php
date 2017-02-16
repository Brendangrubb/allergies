<?php
    require_once __DIR__.'/../src/Allergies.php';

    class AllerigesTest extends PHPUnit_Framework_TestCase
    {
        function test_getAllergies_returnScoreAsNumber()
        {
            $test_Allergies = new Allergies;
            $input = "15";

            $result = $test_Allergies->getAllergies($input);

            $this->assertEquals(15, $result);
        }
    }
?>
