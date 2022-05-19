<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$insert = isset($_SESSION['insert']) ? $_SESSION['insert'] : "";
session_destroy();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php
    include "connect.php";
    $sql = "select * from gd_gallery_sub where isdelete=0";
    $result = $conn->query($sql);
    ?>
</head>

<body>

    <div class="container">
        <h3><?php echo $insert; ?></h3>
        <a class="btn btn-dark" href="edituser.php" >ADD</a>
        <table class="table mt-2">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gallary Image</th>
                    <th>Controls</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($row = $result->fetch_object()) {
                ?>
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><?= $row->gallery_name ?></td>
                        <td> <img src="<?= $row->gallery_images ?>" height="100px" width="200px"></td>
                        <td>
                            <a class="btn btn-primary" href="edituser.php?id=<?= $row->id ?>">Edit</a>
                            <buttons class="btn btn-dark delete" id="delete" data-id="<?= $row->id?>" >Delete</buttons>
                            <!-- href="delete.php?id=<?= $row->id  ?>" -->
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <script>
        $(document).ready(function() {
            $('.delete').click(function() {
                var id = $(this).data("id")
                var ele = $(this);
                $.ajax({
                    url: "delete.php",
                    method: "GET",
                    data: {id: id},
                    success: function(data) {
                        if (data) {
                            $(ele).closest('tr').remove();
                        } else {
                            alert('cant delete');
                        }
                    }
                })
                // var link = $(this).attr('href');
                // $.get(link, function(data, status) {
                //     if (data) {
                //         // alert(status);
                //         alert('deleted');
                //         $(ele).closest('tr').remove();
                //     } else {
                //         alert('not deleted');
                //     }
                // });
            });
        });
    </script>
</body>

</html>