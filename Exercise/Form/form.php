<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

        echo "
            <p>Name: $name  </p>
            <p>email: $email  </p>
            <p>mobile: $mobile  </p>
            <p>message: $message  </p>        
        "

?>