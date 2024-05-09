<?php
    require "libs/variables.php";
    require "libs/functions.php";
    require "libs\ayar.php";
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>


<?php 

$sehirler = array(
    "06" => "Ankara",
    "41" => "Kocaeli",
    "34" => "İstanbul",
    "53" => "Rize",
    "54" => "Sakarya",
);

$hobiler = array(
    "1" => "Sinema",
    "2" => "Spor",
    "3" => "Müzik",
    "4" => "Kitap"
);

$usernameerr=$emailerr=$passworderr=$repassworderr= "";
$username=$email=$password="";

if($_SERVER["REQUEST_METHOD"]=="POST") {



   if(empty($_POST["username"])){
     $usernameerr="kullanıcı adı gereklidir";
    
   }
   if (!preg_match("/^[a-zA-Z\d_]{5,20}$/", $_POST["username"])) {
    $usernameerr= "Kullanıcı adı geçersiz! Kullanıcı adı en az 2, en fazla 20 karakter uzunluğunda olmalı ve yalnızca harf, rakam veya alt çizgi (_) içerebilir.";
}

   else{
    $query="SELECT id FROM  kullanicilar WHERE username=?";
    if($stmt=mysqli_prepare($baglanti,$query)){
        $param_username =safe_html( $_POST["username"]);
        mysqli_stmt_bind_param($stmt,"s",$param_username);

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt)==1){
                $usernameerr="kullanıcı adı daha önce alınmış";
            }
            else{
                $username=safe_html( $_POST["username"]);
            }

        }

    }
    $username =safe_html( $_POST["username"]);
   }
   



   if(empty($_POST["email"])){
    $emailerr= "email adresi gereklidir";

   }
   if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $emailerr = "geçersiz email formatı";
  }else{
    $query="SELECT id FROM  kullanicilar WHERE email=?";
    if($stmt=mysqli_prepare($baglanti,$query)){
        $param_email =safe_html( $_POST["email"]);
        mysqli_stmt_bind_param($stmt,"s",$param_email);

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt)==1){
                $emailerr="Email Adresi daha önce alınmış";
            }
            else{
                $email=safe_html( $_POST["email"]);
            }

        }

    }
    $username =safe_html( $_POST["username"]);
   }



   if(empty($_POST["password"])){
    $passworderr= "şifre gereklidir";
   }else{
    $password = safe_html($_POST["password"]);
   }



   if($_POST["password"]!=$_POST["repassword"]){
    $repassworderr="girdiğiniz şifreler aynı değil";
   }else{
    $repassword= safe_html($_POST["repassword"]);
   } 

   if(empty($usernameerr) and empty($emailerr) and empty($passworderr) and empty($repassworderr) ){
    include "libs\ayar.php";

    $query = "INSERT INTO kullanicilar(username,email,password) VALUES (?,?,?)";
    
    if($stmt = mysqli_prepare($baglanti,$query)){
        $param_username=$username;
        $param_email=$email;
        $param_password=password_hash($password,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
        if(mysqli_stmt_execute($stmt)){
            header("Location:login.php");

        }
        else{
           echo  mysqli_error($baglanti);
        }
    }

    
   
  

    
}


   }




    

  






?>
<div class="container my-3">

    <div class="row">
        <div class="col-12">
        <form action="signin.php" method="post" novalidate>
            <div class="mb-3">
                <label for="username">Kullanıcı Adı</label>
                <input type="text" name="username" class="form-control" value=<?php  echo $username?> >
                <div class="text-danger"> <?php echo $usernameerr; ?></div>
              
            </div>
            <div class="mb-3">
                <label for="email">Eposta</label>
                <input type="email" name="email" class="form-control" >
                <div class="text-danger"> <?php echo $emailerr; ?></div>
                
            </div>
            <div class="mb-3">
                <label for="password">Parola</label>
                <input type="password" name="password" class="form-control" >
                <div class="text-danger"> <?php echo $passworderr; ?></div>
              
            </div>
            <div class="mb-3">
                <label for="repassword">Parola Tekrar</label>
                <input type="password" name="repassword" class="form-control">
                <div class="text-danger"> <?php echo $repassworderr; ?></div>
               
            </div>
     
                        
                        
                    </div>

               
                     
               
               
            </div>
            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
           </form>
        </div>
    </div>

</div>
<?php include "partials/_footer.php" ?>
