<?php

namespace dbn;

use \dbn\AuthController;

require_once 'controller/authControllers.php';

$obj = new AuthController();

$queryBrand = $obj::GET_BRAND_QUERY;
$query = $obj::GET_SUB_BRAND_BY_ID_QUERY;
$queryUpdate = $obj::UPDATE_SUB_BRAND_QUERY;

$id = $_GET['id'];
$array = [$id];
$data = array_values(($obj->getCategoryById($query, $array)))[0];
$brand = $obj->getAllList($queryBrand, []);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrayEdit = [$_POST['name'], $_POST['brandId'], $id];
    $obj->addCategory($queryUpdate, $arrayEdit);
    header('Location: /sub-brand.php');
}
?>




<?php include('header.php');  ?>

<?php include('aside.php'); ?>

<main class="app-main"> <!--begin::App Content Header-->

    <?php include('content-header.php'); ?>

    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">Edit Sub Brand</div>
        </div> <!--end::Header--> <!--begin::Form-->
        <form action="<?= $_SERVER['PHP_SELF'] . '?id=' . $id ?>" method="POST"> <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">name</label> <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data['name'] ?>">
                </div>
                <div class="mb-3">
                    <label for="brandId" class="form-label">Select Brand</label>
                    <select class="form-select" aria-label="Default select example" name="brandId">
                        <?php foreach ($brand as $value) : ?>
                            <option selected="<?php if ($value['id'] == $data['brandLogoId']) "selected"; ?>" value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div> <!--end::Body--> <!--begin::Footer-->
            <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
        </form> <!--end::Form-->
    </div> <!--end::Quick Example--> <!--begin::Input Group-->

</main> <!--end::App Main--> <!--begin::Footer-->
<?php include('footer.php'); ?>