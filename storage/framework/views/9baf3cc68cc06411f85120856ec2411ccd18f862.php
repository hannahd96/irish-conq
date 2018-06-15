<head>
	<!-- link stylesheets -->
	<link rel="stylesheet" type="text/css" href="video/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
	<style>
		body {
			background-color:#40bf40 !important;
		}
	</style>
</head>



<?php $__env->startSection('content'); ?>

<div class="container" style = "width:70%; margin-top:45px;">
    <div class="row" id = "transparent">
        <div class="col-md-5">
            <div class="panel panel-default" id = "panel-background" style = "border:none; ">
				<div class="panel-heading" id = "panel-background" style="font-family: Catamaran, sans-serif;"><h3>Registered Players</h3> </div>									
                <div class="panel-body" style = "color: #404040;">
				<p><b>If you have an account, log in using your email address.</b> </p>
				<!-- posts to the login -->
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
								<!-- email field that remembers your email when you go away from the page -->
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" >

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label" style = "opacity:1.0;">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
									<!-- name is retrieved when user hits submit -->
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <b>Remember Me</b>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style = "border:none; background: #1E2328; width:73%;">
                                    Login
                                </button>
                            </div>
							<div class="col-md-8 col-md-offset-4">
	
							<br>
                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>" style = "color:white;">
                                   <b> Forgot Your Password?</b>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	<div class = "col-md-1">
		<!-- KEEP ME EMPTY -->
	</div>
	<div class = "col-md-6">
		<div class="panel panel-default" id = "panel-background" style = "border:none;">
            <div class="panel-heading" id = "panel-background" style = "border:none; decoration:none;font-family: Catamaran, sans-serif;"><h3>Don't have an account?</h3></div>
                <div class="panel-body"  style = "color:#404040;">
                   <b> By creating an account with us, you will be able to move through the login process faster, 
					keep track of your progress and more. </b>
                </div>
				<div>
					<div class = "col-md-3 col-sm-3 col-xs-6"><a href="<?php echo e(route('register')); ?>" class="btn btn-primary" style = "border:none; background: #1E2328; width:500%;">
						Create an Account</a>
					</div>
				</div>
		</div>
	</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>