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
                <h1 class="page-header">Users</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                	<div class="panel-heading">
                		Edit user
                	</div>
                	<div class="panel-body">
                            <?php if(isset($user)):?>
                            <form class="form-horizontal" role="form" id="editUser" action="<?php echo URL::base()?>dashboard/editUser" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $user['id'];?>" />
                                <div class="form-group col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">E-mail</label>
                                        <div class="col-sm-8">
                                            <input type="email" 
                                                   placeholder="E-mail" 
                                                   class="form-control" 
                                                   name="email" 
                                                   id="email"
                                                   value="<?php echo $user['email'];?>"
                                                   >
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" 
                                                   placeholder="Username" 
                                                   class="form-control" 
                                                   name="username" 
                                                   id="username"
                                                   value="<?php echo $user['username'];?>"
                                                   >
                                        </div>    
                                    </div> 
                                    <div class="form-group">
                                        <label for="password" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" placeholder="Password" class="form-control" name="password" id="password">
                                        </div>
                                    </div>
                                    <?php if (isset($errors) && !empty($errors)) { ?>
                                                <div class="alert alert-danger alert-dismissable col-sm-10">
                                                                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                                        <p class="message">Some errors were encountered, please check the details you entered.</p>
                                                        <p>
                                                        <ul class="errors">
                                                        <?php foreach ($errors as $message): ?>
                                                                <li><?php echo $message ?></li>
                                                        <?php endforeach ?>
                                                        </ul>
                                                        </p>
                                                </div>        
                                            <?php } ?>
                                </div>
                                <div class="form-group col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <?php echo __('Roles information')?>
                                        </div>
                                        <!-- /.panel-heading -->
                                        <?php $roles = Model_User::getRoles('all');?>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Role</th>
                                                            <th>Description</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach($roles as $role):?>    
                                                        <tr>
                                                            <td><?php echo $role['id'];?></td>
                                                            <td><?php echo $role['name'];?></td>
                                                            <td><?php echo $role['description'];?></td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" 
                                                                           <?php echo (Model_User::checkUserRoles($user['id'], $role['id'])) ? 'checked=""':'';?> 
                                                                           class="edit-role" 
                                                                           id="<?php echo $role['id'];?>" 
                                                                           data-user-id="<?php echo $user['id'];?>"
                                                                           name="role"
                                                                           >
                                                                    <span class="lbl"></span></label></td>
                                                        </tr>
                                                    <?php endforeach;?>    
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                            
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                </div>

                                <div class="form-group col-lg-12">
                                    <button class="btn btn-primary pull-left" type="submit">Edit user</button>
                                </div>
                            </form>
                        <?php else:?>
                            Not user
                        <?php endif;?>    
                	</div>
                </div>
            </div>
        </div>    
    </div>
</div>