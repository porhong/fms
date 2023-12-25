<?php
include '../controlers/PHP/user_controler.php';
include '../templates/components/modal.php';


?>
<?php ob_start(); ?>
<script src="../controlers/JS/User_JS_Administrator.js"></script>
<?php $link_js = ob_get_clean(); ?>

<?php ob_start();
$page_title = 'Setting'; ?>

<div class="position-relative text-color-primary">
    <h2 class="card-title d-flex align-items-center"><i class="uil uil-setting fs-2 pe-2"></i><span fw-bold><?php echo $page_title ?></span></h2>
    <hr>
</div>


<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link link_color active fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">User Management</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link link_color" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link link_color" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
    </li>
</ul>
<div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
                <div class="col">
                    <button data-bs-toggle="modal" data-bs-target="#add_user" class="btn btn-primary mt-3 mb-3 d-flex align-items-center justify-content-center btn_create_user">
                        <div class="pe-1">
                            <i class="uil uil-user-plus fs-5"></i>
                        </div><span class="fw-medium">Create User</span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
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
                                            <td class="text-center align-middle"><button class="btn btn-primary btn_update_user" data-bs-toggle="modal" data-bs-target="#update_user" data-user-id="<?php echo $userdata['id'] ?>" data-user-username="<?php echo $userdata['username'] ?>">
                                                    <div class="p-1">
                                                        <i class="uil uil-edit fs-5"></i>
                                                    </div>
                                                </button></td>
                                            <td class="text-center align-middle"><button class="btn btn-danger btn_delete_user" data-bs-toggle="modal" data-bs-target="#user_delete_confirm" data-user-id="<?php echo $userdata['id'] ?>" data-user-username="<?php echo $userdata['username'] ?>">
                                                    <div class="p-1">
                                                        <i class="uil uil-trash-alt fs-5"></i>
                                                    </div>
                                                </button></td>
                                        </tr>

                                <?php       }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

            <div class="row pt-2">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm">
                        <li class="page-item">
                            <a class="page-link active_bg" href="#">1</a>
                        </li>
                        <li class="page-item link_color"><a class="page-link" href="#">2</a></li>
                        <li class="page-item link_color"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Modal delete -->
        <?php echo $model_delete_confirm =  modal_confirm_delete('user_delete_confirm', 'Delete User', 'Hello', 'Delete'); ?>
        <!-- Modal Create -->
        <?php echo $model_delete_confirm =  modal_add_user('add_user', 'Create User', 'Hello', 'Create'); ?>
        <!-- Modal Create -->
        <?php echo $model_delete_confirm =  modal_update_user('update_user', 'Update User', 'Hello', 'Update'); ?>
        <!-- Usermanagement ------------------------------------------------------------------------------------------------>










    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>




<?php $content = ob_get_clean(); ?>

<?php

include("../templates/main_template.php");
?>
<script>
    // alert delete user
    alert('user_deleted', 'User deleted successfully.', 'Can not delete user.')
    alert('success', 'User created successfully.', 'Can not create user.')
</script>
<?php require("../templates/close_template.php"); ?>