<?php
    class Shizzle
    {
        function translate($input_string)
        {
            $input_array = str_split($input_string);
            $z_array = array();
            foreach($input_array as $letter)
            {
                if ($letter == "S") {
                    array_push($z_array, $letter);
                }
                elseif ($letter == "s") {
                    array_push($z_array, "z");
                }
                else {
                    array_push($z_array, $letter);
                }
            }
            return implode($z_array);
        }
    }

?>
