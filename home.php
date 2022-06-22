function validation(){
   name=document.getElementById('fname').value;
   lname=document.getElementById('lname').value;
   email=document.getElementById('email').value;
   file=document.getElementById('file').value;
   password=document.getElementById('password').value;
   cnfrmpassword=document.getElementById('cnfrmpassword').value;
   answer=document.getElementById('yes').value;
   mail_regex=/^[a-z A-Z 0-9]+@[a-z A-Z]+\.[a-z A-Z]{2,4}$/;

//    let fname_regex=/^[a-z A-Z]{3,}$/;

//    if(!fname_regex.test(name)){
//        document.getElementById('msg').innerHTML="enter valid name";
//        document.getElementById('msg').style.color="red";
//        return false;
//        }

//    let lname_regex=/^[a-z A-Z]{1,}$/;

//    else if(!lname_regex.test(lname)){
//        document.getElementById('msg').innerHTML="enter valid name";
//        document.getElementById('msg').style.color="red";
//        return false;
//        }


// pass1=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

//   else if(!pass1.test(password)){
//            alert("Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character");
//            //document.getElementById('password').style.borderColor="red";
//            return false;
//        }
      if(password!= cnfrmpassword){
           alert("enter similar pswd");
           
           return false;
        }

        else if(!mail_regex.test(email)){
           alert("invalid mail id");
           document.getElementById('email').style.borderColor="red";
           return false;
        }
       else{
           return true;
       }
       

}
<?php if (isset($_GET['error'])) { ?>

           <p class="error"><?php echo $_GET['error']; ?></p>

       <?php } ?>
<?php

session_start();

$conn=mysqli_connect("localhost","root","","form_db");
$email=$_SESSION['email'];
// $email=$_GET['email'];
// $password=$_GET['password'];
$sql="select `fname`,`lname`,`email`,`img` from `demo` where email='$email'";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/home.css">
    <!-- Adding Fontawesome Icons -->
    <script src="https://kit.fontawesome.com/74f5bc816c.js" crossorigin="anonymous"></script>
    <!-- Adding Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
   <title>Welcome</title>
</head>
<body>
    <?php
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
    ?> 
    <div class="flex-box">
        <h2>Welcome...</h2>
        <a href="index.php" id="create-btn"><i class="fas fa-sign-out logout"></i></a>
    </div>
   <div>
        <table>
                <div class="flex-container">
                    <div>
                        <img src="<?php echo 'images/'.$row['img'];?>">
                    </div>
                    <div class="details">
                        <div><?php echo $row['fname'];?>
                        <?php echo $row['lname'];?></div>
                        <div><?php echo $row['email'];?></div>
                    </div>
                </div>
            <?php
                }
            }
            else{
                echo "Invalid User";
            }
            ?>
        </table>
    </div>
</body>
</html>