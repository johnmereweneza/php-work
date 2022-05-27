
<?php
session_start();

if (isset($_POST['plogin'])) {
    
    $conn = mysqli_connect('localhost','root','','school');
    
    $password = $_POST['password'];
    $email = $_SESSION['email'];

        $query = "SELECT * FROM users WHERE email=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $email);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if ($password == $user['password']) { // if password matches
                $stmt->close();
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                header('location: dashboard.php');
                exit(0);
            } else { 
                $errors['errors'] = "Wrong password";
            }
        } else {
            $_SESSION['error'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap\dist\css\bootstrap.min.css">
</head>
<body>
    <!-- heading -->
    <header class="text-white p-1 text-center" style="background-color: tomato;">
        <h5>Assignment</h5>
    </header>

    <!-- fontainer -->

    <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
        <!-- form -->
        <div class="border bg px-4 pt-4 position-relative text-center w-48 rounded shadow-lg">
            <h4>Welcome back !</h4><br>
            <?php 
                        if(isset($_SESSION['error'])){
                            ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>!!!Error</strong> <?php print $_SESSION['error'];?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                            <?php
                        unset($_SESSION['error']);
                        }
                        ?>
         

            <!-- layout -->
            <form action=""  method="post">
                <div class="row g-1">
                    <h4>hy, M.john</h4>
                </div><br>
                <div style="text-align: center;" 
                style="border: solid black 1px; width:230px; height: 26px; border-radius:20px;">
                    <p class="fw-bold"><i class="fa fa-user-circle-o text-primary" aria-hidden="true">
                    </i> <?= $_SESSION['email']; ?></p>
                </div><br> 
                <div class="row">
                    <div class="position-relative">
                        <input name="password" type="password" class="form-control ps-4" placeholder="Password">
                        <i class="fa fa-key text-primary position-absolute"
                            style="top:10px; left: 18px;" aria-hidden="true"></i>
                        <i class="fa fa-eye text-primary position-absolute"
                            style="top:10px; right: 20px;" aria-hidden="true"></i>
                    </div>
                </div><br>
                <div class="button">
                    <button name="plogin" class="btn btn-primary fw-bold" style="width: 450px; border-radius: 20px;">Sign In</button>
                </div>
                <div class="my-3 d-flex justify-content-end">
                    <a class="text-danger" style="text-decoration: none; font-weight: bold;" href="regist.php">Forgot Password</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>