<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIBASAH (Sistem InforMasi BAnk sampaH)</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="sweetalert2/css/sweetalert2.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="animations-css/animations.css">	
</head>
<body>
	<div class="bungkus-terluar bg-dark">
<!-- SIDEBAR -->
	    <nav id="sidebar" class="bg-dark">
	    	<div class="overlay index-img-screen bg-dark"></div>
	    	
	        <div class="sidebar-header text-center bg-dark">
	        	<a href="" ><img src="images/arta.jpg" alt="gambar arta wiguna" class="img-fluid gambar-admin"></a>
	        		
	            <h5 class="title-tamu">ADMIN</h5>
	            	<div class="dismiss">
	            		<i class="fas fa-times fa-lg" title="Tutup"></i>
	            	</div>
	        </div>
	            <ul class="list-unstyled components bg-dark">
	        	
	            <li >
	            	<a href="home.php" class="icon tipeKamar-li-icon">Home</a>
	            </li>
	            <h5 class="menu-categori">MASTER DATA</h5>
	            <li  >
	            	<a href="data_nasabah.php" class="icon tamu-li-icon">Data Nasabah</a>
	            </li>
	             <li >
	            	<a href="data_sampah.php" class="icon dashboard-li-icon">Data Sampah</a>
	            </li>
	            <li class="active">
	            	<a href="data_pengepul.php" class="icon tamu-li-icon">Data Pengepul</a>
	            </li>
	           
	            <h5 class="menu-categori">TRANSAKSI</h5>
	            <li >
	            	<a href="data_setoran.php" class="icon dashboard-li-icon">Setoran Sampah</a>
	            </li>
	            <li>
	            	<a href="data_penarikan.php" class="icon penarikan-li-icon">Penarikan Saldo</a>
	            </li>
	          
	            
	            <h5 class="menu-categori">REPORT</h5>
	            <li>
	            	<a href="report_master.php" class="icon laporan-li-icon">Laporan Master Data</a>
	            </li>
	            <li>
	            	<a href="report_transaksi.php" class="icon laporan-li-icon">Laporan Transaksi</a>
	            </li>
	        </ul>
	    </nav>

<!-- NAVBAR SIMBAH -->
	    <div id="content">
	        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
	            <div class="container-fluid text-center">
	                <i id="btn-sidebar-toggle" class="fas fa-bars" title="Show/hide sidebar"></i>
	                <h5 class="h1-title-header d-md-inline-block "><strong class="text-atas" >SIBASAH</strong>
	                	<span>(Sistem Informasi Bank Sampah)</span></h5>
	                	<i class="fas fa-sign-out-alt fa-2x btn-header-logout" title="Logout" onclick="btnLogout()"></i>
	            </div>
	        </nav>
<!-- CONTEN TABLE -->
	        	<div class="container table-tamu ">
					<div class="wrapper-table">
						


<!-- MODAL TAMBAH SAMPAH -->
<div class="modal" id="tambah_pengepul" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content warna-modal">
			<div class="modal-header modal-form-tamu">
				<h3 class="modal-title" id="myModalLabel"><strong>TAMBAH DATA PENGEPUL</strong></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-form-tamu ">



<!-- MODAL TAMBAH PENGEPUL -->
				
			<form method="post" action="proses_pengepul_add.php" >
					<div class="form-group col from-tambah-sampah">
					    <div class="row from-tambah-sampah">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Nama Pengepul" data-content="" ><i class="fas fa-user"></i></button>
					    	<input type="text" name="nama_pengepul" class="form-control  col-sm-8"  id="input_nama_pengepul" title="Masukkan Nama pengepul" required placeholder="Input nama pengepul">
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
				        	<input name="hp_pengepul" type="number" class=" form-control col-sm-8" id="input_telp_tamu" title="Masukkan nomor hp Pengepul" required placeholder="Nomor Hp Pengepul" >
					    </div>

					    <div class="row from-tambah-sampah text-bold">
					    	<button type="button" class="btn  btn-modal-lingkaran col-sm-1" data-container="body" data-toggle="popover" data-placement="right" title="Alamat Pengepul" data-content="" ><i class="fas fa-map-marked-alt"></i></button>
					    	<textarea class="col-sm-8 text-bold form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Alamat Pengepul" name="alamat_pengepul"  ></textarea>
					    </div>
					    
					</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-secondary">Hapus</button>
				<button type="submit" name="submit-pengepul-tambah" class="btn btn-success">Simpan Data</button>
				
			</div>
			</form>
			</div>
		</div>
	</div>
</div>













							<div class="bungkus-bt-new  ">
		        			<button class="btn btn-outline-success bt-input-tamu " data-toggle="modal" data-target="#tambah_pengepul" ><i class="fas fa-plus"></i>Pengepul</button>

		      
		        			<button class="btn btn-outline-danger bt-input-tamu btn-hapus" type="button" id="btn-delete"><i class="fas fa-times"></i>Hapus</button>
		        			
		        			</div>
<form method="post" action="proses_pengepul_delete.php" id="form-delete">


<!-- MODAL PENGEPUL UPDATE -->
<!-- MODAL TAMBAH SAMPAH -->


