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
            body{
                min-height: 100vh;
                margin: 0 auto;
                max-width: 100%
            }

            .img-thumbnail {
                width: 3em !important;
                height: 3em !important;
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
        <div class="container mt-3"> 

            <div class="container mx-3 pt-4 ">
                <div class="row">
                    <div class="col-6">
                        <p class='h2'>Media  <span class='h5' style="color:green">(click on thumbnail for details)</span> </p>
                    </div>
                    <div class="col-3">
                        <div class='mb-3  '>
                            <a href= "create.php"><button class='btn btn-warning'type="button" >Add Media</button></a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class='mb-3  '>
                            <a href= "publishersList.php" target="_blank"><button class='btn btn-success'type="button" >Publishers</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-0 px-3">
                <div class="row mx-0">
                    <div class="col-12">
                        <table class='table table-striped mw-100'>
                            <thead class='table-success'>
                                <tr>
                                    <th scope="col">ThumbN</th>
                                    <th scope="col">ISBN</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Book_type</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Surname</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date Published</th>
                                    <th scope="col">Publisher Name</th>
                                    <th scope="col"> Publisher Size</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?= $tbody;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>