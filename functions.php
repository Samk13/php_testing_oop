<?php

function dd($data){
    echo '<div class="p-5 m-5 rounded-lg text-left font-mono text-lg bg-gray-800 text-white">';
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    echo '</div>';
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

function db_connect()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo','root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTasks($db)
{
    $statment = $db->prepare('select * from todos');

    $statment->execute();

    return $statment->fetchAll(PDO::FETCH_CLASS, 'Task');
}