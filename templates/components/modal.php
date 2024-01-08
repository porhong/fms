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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
                        <div class="btn col-5 card text-center p-2 text-color-white bg-color-primary reil" data-bs-dismiss="modal"><img src="" alt=""></div>
                        <div class="btn col-5 card text-center p-2 text-color-white bg-color-primary usd" data-bs-dismiss="modal"><span>USD</span></div>
                    </div>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center justify-content-center text-color-primary fw-bold"><i class="uil uil-list-ol fs-2 pe-2"></i><span><?php echo $modal_title_get ?></span></h5>
                </div>

                <div id="modal_body" class="modal-body">
                    <div class="row d-flex justify-content-evenly">
                        <div class="col-5 card text-center p-2 text-color-white bg-color-primary item-card-md " data-bs-dismiss="modal"><span>REIL</span></div>
                        <div class="col-5 card text-center p-2 text-color-white bg-color-primary item-card-md " data-bs-dismiss="modal"><span>USD</span></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php

    return ob_get_clean();
}
?>