<?php
    include 'function/admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Pharmed</title>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/admin.css" />

    <style>
        body{
            text-align: center;
            background: url('background6.jpg');
            background-size: cover;    
            background-repeat: no-repeat;
            background-position: center center;              
        }
        .form{
            background: transparent;
        }
    </style>

</head>
<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="post" action="./function/admin/validate.php">
                <h2>Admin Login</h2>
                <input type="email" placeholder="Enter email" id="user" name="admin_email" autocomplete="off" required />
                <input type="password" required placeholder="Password" id="pass" name="password" autocomplete="off" />
                <img src="./image/notVisible.png" onclick="show()" id="showing">
                <span id="vaild-pass"></span>
                <button type="submit" name="submit">Sign In</button>
                <p class="message" style="font-size:14px;">Admin Panel</p>
            </form>
        </div>
    </div>

    <script>

        function show() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
                document.getElementById("showing").src ="./image/visible.png";
            } 
            else {
                x.type = "password";
                document.getElementById("showing").src ="./image/notVisible.png";
            }
        }
    </script>
</body>
</html>