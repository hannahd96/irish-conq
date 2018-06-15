<head>
	<link rel="stylesheet" type="text/css" href="video/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">

	<style>
		body{
			background-color:#40bf40 !important;
		}
	
	</style>
	
</head>




<?php $__env->startSection('content'); ?>
<div class="container" style = "width:65%; margin-top:45px;">
    <div class="row" id = "transparent">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id = "panel-background" style = "border:none;">
                <div class="panel-heading" style = "position:relative; background: rgba(204, 204, 204, 0.0); border:none; font-family: Catamaran, sans-serif;">
					<h3>Create an Account</h3></div>
					
					<div class="panel-body" style = "color: #404040;">
					<p><b>Please enter the following details to create your account</b></p>
					<form class="form-horizontal" method="POST" name = "reg" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" >
								
                                <?php if($errors->has('username')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style = "border:none; background: #1E2328; width:100%;">
                                    Create an Account
                                </button>
                            </div>
                        </div>
						
						<div class="col-md-8 col-md-offset-4">
                                <a class="btn btn-link" href="<?php echo e(route('login')); ?>" style = "color:white;">
                                    <b>Already have an Account?</b>
                                </a>
                            </div>
						
                    </form>
					</div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>