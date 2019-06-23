<?php

	include_once ('koneksi.php');



// JUMLAH LAKI
	$laki = $koneksi->prepare('SELECT * FROM setoran_sampah ');
	$laki->execute();

	

?>


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
	            <li class="active">
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
	        		<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
					    <li class="breadcrumb-item"><a href="report_master.php">Laporan Master Data</a></li>
					    <li class="breadcrumb-item active" aria-current="report_master_pengepul.php">Laporan Transaksi</li>
					  </ol>
					</nav>
					<div class="wrapper-table">
						<!-- <div  id="chart_div" class="col-sm-12" style="width: auto; height: 500px;"></div> -->
						<div class="table-responsive margin-tabel">
						<button class="btn btn-outline-success bt-input-tamu " >PRINT</button>
						<table id="tb-nasabah" class="table table-striped nowrap table-hover table-sm  table-bordered "  cellspacing="0" width="100%">
					        <thead class="thead-dark text-center">
					            <tr>
					                  <!-- <th class="header-table" width="60px;" >View</th> -->
					                <th class="header-table "  >Tanggal</th>

					                <th class="header-table"  >Nasabah</th>
					                <th class="header-table" >Jenis Sampah</th>
					                <th class="header-table" >Harga/Kg</th>
					                <th class="header-table " >Berat</th>
					                <th class="header-table " >Totap Rp.</th>
					            </tr>
					        </thead>
					        <tbody>
					          <?php
						            // include_once("koneksi.php");
						            require 'koneksi.php'; 
									$sql = "
											SELECT setoran_sampah.*, nasabah.*, sampah.* 
											FROM setoran_sampah
											INNER JOIN nasabah
											on setoran_sampah.id_nasabah = nasabah.id_nasabah
											INNER JOIN sampah
											ON setoran_sampah.id_sampah = sampah.id_sampah 
											ORDER BY id_setoran DESC

									";
									$no=1;

									foreach ($koneksi->query($sql) as $row) {
										?>
										<tr>
											
											
											<td align="center"><?php echo $row['tanggal']; ?></td>
											<td><?php echo $row['nama_nasabah']; ?></td>
											<td><?php echo $row['nama_sampah']; ?></td>
											<td align="right"> Rp. <?php echo $row['harga_datang']; ?></td>
								    		<td align="right"><?php echo $row['berat_setoran']; ?> Kg</td>
								    		<td align="right">Rp. <?php echo $row['total_setoran']; ?></td>
								    	</tr>

								    <?php
									$no++;
									?> 
									<?php 
										include('modal_sampah_delete.php');
										 include('modal_update_tamu.php'); 
										 // include('modal_delete_tamu.php'); 
										 include('modal_sampah_add.php'); 
										 // include('modal_sampah_update.php'); 
										 include 'modal_nasabah_update.php';
										 include 'modal_nasabah_view.php';

							    		
								   
								 
									 ?> 
							    	
							    	
							    	<?php
									}
								?>
					        </tbody>
					    </table>
						</div>
					
	        	

	        		
			
				</div>


			</div>
	    </div>


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
		    $('#tb-nasabah').dataTable( {
		    	//i = info, 
		    	// l = lenght, 
		    	// f = find, 
		    	// t = table, 
		    	// B = buttons, 
		    	// p = pagination
		    	dom:
				    
				    "<'row'<'col-sm-12't>>" +
				    "<'row'<'col-sm-12'p>>",
		    	//DISABLE SHORTING TABLE COLUMN
				"columns": [
				    null,
				    null,
				    null,
				    null,
				    
				   
				    { "orderable": false }
				]
			
			} )
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
