<?php

namespace dbn;

use \dbn\AuthController;

require_once 'controller/authControllers.php';

$obj = new AuthController();
$query = $obj::GET_POSTS_READY_QUERY;
$querySwich = $obj::CHANGE_POST_STATE_QUERY;
$array = [];
$data = $obj->getAllList($query, $array);
$arrayState = [];

if (
    $_SERVER["REQUEST_METHOD"] == "POST"
) {
    $arrayState = [
        $_POST['state'],
        $_POST['id']
    ];
    $obj->addCategory($querySwich, $arrayState);
    header('Location: /posts-ready.php');
}



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
                                <td> <Button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#denyModal<?= $value['id'] ?>">Expire</Button></td>

                                <div class="modal fade" id="denyModal<?= $value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Expire Post</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to Expire Post it will not appear on application?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                                                        <input type="hidden" name="state" value="experied">
                                                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                                        <button type="submit" class="btn btn-primary">yes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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