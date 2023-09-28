<?php
session_start();
require_once 'function/function.session.php';
require_once 'config/database.php';
require_once 'function/function.user.php';
if(SessionUserCek()){
		header("location:login");
		}else{
		SessionActive();
	
		$id=$DSessionArray[0];
		$nama_akun=$DSessionArray[1];
		$email=$DSessionArray[2];
		$username=$DSessionArray[3];		
		
	}

?>
<?php 
head();
css();
navigasi();
if(!isset($_GET['page'])){$_GET['page']='';}
?>
<div id="content" class="p-4 p-md-5 pt-5">
    <ol class="breadcrumb mt-4">
                <li class="breadcrumb-item">
                  <a href="home">Kembali</a>
                </li>
                <li class="breadcrumb-item active">Profile</li>
              </ol>
<?php
$simpan = $nama_err = $email_err = $username_err = $password_err = $konfir_password_err = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(empty(trim($_POST['nama']))){
    $nama_err="Masukan nama lengkap Anda";
  }elseif(strlen($_POST['nama'])<3){
    $nama_err="Nama tidak boleh kurang dari 3 karakter";
  }elseif(ValidateName($_POST['nama'])){
    $nama_err="Format nama harus berupa karakter alphabet";
  }else{
    $nama=test_input($_POST['nama']);
    $nama=EscapeString($nama);
  }
  if(empty(trim($_POST['email']))){
    $email_err="Email tidak boleh kosong";
  }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $email_err="Format penulisan email salah";
  }else{
    if(trim($_POST['email'])!=$email):
      if(CekEmail($_POST['email'])){
        $email_err="Email tersebut sudah digunakan !";
      }else{
        $email=test_input($_POST['email']);
        $email=EscapeString($email);
      }
    else:
      $email=test_input($_POST['email']);
      $email=EscapeString($email);
    endif;
  }
  if(empty(trim($_POST['username']))){
    $username_err="Username tidak boleh kosong";
  }elseif(strlen($_POST['username'])<3){
    $username_err="username tidak boleh kurang dari 3 karakater";
  }elseif(ValidateUsername($_POST['username'])){
    $username_err="Hanya kombinasi karakter angka dan huruf yang diperbolehkan";
  }
  else{
    if(trim($_POST['username'])!=$username):
      if(CekUsername($_POST['username'])){
        $username_err="Maaf username tersebut sudah digunakan";
      }else{
        $username=test_input($_POST['username']);
        $username=EscapeString($username);
      }
    else:
      $username=test_input($_POST['username']);
      $username=EscapeString($username);
    endif;
  }
  if(empty(trim($_POST['password']))){
    $password_err="Masukan sebuah password";
  }elseif(strlen($_POST['password'])<6){
    $password_err="Password tidak boleh kurang dari 6 karakter";
  }else{
    $password=trim($_POST['password']);
  }
  if(empty(trim($_POST['konfir_password']))){
    $konfir_password_err="Masukan konfirmasi password";
  }else{
    $konfir_password=trim($_POST['konfir_password']);
    if(empty($password_err)&&($password !=$konfir_password)){
      $konfir_password_err="Konfirmasi password tidak cocok";
    }
  }
  if(empty($nama_err)&& empty($email_err)&& empty($username_err)&& empty($password_err) && empty($konfir_password_err)){
    if(SimpanProfile($nama, $email, $username, $password, $id)):
      $simpan="<div class='alert alert-success'>Data berhasil diperbaharui</div>";
       $_SESSION['id']=$id;
       $_SESSION['nama']=$nama;
       $_SESSION['email']=$email;
       $_SESSION['username']=$username;                      
      echo "<meta http-equiv=\"refresh\"content=\"3;URL=profile\"/>";
    else:
      $simpan="<div class='alert alert-danger'>Data profile gagal diperbaharui</div>";
    endif;
    
  }
}

?>

<?php
  if($_GET['page']=='edit'):
    echo '
    '.$simpan.'
  
    <form action="'.htmlspecialchars(basename($_SERVER['REQUEST_URI'])).'" method="post">
    <div class="form-group">
        <label>Nama : </label>
        <input class="form-control" type="text" name="nama" id="nama" value="'.$nama_akun.'" placeholder="Masukan nama lengkap" maxlength="30" required=""/>
        <span class="text-danger">'.$nama_err.'</span>  
      </div>
      <div class="form-group">
        <label>Email : </label>
        <input class="form-control" type="text" name="email" id="email" value='.$email.' placeholder="Masukan email. Contoh : myroot593@gmail.com" maxlength="30" required=""/>  
        <span class="text-danger">'.$email_err.'</span>  
      </div>
      <div class="form-group">
        <label>Username : </label>
        <input class="form-control" type="text" name="username" id="username" value='.$username.' placeholder="Masukan username. Contoh:doni22" maxlength="30" minlength="3" required=""/>
        <span class="text-danger">'.$username_err.'</span>  
      </div>
      <div class="form-group">
        <label>Password : </label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Masukan password minimal 6 digit " minlength="6" required=""/>
        <span class="text-danger">'.$password_err.'</span>   
      </div>
      <div class="form-group">
        <label>Konfirmasi Password : </label>
        <input class="form-control" type="password" name="konfir_password" id="konfir_password" placeholder="Masukan password minimal 6 digit " minlength="6" required=""/> 
        <span class="text-danger">'.$konfir_password_err.'</span>  
      </div>
      <div class="form-group">
      <button type="submit" name="daftar" id="daftar" class="btn btn-primary btn-md">Simpan</button>
      
      </div>

    ';
  else:
    echo '
        <div class="table-responsive">
                
               <table class="table table-bordered table-hover">
                <tr>
                  <td>Nama</td>
                  <td>'.$nama_akun.'</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>'.$email.'</td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>'.$username.'</td>
                </tr>
               </table>
               <a href="?page=edit" alt="edit" title="Edit">Edit</a>   
              </div>

    ';
  endif;
  
?>

</div>
          

<?php
footer();
?>
	
