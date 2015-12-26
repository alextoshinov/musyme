
<div class="span4">
    <h4 class="green smaller margin-15fix">
        <i class="icon-table orange"></i>
        <?php echo __('Change password'); ?>
    </h4>
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
                    <button type="button" id="change-pass" class="btn btn-purple btn-sm btn-fix" style="margin-top: 2px !important;">
                        <?php echo __('Change'); ?>
                        <i class="icon-ok icon-on-right bigger-110"></i>
                    </button>
                </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<script type="text/javascript">

    $( document ).ready(function() {

        $('#change-pass').click(function(){
            var oldpass = $('#old-password').val();
            var newpass = $('#password').val();
            var cpass = $('#cpassword').val();
            var jsonVar = new Array(oldpass, newpass, cpass);

            CallAPI("POST", "/profile/changepass", function (e) {
                if(e == 'ok')
                {
                    MessageBoxOK(" Password changed ");
                }
                else if(e == 'error:short')
                {
                    MessageBoxError("The Password is too short! Please try again!");
                }
                else if(e == 'error:match')
                {
                    MessageBoxError("The passwords don't match! Please try again!");
                }
                else if(e == 'error:while')
                {
                    MessageBoxError("Error while updating! Please try again!");
                }
                else if(e == 'error:user')
                {
                    MessageBoxError("Can't find user with that password! Please try again!");
                }

            },function () { MessageBoxError("Error while updating! Please try later!"); }, JSON.stringify(jsonVar) );

        });


    });
</script>


