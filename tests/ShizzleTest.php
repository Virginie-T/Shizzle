<?php

    require_once "src/Shizzle.php";

    class ShizzleTest extends PHPUnit_Framework_TestCase
    {

        /*
        input: “s”
        output: “z”
        Spec: Translate s to z
        */
        function test_translate_singleLetter()
        {
            //arrange
            $test_Shizzle = new Shizzle;
            $input = "s";

            //act
            $result = $test_Shizzle->translate($input);

            //assert
            $this->assertEquals("z", $result);
        }
    }


 ?>
