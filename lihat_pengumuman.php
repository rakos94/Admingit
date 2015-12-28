<?php
// Post tambah data user
if (isset($_POST['user'])) {
    $username = filter_input(INPUT_POST, "username");
    $password = enc_pass(filter_input(INPUT_POST, "password"));
    $nama_lengkap = filter_input(INPUT_POST, "nama_lengkap");
    $telepon = filter_input(INPUT_POST, "telepon");
    $email = filter_input(INPUT_POST, "email");
    $status = filter_input(INPUT_POST, "status");
    $flagLengkap = 0;
    $aktifkan = 1;
    $stmnt = $dbh->prepare("SELECT username FROM `tw_user` where username = '" . $username . "'");
    $stmnt->execute();
    $row = $stmnt->rowCount();
    if ($row != 1) {
        $query = "INSERT INTO `tw_user` (username, password, nama_lengkap, telp, email, mode, aktif, flaglengkap)
           VALUES('" . $username . "', '" . $password . "', '" . $nama_lengkap . "','" . $telepon . "','" . $email . "','" . $status . "','" . $aktifkan . "','" . $flagLengkap . "')";
        $stmnt = $dbh->prepare($query);
        $stmnt->execute();
        if ($stmnt) {
            echo "<script>alert('Berhasil Menambah User')</script>";
        } else {
            echo "<script>alert('Gagal Menambahkan user')</script>";
        }
    } else {
        echo '<script>alert("Username sudah digunakan")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIGK PT.SUKA MAJU</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<link href="images/logo_small.png" rel="shortcut icon"/>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Sistem Informasi Gaji Karyawan PT. SUKA MAJU
			  	</a>
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="nav-header">User</li>
								<li><a href="#">Daftar User</a></li>
								<li><a href="tambah_user.php">Tambah User</a></li>
								<li class="divider"></li>
								<li class="nav-header">Pengumuman</li>
								<li><a href="#">Daftar Pengumuman</a></li>
								<li><a href="#">Tambah Pengumuman</a></li>
								<li class="nav-header">Seputar Gaji</li>
								<li><a href="#">Input Gaji Karyawan</a></li>
								<li><a href="#">Review Gaji Karyawan</a></li>
								<li><a href="#"><strong>Keluar</strong></a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Detail Pengumuman</h3>
							</div>
							<div class="module-body">
									<form class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Judul</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="judul"disabled >
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Isi Pengumuman</label>
											<div class="controls">
												<textarea class="span8" rows="12"name="isi" disabled ></textarea>
											</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal Posting</label>
											<div class="controls">
												<input type="date" id="basicinput" class="span8" name="tanggal_posting" disabled >
											</div>
											<br><br>
										<div class="control-group">
											<a class="btn btn-large btn-standard">Edit</a>
										</div>
						</div>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			<b class="copyright">Copyright&copy; 2015 PT. SUKA MAJU </b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>