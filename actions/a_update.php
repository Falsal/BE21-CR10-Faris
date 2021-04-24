<?php
require_once 'db_connect.php';

if ($_POST) {    
    $id = $_POST['id'];
    $image = $_POST['image'];  
    $ISBN=$_POST['ISBN'];
    $title=$_POST['title'];
    $type=$_POST['type'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $description=$_POST['description'];
    $publish_date=$_POST['publish_date'];
    $publisher_name=$_POST['publisher_name'];
    $publisher_size=$_POST['publisher_size'];
    $publisher_address=$_POST['publisher_address'];
    $status=$_POST['status'];
    // echo "_id  is :".$id." _and image var is :".$image;

    $sql = "UPDATE library_table SET 
        ISBN = '$ISBN', 
        title = '$title', 
        type = '$type', 
        first_name = '$first_name', 
        last_name = '$last_name', 
        description = '$description', 
        publish_date = '$publish_date', 
        publisher_name = '$publisher_name', 
        publisher_size = '$publisher_size', 
        publisher_address = '$publisher_address', 
        status = '$status', 
        image = '$image' 
    WHERE id = {$id}";
   
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
    }
    $connect->close();
}    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>