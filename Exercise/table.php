<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with php</title>
    <style>
        table,th,td{
            border: 1px solid red;
            text-align: center;
        }
        
    </style>
</head>
<body>

        <?php 
        
        $table = array(
            "name"=>"Nirmal",
            "age"=> 22,
            "phone"=> "9687530697",
            "address"=>"Lambhvel",
            "DOB" => "23/09/2001",
            "gender" => "male",

         );
        
        ?>
    
        <table>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            
                <?php
                foreach ($table as $key => $value) {
                   echo "<tr><td>{$key}</td> 
                   <td>{$value}</td></tr>";
                }
                ?>
          
        </table>


</body>
</html>