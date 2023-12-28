<?php
include '../controlers/PHP/user_controler.php';
include '../templates/components/modal.php';


?>
<?php ob_start(); ?>
<script src="../controlers/JS/User_JS_Administrator.js"></script>
<?php $link_js = ob_get_clean(); ?>

<?php ob_start();
$page_title = 'Administrator'; ?>



<div class="ps-xl-3 pe-xl-3">

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

    <?php
    include "../sources/function/config.php";
    // Pagination links
    $sql = "SELECT COUNT(*) AS total FROM tbl_user";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $totalRecords = $row["total"];
    $totalPages = ceil($totalRecords / 9);
    // Current page number
    if (isset($_GET['page'])) {
        $currentPage = $_GET['page'];
    } else {
        $currentPage = 1;
    } ?>

    <div class="row pt-3">
        <nav aria-label="...">
            <ul class="pagination pagination mb-5 pb-3 d-flex align-items-center ">
                <li class='page-item link_color'><a class=' text-color-primary fw-bold' href='?page=<?php if ($currentPage <= 1) {
                                                                                                        echo "1";
                                                                                                    } else {
                                                                                                        echo $currentPage - 1;
                                                                                                    } ?>'>
                        <?php if ($totalPages > 1) echo '<i class="uil uil-previous fs-3 me-1">' ?></i> </a>
                </li>
                <?php if ($totalPages > 1) {
                    for ($i = 1; $i <= $totalPages; $i++) {
                        if ($i == $currentPage) {
                            echo "<li class='page-item link_color'><a class='active page-link bg-color-primary text-color-white fw-medium' href='?page=$i'>$i</a></li> ";
                        } else {
                            echo "<li class='page-item link_color'><a class='page-link text-color-primary fw-medium' href='?page=$i'>$i</a></li> ";
                        }
                    }
                }
                ?>
                <li class='page-item link_color'><a class=' text-color-primary fw-bold' href='?page=<?php if ($currentPage >= $totalPages) {
                                                                                                        echo $totalPages;
                                                                                                    } else {
                                                                                                        echo $currentPage + 1;
                                                                                                    } ?>'>
                        <?php if ($totalPages > 1) echo '<i class="uil uil-step-forward fs-3 ms-1"></i>' ?> </a>
            </ul>
        </nav>
    </div>
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




<?php $content = ob_get_clean(); ?>

<?php

include("../templates/main_template.php");
?>
<script>
    // alert delete user
    alert('user_deleted', 'User deleted successfully.', 'Can not delete user.')
    alert('success', 'User created successfully.', 'Can not create user.')
    alert('update_success', 'User updated successfully.', 'Can not update user.')
</script>
<?php require("../templates/close_template.php"); ?>