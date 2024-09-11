<?php

namespace dbn;

use \dbn\AuthController;

require_once 'controller/authControllers.php';

$obj = new AuthController();

$query = $obj::GET_CATEGORIES_QUERY;
$queryDelete = $obj::DELETE_CATEGORY_QUERY;
$array = [];
$data = $obj->getAllCategories($query, $array);
if (
    $_SERVER["REQUEST_METHOD"] == "POST"
) {
    $arrayDelete = [
        $_POST['id']
    ];
    $obj->addCategory($queryDelete, $arrayDelete);
    header('Location: /template.php');
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
                            <th>Image</th>
                            <th style="width: 40px">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value) : ?>
                            <tr class="align-middle">
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['name'] ?></td>
                                <td>
                                    <div style="width: 160px; height: 160px;">
                                        <img class="img-thumbnail" src="http://localhost:8000/<?= $value['categoryURL'] ?>">
                                    </div>
                                </td>
                                <td>
                                    <a type="button" href="category-edit.php?id=<?= $value['id'] ?>" class="btn btn-outline-primary mb-2"><i class="bi bi-pencil-square"></i> Edit</a>
                                    <button type="button" class="btn btn-outline-danger mb-2" data-bs-toggle="modal" data-bs-target="#delteModal<?= $value['id'] ?>"><i class="bi bi-trash"></i> Delete</button>
                                    <div class="modal fade" id="delteModal<?= $value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete Category</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete this category <?= $value['name'] ?></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST"> <input type="hidden" name="id" value="<?= $value['id'] ?>"> <button type="submit" class="btn btn-primary">yes</button></form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </td>
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