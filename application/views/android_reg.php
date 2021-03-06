<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="<?php echo base_url('assets/img/favicons/brimo_logo.png') ?>" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/bootstrap.min.css') ?>">

    <title>BRImo</title>
  </head>
  <body>
		<div class="container flex-grow-1">
			<div class="text-center py-3">
				<img src="<?php echo $image ?>" class="img-fluid text-center">
			</div>
			<div class="text-center py-3">
				<h3 class="text-primary font-weight-bold">Selamat! Akun BRImo kamu sudah siap</h3>
				<p class="lead text-muted" style="margin-bottom: 0;">Silahkan masuk ke aplikasi BRImo, untuk mengaktifkan akunmu,dan nikmati kemudahan bertransaksi digital dengan BRImo</p>
			</div>
			<div class="text-center" style="padding-bottom:0;">
				<a class="btn btn-primary btn-lg btn-block" href="javascript:void(0)" onclick="location.href='intent://<?php echo $url ?>/tok/reg?code=<?php echo $param ?>#Intent;package=<?php echo $package ?>;scheme=<?php echo $scheme ?>;end'" role="button">Buka BRImo</a>
			</div>
		</div>
  </body>
</html>

