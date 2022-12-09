<?php
$error;
$conn=mysqli_connect ( "localhost", "root", "", "mobile_store" ) or die("Connection failed");
 
if(isset($_POST['submit'])){
    // echo 'set';
    $q="INSERT INTO users (uname, umail, upass,uphone,utype ) VALUES ('{$_POST['UserName']}','{$_POST['email']}', '{$_POST['pass']}', '{$_POST['Phone']}','user')";
    echo $q;
    $result=mysqli_query($conn,$q) or die("Checking Query unsuccessful");
    // header("Location: emptydata.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="SignUp.css">
    <title>SignUp</title>
</head>
<body>
    <div id="BackGround" style="background-image: url('images/web/LognBackground.jpg');">
        
    <div id="LoginForm">
<!-- <i class="fa fa-cloud"></i> -->
<!-- <i class="fa fa-heart"></i>
<i class="fa fa-car"></i>
<i class="fa fa-file"></i>
<i class="fa fa-bars"></i>
<i style="font-family: FontAwesome;" class="">&#xf002</i> -->
<br>
        <center><h2>SignUp</h2></center>
        <form action="" id="validate" enctype="multipart/form-data" method="post">

        <label for="UserName">User Name</label><br>
        <input class="transparent" type="text" name="UserName" pattern="|^[a-zA-Z_.-\s]{1,}$|" id="" placeholder="  &#xf2bc  Enter Your UserName"><br><br>
        
        <label for="email">Email</label><br>
        <input class="transparent" type="email" name="email" id="" placeholder="  &#xf2bc  Enter Your mail"><br><br>
        
        <label for="Phone">Phone</label><br>
        <input class="transparent" type="text" name="Phone" id="Phone" pattern="^\d{4}-\d{7}$" data-inputmask="'mask': '0399-9999999'"  placeholder="  &#xf2bc  Enter Your Phone number"><br><br>
        
        <label for="">Password</label><br>
        <input class="transparent" type="password" name="pass" id="pass"  placeholder="  &#xf023 Enter Your Password"><br><br>
        
        <label for="">ConfirmPassword</label><br>
        <input class="transparent" type="password" name="cpass" id=""  placeholder="  &#xf023 Enter Your Password"><br><br>
        
        
        <input name="submit" type="submit" value="SignUp" class="Submit">

    </form>

</div>
</div>
</body>

<script src="../lib/Validations/jquery.js"></script>
   <script src="../lib/Validations/jquery.min.js"></script>

<script src="../lib/Validations/jquery.validate.min.js"></script>
  <script type="text/javascript" src="../lib/Validations/additional-methods.js"></script>
      <script src="../lib/Validations/jquery.inputmask.bundle.js"></script>


      <script>
        $(":input").inputmask();
      
      
      $(document).ready(function () {
      
       $.validator.addMethod("onlyletter", function(value, element) {
          return this.optional(element) || value == value.match(/^[a-zA-Z ]*$/);
       });
      
          $("#validate").validate({
              rules: {
                UserName: {
                      required: true,
                    //   onlyletter: true,
                      
                  },
                  email: {
                      required: true,
                      email: true,
                      
                  },
                //   digit: {
                //       required: true,
                //       digits : true,
                //   },
                //   length : {
                //       required: true,
                //        minlength: 15,
                //         maxlength: 15,
                //   },
                //  cnic: {
                
                //      required: true,
                      
                      
                //   },
                  Phone: {
                  required: true,
                  digits : true,
                  },
                  pass: {
                  required: true,
                  minlength: 9,
                  
                  },
                  cpass: {
                  required: true,
                  equalTo:"#pass",
                  },
                 
              },
              messages: {
                UserName: {
                      required: "This field is required",
                      onlyletter : "Digits not allow"
                  },
                  email: {
                      required: "This field is required",
                      email : "not correct format"
                  },
                //    digit: {
                //       required: "This field is required",
                //       digits:"only Digits allowed"
                //   },
                //   length: {
                //       required: "This field is required",
                //       minlength:"minimum length is 15",
                //       maxlength:"Maximum length is 15"
                //   },
                //    cnic: {
                //       required: "This field is required",
                      
                //   },
                  Phone: {
                      required: "This field is required",
                      
                  },
                  pass: {
                      required: "This field is required",
                      minlength:"minimum length is 9",
                      
                  },
                  cpass: {
                      required: "This field is required",
                      equalTo:"Not Matching"
                  },
                  
                
              },
              submitHandler: function (form) { // for demo
                //  alert('valid form');  // for demo
                  return true;  // for demo
              }
          });
      
      });
      
       </script>

</html>

<style>
    .error{color:#FF0000;
    float: right;
    }
    .error::after, .error::before{
        clear: both;
    }
    
    </style>