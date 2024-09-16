<?php

namespace dbn;

use \dbn\AuthController;

require_once 'controller/authControllers.php';

$obj = new AuthController();

$query = $obj::ADD_BOAT_TYPE_QUERY;
$array = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = [$_POST['name']];
    $obj->addCategory($query, $array);
    header('Location: /boat-types.php');
}

?>




<?php include('header.php');  ?>

<?php include('aside.php'); ?>

<main class="app-main"> <!--begin::App Content Header-->

    <?php include('content-header.php'); ?>

    <div class="card card-primary card-outline mb-4 w-100"> <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">Add Boat Type</div>
        </div> <!--end::Header--> <!--begin::Form-->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data"> <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">name</label> <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

            </div> <!--end::Body--> <!--begin::Footer-->
            <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
        </form> <!--end::Form-->
    </div> <!--end::Quick Example--> <!--begin::Input Group-->

</main> <!--end::App Main--> <!--begin::Footer-->
<?php include('footer.php'); ?>