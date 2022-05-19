<?php
    include("include/connection.php");

    $qry = "select * from gd_gallery_sub";
    $res = $db->query($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo PSEE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
</script>
    
</head>

    <body>
    <div class="container">
        <h1> Data</h1>
        <a href="formdata.php" class="btn btn-primary">Add Record </a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"><h3>Id</h3></th>
                    <th scope="col"><h3> Gallery Name</h3></th>
                    <th scope="col"><h3>Gallery Images</h3></th>
                    <th scope="col"><h3>Edit/Delete</h3></th>

                    
                </tr>
            </thead>
            <tbody>
            <?php
    $qry="select id,gallery_name,gallery_images from gd_gallery_sub where isdelete=0 order by id desc";
    $res=$db->query($qry);

    if($res->num_rows>0){
        while ($row=$res->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>" .$row['gallery_name']."</td>";
            echo "<td>" .$row['gallery_images']."</td>";
            echo '<td>
            <a href="form.php?id='.$row['id'].'" class="btn btn-info">Edit</button></a>

            <a href="delete.php?id='.$row['id'].'" class="btn btn-danger">Delete</button></a></td>';
            echo "</tr>";

            
        }
    }
?>
        </tbody>
        </table>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $(document).on("click","/btn btn-danger",function(){
        var id = $(this).data("id");
        //alert(id);
        $.ajax({
            url:"delete.php",
            type:"POST",
            data:{id:id},
            success:function(data)
            {
                alert(data);
            }
        });
    });
});
</script>
