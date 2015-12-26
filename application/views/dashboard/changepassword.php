<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 9/24/15
 * Time: 7:45 PM
 */
?>
<?php include Kohana::find_file('views', 'dashboard/nav'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo __('Change password'); ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-bordered table-hover">
                    <tbody id="suggestHolder">
                        <tr>
                            <td>
                                <?php echo __('Old password'); ?>
                            </td>
                            <td>
                                <input type="password"  id="old-password" class="form-control search-query" placeholder="<?php echo __('Type the current password'); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo __('New password'); ?>
                            </td>
                            <td>
                                <input type="password"  id="password" class="form-control search-query" placeholder="<?php echo __('Type new password'); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo __('Confirm password'); ?>
                            </td>
                            <td>
                                <input type="password"  id="cpassword" class="form-control search-query" placeholder="<?php echo __('Confirm password'); ?>">
                            </td>
                        </tr>
                        <tr>

                            <td colspan="2">
                                <span class="input-group-btn">
                                <button type="button" id="change-pass" class="btn btn-primary btn-sm btn-fix" style="margin-top: 2px !important;">
                                    <?php echo __('Change'); ?>
                                    <i class="icon-ok icon-on-right bigger-110"></i>
                                </button>
                            </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="alert alert-success alert-dismissible" role="alert" id="messageOK" style="display: none">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span id="okmessage"></span>
                </div>
                <div class="alert alert-danger alert-dismissible" role="alert" id="messageError"  style="display: none">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <span id="errormessage"></span>
                </div>
            </div>
        </div>
    </div>
</div>



