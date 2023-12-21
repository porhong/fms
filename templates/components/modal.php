<?php
function modal_confirm_delete($modal_id_get, $modal_title_get, $modal_content_get, $modal_button_title_get)
{
    ob_start();
?>
    <div class="modal fade" id="<?php echo $modal_id_get ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title d-flex align-items-center justify-content-center text-color-primary fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-exclamation-triangle text-color-primary me-2" viewBox="0 0 16 16">
                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                        </svg><span><?php echo $modal_title_get ?></span></h4>
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
    $sql = "SELECT * FROM `tbl_roles` ORDER BY id DESC";
    $result = $conn->query($sql);
    ob_start();
?>
    <div class="modal fade" id="<?php echo $modal_id_get ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title d-flex align-items-center justify-content-center text-color-primary fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-plus text-color-primary me-2" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                        </svg><span><?php echo $modal_title_get ?></span></h4>
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
                        <div class="d-flex align-items-center">

                            <div class="form-check form-switch form-switch-lg">
                                <input onclick="stt()" class="form-check-input" type="checkbox" role="switch" id="sw_status" name="sw_status" state='failed'>
                            </div>
                            <div class="switch_state">
                                <span class="fw-medium fs-6 me-2 text-color-error">Disactive</span>
                            </div>
                        </div>

                    </form>

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn_delete"><button id="btn_submit" name="submit" type="button" class="btn btn-primary" disabled><?php echo $modal_button_title_get ?></button></a>

                </div>

            </div>
        </div>
    </div>

<?php

    return ob_get_clean();
}



?>