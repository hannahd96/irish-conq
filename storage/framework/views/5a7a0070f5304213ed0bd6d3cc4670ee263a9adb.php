<head>
	<!-- links the stylesheets -->
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
    <div class="row" id = "transparent" style = "border:none;" >
        <div class = ".col-md-8 .col-md-offset-2">
            <div class="panel panel-default" id = "panel-background" style = "border:none;">
                <div class="panel-heading" id = "panel-background" style = "position:relative; background: rgba(204, 204, 204, 0.0); border:none;">
					<h3 style = "font-family:Catamaran, sans-serif;">Personal Information</h3>
				</div>
				
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
					<div class = "col-sm-3">
						<img src = "video/profile_pic.jpg" alt = "logo" width = "140px" height = "140px" style = "margin-bottom:30px;
						margin-left:30px; margin-top:15px;">	
						
						
					</div>
					
					<!-- loads user's stats -->	
					<div class = "col-md-8">
						<table class = "stats-table" style = "width:75%; margin-top:15px;">
							<tr>
								<th style= "font-family: Catamaran, sans-serif;"><b>Username</b></th>
								<th style= "font-family: Catamaran, sans-serif;"><b>Email</b></th>
								<th style= "font-family: Catamaran, sans-serif;"><b>Coins</b> <img src = "video/coins.png" alt = "coins" width = "14px" height = "16px"></th>
							</tr>
							<tr>
								<td><?php echo e(Auth::user()->username); ?></td>
								<td> <?php echo e(Auth::user()->email); ?></td>
								<td> <?php echo e(Auth::user()->coins); ?> </td>
							</tr>
							
						</table>
						
						<hr>
						<h5 style= "font-family: Catamaran, sans-serif; font-size:medium;"><b>Experience</b></h5>
							<div class="progress">
								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>
					</div>
            </div>
        </div>
     </div>
	<div class = "col-sm-3">
			<!-- KEEP ME EMPTY! -->
	</div>
	<div class= "col-sm-6">
		<div class = "row" style = "margin-top:5px;">
			<div class="title m-b-md">
				<a href="#" class="btn btn-sm animated-button victoria-three" style = "margin-left:120px; font-size:30px;">Play Now</a>
			</div>	
		</div>
	</div>
	<div class = "col-sm-3">
	</div>
</div>
	<?php
		//$pathToImage = "/new/file/path/unique/345908.png";
		//move_uploaded_files($_FILES['file']['tmp_name'], $pathToImage);
	?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>