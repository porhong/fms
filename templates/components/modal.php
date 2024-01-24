<?php
session_start();
if (!isset($_SESSION['Auth'])) {
    header('Location: ../views/login.php');
    exit();
}
?>
<?php
function modal_confirm_delete($modal_id_get, $modal_title_get, $modal_content_get, $modal_button_title_get)
{
    ob_start();
?>
    <div class="modal fade" id="<?php echo $modal_id_get ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center justify-content-center text-color-primary fw-bold"><i class="uil uil-trash-alt fs-2 pe-2"></i><span><?php echo $modal_title_get ?></span></h5>
                </div>

                <div id="modal_body" class="modal-body">

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn_delete"><button type="button" class="btn btn-danger "><?php echo $modal_button_title_get ?></button></a>

                </div>

            </div>
        </div>
    </div>

<?php

    return ob_get_clean();
}

function modal_add_user($modal_id_get, $modal_title_get, $modal_content_get, $modal_button_title_get)
{
    include '../sources/function/config.php';
    include '../controlers/PHP/create_user.php';
    $sql = "SELECT * FROM `tbl_roles` ORDER BY id DESC";
    $result = $conn->query($sql);
    ob_start();
?>
    <div class="modal fade" id="<?php echo $modal_id_get ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center justify-content-center text-color-primary fw-bold"><i class="uil uil-user-plus fs-2 pe-2"></i><span><?php echo $modal_title_get ?></span></h5>
                </div>

                <div id="modal_body" class="modal-body">


                    <form class="col" method="POST" action="">
                        <div class="header-text">
                            <p class="auth-title-2 pt-4 fs-5">Please fill the information below</p>
                        </div>

                        <div id="block_txt_username" class="form-floating form-floating input mb-3">
                            <input oninput="verifyRegisterInput('txt_username','Username is required')" onblur="checkFromDB('txt_username','username')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="txt_username" id="txt_username" required>
                            <label class="form-lable" for="txt_username">Username</label>
                        </div>
                        <div id="block_txt_password" class="form-floating input mb-3">
                            <input oninput="verifyPassword()" type="password" class="form-control form-control-lg bg-light fs-6 border" placeholder="Password" name="txt_password" id="txt_password" required>
                            <label class="form-lable" for="txt_password">Password</label>
                        </div>
                        <div id="block_txt_confirm_password" class="form-floating input mb-3">
                            <input oninput="verifyPassword()" type="password" class="form-control form-control-lg bg-light fs-6 border" placeholder="Confirm Password" name="txt_confirm_password" id="txt_confirm_password" required>
                            <label class="form-lable" for="txt_confirm_password">Confirm Password</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col form-floating input" id="block_txt_first_name">
                                <input oninput="verifyRegisterInput('txt_first_name','First name is required')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="First Name" name="txt_first_name" id="txt_first_name" required>
                                <label class="ms-3 form-lable" for="txt_first_name">First Name</label>
                            </div>
                            <div class="col form-floating input" id="block_txt_last_name">
                                <input oninput="verifyRegisterInput('txt_last_name','Last name is required')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Last name" name="txt_last_name" id="txt_last_name" required>
                                <label class="ms-3 form-lable" for="txt_last_name">Last Name</label>
                            </div>
                        </div>
                        <div id="block_txt_email" class="form-floating input mb-3">
                            <input oninput="checkEmptymail('txt_email'),verifyMail('txt_email')" onblur="checkFromDB('txt_email','email')" type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" name="txt_email" id="txt_email" required>
                            <label class="form-lable" for="txt_email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="cb_role" name="cb_role" aria-label="Floating label select example">
                                <?php

                                if ($result->num_rows > 0) {
                                    while ($role = $result->fetch_assoc()) {
                                ?>
                                        <option value="<?php echo $role['id'] ?>"><?php echo $role['name'] ?></option>
                                <?php }
                                } ?>
                            </select>
                            <label for="floatingSelect">Role</label>
                        </div>
                        <div id="account_status" class="d-flex align-items-center border border-1 rounded-2 p-3 form-floating input-shadow">
                            <div class="me-3">
                                <span class="fw-medium">Status</span>
                            </div>
                            <div class="form-check me-2">
                                <input value="1" class="form-check-input " type="radio" name="status" id="status_1">
                                <label class="form-check-label" for="status_1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input " type="radio" name="status" id="status_2" checked>
                                <label class="form-check-label" for="status_2">
                                    Disactive
                                </label>
                            </div>
                        </div>



                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn_delete"><button id="btn_submit" value="create_user" name="create_user" type="submit" class="btn btn-primary" disabled><?php echo $modal_button_title_get ?></button></a>

                </div>
                </form>
            </div>
        </div>
    </div>

<?php

    return ob_get_clean();
}





