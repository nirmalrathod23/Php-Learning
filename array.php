<?php 
// multidimentional array
    $stds = [
        ["a1",2],
        ["b2",5],
        ["c3",1],
        ["d4",4],
        ["e5",3]
    ];
        // sorting array
        usort($stds,function($a,$b)
        {
            return $a[1] <=> $b[1];
        });
        //print array using foreach loop
    foreach ($stds as $student) {
            print_r($student);
    };

?>