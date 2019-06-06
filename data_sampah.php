<?php 
// include_once("koneksi.php");
// 	$id = $_GET['id_tamu'];
// 	$sql = "DELETE FROM tb_tamu WHERE id_tamu = '$id'";
// 	$koneksi->exec($sql);
// 	echo "<script>
// 		setTimeout(function () { 
// 			Swal.fire({
// 			    type: 'success',
// 				title: '<p>Data telah dihapus</p>',
// 				text: 'Halaman akan di-direct ke index dalam 3 detik!',
// 				showConfirmButton: false,
// 				timer: 3000
// 			}).then(function() {
// 				window.location.href = 'index_tamu.php';
// 			})
// 		});
// 	</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIMBAH (Sistem InforMasi BAnk sampaH)</title>
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
	        	<h5 class="menu-categori">MASTER DATA</h5>
	            <li >
	            	<a href="home.php" class="icon tipeKamar-li-icon">Home</a>
	            </li>
	            <li>
	            	<a href="data_nasabah.php" class="icon tamu-li-icon">Data Nasabah</a>
	            </li>
	            <li>
	            	<a href="#" class="icon tamu-li-icon">Data Pengepul</a>
	            </li>
	            <li class="active">
	            	<a href="#" class="icon dashboard-li-icon">Data Sampah</a>
	            </li>
	            <h5 class="menu-categori">TRANSAKSI</h5>
	            <li>
	            	<a href="dashboard.php" class="icon dashboard-li-icon">Setoran Sampah</a>
	            </li>
	            <li>
	            	<a href="index_tamu.php" class="icon penarikan-li-icon">Penarikan Saldo</a>
	            </li>
	            <li>
	            	<a href="#" class="icon penjualan-li-icon">Penjualan sampah</a>
	            </li>
	            <li>
	            	<a href="#" class="icon laporan-li-icon">Laporan</a>
	            </li>
	        </ul>
	    </nav>

<!-- NAVBAR SIMBAH -->
	    <div id="content">
	        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
	            <div class="container-fluid text-center">
	                <i id="btn-sidebar-toggle" class="fas fa-bars" title="Show/hide sidebar"></i>
	                <h5 class="h1-title-header d-md-inline-block "><strong class="text-atas" >SIMBAH</strong>
	                	<span>(Sistem Informasi Bank Sampah)</span></h5>
	                	<i class="fas fa-sign-out-alt fa-2x btn-header-logout" title="Logout" onclick="btnLogout()"></i>
	            </div>
	        </nav>
<!-- CONTEN TABLE -->
	        	<div class="container table-tamu ">
	        		
					<div class="wrapper-table">
							<div class="bungkus-bt-new  ">
		        			<button class="btn btn-outline-success bt-input-tamu " data-toggle="modal" data-target="#popUpInsert-sampah"><i class="fas fa-plus"></i>Sampah</button>
		        			</div>
						<!-- <div class="table-responsive"> -->
						<table id="tb-sampah" class="table table-striped nowrap table-hover table-sm  table-bordered "  cellspacing="0" width="100%">
					        <thead class="thead-dark text-center">
					            <tr>
					                <th class="header-table" width="60px;" rowspan="2"></th>
					                <th class="header-table"  rowspan="2" ><input type="checkbox" name="pilih[]" value="<?php echo $d['id'];?>"></th>

					                <th class="header-table" width="50px;" rowspan="2">Kode</th>
					                <th class="header-table" rowspan="2">Jenis Sampah</th>
					                <th class="header-table" rowspan="2">Kategori</th>
					                <th class="header-table " colspan="3">Harga Sampah</th>
					                <!-- <th class="header-table" width="100px;">DHS 2</th>
					                <th class="header-table" width="100px;">PENGEPUL</th> -->
					                <!-- <th class="header-table" width="100px;"><center>Aksi</center></th> -->
					            </tr>
					             <tr>
					                <!-- <th class="header-table" width="100px;" >Aksi</th>
					                <th class="header-table" width="100px;" >KODE</th>
					                <th class="header-table" >NAMA</th>
					                <th class="header-table" width="150px;">KETEGORI</th> -->
					                <th class="header-table" >Datang</th>
					                <th class="header-table" >Jemput</th>
					                <th class="header-table" >Pengepul</th>
					                <!-- <th class="header-table" width="100px;"><center>Aksi</center></th> -->
					            </tr>

					        </thead>
					        <tbody>
					            <?php
						            include_once("koneksi.php");
									$sql = "SELECT * FROM sampah";
									$no=1;
									foreach ($koneksi->query($sql) as $row) {
										?>
										<tr>
											
											<td class="text-nowrap" align="center">

								    			<a href='#popUpDelete-Sampah_<?php echo $row['id_sampah']; ?>' data-toggle='modal' title='Lihat Data' data-target='#popUpDelete-Sampah_<?php echo $row['id_sampah']; ?>'>
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
											<td><input type="checkbox" name="pilih[]" value="<?php echo $d['id']; ?>" ></td>
											<td><?php echo $row['id_sampah']; ?></td>
											<td><?php echo $row['nama_sampah']; ?></td>
											<td><?php echo $row['kategori_sampah']; ?></td>
								    		<td>Rp. <?php echo $row['harga_datang']; ?></td>
								    		<td>Rp. <?php echo $row['harga_jemput']; ?></td>
								    		<td>Rp. <?php echo $row['harga_pengepul']; ?></td>
								    		
								    		
								    	</tr>
								    <?php
									$no++;
									?>
							    	<?php include('modal_sampah_delete.php'); include('modal_update_tamu.php'); include('modal_delete_tamu.php'); include('modal_sampah_add.php'); include('modal_sampah_update.php');  ?> 
							    	<?php
									}
								?>
					        </tbody>
					    </table>
						<!-- </div> -->
					</div>
				</div>


			</div>
	    </div>

	<?php include('modal_input_tamu.php'); ?>
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
		$(document).ready(function() {
		    $('#tb-sampah').dataTable( {
		    	//i = info, 
		    	// l = lenght, 
		    	// f = find, 
		    	// t = table, 
		    	// B = buttons, 
		    	// p = pagination
		    	dom:
				    "<'row'<'col-sm-12'f>>" +
				    "<'row'<'col-sm-12't>>" +
				    "<'row'<'col-sm-6'l><'col-sm-6'p>>",
		    	//DISABLE SHORTING TABLE COLUMN
				"columns": [
				    null,
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
