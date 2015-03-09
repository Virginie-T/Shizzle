<?php
    class Shizzle
    {
        function translate($input_string)
        {
            $input_array = str_split($input_string);
            $z_array = array();
            foreach($input_array as $letter)
            {
                if($letter == "s") {
                    array_push($z_array, "z");
                }
            }

            return implode($z_array);
        }
    }

?>
