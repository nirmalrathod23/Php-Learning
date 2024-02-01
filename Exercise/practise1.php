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

    $names = array("NirmalKumar","Devendrabhai","Rathod",22);

    echo "<br><h4>First Name:{$names[0]}</h4>";
    echo "<h4>Middle Name:{$names[1]}</h4>";
    echo "<h4>Last Name:{$names[2]}</h4>";
    echo "<h4>Age:{$names[3]}</h4><br>";

?>