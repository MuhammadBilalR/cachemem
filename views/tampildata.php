<?php
$jumlah = mysqli_query($h,"SELECT * FROM data ORDER BY id ASC");
$banyak_data = floor($jumlah/5)+1;
?>

<div class="dashboard-ecommerce" style="
min-height: 565px;">
<div class="container-fluid dashboard-content ">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="page-header">
				<div class="page-breadcrumb">
					<nav aria-label="breadcrumb">
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="ecommerce-widget">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card">
					<h5 class="card-header">Data yang sudah ditambahkan</h5>
					<div class="card-body p-0">
						<div class="table-responsive">
							<table class="table">
								<thead class="bg-light">
									<tr class="border-0">
										<th class="border-0 centerHorizontal" style="width:20px">No</th>
										<th class="border-0">Data 1</th>
										<th class="border-0">Data 2</th>
										<th class="border-0">Data 3</th>
										<th class="border-0">Foto</th>
										<th class="border-0">Video</th>
										<th class="border-0">Suara</th>
										<th class="border-0">Jenis Kelamin</th>
										<th class="border-0">Jurusan</th>
									</tr>
								</thead>
								<?php if(mysqli_num_rows($jumlah)>0){ ?>
									<?php
									$no = 1;
									while($data = mysqli_fetch_array($jumlah)){
										?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $data["data1"];?></td>
											<td><?php echo $data["data2"];?></td>
											<td><?php echo $data["data3"];?></td>
											<td><?php echo "<img src='foto/".$data["foto"]."' width='100' height='100'>" ?></td>
											<td><?php echo "<video src='video/".$data["video"]."' controls width='100' height='100'>" ?></td>
												<td><?php echo "<audio src='suara/".$data["suara"]."'controls>" ?></td>
													<td><?php echo $data["jeniskel"];?></td>
													<td><?php echo $data["jurusan"];?></td>
													<td>
														<a href="#" onclick="hapusdata('index.php?page=tampildata&delete=<?php echo $row['id']; ?>')">
	                            <i class="fas fa-trash"></i>
	                          </a>
													</td>
												</tr>
												<?php $no++; } ?>
											<?php } ?>
										</table>
									</div>
									<div class="col-md-12">
										<nav aria-label="Page navigation">
											<ul class="pagination">
												<?php
												if($banyak_data>1){
													for($i=1;$i<=$banyak_data;$i++){
														if(isset($active_list)){
															if($active_list==$i){
																echo '<li class="page-item active"><a class="page-link">'.$i.'</a></li>';
															}else{
																echo "<li class='page-item'><a class='page-link' href='?r=".$i."'>".$i."</a></li>";
															}
														}else{
															if($i==1){
																echo '<li class="active page-item"><a class="page-link">'.$i.'</a></li>';
															}else{
																echo "<li class='page-item'><a class='page-link' href='?r=".$i."'>".$i."</a></li>";
															}
														}
													}
												}
												?>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		if (isset($_GET['delete'])) {
		  $id=$_GET['delete'];
		  $del=mysqli_query($h,"DELETE FROM data WHERE id = '$id'");
		  if ($del) {
		    ?>
		    <script type="text/javascript">
		    window.location.href="index.php?page=tampildata";
		    </script>
		    <?php
		  }else {
		    ?>
		    <script language="javascript">
		    alert ("kategori gagal Di Hapus"); document.location="index.php?page=tampildata";
		    </script>
		    <?php
		  }
		}
		?>
		<script>
		function hapusdata(url){
		  var x = confirm("Apakah Anda ingin menghapus data ini?");
		  if(x){
		    window.location.href = url;
		  }
		}
		</script>
