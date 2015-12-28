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
								<h3>Edit User</h3>
							</div>
							<div class="module-body">
									<form class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Username</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="username"disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
												<input type="password" id="basicinput" class="span8" name="password">
											</div>
											<br><br>
										<div class="module-head">
											<h3>Data Diri</h3>
										</div>
										<br>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Lengkap</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="nama">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Gelar Depan</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="gelar_depan">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Gelar Belakang</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="gelar_belakang">
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">Kewarganegaraan</label>
											<div class="controls">
												<select tabindex="1" class="span8" name="kewarganegaraan">
													<option value="">Pilih Disini...</option>
													<option value="1">Indonesia</option>
													<option value="2">Lainnya</option>
												</select>
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">Jenis Kelamin</label>
											<div class="controls">
												<select tabindex="1" class="span8" name="jenis_kelamin">
													<option value="">Pilih Disini...</option>
													<option value="1">Laki-laki</option>
													<option value="2">Perempuan</option>
												</select>
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">Agama</label>
											<div class="controls">
												<select tabindex="1" class="span8" name="agama">
													<option value="">Pilih Disini...</option>
													<option value="1">Islam</option>
													<option value="2">Kristen</option>
													<option value="3">Katholik</option>
													<option value="4">Hindu</option>
													<option value="5">Budha</option>
													<option value="6">Konghucu</option>
													<option value="7">Lainnya</option>
												</select>
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">Tempat Lahir</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="tempat_lahir">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal Lahir</label>
											<div class="controls">
												<input type="date" id="basicinput" class="span8" name="tanggal_lahir">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Pas foto</label>
											<div class="controls">
												<a class="btn btn-large btn-standard">Pilih File</a>
												<span class="help-inline">berbentuk .jpeg maksimal 500Kb</span>
											</div>
										</div>
										<br><br>
										<div class="module-head">
											<h3>Kontak</h3>
										</div>
										<br>
										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="alamat">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Kabupaten/Kota</label>
											<div class="controls">
												<select tabindex="1" class="span8" name="kabupatenKota">
													<option value="">Pilih Disini...</option>
													<option value="1">Kab. Simeulue</option>
													<option value="2">Kab. Aceh Singkil</option>
													<option value="3">Kab. Aceh Selatan</option>
													<option value="4">Kab. Aceh Tenggara</option>
													<option value="5">Kab. Aceh Timur</option>
													<option value="6">Kab. Aceh Tengah</option>
													<option value="7">Kab. Aceh Barat</option>
													<option value="8">Kab. Aceh Besar</option>
													<option value="9">Kab. Pidie</option>
													<option value="10">Kab. Bireuen</option>
													<option value="11">Kab. Aceh Utara</option>
													<option value="12">Kab. Aceh Barat Daya</option>
													<option value="13">Kab. Gayo Lues</option>
													<option value="14">Kab. Aceh Tamiang</option>
													<option value="15">Kab. Nagan Raya</option>
													<option value="16">Kab. Aceh Jaya</option>
													<option value="17">Kab. Bener Meriah</option>
													<option value="18">Kab. Pidie Jaya</option>
													<option value="19">Kota Banda Aceh</option>
													<option value="20">Kota Sabang</option>
													<option value="21">Kota Langsa</option>
													<option value="22">Kota Lhokseumawe</option>
													<option value="23">Kota Subulussalam</option>
													<option value="24">Kab. Nias</option>
													<option value="25">Kab. Mandailing Natal</option>
													<option value="26">Kab. Tapanuli Selatan</option>
													<option value="27">Kab. Tapanuli Tengah</option>
													<option value="28">Kab. Tapanuli Utara</option>
													<option value="29">Kab. Toba Samosir</option>
													<option value="30">Kab. Labuhan Batu</option>
													<option value="31">Kab. Asahan</option>
													<option value="32">Kab. Simalungun</option>
													<option value="33">Kab. Dairi</option>
													<option value="34">Kab. Karo</option>
													<option value="35">Kab. Deli Serdang</option>
													<option value="36">Kab. Langkat</option>
													<option value="37">Kab. Nias Selatan</option>
													<option value="38">Kab. Humbang Hasundutan</option>
													<option value="39">Kab. Pakpak Bharat</option>
													<option value="40">Kab. Samosir</option>
													<option value="41">Kab. Serdang Bedagai</option>
													<option value="42">Kab. Batu Bara</option>
													<option value="43">Kab. Padang Lawas Utara</option>
													<option value="44">Kab. Padang Lawas</option>
													<option value="45">Kab. Labuhan Batu Selatan</option>
													<option value="46">Kab. Labuhan Batu Utara</option>
													<option value="47">Kab. Nias Utara</option>
													<option value="48">Kab. Nias Barat</option>
													<option value="49">Kota Sibolga</option>
													<option value="50">Kota Tanjung Balai</option>
													<option value="51">Kota Pematang Siantar</option>
													<option value="52">Kota Tebing Tinggi</option>
													<option value="53">Kota Medan</option>
													<option value="54">Kota Binjai</option>
													<option value="55">Kota Padangsidimpuan</option>
													<option value="56">Kota Gunungsitoli</option>
													<option value="57">Kab. Kepulauan Mentawai</option>
													<option value="58">Kab. Pesisir Selatan</option>
													<option value="59">Kab. Solok</option>
													<option value="60">Kab. Sijunjung</option>
													<option value="61">Kab. Tanah Datar</option>
													<option value="62">Kab. Padang Pariaman</option>
													<option value="63">Kab. Agam</option>
													<option value="64">Kab. Lima Puluh Kota</option>
													<option value="65">Kab. Pasaman</option>
													<option value="66">Kab. Solok Selatan</option>
													<option value="67">Kab. Dharmasraya</option>
													<option value="68">Kab. Pasaman Barat</option>
													<option value="69">Kota Padang</option>
													<option value="70">Kota Padang Panjang</option>
													<option value="71">Kota Bukittinggi</option>
													<option value="72">Kota Payakumbuh</option>
													<option value="73">Kota Pariaman</option>
													<option value="74">Kab. Kuantan Singingi</option>
													<option value="75">Kab. Indragiri Hulu</option>
													<option value="76">Kab. Indragiri Hilir</option>
													<option value="77">Kab. Pelalawan</option>
													<option value="78">Kab. S I A K</option>
													<option value="79">Kab. Kampar</option>
													<option value="80">Kab. Rokan Hulu</option>
													<option value="81">Kab. Bengkalis</option>
													<option value="82">Kab. Rokan Hilir</option>
													<option value="83">Kab. Kepulauan Meranti</option>
													<option value="84">Kota Pekanbaru</option>
													<option value="85">Kota D U M A I</option>
													<option value="86">Kab. Kerinci</option>
													<option value="87">Kab. Merangin</option>
													<option value="88">Kab. Sarolangun</option>
													<option value="89">Kab. Batang Hari</option>
													<option value="90">Kab. Muaro Jambi</option>
													<option value="91">Kab. Tanjung Jabung Timur</option>
													<option value="92">Kab. Tanjung Jabung Barat</option>
													<option value="93">Kab. Tebo</option>
													<option value="94">Kab. Bungo</option>
													<option value="95">Kota Jambi</option>
													<option value="96">Kota Sungai Penuh</option>
													<option value="97">Kab. Ogan Komering Ulu</option>
													<option value="98">Kab. Ogan Komering Ilir</option>
													<option value="99">Kab. Muara Enim</option>
												</select>
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">Provinsi</label>
											<div class="controls">
												<select tabindex="1" class="span8" name="provinsi">
													<option value="">Pilih Disini...</option>
													<option value="1">Aceh</option>
													<option value="2">Sumatera Utara</option>
													<option value="3">Sumatera Barat</option>
													<option value="4">Riau</option>
													<option value="5">Jambi</option>
													<option value="6">Sumatera Selatan</option>
													<option value="7">Bengkulu</option>
													<option value="8">Lampung</option>
													<option value="9">Kepulauan Bangka Belitung</option>
													<option value="10">Kepulauan Riau</option>
													<option value="11">DKI Jakarta</option>
													<option value="12">Jawa Barat</option>
													<option value="13">Jawa Tengah</option>
													<option value="14">DI Yogyakarta</option>
													<option value="15">Jawa Timur</option>
													<option value="16">Banten</option>
													<option value="17">Bali</option>
													<option value="18">Nusa Tenggara Barat</option>
													<option value="19">Nusa Tenggara Timur</option>
													<option value="20">Kalimantan Barat</option>
													<option value="21">Kalimantan Tengah</option>
													<option value="22">Kalimantan Selatan</option>
													<option value="23">Kalimantan Timur</option>
													<option value="24">Kalimantan Utara</option>
													<option value="25">Sulawesi Utara</option>
													<option value="26">Sulawesi Tengah</option>
													<option value="27">Sulawesi Selatan</option>
													<option value="28">Sulawesi Tenggara</option>
													<option value="29">Gorontalo</option>
													<option value="30">Sulawesi Barat</option>
													<option value="31">Maluku</option>
													<option value="32">Maluku Utara</option>
													<option value="33">Papua Barat</option>
													<option value="34">Papua</option>
												</select>
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">Telepon</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="telepon"/>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">HP</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="hp"/>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="email"/>
											</div>
										</div>
										<br><br>
										<div class="module-head">
											<h3>Data Perusahaan</h3>
										</div>
										<br>
										<div class="control-group">
											<label class="control-label" for="basicinput">NIP</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="nip" disabled />
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Divisi</label>
											<div class="controls">
												<select tabindex="1" class="span8" name="divisi">
													<option value="1">Audit</option>
													<option value="2">IT</option>
													<option value="3">Accounting</option>
													<option value="4">HRD</option>
													<option value="5">Internal Storage</option>
													<option value="6">Planning</option>  
													<option value="7">Super Vision</option>
													<option value="8">Marketing</option>
												</select>
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">Jabatan</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="jabatan"/>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal Masuk Perusahaan</label>
											<div class="controls">
												<input type="date" id="basicinput" class="span8" name="tanggal_masuk" disabled />
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Jenjang Pendidikan Akhir</label>
											<div class="controls">
												<select tabindex="1" class="span8" name="jenjang_pendidikan">
													<option value="1">SD</option>
													<option value="2">SMP</option>
													<option value="3">SMA</option>	
													<option value="4">Diploma</option>
													<option value="5">S1</option>
													<option value="6">S2</option>
													<option value="7">S3</option>
												</select>
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">Program Studi</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="prodi"/>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Status Karyawan</label>
											<div class="controls">
												<input type="text" id="basicinput" class="span8" name="status_karyawan"/>
											</div>
										</div>
										<div class="control-group">
											<a class="btn btn-large btn-standard">Simpan</a>
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