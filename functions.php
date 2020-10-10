<?php

function dd($data){
    echo '<div class="p-5 m-5 rounded-lg text-left font-mono text-lg bg-gray-800 text-white">';
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    echo '</div>';
}