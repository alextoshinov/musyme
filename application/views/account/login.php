
<div class="container">
        <div class="row">
            
            <div class="col-md-4 col-md-offset-4">
                <?php if ($errors || $loginerrors) { ?>
            <div class="alert alert-danger">   
                <p class="message">Some errors were encountered, please check the details you entered.</p>
                
                <ul class="errors">
                <?php foreach ($errors as $message): ?>
                    <li><?php echo $message ?></li>
                <?php endforeach ?>
                <?php if(isset($loginerrors) && empty($errors)) { echo $loginerrors; } ?>
                </ul>
            </div> 
            <?php }  ?>
                <h1 class="page-header">Musy.me Admin panel</h1>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo __('Login'); ?></h3>
                    </div>
                    <div class="panel-body">
                        <?php echo Form::open(NULL, array('role' => 'form')); ?>
                            <fieldset>
                                <div class="form-group">
                                    <?php echo Form::input('username', $post['username'], array('class'=>'form-control','placeholder'=>'E-mail', 'type'=>'email','autofocus'=>'')) ?>
                                </div>
                                <div class="form-group">
                                    <?php echo Form::password('password', NULL, array('class'=>'form-control', 'placeholder'=>'Password', 'type'=>'password')) ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <?php echo Form::checkbox('remember', NULL, ! empty($post['remember'])) ?>Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo Form::submit(NULL, 'Login', array('class'=>'btn btn-lg btn-success btn-block')); ?>
                                <p><?php echo HTML::anchor('account/reset', 'Lost my log in information'); ?></p>
                                <p><?php echo HTML::anchor('account/create', 'Don\'t have an account?'); ?></p>
                            </fieldset>
                        <?php echo Form::close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>