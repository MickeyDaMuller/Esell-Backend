<?php

namespace dbn;

use \dbn\AuthController;

require_once 'controller/authControllers.php';

$obj = new AuthController();
$query = $obj::GET_ALL_USERS_QUERY;
$querySwich = $obj::CHANGE_USER_STATE_QUERY;
$array = [];
$data = $obj->getAllList($query, $array);

if (
    $_SERVER["REQUEST_METHOD"] == "POST"
) {
    $arrayDelete = [
        $_POST['active'],
        $_POST['id']
    ];
    $obj->addCategory($querySwich, $arrayDelete);
    header('Location: /users.php');
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
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Sign up with</th>
                            <th>Active/Deactive</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value) : ?>
                            <tr class="align-middle">
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['username'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td><?= $value['mob_no'] ?></td>
                                <td><?= $value['signup_stt'] ?></td>
                                <?php if ($value['active'] == 1): ?>
                                    <td> <Button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deactivateModal<?= $value['id'] ?>">Deactivate</Button></td>
                                <?php else: ?>
                                    <td><Button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#activateModal<?= $value['id'] ?>">Activate</Button></td>
                                <?php endif; ?>
                                <div class="modal fade" id="deactivateModal<?= $value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Deactivate User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to deactivate User: <?= $value['username'] ?> with email: <?= $value['email'] ?> ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                                                        <input type="hidden" name="active" value="0">
                                                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                                        <button type="submit" class="btn btn-primary">yes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="activateModal<?= $value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Activate User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to activate User: <?= $value['username'] ?> with email: <?= $value['email'] ?> ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST"> <input type="hidden" name="active" value="1"><input type="hidden" name="id" value="<?= $value['id'] ?>">
                                                        <button type="submit" class="btn btn-primary">yes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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