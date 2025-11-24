<?php
function getThird(array $tab) {
    if (count($tab) <=2) {
        return "Array doesn't have the required size \n";
    } else {
        echo $tab [2];
    }
};