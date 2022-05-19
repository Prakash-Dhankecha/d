<?php
include("include/connection.php");

$id = isset($_GET['id']) ? $_GET['id'] : "";

$sql = 'SELECT gallery_name,gallery_images from gd_gallery_sub where id =  '.$id;

$results = $db -> query($sql);

$row = $results->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <form action="edit.php" method="post">
            <div class="form-group">
            <form action="savedata.php" class="mt-2" method="post">
        <div class="row align-items-center" style="min-height: 100vh">
        <div class="col-md-4 offset-md-4">
                <div class="card ">
                    <div class="card-header text-white bg-black">

                        <div class="card-title md-2 text-center" >
                            Edit Record
                        </div>
                    </div>
                    <div class="card-body">
                
                <input type="hidden" value="<?=$id?>" class="form-control" name="id" name="gallery_name" placeholder="No entry" name="email">
            </div>
            <div class="form-group">
                <label for="email">Gallery Name</label>
                <input type="text" value="<?=$row['gallery_name'] ?>" class="form-control" name="gallery_name" placeholder="No entry" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">gallery Images</label>
                <input type="file" value="<?=$row['gallery_images'] ?>" class="form-control" name="gallery_images" placeholder="No entry" name="img">
            </div>
            <input type="submit" class="btn btn-primary" name="" id="btnsubmit" value="Submit">

        </form>
    </div>

</body>

</html>