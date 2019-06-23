<!-- MODAL UPDATE TAMU -->
<div class="modal " id="view_setoran_<?php echo $row['id_setoran']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content  ">
			<div class="modal-header modal-form-tamu">
				<h3 class="modal-title" id="myModalLabel"><STRONG>DETAIL SETORAN</STRONG></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-tamu ">
<!-- INPUT DATA TAMU -->
				<form method="post" action="proses_nasabah_add.php" >
					<div class="form-group col from-tambah-sampah">
					    
					    <div class="row from-tambah-sampah">	
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Id Setoran" data-content="" ><i class="fas fa-hashtag"></i></button>
					    	<input type="text" name="id_sampah" class="form-control text-bold col-sm-8" id="input_nama_tamu" title="Masukkan Kode Sampah"   disabled value="<?php echo $row['id_setoran']; ?>">
					    </div>

					    <!-- <label for="input_nama_tamu" class="col-sm-6">Nama Sampah</label> -->
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Tanggal" data-content="" ><i class="far fa-calendar-alt"></i></button>
					    	<input type="text" name="nama_nasabah" class="form-control text-bold col-sm-8"  id="input_nama_tamu" title="Masukkan Nama Nasabah" required placeholder="Input nama nasabah" value="<?php echo $row['tanggal']; ?>"  disabled>
					    </div>
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Nama Nasabah" data-content="" ><i class="fas fa-user"></i></button>
					    	<input type="text" name="nama_nasabah" class="form-control text-bold col-sm-8"  id="input_nama_tamu" title="Masukkan Nama Nasabah" required placeholder="Input nama nasabah" value="<?php echo $row['nama_nasabah']; ?>"  disabled>
					    </div>
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Jenis Sampah" data-content="" ><i class="fas fa-trash-alt"></i></button>
				        	<input name="hp_nasabah" type="text" class=" form-control col-sm-8" id="input_telp_tamu" title="Masukkan nomor hp nasabah" required placeholder="Nomor Hp Nasabah" value="<?php echo $row['nama_sampah']; ?>" disabled>
					    </div>

					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Harga Sampah" data-content="" ><i class="fas fa-dollar-sign"></i></button>
				        	<input name="harga Sampah" type="number" class=" form-control col-sm-8" id="input_telp_tamu" title="Masukkan nomor hp nasabah" required placeholder="Nomor Hp Nasabah" value="<?php echo $row['harga_datang']; ?>" disabled>
					    </div>
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Berat Sampah" data-content="" ><i class="fas fa-weight"></i></button>
				        	<input name="berat Sampah" type="number" class=" form-control col-sm-8" id="input_telp_tamu" title="Masukkan nomor hp nasabah" required placeholder="Nomor Hp Nasabah" value="<?php echo $row['berat_setoran']; ?>" disabled> 
					    </div>
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Total Setoran" data-content="" ><i class="fas fa-dollar-sign"></i></button>
				        	<input name="total Setoran" type="number" class=" form-control col-sm-8" id="input_telp_tamu" title="Masukkan nomor hp nasabah" required placeholder="Nomor Hp Nasabah" value="<?php echo $row['total_setoran']; ?>" disabled>
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