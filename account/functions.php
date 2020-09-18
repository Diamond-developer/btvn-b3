<?php

function randomString($length = 5){
    $arrCharacter = array_merge(range('A','Z'), range('a','z'), range(0,9));
    $arrCharacter = implode('',$arrCharacter);
    $arrCharacter = str_shuffle($arrCharacter);
    
    $result		= substr($arrCharacter, 0, $length);
    return $result;
}

function checkEmpty($value){
    $flag = false;
    if(!isset($value) || trim($value) == ""){
        $flag = true;
    }
    return $flag;
}

function checkLength($value, $min, $max){
    $flag 	= false;
    $length	= strlen($value);
    if($length < $min || $length > $max){
        $flag = true;
    }
    return $flag;
}