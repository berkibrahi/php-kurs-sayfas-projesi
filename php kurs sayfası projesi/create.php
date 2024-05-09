<?php
    require "libs/variables.php";
    require "libs/functions.php";
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <form action="index.php" method="post">
            <label for="title">Başlık</label>
                <input type="text" name="title" class="form-control" id="title">

                <label for="subtitle">Alt Başlık</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle">

                <label for="image">Resim</label>
                <input type="text" name="image" class="form-control" id="image">

                <label for="dateadded">Eklenme Tarihi</label>
                <input type="text" name="dateadded" class="form-control" id="dateadded">
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>

    </div>

</div>
<?php include "partials/_footer.php" ?>