function modal_update_user($modal_id_get, $modal_title_get, $modal_content_get, $modal_button_title_get)
{
    include '../sources/function/config.php';
    include '../controlers/PHP/update_user.php';
    $sql = "SELECT * FROM `tbl_roles` ORDER BY id DESC";
    $result = $conn->query($sql);
    ob_start();
?>
    <div class="modal fade" id="<?php echo $modal_id_get ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center justify-content-center text-color-primary fw-bold"><i class="uil uil-edit fs-2 pe-2"></i><span><?php echo $modal_title_get ?></span></h5>
                </div>

                <div id="modal_body" class="modal-body">


                    <form class="col" method="POST" action="">
                        <div class="header-text">
                            <p class="auth-title-2 pt-4 fs-5">Please check the information below</p>
                        </div>
                        <div id="block_txt_id_update" class="form-floating form-floating input mb-3">
                            <input readonly oninput="verifyRegisterInput('txt_id_update','ID is required')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="User ID" name="txt_id_update" id="txt_id_update">
                            <label class="form-lable" for="txt_username">ID</label>
                        </div>
                        <div id="block_txt_username_update" class="form-floating form-floating input mb-3 ">
                            <input oninput="verifyRegisterInput('txt_username_update','Username is required')" onblur="checkFromDB_OnUpdate('txt_username_update','username')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="txt_username_update" id="txt_username_update" required>
                            <label class="form-lable" for="txt_username_update">Username</label>
                        </div>
                        <div id="block_txt_password_update" class="form-floating input mb-3">
                            <input oninput="verify_update_Password()" type="password" class="form-control form-control-lg bg-light fs-6 border" placeholder="Password" name="txt_password_update" id="txt_password_update" required>
                            <label class="form-lable" for="txt_password_update">Password</label>
                        </div>
                        <div id="block_txt_confirm_password_update" class="form-floating input mb-3">
                            <input oninput="verify_update_Password()" type="password" class="form-control form-control-lg bg-light fs-6 border" placeholder="Confirm Password" name="txt_confirm_password_update" id="txt_confirm_password_update" required>
                            <label class="form-lable" for="txt_confirm_password_update">Confirm Password</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col form-floating input" id="block_txt_first_name_update">
                                <input oninput="verifyRegisterInput('txt_first_name_update','First name is required')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="First Name" name="txt_first_name_update" id="txt_first_name_update" required>
                                <label class="ms-3 form-lable" for="txt_first_name_update">First Name</label>
                            </div>
                            <div class="col form-floating input" id="block_txt_last_name_update">
                                <input oninput="verifyRegisterInput('txt_last_name_update','Last name is required')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Last name" name="txt_last_name_update" id="txt_last_name_update" required>
                                <label class="ms-3 form-lable" for="txt_last_name_update">Last Name</label>
                            </div>
                        </div>
                        <div id="block_txt_email_update" class="form-floating input mb-3">
                            <input oninput="checkEmptymail('txt_email_update'),verifyMail('txt_email_update')" onblur="checkFromDB_OnUpdate('txt_email_update','email')" type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" name="txt_email_update" id="txt_email_update" required>
                            <label class="form-lable" for="txt_email_update">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="cb_role_update" name="cb_role_update" aria-label="Floating label select example">
                                <?php

                                if ($result->num_rows > 0) {
                                    while ($role = $result->fetch_assoc()) {
                                ?>
                                        <option value="<?php echo $role['id'] ?>"><?php echo $role['name'] ?></option>
                                <?php }
                                } ?>
                            </select>
                            <label for="floatingSelect">Role</label>
                        </div>

                        <div id="account_status" class="d-flex align-items-center border border-1 rounded-2 p-3 form-floating input-shadow">
                            <div class="me-3">
                                <span class="fw-medium">Status</span>
                            </div>
                            <div class="form-check me-2">
                                <input value="1" class="form-check-input " type="radio" name="status_update" id="updat_status_1">
                                <label class="form-check-label" for="updat_status_1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input " type="radio" name="status_update" id="updat_status_2" checked>
                                <label class="form-check-label" for="updat_status_2">
                                    Disactive
                                </label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn_update"><button id="btn_update_user" value="btn_update_user" name="btn_update_user" type="submit" class="btn btn-primary"><?php echo $modal_button_title_get ?></button></a>

                </div>
                </form>

            </div>
        </div>
    </div>

<?php

    return ob_get_clean();
}
?>



