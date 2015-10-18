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
                <h1 class="page-header">Admins</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                	<div class="panel-heading">
                		Edit user as Admin
                	</div>
                	<div class="panel-body">
                		<form role="form" id="addNewUser" action="<?php echo URL::base()?>dashboard/newUser" method="post" enctype="multipart/form-data">
                                    <div class="form-group col-lg-6">
		                        <label>E-mail</label>
                                        <input type="email" placeholder="E-mail" class="form-control" name="email" id="email">
		                    </div>
                                    <div class="form-group col-lg-6">
		                        <label>Username</label>
                                        <input type="text" placeholder="Username" class="form-control" name="username" id="username">
		                    </div>
		                    <div class="form-group col-lg-6">
		                         <label>Password</label>
                                        <input type="password" placeholder="Password" class="form-control" name="password" id="password">
		                    </div>
                                    
		                    <div class="form-group col-lg-3">
		                        <label>Is admin</label>               
                                    <label class="radio-inline">
                                        <input type="radio" checked="" value="1"  name="is_admin" />Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="0"  name="is_admin" />No
                                    </label>                                                                             
		                    </div>
		                    <div class="form-group col-lg-6">
		                    	<button class="btn btn-primary pull-right" type="submit">Add user</button>
		                    </div>
            			</form>
                	</div>
                </div>
            </div>
        </div>    
    </div>
</div>