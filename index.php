<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRMS</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Adding Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <!-- Adding Fontawesome Icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/74f5bc816c.js" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script></head>
</head>
<body>
    <div class="container">
        <div class="img-div">
            <img src="images/login.png" alt="login-img">
            <!-- <i class="icon fas-solid fas-user-lock"></i> -->
        </div>
        <div class="icon-div">
            <i class="fas fa-user-lock" id="icon"></i>
        </div>
        <div class="form-div">
            <h1>Login</h1>
            <form class="form">
                <input type="email" name="email" placeholder="Email" required autofocus>
                <input type="password" name="password" placeholder="Password" required autofocus>
                <button id="login-btn">Login</button>
                <a href="register.php" id="create-btn">Create New Account</a>
                <!-- <p onclick="forgot1()">Forgotten Password</p> -->
                <p id="myBtn">Forgotten Password</p>

            </form>
        </div>
    </div>
        <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-flex">
                <div> <h2>Reset Password</h2></div>
                <div><button class="close">&times;</button></div>
            </div>
        <!-- <span class="close">&times;</span>
        <h2>Reset Password</h2> -->
        <hr>
        <input type="email" placeholder="Email Please">
        <p>Your security question:</p>
        <p id="qs"></p>
        <input type="text" placeholder="Enter your answer">
        <hr>
        <button class="modal-btn" type="submit"> <a href="newpswrd.php">Submit</button>
        </div>

    </div>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>