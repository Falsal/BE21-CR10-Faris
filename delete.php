<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) 
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM library_table WHERE id = {$id}" ;
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    if ($result->num_rows == 1) 
    {
        $image = $data['image'];
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
    } else 
        {
            header("location: error.php");
        }
    $connect->close();
} else {
    header("location: error.php");
};  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete media item</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 70% ;
            }     
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }    
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='image_collection/<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
            <h5>You have selected the data below:</h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td><?php echo $title?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this medium?</h3>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="picture" value="<?php echo $image ?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
            </form>
        </fieldset>
    </body>
</html>