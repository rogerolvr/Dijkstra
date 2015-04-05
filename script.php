<?php
    require 'csv.php';
    require 'dij.php';

    //save the csv file in uploads
    $filename = upload();
    //return the array with the csv data
    $data = open($filename);
    //run the algorithm
    $result = dijkstra($data);

    //Print the result
    echo "Matriz final:</br></br>";
    foreach ( $result as $v1){
        foreach ($v1 as $v2){
            echo $v2, ', ';
        }
        echo '<br>';
    }
