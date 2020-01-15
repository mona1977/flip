<html>
	<head>
		<title>details</title>
		<link rel="stylesheet" href="./assets/css/bootstrap.css" />
		<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>LOG DISTRIBUTOR</h3><a  href="/testflip/?">Back to form DISTRIBUTOR </a> | <a href="./index.php/?flip=tampil-data">Show list DISTRIBUTOR</a><br><br>
					<?php 

						echo 'id_disburs:' . $rs['id_disburs'] . '<br/>';
						echo 'time_served:' . $rs['time_served'] . '<br/>';
						echo 'receipt:' . $rs['receipt'] . '<br/>';
						echo 'status_disburs:' . $rs['status_disburs'] . '<br/>';
						echo 'api:' . $rs['api'] . '<br/>';
						echo 'created_at:' . $rs['created_at'] . '<br/>';
						echo 'updated_at:' . $rs['updated_at'] . '<br/>';
						echo 'request:' . $rs['request'] . '<br/>';
						echo 'response:' . $rs['response'] . '<br/>';
					


					?>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>

<html>
<head></head>

<body>



</body>
</html>