<?php
function item_Exists($array, $key, $value = NULL){
    if(!is_array($array)){
        return false;
    }
    
    if(empty($array)){
        return false;
    }
    
    if($key == NULL){
        return false;
    }
    
    if(empty($key)){
        return false;
    }
    if($value == NULL){
        return array_key_exists($key, $array);
    }
    else{
        return array_key_exists($key, $array) && $array[$key] ==$value;
    }
}