<?php
function modal_choose_currncy($modal_id_get, $modal_title_get, $modal_content_get, $modal_button_title_get)
{
    ob_start();
?>
    <div class="modal fade" id="<?php echo $modal_id_get ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center justify-content-center text-color-primary fw-bold"><i class="uil uil-money-bill fs-2 pe-2"></i><span><?php echo $modal_title_get ?></span></h5>
                </div>

                <div id="modal_body" class="modal-body">
                    <div class="row d-flex justify-content-evenly">
                        <div class="btn col-5 card text-center p-2 bg-color-primary item-card-md usd mb-3 " data-bs-dismiss="modal">
                            <span style="font-size: 2.5rem;" class="fw-bold position-absolute top-50 start-50 translate-middle text-color-white $">$</span>
                            <div style="margin-top: 1.3rem;" class="position-absolute top-100 start-50 translate-middle text-color-primary fw-bold">USD</div>
                        </div>
                        <div class="btn col-5 card text-center p-2 border border-primary border-2 item-card-md reil position-relative mb-3 " data-bs-dismiss="modal">
                            <span style="font-size: 3.4rem;" class="fw-bold position-absolute top-50 start-50 translate-middle text-color-primary ៛">៛</span>
                            <div style="margin-top: 1.3rem;" class="position-absolute top-100 start-50 translate-middle text-color-primary fw-bold">REIL</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php

    return ob_get_clean();
}
?>

<?php
function modal_choose_date($modal_id_get, $modal_title_get, $modal_content_get, $modal_button_title_get)
{
    ob_start();
?>

    <!-- Date picker -->
    <script src="../sources/calendar-17/js/rome.js"></script>
    <script src="../sources/calendar-17/js/main.js"></script>
    <div class="modal fade" id="<?php echo $modal_id_get ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center justify-content-center text-color-primary fw-bold"><i class="uil uil-calendar-alt fs-2 pe-2"></i><span><?php echo $modal_title_get ?></span></h5>
                </div>

                <div id="modal_body" class="modal-body">

                    <div class="d-flex justify-content-center">
                        <div class="col-md-10 text-center">
                            <input type="text" class="w-100 p-2 text-color-primary rounded-3 result_selected_date border-0 fw-bold" id="result" placeholder="Select date" readonly>
                            <form action="#" class="row">
                                <div class="col-md-12">
                                    <div class="shadow-none" id="inline_cal"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn_update"><button id="btn_select_date" value="btn_select_date" name="btn_select_date" type="submit" class="btn btn-primary" data-bs-dismiss="modal"><?php echo $modal_button_title_get ?></button></a>
                </div>

            </div>
        </div>
    </div>

<?php

    return ob_get_clean();
}
?>

