<?php
session_start();
if(isset($_SESSION['username'])){
   header("location: home");
  exit;
}

?>
<?php
require_once 'config/database.php';
require_once 'function/function.user.php';
?>
<?php 
GlobalDataSitus();
  if($GlobalDataSitus[8]=='Tutup'){
    header("location:home?page=tutup");
  }elseif($GlobalDataSitus[8]=='Perawatan'){
    header("location:home?page=perawatan");
  }else{
    if($GlobalDataSitus[8]=='Belum Dibuka'){
    header("location:home?page=belum-dibuka");
    }
  }
head();
css();
navigasi();
?>
<?php

    $username_err = $password_err = $login = "";
 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty(trim($_POST['username']))){
            $username_err="<div class='alert alert-danger'>Masukan username Anda</div>";
        }else{

            $username=test_input($_POST['username']);
            $username=EscapeString($username);
        }
        if(empty(trim($_POST['password']))){
            $password_err="<div class='alert alert-danger'>Masukan sebuah password</div>";
        }else{
            $password=trim($_POST['password']);
            $password=($password);
        }
        if(empty($username_err) && empty($password_err)){
            if(LoginUser($username, $password)):
                
                $_SESSION['id']=$id;
                $_SESSION['nama']=$nama;
                $_SESSION['email']=$email;
                $_SESSION['username']=$username;                         
                $login="<div class='alert alert-success'>Login berhasil, mengarahkan...</div>";
                echo "<meta http-equiv=\"refresh\"content=\"2;URL=home\"/>";
            else:
                $login="<div class='alert alert-danger'>Username atau password salah</div>";

            endif;
        }

        
    }

?>
<div id="content" class="p-4 p-md-5 pt-5">
  <div class="row">
      <div class="card mx-auto mt-5">
            <div class="card-header bg-default text-black"><b>LOGIN</b></div>
            
            <div class="card-body">         
             
              <form action="" method="post">

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                  
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                
                </div>
               <span><?php echo $login; ?></span>
               
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <p class="small text-center">Silahkan Masukan username dan password yang valid</p>
                    </label>
                  </div>
                </div>
            
            <input type="submit" class="btn btn-secondary btn-block" name="login" value="Login" />
              </form>
          
              <div class="text-center">
                <a class="d-block small mt-3" href="buat-akun">Daftar baru</a>
               
              </div>
           
            </div>
          </div>
    </div>    
</div>

<?php
footer();
?>
  
