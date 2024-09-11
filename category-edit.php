<?php

namespace dbn;

use \dbn\AuthController;

require_once 'controller/authControllers.php';

$obj = new AuthController();
$query = $obj::GET_CATEGORY_BY_ID_QUERY;
$id = $_GET['id'];
$array = [$id];
$data = array_values(($obj->getCategoryById($query, $array)))[0];
$queryUpdate = $obj::UPDATE_CATEGORY_QUERY;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    if (!empty($_FILES)) {
        $target_dir = "resources/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $file_name = $_FILES["image"]["name"];
        $array = [$name, "resources/" . $file_name, $id];
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $obj->addCategory($queryUpdate, $array);
            } else {
            }
        }
    } else {
        $array = [$name, $data['categoryURL'], $id];
        $obj->addCategory($queryUpdate, $array);
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
            <div class="card-title">Edit Category</div>
        </div> <!--end::Header--> <!--begin::Form-->
        <form action="<?= $_SERVER['PHP_SELF'].'?id='.$id ?>" method="POST" enctype="multipart/form-data"> <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Category Name</label> <input type="text" name="name" class="form-control" id="exampleInputEmail1" value=" <?= $data['name'] ?>">
                </div>
                <div style="width: 160px; height: 160px;">
                    <img class="img-thumbnail" src="http://localhost:8000/<?= $data['categoryURL'] ?>">
                </div>
                <div class="input-group mb-3"> <input type="file" accept="image/*" name="image" class="form-control" id="inputGroupFile02"> <label class="input-group-text" for="inputGroupFile02">Upload</label> </div>
            </div> <!--end::Body--> <!--begin::Footer-->
            <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
        </form> <!--end::Form-->
    </div> <!--end::Quick Example--> <!--begin::Input Group-->

</main> <!--end::App Main--> <!--begin::Footer-->


<?php include('footer.php'); ?>