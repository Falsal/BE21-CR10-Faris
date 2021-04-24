<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library_table WHERE id = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $image = $data['image'];
        echo "image is :".$image;
        $title = $data['title'];
        $ISBN = $data['ISBN'];
        $type = $data['type'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $description = $data['description'];
        $publish_date = $data['publish_date'];
        $publisher_name = $data['publisher_name'];
        $publisher_size = $data['publisher_size'];
        $publisher_address = $data['publisher_address'];
        $status = $data['status'];
    } else {
        header("location: error.php");
    }
 
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php'?>
    <title>MediaDetail</title>
</head>
<body>
    <div class="container d-flex justify-content-center h-100">
    
        <div class="card" style="width: 40%;">
            <img src="image_collection/<?php echo $image ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title" style="color:green"> <?php echo $title ?> </h4>
                <p class="card-text ">
                <?php echo $title ?>
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo "<h5>Publisher</h5><br> ".$publisher_name  ?></li>
                <li class="list-group-item"><?php echo "<h5>Author</h5><br> ".$first_name." ".$last_name  ?></li>
                <li class="list-group-item"><?php echo "<h6>Status</h6><br> ".$status  ?></li>
            </ul>
            <div class="card-body">
                <a href="index.php" class="btn btn-success">Back to List</a>
            </div>
        </div>
    </div>
    
</body>
</html>