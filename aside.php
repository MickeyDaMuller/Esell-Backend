<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/template.php' || $_SERVER['REQUEST_URI'] == '/category-add.php' ? "menu-open" : "" ?>"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Category
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item "> <a href="template.php" class="nav-link <?= $_SERVER['REQUEST_URI'] == '/template.php' ? "active" : "" ?>"> <i class="nav-icon bi bi-circle"></i>
                                <p>Category</p>
                            </a> </li>
                        <li class="nav-item "> <a href="category-add.php" class="nav-link <?= $_SERVER['REQUEST_URI'] == '/category-add.php' ? "active" : "" ?>"> <i class="bi bi-plus-square-dotted"></i>
                                <p>Add Category</p>
                            </a> </li>
                        <!-- <li class="nav-item"> <a href="./widgets/cards.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Cards</p>
                            </a> </li> -->
                    </ul>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/brand.php' || $_SERVER['REQUEST_URI'] == '/brand-add.php' ? "menu-open" : "" ?>"> <a href="#" class="nav-link"> <i class="bi bi-ev-front"></i>
                        <p>
                            Brand
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item "> <a href="brand.php" class="nav-link <?= $_SERVER['REQUEST_URI'] == '/brand.php' ? "active" : "" ?>"> <i class="nav-icon bi bi-circle"></i>
                                <p>Brand</p>
                            </a> </li>
                        <li class="nav-item "> <a href="brand-add.php" class="nav-link <?= $_SERVER['REQUEST_URI'] == '/brand-add.php' ? "active" : "" ?>"> <i class="bi bi-plus-square-dotted"></i>
                                <p>Add Brand</p>
                            </a> </li>
                        <!-- <li class="nav-item"> <a href="./widgets/cards.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Cards</p>
                            </a> </li> -->
                    </ul>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/sub-brand.php' || $_SERVER['REQUEST_URI'] == '/sub-brand-add.php' ? "menu-open" : "" ?>"> <a href="#" class="nav-link"> <i class="bi bi-ev-front"></i>
                        <p>
                            Sub Brand
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item "> <a href="sub-brand.php" class="nav-link <?= $_SERVER['REQUEST_URI'] == '/sub-brand.php' ? "active" : "" ?>"> <i class="nav-icon bi bi-circle"></i>
                                <p>Sub Brand</p>
                            </a> </li>
                        <li class="nav-item "> <a href="sub-brand-add.php" class="nav-link <?= $_SERVER['REQUEST_URI'] == '/sub-brand-add.php' ? "active" : "" ?>"> <i class="bi bi-plus-square-dotted"></i>
                                <p>Add Sub Brand</p>
                            </a> </li>
                        <!-- <li class="nav-item"> <a href="./widgets/cards.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Cards</p>
                            </a> </li> -->
                    </ul>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/users.php'  ? "menu-open" : "" ?>"> <a href="#" class="nav-link"> <i class="bi bi-people-fill"></i>
                        <p>
                            Users
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item "> <a href="users.php" class="nav-link <?= $_SERVER['REQUEST_URI'] == '/users.php' ? "active" : "" ?>"> <i class="bi bi-people"></i>
                                <p>Users</p>
                            </a> </li>

                        <!-- <li class="nav-item"> <a href="./widgets/cards.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Cards</p>
                            </a> </li> -->
                    </ul>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/posts-pending.php' || $_SERVER['REQUEST_URI'] == '/posts-ready.php' || $_SERVER['REQUEST_URI'] == '/posts-deny.php'
                                        ? "menu-open" : "" ?>"> <a href="#" class="nav-link"> <i class="bi bi-people-fill"></i>
                        <p>
                            Posts
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item "> <a href="posts-pending.php" class="nav-link <?= $_SERVER['REQUEST_URI'] == '/posts-pending.php' ? "active" : "" ?>"> <i class="fa-solid fa-hourglass-half"></i>
                                <p>Pending Posts</p>
                            </a> </li>

                        <li class="nav-item"> <a href="posts-ready.php" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Ready Posts</p>
                            </a> </li>
                        <li class="nav-item"> <a href="posts-deny.php" class="nav-link"> <i class="fa-solid fa-ban"></i>
                                <p>Denied Posts</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/boat-types.php' || $_SERVER['REQUEST_URI'] == '/boat-type-add.php'  ? "menu-open" : "" ?>"> <a href="#" class="nav-link"> <i class="bi bi-people-fill"></i>
                        <p>
                            Boats
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item "> <a href="boat-types.php" class="nav-link <?= $_SERVER['REQUEST_URI'] == '/boat-types.php' ? "active" : "" ?>"> <i class="fa-solid fa-hourglass-half"></i>
                                <p>Boat Types</p>
                            </a> </li>

                        <li class="nav-item"> <a href="boat-type-add.php" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Add Boat Type</p>
                            </a> </li>
                        <li class="nav-item"> <a href="posts-deny.php" class="nav-link"> <i class="fa-solid fa-ban"></i>
                                <p>Boat Size</p>
                            </a> </li>
                        <li class="nav-item"> <a href="posts-deny.php" class="nav-link"> <i class="fa-solid fa-ban"></i>
                                <p>Add Boat Size</p>
                            </a> </li>
                    </ul>
                </li>

            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->