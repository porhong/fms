<?php ob_start(); ?>
<div class="row ">
    <div class="col">


        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">User Management</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="table-responsive position-relative">
                    <button class="btn btn-primary mt-3 mb-3 d-flex align-items-center justify-content-center">
                        <div class="pe-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                            </svg>
                        </div>Create User
                    </button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="px-4" scope="col">ID</th>
                                <th class="px-4" scope="col">Username</th>
                                <th class="px-4" scope="col">Role</th>
                                <th class="px-4" scope="col">First Name</th>
                                <th class="px-4" scope="col">Last Name</th>
                                <th class="px-4" scope="col">Email</th>
                                <th class="px-4" scope="col">Created At</th>
                                <th class="px-4" scope="col">Last Login</th>
                                <th class="px-4" scope="col">Edit Account</th>
                                <th class="px-4" scope="col">Delete Account</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../controlers/PHP/user_controler.php';
                            $result = getUser();
                            if ($result->num_rows > 0) {

                                while ($userdata = $result->fetch_assoc()) {

                            ?>
                                    <tr>
                                        <th class="align-middle px-4" scope="row"><?php echo $userdata['id'] ?> </th>
                                        <td class="align-middle px-4"><?php echo $userdata['username'] ?></td>
                                        <td class="align-middle px-4"><?php echo $userdata['role'] ?></td>
                                        <td class="align-middle px-4"><?php echo $userdata['first_name'] ?></td>
                                        <td class="align-middle px-4"><?php echo $userdata['last_name'] ?></td>
                                        <td class="align-middle px-4"><?php echo $userdata['email'] ?></td>
                                        <td class="align-middle px-4"><?php echo $userdata['created_at'] ?></td>
                                        <td class="align-middle px-4"><?php echo $userdata['last_login'] ?></td>
                                        <td class="text-center align-middle"><button class="btn btn-primary">
                                                <div class="p-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg>
                                                </div>
                                            </button></td>
                                        <td class="text-center align-middle"><button class="btn btn-danger">
                                                <div class="p-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                                    </svg>
                                                </div>
                                            </button></td>
                                    </tr>

                            <?php       }
                            }
                            ?>
                        </tbody>
                    </table>

                </div>

                <nav aria-label="...">
                    <ul class="pagination pagination-sm">
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>

            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
        </div>


    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php
$page_title = 'Setting';
include("../templates/main_template.php");
?>
<?php require("../templates/close_template.php"); ?>