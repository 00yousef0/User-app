<?php
include_once('db.php');
$action="false";
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $email=$_POST['Email'];
    $mobile=$_POST['Mobile'];
    $password=$_POST['password'];


    $add_sql="INSERT INTO `users`(`name`, `email`, `password`, `mobile`)
    VALUES ('$name','$email','$password','$mobile')";

    $res_add=mysqli_query($con,$add_sql);
    if(!$res_add){
        die(mysqli_error($con));
    }else{
        $action="add";
    }
}
if(isset($_GET['action']) && $_GET['action']=='del'){
    $id=$_GET['id'];
    $del_sql="DELETE FROM users Where id = $id";
    $res_add= mysqli_query($con, $del_sql);
    if(!$res_add) {
        die(mysqli_error($con));
    }else{$action="del";}
}


$users_sql = "SElect * from users";
    $all_users = mysqli_query($con , $users_sql);
    $user=$all_users->fetch_assoc();
    // var_dump($user)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users app</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/toastr.css">
</head>
<body>
<div class="container">
    <div class="wrapper p-5 m-5">
        <div class="d-flex justify-content-between p-2 m-2">
            <h2>All users</h2>
            <div><a href="add-user.php"><i data-feather="user-plus"></i></a></div>
        </div>
        <hr>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while ($user = $all_users->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['mobile']; ?></td>
                        
                        <td>
                            <div class="d-flex justify-content-evenly">
                            <i onclick="confirm_delet(<?php echo $user['id']; ?>);" class="text-danger" data-feather="trash-2"></i>
                            <i onclick="edit(<?php echo $user['id']; ?>);" class="text-success" data-feather="edit"></i>
                            </div>
                        </td>

                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </div>
</div>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/icons.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/main.js"></script>
<?php
if($action != false && $action == 'add') { ?>
    <script>
        show_add();
    </script>
<?php } ?>
<?php
if($action != false && $action == 'del') { ?>
    <script>
        show_del();
    </script>
<?php } ?>



    <script>
        feather.replace()


    </script>
</body>
</html>