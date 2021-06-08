<?php 
require_once 'actions/db_connect.php';

$sql = "SELECT DISTINCT
publisher_name, 
publisher_address, 
publisher_size,
ISBN,
type,
title,
image,
id
FROM
library_table
WHERE
publisher_name IS NOT NULL
GROUP BY 
publisher_name;";

$result = mysqli_query($connect ,$sql);
$tbody='';

if(mysqli_num_rows($result)  > 0) {     
    // echo "Row number  : ".mysqli_num_rows($result);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "
            <tr>                
                <td>".$row['id']."</td>
                <td>".$row['publisher_name']."</td>
                <td>".$row['publisher_size']."</td>
                <td>".$row['publisher_address']."</td>

                <td>
                    <a href='a_publishers.php?id=" .$row['id']."'><button class='btn btn-success btn-sm' type='button'>Media list</button></a>
                </td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

$connect->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CR-10-Faris</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageMedia {           
                margin: auto;
            }
            td {          
                text-align: center;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container manageMedia w-100 mt-3">    
            <div class="container d-flex justify-content-between">
                <p class='h2'>Publishers List </p>
            </div>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th> ID</th>
                        <th>Publisher Name</th>
                        <th>Publisher Size</th>
                        <th>Address</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
    </body>
</html>