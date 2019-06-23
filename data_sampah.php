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
	             <li class="active">
	            	<a href="data_sampah.php" class="icon dashboard-li-icon">Data Sampah</a>
	            </li>
	            <li>
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
						<form method="post" action="delete.php" id="form-delete">
							<div class="bungkus-bt-new  ">
		        			<button class="btn btn-outline-success bt-input-tamu " data-toggle="modal" data-target="#popUpInsert-sampah"><i class="fas fa-plus"></i>Sampah</button>
		        
		        			<button class="btn btn-outline-danger bt-input-tamu btn-hapus " type="button" id="btn-delete"><i class="fas fa-times"></i>Hapus</button>
		        			
		        			</div>
						<div class="table-responsive">
						<table id="tb-sampah" class="table table-striped nowrap table-hover table-sm  table-bordered "  cellspacing="0" width="100%">
					        <thead class="thead-dark text-center">
					            <tr>
					                <th class="header-table" width="60px;"></th>
					                <th class="header-table "  ><input type="checkbox" id="check-all"></th>

					                <th class="header-table" width="50px;" >Kode</th>
					                <th class="header-table" >Jenis Sampah</th>
					                <th class="header-table" >Kategori</th>
					                <th class="header-table" >Harga Beli</th>
					                <th class="header-table" >Harga Jual</th>
					                <!-- <th class="header-table" width="100px;">DHS 2</th>
					                <th class="header-table" width="100px;">PENGEPUL</th> -->
					                <!-- <th class="header-table" width="100px;"><center>Aksi</center></th> -->
					            </tr>
					        
					        </thead>
					        <tbody>
					            <?php
						            // include_once("koneksi.php");
						            require 'koneksi.php'; 
									$sql = "SELECT * FROM sampah ORDER BY id_sampah ASC";
									$no=1;

									foreach ($koneksi->query($sql) as $row) {
										?>
										<tr>
											
											<td class="text-nowrap" align="center">

								    			<a href='#lihat_sampah_<?php echo $row['id_sampah']; ?>' data-toggle='modal' title='Lihat Data' data-target='#lihat_sampah_<?php echo $row['id_sampah']; ?>'>
													<button class='btn  btn-data-aksi'>
														<i class='far fa-eye'></i>
													</button>
												</a>

												<a href='#update_sampah_<?php echo $row['id_sampah']; ?>' data-toggle='modal' title='Edit Data' data-target='#update_sampah_<?php echo $row['id_sampah']; ?>'>
													<button class='btn  btn-data-aksi'>
														<i class='fas fa-pen'></i>
													</button>
												</a>
												<!-- <a href='#popUpDelete-Tamu_<?php echo $row['id_sampah']; ?>' data-toggle='modal' title='Hapus Data' data-target='#popUpDelete-Tamu_<?php echo $row['id_sampah']; ?>'>
													<button class='btn btn-outline-danger btn-data-aksi'>
														<i class='fas fa-times'></i>
													</button>
												</a> -->
											</td>
											<td align="center"><input type="checkbox" class="check-item" name="id_sampah[]" value="<?php echo $row['id_sampah']; ?>" ></td>
											<td><?php echo $row['id_sampah']; ?></td>
											<td><?php echo $row['nama_sampah']; ?></td>
											<td><?php echo $row['kategori_sampah']; ?></td>
								    		<td>Rp. <?php echo $row['harga_datang']; ?></td>
								    		<td>Rp. <?php echo $row['harga_pengepul']; ?></td>
								    		<!-- <td>Rp. <?php echo $row['harga_pengepul']; ?></td> -->
								    		
								    		
								    	</tr>
								    <?php
									$no++;
									?> 
							    	<?php 
							    		include('modal_sampah_delete.php'); 
								    	include('modal_update_tamu.php'); 
								    	// include('modal_delete_tamu.php'); 
								    	include('modal_sampah_add.php'); 
								    	include('modal_sampah_update.php'); 
								    	// include('modal_sampah_view.php');
								    ?> 
							    	<?php
									}
								?>
					        </tbody>
					    </table>
						</div>
					</div>
					<!-- </form> -->
				</div>


			</div>
	    </div>
	<?php 
		// include 'modal_nasabah_add.php'; 
		// include 'datele.php'; 
		include 'modal_sampah_view.php'; 
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
		 //   	$(document).ready(function(){ 					// Ketika halaman sudah siap (sudah selesai di load)    
		 //   		$("#check-all").click(function(){ 			// Ketika user men-cek checkbox all      
		 //   			if($(this).is(":checked")) 				// Jika checkbox all diceklis        
		 //   				$(".check-item").prop("checked", true); 	// ceklis semua checkbox siswa dengan class "check-item"      
		 //   			else 											// Jika checkbox all tidak diceklis        
		 //   				$(".check-item").prop("checked", false); 	// un-ceklis semua checkbox siswa dengan class "check-item"    
		 //   		});        
		 //   	$("#btn-delete").click(function(){ 				// Ketika user mengklik tombol delete      
		 //   		var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi            
		 //   	if(confirm) 									// Jika user mengklik tombol "Ok"       
		 //    	$("#form-delete").submit(); 					// Submit form    
			// 	});  
			// });



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
		    $('#tb-sampah').dataTable( {
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
