<?php
 include("koneksi/koneksi.php");
 $email=$_POST["user_email"];
 $pass=md5($_POST["user_password"]);
 $query="select p.*,j.nama_jabatan from pegawai p join jabatan j on p.id_jabatan=j.id_jabatan where email='$email' and password='$pass' ";
 $sql=mysql_query($query);
 if($row=mysql_fetch_array($sql)){
	session_start();
	$_SESSION['id_pegawai']=$row['id_pegawai'];
	$_SESSION['nama_pegawai']=$row['nama_pegawai'];
	$_SESSION['nama_jabatan']=$row['nama_jabatan'];
	$_SESSION['foto']=$row['foto'];
	$_SESSION['idjabatan']=$row['id_jabatan'];
	
	
	if($row["id_jabatan"]=="J1"){	
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user/admin/index.php">';
	}else if($row["id_jabatan"]=="J2"){
		 	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user/customer service/index.php">';		 
	}else if($row["id_jabatan"]=="J3"){
		    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user/kasir/index.php">';
	}else if($row["id_jabatan"]=="J4"){
		    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user/pantry/index.php">';
	}else if($row["id_jabatan"]=="J1"){
		 	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user/pelayan/index.php">';		 
	}  
 }else{
		?><script>alert('Username atau password gagal');</script><?php			
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';	
	}
?>