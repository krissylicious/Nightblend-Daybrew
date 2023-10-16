<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>LOGIN PAGE</title>
</head>
<body>
    <section class="vh-100" style="background-image: url(img/bg2.png); background-size: cover;">
        <div class="container py-5 h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100" >
            <div class="col col-xl-10"  >
              <div class="card" style="border-radius: 1rem; background-color: #c49b63;"> 
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block bg-light rounded">
                    <img src="img/removebg.png" alt="login form" class="img-fluid d-flex "  style="margin-top: 70px;"
                      />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center "  >
                    <div class="card-body p-4 p-lg-5 text-black" >
      

          <?php
            include "conn.php";
            session_start();

            //for login

            if(isset($_POST['login'])){
                
                $email=$_POST['email'];
                $password=$_POST['pass'];

                $login=mysqli_query($conn, "SELECT * FROM users 
                WHERE email='$email' AND password='$password' ");

                $l=mysqli_num_rows($login);

                if($l >= 1){
                    $_SESSION['email']=$email;

                    ?>
        <script>
            alert("Welcome to Nightblend & Daybrew!");
            window.location.href="index.html";
            </script>
        <?php

          }else{
        ?>
       <div class="alert alert-danger alert-dismissible fade Show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error!</strong>Your Email or password didn't match in our database, Please try again!
       </div>
    <?php
    }
    
}
?>
                      <form action="login.php" method="POST">
      
                        <div class="d-flex align-items-center mb-3 pb-1" >
                         
                          <span class="h1 fw-bold mb-0"> NightBlend & DayBrew</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
      
                        <div class="form-outline mb-4">
                          <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" />
                          <label class="form-label fs-4" for="form2Example17">Email address</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="myInput" name="pass" class="form-control form-control-lg" 
                          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                          title="Must contain at least one number and one UPPERCASE 
                          and lowercase letter, and at least 8 or more characters.">
                          <label class="form-label fs-4" for="form2Example27">Password</label>
                           </br>
                          <input type="checkbox" onclick="myFunction()">Show Password
                          
                          <script>
                            function myFunction() {
                              var x = document.getElementById("myInput");
                              if (x.type === "password") {
                                x.type = "text";
                              } else {
                                x.type = "password";
                              }
                            }
                            </script>
                        </div>
                        
      
                        <div class="d-grid gap-2 col-4 mx-auto" >
                          <input type="submit" class="btn btn-block btn-lg "  value="LOGIN" name="login" 
                          style="color:white; background-color: black;>

                        </div> 
                      </br>
                        <center>
                        <a class="small text-muted " href="#!">Forgot password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                            style="color: #393f81;">Register here</a></p>
                          </center>
                       
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>