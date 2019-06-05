<?php
	include_once ('koneksi.php');
	$nasabah = $koneksi->prepare('SELECT * FROM nasabah');
	$nasabah->execute();
	$jumlahnasabah = $nasabah->rowCount();
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
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.18/css/buttons.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="animations-css/animations.css">	
</head>
<body>
	<div class="bungkus-terluar bg-dark">
	    <!-- Sidebar -->
	    <nav id="sidebar" class="bg-dark">
	    	<div class="overlay index-img-screen bg-dark"></div>
	    	
	        <div class="sidebar-header text-center bg-dark">
	        	<a href=""><img src="images/arta.jpg" alt="gambar arta wiguna" class="img-fluid gambar-admin"></a>
	        		
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
	            <li class="active">
	            	<a href="data_nasabah.php" class="icon tamu-li-icon">Data Nasabah</a>
	            </li>
	            <li>
	            	<a href="#" class="icon tamu-li-icon">Data Pengepul</a>
	            </li>
	            <li>
	            	<a href="data_sampah.php" class="icon dashboard-li-icon">Data Sampah</a>
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
	           
	            <!-- <div class="bungkus-bt-logout">
	            	<button id="bt-logout" class="btn btn-outline-danger bt-logout" title="logout" onclick="btnLogout()">Logout<i class="fas fa-sign-out-alt"></i></button>
	            </div> -->
	        </ul>
	        <!-- <div class="personal-info">
		        <div class="container info">
		        	<div class="row text-center col-xl-12 content-personal-info">
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="Gus Rosi Adi">
		        			<a href="https://www.facebook.com" target="_blank">
		        				<i class="fab fa-facebook-f"></i>
		        			</a>
		        		</div>
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="gusrosi_">
		        			<a href="https://www.instagram.com" target="_blank">
		        				<i class="fab fa-instagram"></i>
		        			</a>
		        		</div>
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="081236573724">
		        			<a href="https://web.whatsapp.com/" target="_blank">
		        				<i class="fab fa-whatsapp"></i>
		        			</a>
		        		</div>
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="rosiadi97">
		        			<a href="#">
		        				<i class="fab fa-line"></i>
		        			</a>
		        		</div>
		        	</div>
		        </div>
	        </div> -->
	    </nav>
	    <!-- HEADER PAGE CONTENT -->
	    <div id="content">
	        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
	            <div class="container-fluid text-center">
	                <i id="btn-sidebar-toggle" class="fas fa-bars" title="Show/hide sidebar"></i>
	                <h5 class="h1-title-header d-md-inline-block "><strong class="text-atas" >SIMBAH</strong>
	                	<span>(Sistem Informasi Bank Sampah)</span></h5>
	                <!-- <button class="btn btn-outline-danger btn-header-logout" title="Logout" onclick="btnLogout()">Logout -->
	                	<!-- <i class="fas fa-sign-out fa-2x btn-header-logout" title="Logout" onclick="btnLogout()"></i> -->
	                	<i class="fas fa-sign-out-alt fa-2x btn-header-logout" title="Logout" onclick="btnLogout()"></i>
	                <!-- </button> -->

	            </div>
	        </nav>
	        <!-- CONTENT -->
	        <div class="container index-dashboard">
	        	<!-- Here..... -->
	        	<div class="row">
	        		<div class="col-sm-12 title-dashboard-content text-center">
	        			<p>Master Data & Transaksi</p>
	        			<hr>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content ">
	        				<a href="dashboard.php" title="Lihat Nasabah">
	        				<p class="title-content">BANYAK NASABAH (Org) </p>
	        				<p class="keterangan"><?php echo "$jumlahnasabah"; ?></p>
	        				<div class="icon icon-content"><i class="fas fa-users"></i></div>
	        				</a>
	        				<!-- <a href="index_tamu.php" class="content-dashboard-footer foo-1">
	        					<p>Lainnya</p>
	        				</a> -->
	        			</div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content">
	        				<a href="dashboard.php" title="Lihat Sampah">
	        				<p class="title-content">BERAT TOTAL SAMPAH (Kg)</p>
	        				<p class="keterangan"><?php echo "$jumlahnasabah"; ?></p>
	        				<div class="icon icon-content"><i class="fas fa-trash-alt"></i></div>
	        				</a>
	        				
	        				<!-- <a href="#" class="content-dashboard-footer foo-2">
	        					<p>Lainnya</p>
	        				</a> -->
	        			</div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content">
	        				<a href="dashboard.php" title="Lihat Setoran Hari Ini">
	        				<p class="title-content">SETORAN HARI INI (Kg) </p>
	        				<p class="keterangan"><?php echo "$jumlahnasabah"; ?></p>
	        				<div class="icon icon-content"><i class="fas fa-shopping-cart"></i></div>
	        				</a>
	        				<!-- <a href="#" class="content-dashboard-footer foo-3">
	        					<p>Lainnya</p>
	        				</a> -->
	        			</div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content">
	        				<a href="dashboard.php" title="Lihat Setoran Hari Ini">
	        				<p class="title-content">BANYAK TRANSAKSI</p>
	        				<p class="keterangan"><?php echo "$jumlahnasabah"; ?></p>
	        				<div class="icon icon-content"><i class="fas fa-shopping-cart"></i></div>
	        				</a>
	        				<!-- <a href="#" class="content-dashboard-footer foo-4">
	        					<p>Lainnya</p>
	        				</a> -->
	        			</div>
	        		</div>
	        	</div>




	        	<div class="row">
	        		<div class="col-sm-12 title-dashboard-content text-center">
	        			<p>Laporan</p>
	        			<hr>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content"></div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content"></div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content"></div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content"></div>
	        		</div>
	        	</div>
			</div>
			<!-- <div class="footer">
				<i class="far fa-copyright"></i><span class="y">&nbsp;2019</span><span>Agus Rosi Adi Purwibawa</span>
			</div> -->
	    </div>
	</div>
	<!-- JS LIBRARY GLOBAL -->
	<script type="text/javascript" src="js/JQuery-3.3.1.min.js"></script>
	<!-- JS LIBRARY HOVER POPPER -->
	<script type="text/javascript" src="js/Popper.js"></script>
	<!-- JS LIBRARY SWEETALERT -->
	<script type="text/javascript" src="sweetalert2/js/sweetalert2.js"></script>
	<!-- JS LIBRARY FONT AWESOME 5 -->
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<!-- JS LIBRARY BOOTSTRAP 4 -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- SCRIPT DASHBOARD -->
	<script type="text/javascript">
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
