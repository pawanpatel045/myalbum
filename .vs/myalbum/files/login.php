<?php
 include 'files/oops/users.php';
 include 'files/oops/database.php';
$connection=new connection();
$con=$connection->getdatabase();
$user = new User($con);

if(isset($_POST['submit']))
{     
    
       $email=$_POST['email'];
        $pass=$_POST['pass'];
        $success=$user->signin($email,$pass);
        if($success)
        {
            $detail=$user->user($email);
            $_SESSION['email']=$detail['Email'];
            $_SESSION['isPremium']=$detail['isPremium'];
            $_SESSION['name']=$detail['Name'];
            header("location:files/welcome.php");
        } else {
            header('location:index.php?login=fail');
        }
}
?>


<html>
    <body>

    <section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img1.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

             
                
<div class="container my-5 border border-success d-flex justify-content-center">
    <form id="loginform" method="post" action="" autocomplete="off">
 

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
        
            <div class="form-outline mb-4">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control form-control-lg" id="email" aria-describedby="emailHelp"
                    name="email">
               
            </div>
            <div class="form-outline mb-4">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control form-control-lg" id="pass" name="pass">
            </div>
            
            <button type="submit" class="btn btn-dark btn-lg btn-block" name="submit">Login</button>
        
    </form>
</div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="js/loginValidate.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</body>
</html>
<script type="text/javascript" >
  jQuery("#loginform").validate({
    rules: {
        email:{
            required:true,
            email:true
        },
        pass:{
            required:true,
            minlength:5,
            maxlength:10
        }
      },
        messages:{
            email:{
                required:"** Please enter email address **",
                email:"** Please enter a valid email address **"
            },
            pass:{
                required:"** Password is mandatory **",
                minlength:"** Password must me more than 5 charecters **",
                maxlength:"** Password must me less than 10 charecters **"
            }
        }
    
})

</script>
<style>
  .error{
   color: red;
  }
  </style>