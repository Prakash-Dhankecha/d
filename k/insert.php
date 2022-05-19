<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <?php include 'connect.php' ?>
</head>
<?php
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $sql = "select * from gd_gallery_sub where id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows) {
        $row=$result->fetch_assoc(); 
    }
?>

<body>
    <div class="container mt-5">
        <form action="add.php" id="form" method="POST" enctype="multipart/form-data">
            <fieldset>
                <input type="hidden" name="id" value="<?= $id ?>"></input>
                <legend>Edit</legend>
                <div class="form-group">
                    <label for="fullname" class="form-label mt-4">Gallary Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?= isset($row['gallery_name']) ? $row['gallery_name'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label mt-4">Gallary Photo</label>
                    <img src="<?= isset($row['gallery_images']) ? $row['gallery_images'] : "" ?>" height="50px" width="50px">
                    <input class="form-control" type="file" id="photo" name="photo">
                </div>
                <button type="submit" value="submit" class="btn btn-primary m-2">Submit</button>
            </fieldset>
        </form>
    </div>
</body>
</html>