<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<style>
:root {
	--input-padding-x: 1.5rem;
	--input-padding-y: .75rem;
}

body {
	background: #007bff;
	background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-signin {
	border: 0;
	border-radius: 1rem;
	box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
	margin-bottom: 2rem;
	font-weight: 300;
	font-size: 1.5rem;
}

.card-signin .card-body {
	padding: 2rem;
}

.form-signin {
	width: 100%;
}

.form-signin .btn {
	font-size: 80%;
	border-radius: 5rem;
	letter-spacing: .1rem;
	font-weight: bold;
	padding: 1rem;
	transition: all 0.2s;
}

.form-label-group {
	position: relative;
	margin-bottom: 1rem;
}

.form-label-group input {
	height: auto;
	border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
	padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
	position: absolute;
	top: 0;
	left: 0;
	display: block;
	width: 100%;
	margin-bottom: 0;
	/* Override default `<label>` margin */
		line-height: 1.5;
		color: #495057;
		border: 1px solid transparent;
		border-radius: .25rem;
		transition: all .1s ease-in-out;
	}

	.form-label-group input::-webkit-input-placeholder {
		color: transparent;
	}

	.form-label-group input:-ms-input-placeholder {
		color: transparent;
	}

	.form-label-group input::-ms-input-placeholder {
		color: transparent;
	}

	.form-label-group input::-moz-placeholder {
		color: transparent;
	}

	.form-label-group input::placeholder {
		color: transparent;
	}

	.form-label-group input:not(:placeholder-shown) {
		padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
		padding-bottom: calc(var(--input-padding-y) / 3);
	}

	.form-label-group input:not(:placeholder-shown)~label {
		padding-top: calc(var(--input-padding-y) / 3);
		padding-bottom: calc(var(--input-padding-y) / 3);
		font-size: 12px;
		color: #777;
	}

	.btn-google {
		color: white;
		background-color: #ea4335;
	}

	.btn-facebook {
		color: white;
		background-color: #3b5998;
	}

	/* Fallback for Edge
	-------------------------------------------------- */

	@supports (-ms-ime-align: auto) {
		.form-label-group>label {
			display: none;
		}
		.form-label-group input::-ms-input-placeholder {
			color: #777;
		}
	}

	/* Fallback for IE
	-------------------------------------------------- */

	@media all and (-ms-high-contrast: none),
	(-ms-high-contrast: active) {
		.form-label-group>label {
			display: none;
		}
		.form-label-group input:-ms-input-placeholder {
			color: #777;
		}
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body">
					<h5 class="card-title text-center">Input Data</h5>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-label-group">
							<input name="data1" id="data1" type="text" class="form-control"  required autofocus>
							<label for="data1">Data Text</label>
						</div>
						<div class="form-label-group">
							<input name="data2" id="data2" type="number" class="form-control"  required autofocus>
							<label for="data2">Data Angka</label>
						</div>
						<div class="form-label-group">
							<input name="data3" id="data3" type="textarea" rows="10" class="form-control"  required autofocus>
							<label for="data3">Data Text Panjang</label>
						</div>
						<div class="form-label-group">
							<input type="file" id="foto" name="foto" required autofocus>
							<label for="foto">Data Gambar</label>
						</div>
						<div class="form-label-group">
							<input type="file" name="video" required autofocus>
							<label for="video">Data Video</label>
						</div>
						<div class="form-label-group">
							<input type="file" name="suara" required autofocus>
							<label for="suara">Data Suara</label>
						</div>
						<br>
						<div class="form-label-group">
							<td>Jenis Kelamin</td>
							<br>
							<td><input type="radio" name="jeniskel" required autofocus value="Pria"/>Pria</td>
							<td><input type="radio" name="jeniskel" required autofocus value="Wanita"/>Wanita</td>
						</div>
						<br>
						<div class="form-label-group">
							<tr><td>Jurusan</td><td>
								<select name="jurusan" required autofocus>
									<option value="Teknik Informatika">Teknik Informatika</option>
									<option value="Sistem Informasi">Sistem Informasi</option>
									<option value="Teknik Komputer">Teknik Komputer</option>
									<option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
									<option value="Manajemen Informasi">Manajemen Informasi</option>
								</select>
							</td></tr>
						</div>
						<br>
						<input class="btn btn-lg btn-primary btn-block text-uppercase" value="Simpan Data" type="submit" href="#" name="save"></a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
if (isset($_POST['data1'])){
	$fileName = $_FILES["foto"]["name"];
	$fileType = $_FILES["foto"]["type"];
	$fileSize = $_FILES["foto"]["size"];

	$videoName = $_FILES["video"]["name"];
	$videoType = $_FILES["video"]["type"];
	$videoSize = $_FILES["video"]["size"];

	$suaraName = $_FILES["suara"]["name"];
	$suaraType = $_FILES["suara"]["type"];
	$suaraSize = $_FILES["suara"]["size"];

	if(($fileType == "image/jpeg" || $fileType == "image/png" || $fileSize <= 1000000)
	&& ($videoType == "mp4/mpeg" || $videoType == "3gp/mkv" || $videoSize <= 10000000000)
	&& ($suaraType == "mp3/m4a" || $videoType == "wav/aac" || $suaraSize <= 1000000)){

		$sql = "INSERT INTO data (data1, data2, data3, foto, video, suara, jeniskel, jurusan)
		values ('$data1', '$data2', '$data3', '$fileName', '$videoName', '$suaraName', '$jeniskel', '$jurusan')";
		mysqli_query($h, $sql);

		move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES["foto"]["name"]);
		move_uploaded_file($_FILES['video']['tmp_name'], "video/".$_FILES["video"]["name"]);
		move_uploaded_file($_FILES['suara']['tmp_name'], "suara/".$_FILES["suara"]["name"]);
		echo"<script>alert('data Berhasil diupload !');
			window.location='index.php'</script>";
		}
		else{
			echo "Maaf, Data yang anda masukkan tidak sesuai.";
			echo "<br><a href='index.php'>Kembali Ke Form</a>";
		}
	}
	?>
