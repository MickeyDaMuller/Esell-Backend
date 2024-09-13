<?php

namespace dbn;

use \dbn\AuthController;

require_once 'controller/authControllers.php';

$obj = new AuthController();
$query = $obj::GET_POSTS_PENDING_QUERY;
// $querySwich = $obj::CHANGE_USER_STATE_QUERY;
$array = [];
$data = $obj->getAllList($query, $array);


// if (
//     $_SERVER["REQUEST_METHOD"] == "POST"
// ) {
//     $arrayDelete = [
//         $_POST['active'],
//         $_POST['id']
//     ];
//     $obj->addCategory($querySwich, $arrayDelete);
//     header('Location: /users.php');
// }



?>





<?php include('header.php');  ?>

<?php include('aside.php'); ?>

<main class="app-main"> <!--begin::App Content Header-->

    <?php include('content-header.php'); ?>

    <div class="app-content"> <!--begin::Container-->

        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
            </div> <!-- /.card-header -->
            <div class="card-body w-100">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Car Topic</th>
                            <th>Chassie No</th>
                            <th>Mechanical Condition</th>
                            <th>Fuel Type</th>
                            <th>Warranty</th>
                            <th>Body Type</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Mile age</th>
                            <th>Price</th>
                            <th>Describtion</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Brand</th>
                            <th>Sub Brand</th>
                            <th>Category</th>
                            <th>Change State of the Post</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value) : ?>
                            <tr class="align-middle">
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['carTopic'] ?></td>
                                <td><?= $value['chassisNo'] ?></td>
                                <td><?= $value['mechanicalCondition'] ?></td>
                                <td><?= $value['fuelType'] ?></td>
                                <td><?= $value['warranty'] ?></td>
                                <td><?= $value['bodyType'] ?></td>
                                <td><?= $value['modelCntrl'] ?></td>
                                <td><?= $value['yearCntrl'] ?></td>
                                <td><?= $value['mileage'] ?></td>
                                <td><?= $value['priceCntrl'] ?></td>
                                <td><?= $value['descripeCntrl'] ?></td>
                                <td><?= $value['userName'] ?></td>
                                <td><?= $value['userEmail'] ?></td>
                                <td><?= $value['brandName'] != null ? $value['brandName'] : ''  ?></td>
                                <td><?= $value['subBrandName'] ?></td>
                                <td><?= $value['categoryName'] ?></td>
                                <td><Button class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#deactivateModal<?= $value['id'] ?>">Deactivate</Button> <Button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deactivateModal<?= $value['id'] ?>">Deactivate</Button></td>


                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div> <!-- /.card-body -->
            <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                </ul>
            </div> -->
        </div>

    </div> <!--end::App Content-->

</main> <!--end::App Main--> <!--begin::Footer-->

<?php include('footer.php'); ?>