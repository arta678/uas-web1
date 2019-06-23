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
	            <li class="active">
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
	        		<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
					    <li class="breadcrumb-item active" ><a href="report_master.php">Laporan Master Data</a></li>
					  </ol>
					</nav>
					<div class="wrapper-table">
					
	        	<!-- Here..... -->
	        	<div class="row">
	        		<div class="col-sm-12 title-dashboard-content text-center">
	        			<p>Master Data & Transaksi</p>
	        			<hr>
	        		</div>
	        		<div class="col-sm-4">
	        			<div class="dashboard-content ">
	        				<a href="report_master_nasabah.php" title="Lihat Nasabah">
	        				<p class="title-content">LAPORAN NASABAH</p>
	        				<p class="keterangan"><?php echo "$jum_nasabah"; ?></p>
	        				<div class="icon icon-content"><i class="fas fa-users"></i></div>
	        				</a>
	        				<!-- <a href="index_tamu.php" class="content-dashboard-footer foo-1">
	        					<p>Lainnya</p>
	        				</a> -->
	        			</div>
	        		</div>
	        		<div class="col-sm-4">
	        			<div class="dashboard-content">
	        				<a href="report_master_sampah.php" title="Lihat Sampah">
	        				<p class="title-content">LAPORAN SAMPAH</p>
	        				<p class="keterangan"></p>
	        				<div class="icon icon-content"><i class="fas fa-trash-alt"></i></div>
	        				</a>
	        				
	        				<!-- <a href="#" class="content-dashboard-footer foo-2">
	        					<p>Lainnya</p>
	        				</a> -->
	        			</div>
	        		</div>
	        		<div class="col-sm-4">
	        			<div class="dashboard-content">
	        				<a href="report_master_pengepul.php" title="Lihat Setoran Hari Ini">
	        				<p class="title-content">LAPORAN PENGEPUL</p>
	        				<p class="keterangan"><?php echo "$jum_setoran"; ?></p>
	        				<div class="icon icon-content"><i class="fas fa-users"></i></div>
	        				</a>
	        				<!-- <a href="#" class="content-dashboard-footer foo-3">
	        					<p>Lainnya</p>
	        				</a> -->
	        			</div>
	        		</div>

	        	</div>




		

					</div>
					</form>
				</div>


			</div>
	    </div>

	<?php 
	include 'modal_nasabah_add.php'; 
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
