<head>
	<!-- linking our stylesheets -->
	<link rel="stylesheet" type="text/css" href="video/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
	<style>
		body{
			background-color:#40bf40 !important;
		}
		<!-- Styling the leaderboard -->
		#leaderboard_table_style th{
			padding:10px;
			color:black !important;
		}
		#leaderboard_table_style td{
			padding:10px;
			color:black !important;
		}
		#leaderboard_table_style {
			margin:50px !important;
		}
	</style>
</head>



<?php $__env->startSection('content'); ?>

<div class="container" style = "width:50%; margin-top:45px;">
    <div class="row" id = "transparent" style = "border:none;">
        <div class = ".col-md-8 .col-md-offset-2" style ="">
            <div class="panel panel-default" id = "panel-background" style = "border:none;">
                <div class="panel-heading" id = "panel-background" style = "position:relative; background: rgba(204, 204, 204, 0.0); border:none;">
					<h3 style = "font-family:Catamaran, sans-serif;">Leaderboard</h3>
				</div>
				    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
					
					<div class = "col-sm-12">
					<!-- LEADERBAORD TABLE -->
						<table border="2" width="600" id="leaderboard_table_style">
							<tr>
								<th>No.</th>
								<th>Username</th>
								<th>Score</th>
							</tr>
							<?php
							// details to connect to the server
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "irish_conqueror";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							// connect_error will return false if there is a successful connection
							// if connect_error returns true then stop trying to connect & output message
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							} 
							// selects username and score from DB, ordered by highest to lowest
							$sql = "SELECT username, experience FROM users ORDER BY experience DESC";
							
							$result = $conn->query($sql);
							// if there are any rows being returned, then..
							if ($result->num_rows > 0) {
								// output data of each row
								// fetch_assoc = fetch associative, meaning it converts result to an associative array
								$i = 0;
								while($row = $result->fetch_assoc()) {
									$i++;
									echo "<tr>".
										"<td>". $i. "</td>".
										"<td>". $row["username"]. "</td>".
										"<td>". $row["experience"]. "</td></tr>";
									
								}
							} else {
								// if there are no rows in the table, then..
								echo "0 results";
							}
							// close connection
							$conn->close();
							?> 
						</table>
					</div>	
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>