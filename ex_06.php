<?php
$array = ["sqd", 23, 432, "qqsfdsq"];

function hasValue(array $tab, $value) {
    if (count($tab) == 0) {
        echo "Array cannot be empty";
        die;
    }elseif(in_array($value,$tab)){
        return $result = true;
    }else{
        return $result = false;
    }
    echo $result;
};
hasValue()