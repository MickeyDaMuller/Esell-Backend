<?php

namespace dbn;

use \dbn\AuthController;

require_once 'controller/authControllers.php';

$obj = new AuthController();

$query = $obj::ADD_CATEGORY_QUERY;
$array = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "resources/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $name = htmlspecialchars($_POST['name']);
    $file_name = $_FILES["image"]["name"];
    $array = [$name, "resources/" . $file_name];
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $obj->addCategory($query, $array);
        } else {
        }
    }
    header('Location: /template.php');
}


?>




<?php include('header.php');  ?>

<?php include('aside.php'); ?>

<main class="app-main"> <!--begin::App Content Header-->

    <?php include('content-header.php'); ?>

    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">Add Category</div>
        </div> <!--end::Header--> <!--begin::Form-->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data"> <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">name</label> <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="input-group mb-3"> <input type="file" accept="image/*" name="image" class="form-control" id="inputGroupFile02"> <label class="input-group-text" for="inputGroupFile02">Upload</label> </div>
            </div> <!--end::Body--> <!--begin::Footer-->
            <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
        </form> <!--end::Form-->
    </div> <!--end::Quick Example--> <!--begin::Input Group-->

</main> <!--end::App Main--> <!--begin::Footer-->
<?php include('footer.php'); ?>