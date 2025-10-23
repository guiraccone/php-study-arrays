<?php

class Validator
{
    // This method doesn't depend on instance state or external objects, 
    // so it can be declared static. It behaves like a pure function:
    // it always returns the same result for the same inputs and has no side effects.
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    
    public static function email($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
