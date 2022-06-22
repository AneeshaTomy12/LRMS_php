document.getElementById("yes").disabled=true;
function changeFunctn(){
    if(document.getElementById("chck").checked=true){
        document.getElementById("yes").disabled=false;
    }
}
function isFnameValid(){
    let fname=document.getElementById("fname").value;
    let fname_regex=/^[A-Za-z]{3,}$/;
    if(!fname_regex.test(fname)){
        document.getElementById("p").innerHTML="Enter valid name";
        document.getElementById("p").style.color="red";
        return false;
    }
    else{
        document.getElementById("p").innerHTML=" ";
        return true;
    }
}
function isLnameValid(){
    let lname=document.getElementById("lname").value;
    let lname_regex=/^[A-Za-z]{1,}$/;
    if(!lname_regex.test(lname)){
        document.getElementById("p").innerHTML="Enter valid name";
        document.getElementById("p").style.color="red";
        return false;
    }
    else{
        document.getElementById("p").innerHTML=" ";
        return true;

    }

}
function isEmailValid(){
    let email=document.getElementById("email").value;
    let email_regex=/^[a-zA-Z0-9.! #$%&'*+/=? ^_`{|}~-]+@[a-zA-Z0-9-]+(?:\. [a-zA-Z0-9-]+)*$/;
    if(!email_regex.test(email)){
        document.getElementById("p").innerHTML="Enter valid name";
        document.getElementById("p").style.color="red";
        return false;
    }
    else{
        document.getElementById("p").innerHTML=" ";
        return true;
    }
    
}
function isPassValid(){
    let password=document.getElementById("password").value;
    let pass_regex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;;
    if(!pass_regex.test(password)){
        document.getElementById("p").innerHTML="Enter valid name";
        document.getElementById("p").style.color="red";
        return false;
    }
    else{
        document.getElementById("p").innerHTML=" ";
        return true;

    }
    
}
function isCnfrmValid(){
    let cnfrmpassword=document.getElementById("cnfrmpassword").value;
    let pass_regex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;;
    if(!pass_regex.test(cnfrmpassword)){
        document.getElementById("p").innerHTML="Enter valid name";
        document.getElementById("p").style.color="red";
        return false;
    }
    else{
        document.getElementById("p").innerHTML=" ";
        return true;

    }
    
}
function validation(){
       email=document.getElementById('email').value;
       password=document.getElementById('password').value;
       cnfrmpassword=document.getElementById('cnfrmpassword').value;
       answer=document.getElementById('yes').value;
       mail_regex=/^[a-z A-Z 0-9]+@[a-z A-Z]+\.[a-z A-Z]{2,4}$/;
   
    //    let fname_regex=/^[a-z A-Z]{3,}$/;
   
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
                // function alertMsg(){
                swal(
                    'Successfully Registered',
                    'success'
                  )
                //   . then(function() {
                //     window. location = "../index.php";
                //     });
                // }
               return true;
           }
           
   
   }
   
   
// function alertMsg(){
// swal(
//     'Good job!',
//     'You clicked the button!',
//     'success'
//   )
// }