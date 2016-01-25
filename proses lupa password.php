<?php
 include("koneksi/koneksi.php");
 $email=$_POST["user_email"];
 $query="update pegawai set password=md5('broto1234') where email='$email'";
 $sql=mysql_query($query);
 if(!empty($email)){

      if($row=mysql_fetch_array($sql)){
         $subject='Pemberitahuan Perubahan Password Resto Broto';
         $content='Selamat Pagi. Kepada saudara diberitahukan bahwa password anda kami reset. berikut adalah adalah password : broto1234';
         mail($email,$subject,$Content);
         ?><script>alert('Reset Password Berhasil. Cek email');</script><?php
         echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
      }else{
    		?><script>alert('reset password gagal');history.go(-1);</script><?php
    	}
  }else{
      ?><script>alert('Email Kosong');history.go(-1);</script><?php
  }
?>
