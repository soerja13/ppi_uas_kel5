<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VALIPHONE</title>
 
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of 
         HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
    <!-- Custom CSS -->
    <link href="assets/style.css" rel="stylesheet">
 
  </head>
  
  <body>
    <div class="container">

    <!-- Bagian Header -->
    <div class="row">
        <div class="col-md-12 header" id="site-header">
            <header>
    <h1 class="title-site">ValiPhone</h1>
    <p class="description">Website Untuk Validasi Lengkap Nomor HandPhone</p>
</header>
<nav class="menus">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>
        </div>
    </div>
    <!-- End Bagian Header -->

    <!-- Bagian Wrapper 2 kolom -->
    <div class="row">
	<div class="col-xs-8 article" id="site-content">
		<article class="posts">
				<div class="panel panel-default">
				<div class="panel-heading">
					Validasi Nomor Handphone
				</div>
				<div class="panel-body">
				
				<?php
					//membaca variabel GET dari URL	
					if( isset($_GET['halaman'])){
						$hal=$_GET['halaman'];
					} else{
						$hal="telp";
					
					}
					//Menentukan halaman yang di-include
					if($hal=='telp'){
						include "telp.php";
					} else if($hal=='telp'){
						include "telp.php";
							
					}
					
				?>
				
				</div>
				</div>
			</article>
			</div>
        <div class="col-md-4 sidebar" id="site-sidebar">
            <!-- isi sidebar -->
			<aside class="widgets">
    <h3 class="widget-title">Latest Posts</h3>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
      
    </ul>
</aside>
        </div>
    </div>
    <!-- End Bagian wrapper -->
    
    <!-- Bagian footer -->
    <div class="row">
        <div class="col-md-12 footer" id="site-footer">
            <!-- isi footer -->
			<footer class="copyright text-center"><p>&copy; 2017 kelompok_mbuh</p></footer>
        </div>
    </div>
    <!-- End Bagian footer -->

</div>
    <!--happy code-->
 
 
    <!-- jQuery online menggunakan CDN 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    
    <!-- jQuery lokal -->
    <script src="assets/jquery/jquery.min.js"></script>
 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/custom.js"></script>
  </body>
</html>