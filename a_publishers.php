<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql= "SELECT * FROM library_table WHERE id={$id}";
    $result = $connect->query($sql);

    if ($result->num_rows >0) {
        $data = $result->fetch_assoc();
        $publisher_name = $data['publisher_name'];
    } else {
        header("location: error.php");
    }
 
} else {
    header("location: error.php");
};

// Getting books for a given publisher

$getMedium="SELECT * FROM library_table WHERE publisher_name='{$publisher_name}'";
$result=mysqli_query($connect,$getMedium);

$tbody='';
if(mysqli_num_rows($result)  > 0) {
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {         
        $tbody .="
        <div class='card mx-2' style='width: 17rem;'>
            <img src='image_collection/".$row['image']."' class='card-img-top' alt='m-image'>
            <div class='card-body'>
                <div class='card-header fw-bold'>
                ".$row['title']."
                </div>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'>
                     ".$row['first_name'].",".$row['last_name']."
                    </li>
                    <li class='list-group-item'>
                    Medium :".$row['type']."</li>
                </ul>
            </div>
        </div>
        ";
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php'?>
    <title>Publishers</title>
</head>
<body>
    <h1><?php echo "<h5>Books by :".$publisher_name."</h5> <br>"  ?></h1>
    <div class="container d-flex justify-content-start h-100 mt-4">
    <?= $tbody;?>
    </div>
    
</body>
</html>