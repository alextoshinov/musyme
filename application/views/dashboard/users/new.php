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
                		Add new user
                	</div>
                	<div class="panel-body">
                            <?php echo Form::open(NULL, array('id' => 'create', 'autocomplete' => 'off')); ?>
                            <fieldset>
                                <div class="form-group">
                                    <?php echo Form::input('email', $post['email'], array(
                                        'id' => 'focus',
                                        'class'=>'form-control',
                                        'placeholder'=>'E-mail', 
                                        'type'=>'email',
                                        'id' => 'focus',
                                        
                                        )) ?>
                                </div>
                                <div class="form-group">
                                   <?php echo Form::input('username', $post['username'], array(
                                       'class'=>'form-control',
                                       'placeholder'=>'Username', 
                                       'type'=>'text',
                                       'id' => 'username', 
                                       'MAXLENGTH' => 12
                                       )) ?>
                                </div>
                                <div class="checkbox">
                                    <?php echo Form::password('password', NULL, array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Password', 
                                        'type'=>'password', 
                                        'id' => 'password'
                                        )) ?>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo Form::submit(NULL, 'Create', array('class'=>'btn btn-lg btn-success btn-block', 'type'=>'submit')); ?><br />
                            </fieldset>
                        <?php echo Form::close(); ?>
                            <?php if ($errors) { ?>
                            <div class="alert alert-danger alert-dismissable">
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
                </div>
            </div>
        </div>    
    </div>
</div>