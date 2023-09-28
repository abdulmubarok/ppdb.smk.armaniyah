<?php
session_start();
if(isset($_SESSION['role'])){
  if($_SESSION['role']=='administrator'):
    header("location:admin/index.php?page=dashboard");
  elseif($_SESSION['role']=='bendahara'):
    header("location:bendahara/index.php?page=dashboard");
  else:
      if($_SESSION['role']=='verifikator'):
        header("location:verifikator/index.php?page=dashboard");
      endif;
  endif;
}

require_once '../config/database.php';
require_once 'core/function.php';
?>
<?php

    $username_err = $password_err = $login = "";
 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty(trim($_POST['username']))){
            $username_err="Masukan username";
        }else{

            $username=test_input($_POST['username']);
            $username=EscapeString($username);
        }
        if(empty(trim($_POST['password']))){
            $password_err="Masukan password";
        }else{
            $password=trim($_POST['password']);
            
        }
        if(empty($username_err) && empty($password_err)){
            if(LoginAdmin($username, $password)):
                $_SESSION['uid']=$uid;
                $_SESSION['username']=$username;
                $_SESSION['email']=$email;
                $_SESSION['nama']=$nama;
                $_SESSION['role']=$role; 
                $_SESSION['foto']=$foto_panitia;
                $login='
                        <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                                    <i class="zmdi zmdi-check-circle"></i>
                                    <span class="content">Oke. Login Berhasil</span>
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="zmdi zmdi-close-circle"></i>
                                        </span>
                                    </button>
                         </div>
                ';
                if($_SESSION['role']=='administrator'){
                  echo "<meta http-equiv=\"refresh\"content=\"2;URL=admin/index.php?page=dashboard\"/>";                  
                  }elseif($_SESSION['role']=='bendahara'){ 
                    echo "<meta http-equiv=\"refresh\"content=\"2;URL=bendahara/index.php?page=dashboard\"/>";                  
                  }else{
                      if($_SESSION['role']=='verifikator'):
                         echo "<meta http-equiv=\"refresh\"content=\"2;URL=verifikator/index.php?page=dashboard\"/>";
                      endif;
                  }                                                   
            else:
                $login='
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="zmdi zmdi-close-circle"></i>
                                    <span class="content">Username atau password salah.</span>
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="zmdi zmdi-close-circle"></i>
                                        </span>
                                    </button>
                        </div>
                        ';

            endif;
        }

        $koneksi->close();
    }

?>
<?php if(!isset($_GET['page'])){$_GET['page']='';}  ?>
<!DOCTYPE html>
    <html lang="en">

    <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ROOTT93">
    <meta name="keywords" content="ind theme template">
    <link rel="icon" href="../assets/img/logo.png">
    <!-- Title Page-->
    <title>Login Panel</title>
    <!-- Fontfaces CSS-->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
   
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
   <?php if($_GET['page']=='login'){ ?>
      <div class="page-wrapper">
          <div class="page-content--bge5">
              <div class="container">
                  <div class="login-wrap">
                      <div class="login-content">
                          <div class="login-logo">
                              <a href="#">
                                  <img src="../assets/img/sidebar.png" alt="CoolAdmin">
                              </a>
                              <h3 class="title-3 m-b-30">LOGIN PANEL</h3>
                          </div>
                          <?php echo $login; ?>
                          <div class="login-form">
                              <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                                  <div class="form-group">
                                      <label>Username</label>
                                      <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                      <span class="text-danger"><?php echo $username_err; ?></span>
                                  </div>
                                  <div class="form-group">
                                      <label>Password</label>
                                      <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                      <span class="text-danger"><?php echo $password_err; ?></span>
                                  </div>
                                  
                                  <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                  
                              </form>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
    <?php }else{ ?>
      <?php
      echo"
      <meta http-equiv=\"refresh\"content=\"0;URL=index.php?page=login\" />
      ";
      ?>
 
    <?php } ?>
     
    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>   
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>  
    <script src="assets/vendor/animsition/animsition.min.js"></script>   
    <script src="assets/js/main.js"></script>

</body>

</html>


