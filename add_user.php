<?php 
include_once('db.php');
$title="Add";
$name="";
$email="";
$mobile="";
$password="";
$airplan="";
$time="";
$country="";
$btn_title="Save";
if(isset($_GET['action']) && $_GET['action']=='edit'){
    
    $id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id = ".$id;
    $user =mysqli_query($con,$sql);
    if($user){
       $title="Update" ;
       $current_user=$user->fetch_assoc();
       $name=$current_user['name'];
       $email=$current_user['email'];
       $mobile=$current_user['mobile'];
       $password=$current_user['password'];
       $airplan=$current_user['airplan'];
       $time=$current_user['time'];
       $country=$current_user['country'];
       $btn_title="Update";

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Users App</title>
</head>

<body>
    <div class="container">
        <div class="wrapper p-5 m-5">
            <div class="d-flex p-2 justify-content-between">
                <h2><?php echo $title; ?> user</h2>
                <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
            </div>
            <form action="index.php" method="post" >
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value="<?php echo $name; ?>"
                     placeholder="enter your name" name="name"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control"  value="<?php echo $email; ?>"
                     placeholder="enter your email" name="email"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="tel" class="form-control"  value="<?php echo $mobile; ?>"
                    placeholder="enter your phone number" name="mobile"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control"  value="<?php echo $password; ?>"
                    placeholder="password" name="password"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">airplan</label>
                    <input type="airplan" class="form-control"  value="<?php echo $airplan; ?>"
                    placeholder="airplan" name="airplan"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">time</label>
                    <input type="time" class="form-control"  value="<?php echo $time; ?>"
                    placeholder="time" name="time"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">country</label>
                    <input type="country" class="form-control"  value="<?php echo $country; ?>"
                    placeholder="country" name="country"
                        autocomplete="false">
                </div>
                <?php 
                
                if (isset($_GET['id'])){?>


                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">


             <?php   }
                
                ?>
                <input type="submit" class="btn btn-primary" value="<?php echo $btn_title; ?>" name="save">
            
            </form>
        </div>

    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/icons.js"></script>
    <script>
        feather.replace()
    </script>
     <a href="https://api.whatsapp.com/send?phone=+249900493184">send to whatsapp </a>
</body>

</html>