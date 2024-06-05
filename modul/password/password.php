<title>Ubah Password - T-corn</title>
<?php
if ($_SESSION['username'] != "" && $_SESSION['password'] != "") {
	switch ($_GET['act']) {
		default:
			echo "<div class='row'>
					<div class='col-md-6 col-md-offset-3'>
						<div class='box box-success'>
							<div class='box-header with-border'>
								<h3 class='box-title'>Ubah Password🔑</h3>
							</div>
							<form method='post' action='?module=password&act=updatepassword' class='form-horizontal'>
								<div class='box-body'>
									<div class='form-group'>
										<label for='oldPass' class='col-sm-3 control-label'>Password Lama</label>
										<div class='col-sm-9'>
											<input class='form-control' autocomplete='off' placeholder='Masukkan password lama...' type='password' name='oldPass' />
										</div>
									</div>
									<div class='form-group'>
										<label for='newPass1' class='col-sm-3 control-label'>Password Baru</label>
										<div class='col-sm-9'>
											<input class='form-control' autocomplete='off' placeholder='Masukkan password baru...' type='password' name='newPass1' />
										</div>
									</div>
									<div class='form-group'>
										<label for='newPass2' class='col-sm-3 control-label'>Konfirmasi Password Baru</label>
										<div class='col-sm-9'>
											<input class='form-control' autocomplete='off' placeholder='Masukkan kembali password baru...' type='password' name='newPass2' />
										</div>
									</div>
								</div>
								<div class='box-footer'>
									<div class='form-group'>
										<div class='col-sm-offset-3 col-sm-9'>
											<input class='btn btn-success' type='submit' name='submit' title='Simpan' alt='Simpan' value='Simpan' />
											<input type='hidden' name='pass' value='" . $_SESSION['password'] . "'>
											<input type='hidden' name='nama' value='" . $_SESSION['username'] . "'>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>";
			break;

		case "updatepassword":
			include "config/koneksi.php";
			$user = $_POST['nama'];
			$passwordlama = $_POST['oldPass'];
			$passwordbaru1 = $_POST['newPass1'];
			$passwordbaru2 = $_POST['newPass2'];
			$query = "SELECT * FROM admin WHERE username = '$user'";
			$hasil = mysqli_query($conn, $query);
			$data = mysqli_fetch_array($hasil);

			if ($data['password'] == md5($passwordlama)) {
				if ($passwordbaru1 == $passwordbaru2) {
					$passwordbaruenkrip = md5($passwordbaru1);
					$query = "UPDATE admin SET password = '$passwordbaruenkrip' WHERE username = '$user' ";
					$hasil = mysqli_query($conn, $query);

					if ($hasil)
						echo "<div class='callout callout-success'><h4>Password berhasil diubah</h4></div>";
				} else
					echo "<div class='callout callout-danger'><h4>Password baru Anda tidak sama</h4></div>";
			} else
				echo "<div class='callout callout-danger'><h4>Password lama Anda salah</h4></div>";
			break;
	}
} else {
	echo "<div class='callout callout-danger'><h2>Akses Ditolak</h2><p>Anda harus login untuk dapat mengakses menu ini!</p></div>
			<input type=button value='   Klik Disini   ' onclick=location.href='./'><br><br><br><br>";
}
?>