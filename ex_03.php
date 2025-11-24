<?php
function printAll (array $tab) {
    foreach($tab as $kay => $value) {
        print_r($value);
        echo "\n";
    }
};