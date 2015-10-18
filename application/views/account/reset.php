
<div class="container">
        <div class="row">            
            <div class="col-md-4 col-md-offset-4">
                <h1 class="page-header"><?php echo __('Reset'); ?></h1>
<?php if(!isset($sent)) { ?>
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
	<div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Forgot password or username'); ?></h3>
            </div>
            <div class="panel-body">
                <?php echo Form::open();?>
                <p><?php echo __('Please send me a link to reset my password.'); ?></p>
                <div class="form-group">
                    <?php echo Form::input('email', $post['email'], array(
                                        'id' => 'email',
                                        'class'=>'form-control',
                                        'placeholder'=>'E-mail', 
                                        'type'=>'email'
                                        ));?>
                </div>
	
	
	<?php
	echo Form::submit(NULL, __('Reset password'), array('class'=>'btn btn-lg btn-success btn-block'));        
	echo Form::close();
	?>
	   </div>
	</div>
<?php } else { ?>
	Check your email
<?php } ?>
            </div>
        </div>
</div>
