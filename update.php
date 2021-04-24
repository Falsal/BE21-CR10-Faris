<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library_table WHERE id = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
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
    } else {
        header("location: error.php");
    }
 
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='image_collection/<?php echo 
            $image ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Image</th>
                        <td>
                        <select class="form-select" aria-label="Default select example" name="image" type="text">
                            <option value="title_1.jpg">title_1</option>
                            <option value="title_2.png">title_2</option>
                            <option value="title_3.png">title_3</option>
                            <option value="title_4.png">title_4</option>
                            <option value="title_5.png">title_5</option>
                            <option value="title_6.png">title_6</option>
                            <option value="title_7.png">title_7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class="form-control" type="number"  name="ISBN" placeholder ="ISBN" value="<?php echo $ISBN ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="title" placeholder ="title" value="<?php echo $title ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class="form-control" type="text"  name="type" placeholder ="type" value="<?php echo $type ?>"  /></td>
                    </tr>
                    <tr>
                        <th>First_name</th>
                        <td><input class="form-control" type= "text" name="first_name" step="any"  placeholder="first_name" value ="<?php echo $first_name ?>" /></td>
                    </tr>
                    <tr>
                        <th>Last_name</th>
                        <td><input class="form-control" type= "text" name="last_name" step="any"  placeholder="last_name" value ="<?php echo $last_name ?>" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type="text" name= "description" step="any"  placeholder="description" value ="<?php echo $description ?>"/></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class="form-control" type="text" name= "publisher_name" step="any"  placeholder="publisher" value ="<?php echo $publisher_name ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher size</th>
                        <td><input class="form-control" type="text" name= "publisher_size" step="any"  placeholder="publisher_size" value ="<?php echo $publisher_size ?>"/></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><input class="form-control" type="text" name= "publisher_address" step="any"  placeholder="publisher_address" value ="<?php echo $publisher_address ?>" /></td>
                    </tr>
                    <tr>
                        <th>publish_date</th>
                        <td><input class="form-control" type="date" name= "publish_date"step="any"  placeholder="publish_date" value ="<?php echo $publish_date ?>" /></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><input class="form-control" type="text" name= "status" step="any"  placeholder="status" value ="<?php echo $status ?>" /></td>
                    </tr>
               
         
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                       
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>