<?php
function countItems(array $tab) {
    if (empty($tab)) {
        echo "Array cannot be empty";
    }else{
        echo count($tab);
    }
};