<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM library_table";
$result = mysqli_query($connect ,$sql);
$tbody=''; 
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td>
                <a href='mediadetail.php?id=" .$row['id']."'>
                <img class='img-thumbnail' src='image_collection/".$row['image']."' </a>
            </td>
            
            <td>".$row['ISBN']."</td>
            <td>".$row['title']. "</td>
            <td>".$row['type']."</td>
            <td>".$row['first_name']."</td>
            <td>".$row['last_name']."</td>
            <td>".$row['description']."</td>
            <td>".$row['publish_date']."</td>
            <td>".$row['publisher_name']."</td>
            <td>".$row['publisher_size']."</td>
            <td>".$row['publisher_address']."</td>
            <td>".$row['status']."</td>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
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
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: left;
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
                <p class='h2'>Media  <span class='h5' style="color:green">(click on thumbnail for details)</span> </p>
                <div class='mb-3 d-flex '>
                    <a href= "create.php"><button class='btn btn-warning'type="button" >Add Media</button></a>
                </div>
            </div>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>ThumbN</th>
                        <th>ISBN</th>
                        <th>Title</th>
                        <th>Book_type</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Description</th>
                        <th>Date Published</th>
                        <th>Publisher Name</th>
                        <th>Publisher Size</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
    </body>
</html>