<?php
function modal_choose_type($modal_id_get, $modal_title_get, $modal_content_get, $modal_button_title_get)
{
    ob_start();
?>
    <div class="modal fade" id="<?php echo $modal_id_get ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center justify-content-center text-color-primary fw-bold"><i class="uil uil-university fs-2 pe-2"></i><span><?php echo $modal_title_get ?></span></h5>
                    <div class="d-flex align-items-md-end ">

                        <div id="btn_new_type" class="text-center d-flex justify-align-content-center align-items-center border border-none border-2 border-primary rounded-3 me-3 btn">
                            <i class="uil uil-plus text-color-primary fs-4 pe-1 d-none d-lg-inline"></i>
                            <p class="text-color-primary fw-bold m-0 me-1 ">New</p>
                        </div>

                        <div id="btn_edit_type" class="text-center d-flex justify-align-content-center align-items-center border border-none border-2 border-primary rounded-3 me-3 btn">
                            <i class="uil uil-pen fs-4 d-flex align-items-center text-color-primary pe-1 d-none d-lg-inline"></i>
                            <p class="text-color-primary fw-bold m-0  me-1 ">Edit</p>
                        </div>


                    </div>
                </div>

                <div id="modal_body" class="modal-body ">
                    <div id="modal_type" class="row d-flex justify-align-content-between type_body">

                        <?php
                        include '../sources/function/config.php';
                        if (isset($_SESSION['userID'])) {
                            $user_id = $_SESSION['userID'];
                        }
                        $sql = "SELECT * FROM `tbl_tran_type` WHERE `user_id` = 79 OR `user_id` = $user_id ORDER BY `id` asc;";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($type = $result->fetch_assoc()) {
                        ?>
                                <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center btn_tran_type">
                                    <p id="<?php echo $type["name"] ?>" class="text-center mb-2 mb-lg-3 p-3 text-color-primary btn border border-primary w-100 h1 border-2 fw-bold tran_type" data-bs-dismiss="modal"><?php echo $type["name"] ?></p>
                                </div>
                        <?php }
                        } ?>
                    </div>
                    <!-- list edit -->
                    <div class="container">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-color-primary  " scope="col-3">#</th>
                                    <th class="text-color-primary  me-5 " scope="col-6">Name</th>
                                    <th class="text-center text-color-primary " scope="col-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include '../sources/function/config.php';
                                if (isset($_SESSION['userID'])) {
                                    $user_id = $_SESSION['userID'];
                                }
                                $sql = "SELECT * FROM `tbl_tran_type` WHERE `user_id` = 79 OR `user_id` = $user_id ORDER BY `id` asc;";
                                $result = $conn->query($sql);
                                $num_rows = 1;
                                if ($result->num_rows > 0) {
                                    while ($type = $result->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <th class="text-color-primary  " scope="row"><?php echo $num_rows++ ?></th>
                                            <td class="text-color-primary  me-5 "><?php echo $type["name"] ?></td>
                                            <td class="text-center">
                                                <div class="btn text-color-primary fs-4 "><i class="uil uil-edit"></i></div>
                                                <div class="btn text-color-danger fs-4 "><i class="uil uil-trash-alt"></i></div>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>

                    </div>


                    <!-- input create -->
                    <div id="txt_new_type" class="d-none">
                        <form method="post" id="type_Form" action="" class="input-group col-12 mb-3 text-center d-flex justify-align-content-center align-items-center input-shadow">
                            <input type="text" id="type_name" name="type_name" class="form-control rounded-start-2 text-color-primary fw-medium input-number-md text-color-primary">
                            <button id="btn_create_type" type="submit" class="btn btn-primary border rounded-end-2 w-25 input-number-md fw-bold ">Create</button>
                        </form>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php

    return ob_get_clean();
}
?>


<?php
function modal_choose_purpose($modal_id_get, $modal_title_get, $modal_content_get, $modal_button_title_get)
{
    ob_start();
?>
    <div class="modal fade" id="<?php echo $modal_id_get ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center justify-content-center text-color-primary fw-bold"><i class="uil uil-list-ol fs-2 pe-2"></i><span><?php echo $modal_title_get ?></span></h5>
                    <div id="btn_new_purpose" class="text-center d-flex justify-align-content-center align-items-center">
                        <p class="text-color-primary fw-bold btn m-0"><i class="uil uil-plus me-1 fs-4"></i>New</p>
                    </div>
                </div>

                <div id="modal_body" class="modal-body">
                    <div id="modal_purpose" class="row d-flex justify-align-content-between">

                        <?php
                        include '../sources/function/config.php';
                        $curent_userID = isset($_SESSION['userID']);
                        $sql = "SELECT * FROM `tbl_purpose` WHERE `user_id` = 79 OR `id` = $curent_userID;";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($purpose = $result->fetch_assoc()) {
                        ?>
                                <div class="col-12 col-lg-4 text-center mb-2 mb-lg-3s d-flex justify-content-center align-items-center btn_purpose_name">
                                    <p id="<?php echo $purpose["name"] ?>" class="p-3 text-color-primary btn border border-primary w-100 h1 border-2 fw-bold " data-bs-dismiss="modal"><?php echo $purpose["name"] ?></p>
                                </div>
                        <?php }
                        } ?>
                        <!-- input create -->
                        <div id="txt_new_purpose" class="input-group col-12 mb-3 text-center d-flex justify-align-content-center align-items-center input-shadow d-none">
                            <input type="text" class="form-control rounded-start-2 text-color-primary fw-medium input-number-sm">
                            <button class="btn btn-primary rounded-end-2 w-25 input-number-sm">Create</button>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php

    return ob_get_clean();
}
?>