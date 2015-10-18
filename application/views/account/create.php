<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
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
            <h1 class="page-header">Musy.me add Admin</h1>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo __('Create an account'); ?></h3>
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
                                <?php echo Form::submit(NULL, 'Create', array('class'=>'btn btn-lg btn-success btn-block', 'type'=>'submit')); ?>
                            </fieldset>
                        <?php echo Form::close(); ?>
                    </div>
                </div>
        </div>
    </div>
</div>







<script>
var keyinterval;
var available = 0;

function checkavailability() {
	clearInterval(keyinterval);
	$("#status").html('<img align="absmiddle" src="<?php echo URL::base(); ?>assets/images/account/loader.gif" /> Checking availability...');
	$.ajax({
		type: "POST",
		url: "checkusername",
		data: "username=" + $("#username").val(),
		cache: false,
		async: true,
		dataType: "json",
		success: function(resultArray, textStatus, XMLHttpRequest)
		{
			if(resultArray['available']) {
				available = 1;
				$("#status").show();
				$("#status").html('<img align="absmiddle" src="<?php echo URL::base(); ?>assets/images/account/accepted.png" /> Available!');
			} else {
				available = 0;
				$("#status").show();
				$("#status").html('<img align="absmiddle" src="<?php echo URL::base(); ?>assets/images/account/notaccepted.png" /> Not available...');
			}
		},
		error: function(request, textStatus, errorThrown)
		{
			alert('error');
		}
	});
}

$(document).ready(function () {

	// focus email
	$("#focus").focus();

	// validation
	$('#username').alphanumeric();
	
	// disable submit on submit
	$('form').submit(function(){
	    $('input[type=submit]', this).attr('disabled', 'disabled');
	});
	
	// check user availability
	$('#username').keyup(function() {
		var usr = $("#username").val();
		var pwd = $("#password").val();

		if(usr.length >= 1 && usr == pwd) {
			clearInterval(keyinterval);
			$("#status").show();
			$("#status").html('<img align="absmiddle" src="<?php echo URL::base(); ?>assets/images/account/notaccepted.png" /> Username cannot be the same as password');
		} else {
			if(usr.length >= 3) {
					clearInterval(keyinterval);
					keyinterval = setInterval( "checkavailability()", 1000);
			} else {
				$("#status").hide();
			}
		}
	});

	$("#username").change(function() {
		var usr = $("#username").val();
		if(usr.length < 3) {
			$("#status").show();
			$("#status").html('The username should have at least 3 characters.');
		} else if(available) {
			$("#status").hide();
		}
	});


	$('#password').keyup(function() {
		var usr = $("#username").val();
		var pwd = $("#password").val();

		if(usr == pwd) {
			$("#status").show();
			$(".password_strength").html('<img align="absmiddle" src="<?php echo URL::base(); ?>assets/images/account/notaccepted.png" /> Password cannot be the same as username');
		}
	});
	
	$('#password').password_strength({'texts' : {
		1 : 'Too weak',
		2 : 'Weak password',
		3 : 'Normal strength',
		4 : 'Strong password',
		5 : 'Very strong password'
		},
	});
	
});
</script>