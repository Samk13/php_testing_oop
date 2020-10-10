<?php

function dd($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


function allowed_age($age) {
    if(!is_numeric($age)){
        echo "enter a number";
    } elseif (intval($age) > 60 ){
            echo "enter a valid age";
    } elseif (intval($age) < 21 ){
        echo "Go home you too young";
    } else {
        $result =  intval($age) > 21
        ? "Welcome Please proceeed &#129305;&#127996;"
        :"Only numbers are allowed";
        echo $result;
    }
}

$age = $_GET['age'];
$result = allowed_age($age);