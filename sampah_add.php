<!-- MODAL TAMBAH SAMPAH -->
<div class="modal fade" id="popUpInsert-sampah" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content warna-modal">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel">TAMBAH DATA SAMPAH</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-tamu ">
<!-- INPUT DATA TAMU -->
				<form method="post" action="data_sampah.php" >
					<div class="form-group col from-tambah-sampah">
					    <!-- <label for="input_nama_tamu" class="col-sm-6">Kode</label> -->
					    <div class="col-sm-4 from-tambah-sampah">
					    	<input type="text" name="id_sampah" class="form-control" id="input_nama_tamu" title="Masukkan Kode Sampah" required placeholder="Kode Sampah">
					    </div>

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Nama Sampah</label> -->
					    <div class="col-sm-12 from-tambah-sampah">
					    	<input type="text" name="nama_sampah" class="form-control" id="input_nama_tamu" title="Masukkan Nama Sampah" required placeholder="Nama Sampah">
					    </div>

					    <!-- <label for="kategori_sampah" class="col-sm-5">Kategori</label> -->
					    <div class="col-sm-9 from-tambah-sampah">
					    <select class="custom-select col-sm-6 col" name="kategori_sampah" required>
						  <option selected>Pilih Kategori</option>
						  <option value="Plastik">Plastik</option>
						  <option value="Kertas">Kertas</option>
						  <option value="Logam">Logam</option>
						  <option value="Kaca">Kaca</option>
						</select>
					    </div>
					    <div class="col-sm-5 from-tambah-sampah">
					    <!-- <label for="input_nama_tamu" >Harga Datang</label> -->
					    <!-- <button type="button" class="btn btn-light btn-modal-lingkaran" data-container="body" data-toggle="popover" data-placement="right" title="Informasi" data-content="Jangan Memasukkan titik saat memasukkan harga(contoh : 20000)"><i class="fas fa-question"></i></button> -->
					    </div>
					    
					    <div class="col-sm-6 from-tambah-sampah">
					    	<div class="input-group">
					        	<div class="input-group-prepend">
					          		<div class="input-group-text">Rp.</div>
					        	</div>
					        	<input name="harga_datang" type="number" class="form-control" id="input_telp_tamu" title="Harga Sampah Saat Nasabah Datang ke Bank Sampah" required placeholder="Harga Datang">
					        	
					      	</div>	
					    </div>

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Harga Jemput</label> -->
					    <div class="col-sm-6 from-tambah-sampah">
					    	<div class="input-group">
					        	<div class="input-group-prepend">
					          		<div class="input-group-text">Rp.</div>
					        	</div>
					        	<input name="harga_jemput" type="number" class="form-control" id="input_telp_tamu" title="Harga Sampah Jemputan" placeholder="Harga Jemput" required>
					      	</div>
					    </div>

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Harga Pengepul</label> -->
					    <div class="col-sm-6 from-tambah-sampah">
					    	<div class="input-group from-tambah-sampah">
					        	<div class="input-group-prepend">
					          		<div class="input-group-text">Rp.</div>
					        	</div>
					        	<input name="harga_pengepul" type="number" class="form-control" id="input_telp_tamu" title="Harga Sampah Ke Pengepul" placeholder="Harga Pengepul" required>
					      	</div>
					    </div>
					    <div class="col-sm-12 from-tambah-sampah">
					    	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Keterangan Sampah" name="keterangan_sampah"></textarea>
					    </div>
					    
					</div>
											    
 				
			
				
			<div class="modal-footer">
				<button type="clear" class="btn btn-secondary" data-dismiss="modal">Hapus</button>
				<button type="submit" name="submit-sampah-tambah" class="btn btn-primary">Simpan Data</button>
				
			</div>
			</form>
			</div>
		</div>
	</div>
</div>
<?php 
// include_once("koneksi.php");
// 	if(isset($_POST['submit'])) {
// 		$id_sampah = $_POST['id_sampah'];
// 		$nama_sampah = $_POST['nama_sampah'];
// 		$kategori_sampah = $_POST['kategori_sampah'];
// 		$harga_datang = $_POST['harga_datang'];
// 		$harga_jemput = $_POST['harga_jemput'];
// 		$harga_pengepul = $_POST['harga_pengepul'];
// 		$keterangan_sampah = $_POST['keterangan_sampah'];
// 		//insert data to database
// 		$sql = "INSERT INTO sampah VALUES (:id_sampah, :nama_sampah, :kategori_sampah, :harga_datang, :harga_jemput, :harga_pengepul,:keterangan_sampah)";
// 		$query = $koneksi->prepare($sql);
// 		$query->bindparam(':id_sampah', $id_sampah);
// 		$query->bindparam(':nama_sampah', $nama_sampah);
// 		$query->bindparam(':kategori_sampah', $kategori_sampah);
// 		$query->bindparam(':harga_datang', $harga_datang);
// 		$query->bindparam(':harga_jemput', $harga_jemput);
// 		$query->bindparam(':harga_pengepul', $harga_pengepul);
// 		$query->bindparam(':keterangan_sampah', $keterangan_sampah);
		
// 		$query->execute();
// 		echo "<script>
// 			setTimeout(function () {
// 				Swal.fire({
				    
// 					title: '<p>Berhasil Menambah Data Sampah</p>',
// 					showConfirmButton: true,
// 					toast:true,
// 				}).then(function() {
// 					window.location.href = 'data_sampah.php';
// 				})
// 			});
// 		</script>";
// 	}
	// else {
	// 	// echo "<script>
	// 	// 	setTimeout(function () { 
	// 	// 		Swal.fire({
	// 	// 		    type: 'error',
	// 	// 			title: 'Data Galal Ditambahkan!'
	// 	// 		})
	// 	// 	});
	// 	// </script>";
	// }
?>