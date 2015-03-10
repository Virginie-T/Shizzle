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
        /*
        input: “susan”
        output: “zuzan”
        spec: replace all “s” by “z” in a whole word
        */
        function test_translate_singleWord()
        {
            //arrange
            $test_Shizzle = new Shizzle;
            $input = "susan";

            //act
            $result = $test_Shizzle->translate($input);

            //assert
            $this->assertEquals("zuzan", $result);
        }

        function test_translate_multipleWord()
        {
            //arrange
            $test_Shizzle = new Shizzle;
            $input = "susan has some serious skills";

            //act
            $result = $test_Shizzle->translate($input);

            //assert
            $this->assertEquals("zuzan haz zome zeriouz zkillz", $result);
        }

        function test_translate_firstLetter()
        {
            //arrange
            $test_Shizzle = new Shizzle;
            $input = "Susan";

            //act
            $result = $test_Shizzle->translate($input);

            //assert
            $this->assertEquals("Suzan", $result);
        }

    }


 ?>
