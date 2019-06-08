<!-- MODAL UPDATE TAMU -->
<div class="modal " id="update_sampah_<?php echo $row['id_sampah']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content  ">
			<div class="modal-header modal-form-tamu">
				<h3 class="modal-title" id="myModalLabel"><STRONG>UBAH DATA SAMPAH</STRONG></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-tamu ">
<!-- INPUT DATA TAMU -->
				<form method="POST" action="proses_sampah_update.php?id_sampah=<?php echo $row['id_sampah']; ?>">
					<div class="form-group col from-tambah-sampah">
					    <!-- <label for="input_nama_tamu" class="col-sm-6">Kode</label> -->
					    <!-- <div class="col-sm-4 from-tambah-sampah ">
					    	<input type="text" name="id_sampah" class="form-control text-bold" id="input_nama_tamu" title="Maaf tidak bisa merubah kode Sampah" required placeholder="Kode Sampah"  disabled value="<?php echo $row['id_sampah']; ?>">
					    </div> -->

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Nama Sampah</label> -->
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Nama Sampah" data-content="" ><i class="fas fa-trash-alt"></i></button>
					    	<input type="text" name="nama_sampah" class=" col-sm-8 form-control text-bold" id="input_nama_tamu" title="Masukkan Nama Sampah" required placeholder="Nama Sampah" value="<?php echo $row['nama_sampah']; ?>">
					    </div>

					    <!-- <label for="kategori_sampah" class="col-sm-5">Kategori</label> -->
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Keterangan Sampah" data-content="" ><i class="fas fa-trash-alt"></i></button>
						    <select class="custom-select col-sm-6 col text-bold" name="kategori_sampah" required >
							  <option value="Plastik" <?php if ($row['kategori_sampah'] == 'Plastik') echo ' selected="selected"'; ?>>Plastik</option> 
							  <option value="Kertas" <?php if ($row['kategori_sampah'] == 'Kertas') echo ' selected="selected"'; ?>>Kertas</option>
							  <option value="Logam" <?php if ($row['kategori_sampah'] == 'Logam') echo ' selected="selected"'; ?>>Logam</option>
							  <option value="Kaca" <?php if ($row['kategori_sampah'] == 'Kaca') echo ' selected="selected"'; ?>>Kaca</option>
							</select>
					    </div>
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Harga Datang" data-content="" ><i class="fas fa-dollar-sign"></i></button>
					        <input name="harga_datang" type="number" class="form-control text-bold col-sm-8" id="input_telp_tamu" title="Harga Sampah Saat Nasabah Datang ke Bank Sampah" required placeholder="Harga Datang" value="<?php echo $row['harga_datang']; ?>">
					    </div>

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Harga Jemput</label> -->
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Harga Jemputan" data-content="" ><i class="fas fa-dollar-sign"></i></button>
					        <input name="harga_jemput" type="number" class="form-control text-bold col-sm-8" id="input_telp_tamu" title="Harga Sampah Jemputan" placeholder="Harga Jemput" required value="<?php echo $row['harga_jemput']; ?>">
					        	
					      	
					    </div>

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Harga Pengepul</label> -->
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Harga Pengepul" data-content="" ><i class="fas fa-dollar-sign"></i></button>
					        <input name="harga_pengepul" type="number" class="form-control text-bold col-sm-8" id="input_telp_tamu" title="Harga Sampah Ke Pengepul" placeholder="Harga Pengepul" required value="<?php echo $row['harga_pengepul']; ?>">
					        	
					    </div>
					    <div class="row from-tambah-sampah text-bold">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Keterangan Sampah" data-content="" ><i class="fas fa-quote-right"></i></button>
					    	<textarea class="form-control text-bold col-sm-8" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Keterangan Sampah" name="keterangan_sampah"><?php echo $row['keterangan_sampah']; ?></textarea>
					    </div>
					    	
					</div>
											    
 				
			
				
			<div class="modal-footer">
				<button type="submit" name="submit-sampah-update" class="btn btn-success">Ubah Data</button>
				
			</div>
			</form>
			</div>
	</div>
</div>