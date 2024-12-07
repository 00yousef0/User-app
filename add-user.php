

<?php

include_once('db.php');
if(isset($_GET['action']) && $_GET['action']=='edit'){
    $id=$_GET['id'];
    $sql="SELECT * FROM users Where id =".$id;
    $user = mysqli_query($con,$sq);
    if($user)
    {
        var_dump($user);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users app</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="wrapper p-5 m-5">
        <div class="d-flex justify-content-between p-2">
            <h2>Add user</h2>
            <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
        </div>

<!-- ************FORM Start************* -->

        <form action="index.php" method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="enter your name"
                name = "name" autocomplete="fulse">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="enter your Email"
                name = "Email" autocomplete="fulse">
            </div>            
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="tel" class="form-control" placeholder="enter your Mobile"
                name = "Mobile" autocomplete="fulse">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="enter your password"
                name = "password" autocomplete="fulse">
            </div>
            <input type="submit" class="btn btn-primary" value="Save" name="save">
        </form>

<!-- ************FORM End************* -->

    </div>
</div>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/icons.js"></script>
    <script>
        feather.replace()
    </script>
</body>
</html>