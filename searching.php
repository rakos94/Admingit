<?php
	require_once 'koneksi.php';
	$word=$_POST['wordsearch'];
	$sql="SELECT * FROM `karyawan` WHERE NIP like '%$word%'";
	$stmnt = $dbh->prepare($sql);
    $stmnt->execute();
	if ($stmnt->rowCount() == 0) {
            
    } else {
		while ($row = $stmnt->fetch()){
		$nip=$row['NIP'];
		$password=$row['Password'];
		echo "<p>Username = $nip <br>";
		echo "Password = $password <br></p>";
		}
	}
	/*while($row=mysql_fetch_array($result)){ 
		$nip=$row['NIP'];
		$password=$password['password'];
		echo "Username = $nip \n";
		echo "Password = $password";
	}*/
?>