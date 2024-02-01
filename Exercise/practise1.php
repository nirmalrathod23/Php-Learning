<!-- store array in array -->
<?php 
    $car = array("name","make",["new"]);
    echo $car[2][0];
?>

<!-- find length of array -->

<?php 

$names = array("nirmal","krishna","mansi","hardik","yasmin",23);

    print_r($names);
    echo '<br>' . count($names);

    echo '<br>' . sizeof($names);


?>