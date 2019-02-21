<?php
	include "config/koneksi.php";

	if(isset($_POST['login'])) {
		$sql = "SELECT * FROM tbl_admin WHERE username ='$_POST[username]' and password ='$_POST[password]'";
		$query = mysqli_query($con, $sql);
		$cek = mysqli_num_rows($query);

	  if($cek > 0){
	  	echo "<script>alert('Welcome ahayy dedeh :D');document.location.href='siswa.php'</script>";
	  }else{
	  	echo "<script>alert('Your username or password is Wrongg!!');document.location.href='index.php'</script>";
	  }
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>FORM LOGIN</title>
</head>
<body bgcolor="black">
	<form method="post">
		<center><table>
			<tr>
				<td style="border: 5px solid red; border-right: 0px; background-color: rgb(50,50,50); color: white;">Username</td>
				<td></td>
				<td style="border: 5px solid blue; border-left: 0px solid blue">
					<input type="text" name="username" style="border: 5px solid purple ;background-color: gold; color: rgb(80,80,80);"></td>
			</tr>
			<tr>
				<td style="border: 5px solid red; border-right: 0px; background-color: rgb(50,50,50); color: white">Password</td>
				<td></td>
				<td style="border: 5px solid blue; border-left: 0px solid blue">
					<input type="password" name="password" style="border: 5px solid purple; background-color: gold; color: green"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="login" value="LOGIN" style="color: white; background-color: rgb(20,20,20);"></td>
			</tr>
		</table></center>
	</form>
</body>
</html>