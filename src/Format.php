<?php

namespace Text; 

class Format {
   

    public static function div($value) {
        if (($value % 3) == 0) {
            return  $value . " es divisible entre 3";
        }else {
            return  $value . " no  es divisible entre 3";
        }
    }
}

?>