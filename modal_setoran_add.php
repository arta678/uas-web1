<!-- MODAL TAMBAH SAMPAH -->
<div class="modal" id="tambah_setoran" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content warna-modal">
			<div class="modal-header modal-form-tamu">
				<h3 class="modal-title" id="myModalLabel"><strong>TAMBAH SETORANS SAMPAH</strong></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-tamu ">
<!-- INPUT DATA TAMU -->
				
			<form method="post" action="proses_nasabah_add.php" >
					<div class="form-group col from-tambah-sampah">
					    
					    <!-- <div class="row from-tambah-sampah">	
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="ID Nasabah" data-content="" ><i class="fas fa-hashtag"></i></button>
					    	<input type="text" name="id_sampah" class="form-control text-bold col-sm-8" id="input_nama_tamu" title="Masukkan Kode Sampah"   disabled value="<?php echo $row['id_nasabah']; ?>">
					    </div> -->

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Nama Sampah</label> -->
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Nama Nasabah" data-content="" ><i class="fas fa-user"></i></button>
					    	<input type="text" name="nama_nasabah" class="form-control  col-sm-8"  id="input_nama_tamu" title="Masukkan Nama Nasabah" required placeholder="Input nama nasabah">
					    </div>

					    <!-- <label for="kategori_sampah" class="col-sm-5">Kategori</label> -->
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Jenis Kelamin" data-content="" ><i class="fas fa-venus-mars"></i></button>
						    <select class="custom-select col-sm-8" name="jenis_kelamin" required >
							  <option value="Laki-laki" >Laki-laki</option>
							  <option value="Perempuan" >Perempuan</option>
							</select>
					    </div>
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Nomo Hp" data-content="" ><i class="fas fa-phone"></i></button>
				        	<input name="hp_nasabah" type="number" class=" form-control col-sm-8" id="input_telp_tamu" title="Masukkan nomor hp nasabah" required placeholder="Nomor Hp Nasabah" >
					    </div>

					    <div class="row from-tambah-sampah text-bold">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Alamat Nasabah" data-content="" ><i class="fas fa-map-marked-alt"></i></button>
					    	<textarea class="col-sm-8 text-bold form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Alamat Nasabah" name="alamat_nasabah"  ></textarea>
					    </div>
					    
					</div>
											    
 				
			
				
			<div class="modal-footer">
				<button type="reset" class="btn btn-secondary">Hapus</button>
				<button type="submit" name="submit-nasabah-tambah" class="btn btn-success">Simpan Data</button>
				
			</div>
			</form>
			</div>
		</div>
	</div>
</div>
