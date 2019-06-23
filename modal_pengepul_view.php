<div class="modal" id="View_Pengepul_<?php echo $row['id_pengepul']; ?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content warna-modal">
			<div class="modal-header modal-form-tamu">
				<h3 class="modal-title" id="myModalLabel"><strong>DETAIL DATA PENGEPUL</strong></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-tamu ">
<!-- INPUT DATA PEGEPUl -->
				<form method="post" action="proses_pengepul_update.php?id_pengepul=<?php echo $row['id_pengepul']; ?>" >
					<div class="form-group col from-tambah-sampah">
					    <!-- <label for="input_nama_tamu" class="col-sm-6">Kode</label> -->
					    <!-- <div class="col-sm-4 from-tambah-sampah">
					    	<input type="number" name="id_sampah" class="form-control text-bold" id="input_nama_tamu" title="Masukkan Kode Sampah" value="" placeholder="Kode Sampah">
					    </div> -->

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Nama Sampah</label> -->
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Nama Pengepul" data-content="" ><i class="fas fa-user"></i></button>
					    	<input type="text" name="nama_pengepul" class="form-control text-bold col-sm-8"  id="input_nama_tamu" title="Masukkan Nama Pengepul" required placeholder="Input nama nasabah" value="<?php echo $row['nama_pengepul']; ?>" >
					    </div>

					    <label for="kategori_sampah" class="col-sm-5">Kategori</label>
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Jenis Kelamin" data-content="" ><i class="fas fa-venus-mars"></i></button>
						    <select class="custom-select col-sm-8 form-control" name="jenis_kelamin" required >
							  <option value="Laki-laki" <?php if ($row['jenis_kelamin'] == 'Laki-laki') echo ' selected="selected"'; ?>>Laki-laki</option>
							  <option value="Perempuan" <?php if ($row['jenis_kelamin'] == 'Perempuan') echo ' selected="selected"'; ?>>Perempuan</option>
							</select>
					    </div>
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Nomor Hp" data-content="" ><i class="fas fa-phone"></i></button>
				        	<input name="hp_pengepul" type="number" class="form-control col-sm-8" id="input_telp_tamu" title="Masukkan nomor hp Pengepul" required placeholder="Nomor Hp Pengepul" value="<?php echo $row['hp_pengepul']; ?>" >
					    </div>

					    <div class="row from-tambah-sampah text-bold">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Alamat Pengepul" data-content="" ><i class="fas fa-map-marked-alt"></i></button>
					    	<textarea class="col-sm-8 text-bold form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Alamat Nasabah" name="alamat_pengepul" ><?php echo $row['alamat_pengepul']; ?></textarea>
					    </div>
					    
					</div>
											    
 				
			
				
			<div class="modal-footer">
				<!-- <button type="reset" class="btn btn-secondary">Hapus</button> -->
				<button type="submit" name="submit-pengepul-update" class="btn btn-success">Ubah Data</button>
				
			</div>
			</form>
			</div>
		</div>
	</div>
</div>