<!-- ============================ -->
						<div class="table-responsive">
						<table id="tb-nasabah" class="table table-striped nowrap table-hover table-sm  table-bordered "  cellspacing="0" width="100%">

					        <thead class="thead-dark text-center">
					            <tr>
					                <th class="header-table" width="60px;"></th>
					                <th class="header-table"  ><input type="checkbox" id="check-all"></th>
					                <th class="header-table" width="20px;" >ID </th>
					                <th class="header-table" >Nama Pengepul</th>
					                <th class="header-table" >Jenis Kelamin</th>
					                <th class="header-table" >Nomor HP</th>
					                <th class="header-table" >Alamat Pengepul</th>
					            </tr>
					        </thead>

					        <tbody>
					        
					            <?php

						            include_once("koneksi.php");

									$sql = "SELECT * FROM pengepul";
									$no=1;

									foreach ($koneksi->query($sql) as $row) {
										?>

										<tr>

<!-- MODAL PENGEPUL VIEW -->
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

					    <!-- <label for="kategori_sampah" class="col-sm-5">Kategori</label> -->
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
												
											<td class="text-nowrap" align="center">

												<!-- mengembil data modal -->

								    			<a href='#View_Pengepul_<?php echo $row['id_pengepul']; ?>' data-toggle='modal' title='Lihat Data' data-target='#View_Pengepul_<?php echo $row['id_pengepul']; ?>'>
													<button class='btn  btn-data-aksi'>
														<i class='far fa-eye'></i>
													</button>
												</a>

												<a href='#Update_Pengepul_<?php echo $row['id_pengepul']; ?>' data-toggle='modal' title='Edit Data' data-target="#Update_Pengepul_<?php echo $row['id_pengepul']; ?>">
													<button class='btn  btn-data-aksi'>
														<i class='fas fa-pen'></i>
													</button>
												</a>
												

											</td>

											<td align="center"><input type="checkbox" class="check-item" name="id_pengepul[]" value="<?php echo $row['id_pengepul']; ?>" ></td>
											<td><?php echo $row['id_pengepul']; ?></td>
											<td><?php echo $row['nama_pengepul']; ?></td>
											<td><?php echo $row['jenis_kelamin']; ?></td>
								    		<td><?php echo $row['hp_pengepul']; ?></td>
								    		<td><?php echo $row['alamat_pengepul']; ?></td>
								    	</tr>

								    <?php
									$no++;
									?> 
									<?php 
										// include('modal_sampah_delete.php');
										// include('modal_update_tamu.php'); 
										//  // include('modal_delete_tamu.php'); 
										//  include('modal_sampah_add.php'); 
										//  // include('modal_sampah_update.php'); 
										//  include 'modal_nasabah_update.php';
										//  include 'modal_nasabah_view.php';
										//  include 'modal_pengepul_add.php';
									
												include 'modal_pengepul_update.php'; 

										

							    		
								   
								 
									 ?> 
							    	
							    	
							    	<?php
									}
								?>
					        </tbody>

					    </table>
						</div>
					</div>
					</form>

				</div>


			</div>
	    </div>

	<?php 
	// include 'modal_nasabah_add.php'; 
	include 'modal_pengepul_add.php';
	include 'modal_nasabah_view.php';
	
	?>
	<script type="text/javascript" src="js/JQuery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/Popper.js"></script>
	<script type="text/javascript" src="sweetalert2/js/sweetalert2.js"></script>
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/Popper.js"></script>
	<!-- <script type="text/javascript" src="../DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.js"></script> -->
	<script type="text/javascript" src="DataTables/DataTables-1.10.18/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.js"></script>
	



	<script type="text/javascript">
			$(document).ready(function(){ 					// Ketika halaman sudah siap (sudah selesai di load)    
		   		$("#check-all").click(function(){ 			// Ketika user men-cek checkbox all      
		   			if($(this).is(":checked")) 				// Jika checkbox all diceklis        
		   				$(".check-item").prop("checked", true); 	// ceklis semua checkbox siswa dengan class "check-item"      
		   			else 											// Jika checkbox all tidak diceklis        
		   				$(".check-item").prop("checked", false); 	// un-ceklis semua checkbox siswa dengan class "check-item"    
		   		});        
		   	$("#btn-delete").click(function(){ 				   
		   				Swal.fire({
							confirmButtonColor: "#d33",
							cancelButtonColor: "#aaa",
							showCancelButton: true,
							title: 'Hapus data yang dicentang?',
		  					showConfirmButton: true,
							confirmButtonText: "Ya",
							cancelButtonText:"Tidak"
			}).then((result) => {
				if (result.value) {
				    $("#form-delete").submit();
				}
			})		
				});  
			});


		   

		$(document).ready(function() {
		    $('#tb-nasabah').dataTable( {
		    	//i = info, 
		    	// l = lenght, 
		    	// f = find, 
		    	// t = table, 
		    	// B = buttons, 
		    	// p = pagination
		    	dom:
				   "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
				    "<'row'<'col-sm-12't>>" +
				    "<'row'<'col-sm-12'p>>",
		    	//DISABLE SHORTING TABLE COLUMN
				"columns": [
				    null,
				    null,
				    null,
				    null,
				    null,
				    null,
				    
				   
				    { "orderable": false }
				]
			
			} )
		});

		$(document).ready(function(){
		    $('[data-toggle="popover"]').popover();   
		});
		
		$(document).ready(function () {
		    $('#btn-sidebar-toggle').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.h1-title-header').toggleClass('increase-width');
                // $('.btn-header-logout').toggleClass('i-hide-tamu');
            })
		});
		$(document).ready(function () {
			$('.dismiss').on('click', function () {
				$('#sidebar, #content').removeClass('active');
			})
		});
		//TOOLTIP EVERYWHERE
		$(function () {
			$('[data-toggle="tooltip"]').tooltip();
		});


		//FUNCTION LOGOUT - BUTTON - SWEETALERT
		function btnLogout() {
			Swal.fire({
				title: "Apa yakin ingin keluar?",
				confirmButtonColor: "#d33",
				cancelButtonColor: "#aaa",
				confirmButtonText: "Ya",
				cancelButtonText:"Tidak",
				showCancelButton: true
			}).then((result) => {
				if (result.value) {
					window.location = 'index.php';
				}
			})
		};
	</script>
</body>
</html>
