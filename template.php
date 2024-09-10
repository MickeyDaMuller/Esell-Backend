<?php

namespace dbn;

use \dbn\AuthController;

require_once 'controller/authControllers.php';

$obj = new AuthController();

$query = $obj::GET_CATEGORIES_QUERY;
$array = [];
$data = $obj->getAllCategories($query, $array);

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
                                            <?= $value['categoryURL'] ?>
                                        </td>
                                        <td>
                                            <a type="button" href="category-edit.php?id=<?= $value['id'] ?>" class="btn btn-outline-primary mb-2"><i class="bi bi-pencil-square"></i> Edit</a>
                                            <button type="button" class="btn btn-outline-danger mb-2"><i class="bi bi-trash"></i> Delete</button>
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

    


    