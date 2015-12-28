<!DOCTYPE html>
<html lang="en">

<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIGK PT.SUKA MAJU</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<link type="text/css" href="images/logo_small.png" rel="stylesheet">
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
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
				<div class="span9">
					<div class="content">

						<div class="module message">
							<div class="module-head">
								<h3>Daftar Pengumuman</h3>
							</div>
							</div>
							<div class="module-body table">
                                    <table class="table table-message">
                                        <tbody>
                                            <tr class="heading">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox" disabled >
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Judul
                                                </td>
                                                <td class="cell-title">
                                                    Tanggal Posting
                                                </td>
                                                <td class="cell-title">
                                                    Detail
                                                </td>
												<td class="cell-title">
                                                    Hapus
                                                </td>
                                            </tr>
                                            <tr class="task">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Pengumuman 1
                                                </td>
                                                <td class="cell-title">
                                                    1 November 2015
                                                </td>
                                                <td class="cell-title">
                                                    <a href="edit_user.php" class="btn btn-small btn-primary">Detail</a>
                                                </td>
												<td class="cell-title">
                                                    <a class="btn btn-small btn-primary">Hapus</a>
                                                </td>
                                            </tr>
											<tr class="task">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Pengumuman 2
                                                </td>
                                                <td class="cell-title">
                                                    1 November 2015
                                                </td>
                                                <td class="cell-title">
                                                    <a href="edit_user.php" class="btn btn-small btn-primary">Detail</a>
                                                </td>
												<td class="cell-title">
                                                    <a class="btn btn-small btn-primary">Hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
								<br><br>
							<div class="control-group">
								<a class="btn btn-large btn-primary">Hapus Semua</a>
							</div>
							<div class="module-foot">
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
	<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.table-message tbody tr').click(
				function() 
				{
					$(this).toggleClass('resolved');
				}
			);
		} );
	</script>
</body>