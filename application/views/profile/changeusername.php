
<div class="span6">
    <h4 class="green smaller margin-15fix">
        <i class="icon-table orange"></i>
         <?php echo __('Change username'); ?>
    </h4>
    <table class="table table-striped table-bordered table-hover">
        <tbody id="suggestHolder">
            <tr>
                <td>
                     <?php echo __('Current username'); ?>
                </td>
                <td>
                    <input type="text"  id="old-username" class="form-control search-query" placeholder=" <?php echo __('Type the current username'); ?>">
                </td>
            </tr>
            <tr>
                <td>
                     <?php echo __('Password'); ?>
                </td>
                <td>
                    <input type="password"  id="password" class="form-control search-query" placeholder=" <?php echo __('Type the current password '); ?>">
                </td>
            </tr>
            <tr>
                <td>
                     <?php echo __('New username'); ?>
                </td>
                <td>
                    <input type="text"  id="username" class="form-control search-query" placeholder=" <?php echo __('Type a new username'); ?>">
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
            var oldusername = $('#old-username').val();
            var username = $('#username').val();
            var password = $('#password').val();
            var jsonVar = new Array(oldusername, username, password);

			if(oldusername === '' || username === '' || password === '')
			{
				MessageBoxError("Please fill all fields!");
				return false;
			}
            
            CallAPI("POST", "/profile/changeuser", function (e) {
                if(e == 'ok')
                {
                    MessageBoxOK(" Username is changed ");
                }
                else if(e == 'error:short')
                {
                    MessageBoxError("The username is too short! The username must be atleast 3 chars!");
                }
                else if(e == 'error:match')
                {
                    MessageBoxError("There is a user with that username: "+username+"!");
                }
                else if(e == 'error:while')
                {
                    MessageBoxError("Error while updating! Please try again!");
                }
                else if(e == 'error:user')
                {
                    MessageBoxError("Can't find user with that username and password! Please try again!");
                }

            },function () { MessageBoxError("Error while updating! Please try later!"); }, JSON.stringify(jsonVar) );

        });


    });
</script>


