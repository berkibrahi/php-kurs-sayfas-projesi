<?php
    require "libs/variables.php";
    require "libs/functions.php";
    
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>


<?php 

session_start();

$category=$categoryErr= "";

if($_SERVER["REQUEST_METHOD"]=="POST") {



   if(empty($_POST["category"])){
     $categoryErr="kategori adı gereklidir";
   }else{
    $category =safe_html( $_POST["category"]);
   }
   
if(empty($categoryErr)){
    createCategories($category);
    $_SESSION["message"] = $category." isimli kategori eklendi";
            $_SESSION["type"] = "success";
    header("location:admin-categories.php");
}

    

}





?>
<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <div class="card cardbody">
        <form action="category-create.php" method="post">
        <div class="mb-3">
                <label for="category">Kategori Adı</label>
                <input type="text" name="category" class="form-control" value='<?php  echo $category?>' >
                <div class="text-danger"> <?php echo $categoryErr; ?></div>
              
            </div>
          
            <button type="submit" class="btn btn-primary">Kaydet</button>
           </form>
           </div>
        </div>
    </div>

</div>
<?php include "partials/_footer.php" ?>
