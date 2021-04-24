<?php
require_once 'db_connect.php';


if ($_POST) {   
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
    $image = $_POST['image'];  


    
   
    $sql = "INSERT INTO library_table (ISBN, title, type,first_name,last_name,description,publish_date,publisher_name,publisher_size,publisher_address,status,image) VALUES ('$ISBN',' $title','$type','$first_name','$last_name','$description','$publish_date','$publisher_name', '$publisher_size','$publisher_address','$status','$image')";

    if ($connect->query($sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $image </td>
            <td> $title </td>
            <td> $ISBN </td>
            <td> $type </td>
            <td> $first_name </td>
            <td> $last_name </td>
            <td> $description </td>
            <td> $publish_date </td>
            <td> $publisher_name </td>
            <td> $publisher_size </td>
            <td> $publisher_address </td>
            <td> $status</td>
            </tr></table><hr>";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
    }
    $connect->close();
} else {
    header("location: ../error.php");
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
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>