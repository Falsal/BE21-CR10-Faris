<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>CR-10_Add Media Item</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>

    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add Media</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="ISBN"  placeholder="Enter ISBN" /></td>
                    </tr>    
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name= "title" placeholder="Enter title of medium" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>
                        <select class="form-select" aria-label="Default select example" name='type'>
                        <option selected>Select medium type</option>
                            <option value="book">Book</option>
                            <option value="dvd">DVD</option>
                            <option value="cd">CD</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Author name</th>
                        <td><input class='form-control' type="text" name="first_name" placeholder="Enter author name" /></td>
                    </tr>
                    <tr>
                        <th>Surname</th>
                        <td><input class='form-control' type="text" name="last_name" placeholder="Enter author's last name"/></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description" placeholder="Enter a brief description of book"/></td>
                    </tr>
                    <tr>
                        <th>Published on</th>
                        <td><input class='form-control' type="text" name="publish_date" placeholder="Enter date of publishing"/></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class='form-control' type="text" name="publisher_name" placeholder="Enter name of publishing company"/></td>
                    </tr>
                    <tr>
                        <th>Publisher size</th>
                        <td>
                        <select class="form-select" aria-label="Default select example" name="publisher_size">
                            <option selected>Select size of publishing company</option>
                            <option value="small">small</option>
                            <option value="medium">medium</option>
                            <option value="large">Large</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Publisher address</th>
                        <td><input class='form-control' type="text" name="publisher_address" placeholder="Enter address of publishing company"/></td>
                    </tr>
                    <tr>
                        <th>Medium status</th>
                        <td>
                        <select class="form-select" aria-label="Default select example" name="status">
                        <option selected>Select medium status</option>
                            <option value="available">Available</option>
                            <option value="reserved">Reserved</option>
                            <option value="borrowed">Borrowed</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Medium Image</th>
                        <td>
                        <select class="form-select" aria-label="Default select example" name="image">
                            <option value="title_1.jpg">title_1</option>
                            <option value="title_2.png">title_2</option>
                            <option value="title_3.png">title_3</option>
                            <option value="title_4.png">title_4</option>
                            <option value="title_5.png">title_5</option>
                            <option value="title_6.png">title_6</option>
                            <option value="title_7.png">title_7</option>
                            <option value="title_8.png">title_8</option>
                            <option value="title_9.png">title_9</option>
                            <option value="title_10.png">title_10</option>
                            <option value="title_11.png">title_11</option>
                            <option value="title_12.png">title_12</option>
                            <option value="title_13.png">title_13</option>
                            <option value="title_14.png">title_14</option>
                            <option value="title_15.png">title_15</option>
                        </select>
                        
                        </td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert medium</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <!-- <button class='btn btn-success' type="submit">Insert Media</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a> -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>