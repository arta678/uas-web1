<!-- MODAL TAMBAH SAMPAH -->
<div class="modal" id="popUpInsert-sampah" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content warna-modal">
			<div class="modal-header modal-form-tamu">
				<h3 class="modal-title" id="myModalLabel"><strong>TAMBAH DATA SAMPAH</strong></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-tamu ">
<!-- INPUT DATA TAMU -->
				<form method="post" action="proses_sampah_add.php" >
					<div class="form-group col from-tambah-sampah">
					    <!-- <label for="input_nama_tamu" class="col-sm-6">Kode</label> -->
					    <div class="col-sm-4 from-tambah-sampah">
					    	<input type="text" name="id_sampah" class="form-control text-bold" id="input_nama_tamu" title="Masukkan Kode Sampah" required placeholder="Kode Sampah">
					    </div>

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Nama Sampah</label> -->
					    <div class="col-sm-12 from-tambah-sampah">
					    	<input type="text" name="nama_sampah" class="form-control text-bold" id="input_nama_tamu" title="Masukkan Nama Sampah" required placeholder="Nama Sampah">
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
					    <div class="col-sm-8 from-tambah-sampah">
					    	<div class="input-group">
					        	<div class="input-group-prepend">
					          		<div class="input-group-text">Rp.</div>
					        	</div>
					        	<input name="harga_datang" type="number" class="form-control text-bold" id="input_telp_tamu" title="Harga Sampah Saat Nasabah Datang ke Bank Sampah" required placeholder="Harga Datang">
					        	<button type="button" class="btn  btn-modal-lingkaran" data-container="body" data-toggle="popover" data-placement="right" title="Harga Datang" data-content="Harga datang merupakan harga saat nasabah membawa sampah ke bank sampah. Jangan Memasukkan titik saat memasukkan harga (Contoh : 20000)" ><i class="fas fa-question"></i></button>
					        	
					      	</div>	
					    </div>

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Harga Jemput</label> -->
					    <div class="col-sm-8 from-tambah-sampah">
					    	<div class="input-group">
					        	<div class="input-group-prepend">
					          		<div class="input-group-text">Rp.</div>
					        	</div>
					        	<input name="harga_jemput" type="number" class="form-control text-bold" id="input_telp_tamu" title="Harga Sampah Jemputan" placeholder="Harga Jemput" required>
					        	<button type="button" class="btn  btn-modal-lingkaran" data-container="body" data-toggle="popover" data-placement="right" title="Harga Jempput" data-content="Harga jemput merupakan harga saat sampah dijemput oleh pihak bank sampah. Jangan Memasukkan titik saat memasukkan harga (Contoh : 20000)" ><i class="fas fa-question"></i></button>
					      	</div>
					    </div>

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Harga Pengepul</label> -->
					    <div class="col-sm-8 from-tambah-sampah">
					    	<div class="input-group from-tambah-sampah">
					        	<div class="input-group-prepend">
					          		<div class="input-group-text">Rp.</div>
					        	</div>
					        	<input name="harga_pengepul" type="number" class="form-control text-bold" id="input_telp_tamu" title="Harga Sampah Ke Pengepul" placeholder="Harga Pengepul" required>
					        	<button type="button" class="btn  btn-modal-lingkaran" data-container="body" data-toggle="popover" data-placement="right" title="Harga Pengepul" data-content="Harga pengepul merupakan harga saat menjual sampah ke pengepul. Jangan Memasukkan titik saat memasukkan harga (Contoh : 20000)" ><i class="fas fa-question"></i></button>
					      	</div>
					    </div>
					    <div class="col-sm-12 from-tambah-sampah text-bold">
					    	<textarea class="form-control text-bold" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Keterangan Sampah" name="keterangan_sampah"></textarea>
					    </div>
					    
					</div>
											    
 				
			
				
			<div class="modal-footer">
				<button type="clear" class="btn btn-secondary" data-dismiss="modal">Hapus</button>
				<button type="submit" name="submit-sampah-tambah" class="btn btn-success">Simpan Data</button>
				
			</div>
			</form>
			</div>
		</div>
	</div>
</div>
