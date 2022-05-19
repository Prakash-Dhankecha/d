<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>
<body>
<div class="class container" >
        <form action="savedata.php" class="mt-2" method="post">
        <div class="row align-items-center" style="min-height: 100vh">
        <div class="col-md-4 offset-md-4">
                <div class="card ">
                    <div class="card-header text-white bg-black">

                        <div class="card-title md-2 text-center" >
                            Add Record
                        </div>
                    </div>
                    <div class="card-body">
        <div class="class form-group">
            <label for="" class="for gallery_name">Gallery Name</label>
                <input type="text" class="form-control" name="gallery_name" id="gallery_name" placeholder="Enter Gallery Name">
                </div>
        <div class="class form-group">
                    <label for="" class="for gallery_images">Gallery Image</label>
                 <input type="file" class="form-control" name="gallery_images" id="gallery_images" >
                </div>
            <div class="form-group mt-2">
                        <input type="submit" class="btn btn-primary" name="" id="btnsubmit" value="Save">
                        <input type="submit" class="btn btn-primary" name="" id="btnsubmit" value="cancel">
                </div>
                </div>
                </div>   
            </div>
            </div>    
        </form>
    </div>
     
</body>
</html>