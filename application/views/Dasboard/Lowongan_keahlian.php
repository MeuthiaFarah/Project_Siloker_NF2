<div class="container-fluid">
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Table V01</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="<?php echo base_url() ?>css3/images/icons/favicon.ico" />
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/vendor/perfect-scrollbar/perfect-scrollbar.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/css/util.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/css/main.css">
		<!--===============================================================================================-->
	</head>

	<body>

		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table100">
						<table>
							<thead>
								<tr class="table100-head">
									<th class="column2" style="text-align: center;">ID</th>
									<th class="column3" style="text-align: center;">Keahlian_ID</th>
									<th class="column4" style="text-align: center;">lowongan_keahlian_id</th>

								</tr>
							</thead>

							<!-- menampilkan data -->
							<?php foreach ($lowongan_keahlians as $lowongan_keahlian) : ?>
								<tr>
									<td style="text-align: center;"><?php echo $lowongan_keahlian->id ?> </td>
									<td style="text-align: center;"><?php echo $lowongan_keahlian->keahlian_id ?> </td>
									<td style="text-align: center;"><?php echo $lowongan_keahlian->lowongan_id ?> </td>
								</tr>
							<?php endforeach ?>
						</table>
					</div>
				</div>
			</div>
		</div>




		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>css3/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>css3/vendor/bootstrap/js/popper.js"></script>
		<script src="<?php echo base_url() ?>css3/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>css3/vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url() ?>css3/js/main.js"></script>

	</body>

	</html>
</div>
</div>