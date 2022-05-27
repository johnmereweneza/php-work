
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<hea>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inside</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap\dist\css\bootstrap.min.css">
    <script src="bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="bootstrap\dist\js\bootstrap.bundle.min.js"></script>
    <script src="bootstrap\dist\js\bootstrap.esm.min.js"></script>
<style>
        a{
            text-decoration: none;
            padding-top: 8px;
            padding-bottom: 8px;
        }
        a:hover{
            color:white;
        }
        i{
            margin-right: 12px;
        }
        .menus {
            border-bottom: solid blue;
        }
        .menus:hover {
            background-color: blue;
        }
        .set {
            width: 390px;
        }
        .profile-pic {
            border-radius: 50px;
            height: 95px;
            width: 95px;
            top: 18px;
            border: 3px blue;;
        }
        .picc {
            border-radius: 50px;
            height: 30px;
            width: 30px;
        }
    </style>
</head>
<body>
    <!-- heading -->
    <header class="d-flex bg-danger justify-content-between align-items-center text-white p-1 text-center">
        <h5>Assignment</h5>
        <div class="dropdown">
            <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="picc" src="img/user.jpg" width="700" style="margin-right: 12px;"> Mereweneza John
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="./include/logout.php">Log out</a></li>
            </ul>
        </div>
    </header>

    <!-- fontainer -->

    <div class="d-flex justify-content-center align-items-start mt-3">
        <div class="">
            <div class="cover">
                <img src="img/banner1.jpg" width="700" height="220">
                <div class="profile" style="margin-top:-4.9rem; margin-left:1rem;">
                    <img class="profile-pic " src="img/user.jpg" width="700">
                    <p class="fw-bold text-white" style="margin-top:-3rem; margin-left:6.5rem;"><?= $_SESSION['email']; ?></p>
                </div>
            </div>
            <div class="change">
                <div class="headline card mt-4">
                    <p class="mx-3 fw-bold">Headline <a href="#"><i class="fa fa-pencil"></i></a> </p>
                    <p class="mx-3">Software Engineer | Data Analyst </p>
                </div>
                <div class="change-password mt-2">
                        <div class="bg-primary text-white" style="width: 700px; border-bottom: solid red;"><i class="fa fa-key mx-2"></i> Change Password</div>
                        Current Password <input type="text" name="" id="" class="form-control">
                        New Password <input type="text" name="" id="" class="form-control">
                    </div>
                    <input type="checkbox" name="" id="" class="form-control"> reminder me to change password for 3 month
                    <br>
                    <button type="submit" class="btn btn-primary my-1">Set New Password</button>
            </div>
        </div>
        <div class="settings">
        <!-- header-setting -->
            <div style="top: 3px;" class="shadow-lg mx-3 w-100" style="width: 200px;">
                <div class="d-flex justify-content-center align-items-center">
                <p class="ps-4 mt-2 text-primary fw-bold shadow set">ACCOUNT SETTING</p>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-pencil"></i> Edit Profile</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fas fa-key"></i> Change Password</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-flash"></i> Sign in Activities</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-clock-o"></i> Session Timeout</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-heartbeat"></i> Memorialisation</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-tag"></i> Jobs Feed Content</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-envelope"></i> Email & SMS Notification</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class=" fa fa-bell"></i> Push Notification</a>
                </div>
                <div class="menus card ps-4">
                    <a href=""><i class="fa fa-trash"></i> Delete my Account</a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="d-flex bg-primary justify-content-between py-4">
        <!-- <a href="#" class="text-white mx-3">About us</a>
        <a href="#" class="text-white">Advertisement</a>
        <a href="#" class="text-white">Kigali, Rwanda</a>
        <a href="#" class="text-white">How Search Work</a>
        <a href="#" class="text-white mx-3">Privacy</a> -->
    </footer>
    <script src="./bootst">

    </script>
</body>
</html>