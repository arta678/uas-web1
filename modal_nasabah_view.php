<!-- MODAL UPDATE TAMU -->
<div class="modal " id="view_nasabah_<?php echo $row['id_nasabah']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content  ">
			<div class="modal-header modal-form-tamu">
				<h3 class="modal-title" id="myModalLabel"><STRONG>DETAIL DATA NASABAH</STRONG></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-tamu ">
<!-- INPUT DATA TAMU -->
				<form method="post" action="proses_nasabah_add.php" >
					<div class="form-group col from-tambah-sampah">
					    
					    <div class="row from-tambah-sampah">	
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="ID Nasabah" data-content="" ><i class="fas fa-hashtag"></i></button>
					    	<input type="text" name="id_sampah" class="form-control text-bold col-sm-8" id="input_nama_tamu" title="Masukkan Kode Sampah"   disabled value="<?php echo $row['id_nasabah']; ?>">
					    </div>

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Nama Sampah</label> -->
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Nama Nasabah" data-content="" ><i class="fas fa-user"></i></button>
					    	<input type="text" name="nama_nasabah" class="form-control text-bold col-sm-8"  id="input_nama_tamu" title="Masukkan Nama Nasabah" required placeholder="Input nama nasabah" value="<?php echo $row['nama_nasabah']; ?>"  disabled>
					    </div>

					    <!-- <label for="kategori_sampah" class="col-sm-5">Kategori</label> -->
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Jenis Kelamin" data-content="" ><i class="fas fa-venus-mars"></i></button>
						    <select class="custom-select col-sm-8" name="jenis_kelamin" required disabled>
							  <option value="Laki-laki" <?php if ($row['jenis_kelamin'] == 'Laki-laki') echo ' selected="selected"'; ?>>Laki-laki</option>
							  <option value="Perempuan" <?php if ($row['jenis_kelamin'] == 'Perempuan') echo ' selected="selected"'; ?>>Perempuan</option>
							</select>
					    </div>
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Nomo Hp" data-content="" ><i class="fas fa-phone"></i></button>
				        	<input name="hp_nasabah" type="number" class=" form-control col-sm-8" id="input_telp_tamu" title="Masukkan nomor hp nasabah" required placeholder="Nomor Hp Nasabah" value="<?php echo $row['hp_nasabah']; ?>" disabled>
					    </div>

					    <div class="row from-tambah-sampah text-bold">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Alamat Nasabah" data-content="" ><i class="fas fa-map-marked-alt"></i></button>
					    	<textarea class="col-sm-8 text-bold form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Alamat Nasabah" name="alamat_nasabah" disabled ><?php echo $row['alamat_nasabah']; ?></textarea>
					    </div>
					    <div class="row from-tambah-sampah text-bold">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Saldo Nasabah" data-content="" ><i class="fas fa-dollar-sign"></i></button>
					    	<h2 style="font-weight: 900;"><?php echo $row['saldo_nasabah']; ?></h2>
					    </div>
					    
					</div>
											    
 				
			
				
			<div class="modal-footer">
				<!-- <button type="reset" class="btn btn-secondary">Hapus</button> -->
				<button type="button"  class="btn btn-success" data-dismiss="modal">Tutup</button>
				
			</div>
			</form>
			</div>
	</div>
</div>